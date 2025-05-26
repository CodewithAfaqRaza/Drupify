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

/* themes/custom/drupify/templates/paragraph/paragraph--text-only.html.twig */
class __TwigTemplate_def7446452214c43fc3f517de0fcabf0 extends Template
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
<div class=\"bg-white min-h-72 rounded-lg overflow-hidden shadow-lg p-6\">
  <h3 class=\"text-xl font-bold mb-3\">";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 44), "html", null, true);
        yield "</h3>
  <p class=\"text-gray-700\">";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 45), "html", null, true);
        yield "</p>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/drupify/templates/paragraph/paragraph--text-only.html.twig";
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
        return array (  54 => 45,  50 => 44,  46 => 42,  44 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/drupify/templates/paragraph/paragraph--text-only.html.twig", "/var/www/html/web/themes/custom/drupify/templates/paragraph/paragraph--text-only.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41];
        static $filters = ["clean_class" => 41, "escape" => 44];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
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
