<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/drupify/templates/paragraph/paragraph--content.html.twig */
class __TwigTemplate_815e8d2404ed58926661dc7734549234 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = ["paragraph", ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 41))), ((($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 41)) ? ("paragraph--unpublished") : (""))];
        // line 42
        yield "
<div class=\" px-5 pt-16 gap-4 flex flex-col md:px-12.5 md:pt-25 xl:px-14- ";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_select_the_columns", [], "any", false, false, true, 43)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_select_the_columns", [], "any", false, false, true, 43), 0, [], "array", false, false, true, 43))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_select_the_columns", [], "any", false, false, true, 43)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_select_the_columns", [], "any", false, false, true, 43), 0, [], "array", false, false, true, 43)), "#markup", [], "array", false, false, true, 43)), "html", null, true);
        yield " \">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_select_the_columns"), "html", null, true);
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/drupify/templates/paragraph/paragraph--content.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  49 => 43,  46 => 42,  44 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/drupify/templates/paragraph/paragraph--content.html.twig", "/var/www/html/web/themes/custom/drupify/templates/paragraph/paragraph--content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41];
        static $filters = ["clean_class" => 41, "escape" => 43, "without" => 43];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'without'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
