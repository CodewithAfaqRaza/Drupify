<?php

namespace Drupal\migrate_drupal\Hook;

use Drupal\migrate_drupal\NodeMigrateType;
use Drupal\Core\Database\DatabaseExceptionWrapper;
use Drupal\migrate\Exception\RequirementsException;
use Drupal\migrate\MigrateExecutable;
use Drupal\migrate\Plugin\RequirementsInterface;
use Drupal\Core\Url;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Hook\Attribute\Hook;

/**
 * Hook implementations for migrate_drupal.
 */
class MigrateDrupalHooks {

  /**
   * Implements hook_help().
   */
  #[Hook('help')]
  public function help($route_name, RouteMatchInterface $route_match) {
    switch ($route_name) {
      case 'help.page.migrate_drupal':
        $output = '';
        $output .= '<h2>' . t('About') . '</h2>';
        $output .= '<p>' . t('The Migrate Drupal module provides a framework based on the <a href=":migrate">Migrate module</a> to facilitate migration from a Drupal (6, 7, or 8) site to your website. It does not provide a user interface. For more information, see the <a href=":migrate_drupal">online documentation for the Migrate Drupal module</a>.', [
          ':migrate' => Url::fromRoute('help.page', [
            'name' => 'migrate',
          ])->toString(),
          ':migrate_drupal' => 'https://www.drupal.org/documentation/modules/migrate_drupal',
        ]) . '</p>';
        return $output;
    }
  }

  /**
   * Implements hook_migration_plugins_alter().
   */
  #[Hook('migration_plugins_alter')]
  public function migrationPluginsAlter(array &$definitions): void {
    $module_handler = \Drupal::service('module_handler');
    $migration_plugin_manager = \Drupal::service('plugin.manager.migration');
    // This is why the deriver can't do this: the 'd6_taxonomy_vocabulary'
    // definition is not available to the deriver as it is running inside
    // getDefinitions().
    if (isset($definitions['d6_taxonomy_vocabulary'])) {
      $vocabulary_migration_definition = [
        'source' => [
          'ignore_map' => TRUE,
          'plugin' => 'd6_taxonomy_vocabulary',
        ],
        'destination' => [
          'plugin' => 'null',
        ],
        'idMap' => [
          'plugin' => 'null',
        ],
      ];
      $vocabulary_migration = $migration_plugin_manager->createStubMigration($vocabulary_migration_definition);
      $translation_active = $module_handler->moduleExists('content_translation');
      try {
        $source_plugin = $vocabulary_migration->getSourcePlugin();
        if ($source_plugin instanceof RequirementsInterface) {
          $source_plugin->checkRequirements();
        }
        $executable = new MigrateExecutable($vocabulary_migration);
        $process = ['vid' => $definitions['d6_taxonomy_vocabulary']['process']['vid']];
        foreach ($source_plugin as $row) {
          $executable->processRow($row, $process);
          $source_vid = $row->getSourceProperty('vid');
          $plugin_ids = ['d6_term_node:' . $source_vid, 'd6_term_node_revision:' . $source_vid];
          if ($translation_active) {
            $plugin_ids[] = 'd6_term_node_translation:' . $source_vid;
          }
          foreach (array_intersect($plugin_ids, array_keys($definitions)) as $plugin_id) {
            // Match the field name derivation in d6_vocabulary_field.yml.
            $field_name = substr('field_' . $row->getDestinationProperty('vid'), 0, 32);
            // The Forum module is expecting 'taxonomy_forums' as the field name
            // for the forum nodes. The 'forum_vocabulary' source property is
            // evaluated in Drupal\taxonomy\Plugin\migrate\source\d6\Vocabulary
            // and is set to true if the vocabulary vid being migrated is the
            // same as the one in the 'forum_nav_vocabulary' variable on the
            // source site.
            $destination_vid = $row->getSourceProperty('forum_vocabulary') ? 'taxonomy_forums' : $field_name;
            $definitions[$plugin_id]['process'][$destination_vid] = 'tid';
          }
        }
      }
      catch (RequirementsException $e) {
        // This code currently runs whenever the definitions are being loaded and
        // if you have a Drupal 7 source site then the requirements will not be
        // met for the d6_taxonomy_vocabulary migration.
      }
      catch (DatabaseExceptionWrapper $e) {
        // When the definitions are loaded it is possible the tables will not
        // exist.
      }
    }
    if (!$module_handler->moduleExists('node')) {
      return;
    }
    $connection = \Drupal::database();
    // We need to get the version of the source database in order to check
    // if the classic or complete node tables have been used in a migration.
    if (isset($definitions['system_site'])) {
      // Use the source plugin of the system_site migration to get the
      // database connection.
      $migration = $definitions['system_site'];
      /** @var \Drupal\migrate\Plugin\migrate\source\SqlBase $source_plugin */
      $source_plugin = $migration_plugin_manager->createStubMigration($migration)->getSourcePlugin();
      try {
        $source_connection = $source_plugin->getDatabase();
        $version = NodeMigrateType::getLegacyDrupalVersion($source_connection);
      }
      catch (\Exception $e) {
        \Drupal::messenger()->addError(t('Failed to connect to your database server. The server reports the following message: %error.<ul><li>Is the database server running?</li><li>Does the database exist, and have you entered the correct database name?</li><li>Have you entered the correct username and password?</li><li>Have you entered the correct database hostname?</li></ul>', ['%error' => $e->getMessage()]));
      }
    }
    // If this is a complete node migration then for all migrations, except the
    // classic node migrations, replace any dependency on a classic node migration
    // with a dependency on the complete node migration.
    if (NodeMigrateType::getNodeMigrateType($connection, $version ?? FALSE) === NodeMigrateType::NODE_MIGRATE_TYPE_COMPLETE) {
      $classic_migration_match = '/d([67])_(node|node_translation|node_revision|node_entity_translation)($|:.*)/';
      $replace_with_complete_migration = function (&$value, $key, $classic_migration_match) {
        if (is_string($value)) {
          $value = preg_replace($classic_migration_match, 'd$1_node_complete$3', $value);
        }
      };
      foreach ($definitions as &$definition) {
        $is_node_classic_migration = preg_match($classic_migration_match, $definition['id']);
        if (!$is_node_classic_migration && isset($definition['migration_dependencies'])) {
          array_walk_recursive($definition['migration_dependencies'], $replace_with_complete_migration, $classic_migration_match);
        }
      }
    }
  }

}
