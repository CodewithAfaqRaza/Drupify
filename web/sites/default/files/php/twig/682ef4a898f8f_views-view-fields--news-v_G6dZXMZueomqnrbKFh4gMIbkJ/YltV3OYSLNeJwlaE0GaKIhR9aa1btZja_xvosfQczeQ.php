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

/* themes/custom/drupify/templates/views/views-view-fields--news-view--block-1.html.twig */
class __TwigTemplate_d4e7ef273977042348124360039d5cda extends Template
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
        // line 34
        yield "<img src=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_media_image", [], "any", false, false, true, 34), "content", [], "any", false, false, true, 34), "html", null, true);
        yield "\" class=\"w-full h-full object-cover rounded-lg\" alt=\"Main Image\" />
<div class=\"absolute rounded inset-0 bg-black opacity-60\"></div>

<div class=\"absolute top-4 left-4 text-white text-xs px-2 py-1 uppercase rounded\">";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_tags", [], "any", false, false, true, 37), "content", [], "any", false, false, true, 37), "html", null, true);
        yield "</div>
<div class=\"absolute bottom-4 left-4 text-white\">
  <div class=\"text-xs uppercase inline-block bg-blue-600 px-2 py-1 rounded mb-1\">";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_reading_time", [], "any", false, false, true, 39), "content", [], "any", false, false, true, 39)), "html", null, true);
        yield "</div>
  <h3 class=\"text-xl font-semibold leading-tight\">";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 40), "content", [], "any", false, false, true, 40), "html", null, true);
        yield "</h3>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/drupify/templates/views/views-view-fields--news-view--block-1.html.twig";
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
        return array (  60 => 40,  56 => 39,  51 => 37,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/drupify/templates/views/views-view-fields--news-view--block-1.html.twig", "/var/www/html/web/themes/custom/drupify/templates/views/views-view-fields--news-view--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 34, "upper" => 39];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'upper'],
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
