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

/* themes/custom/drupify/templates/paragraph/paragraph--section-one-cards.html.twig */
class __TwigTemplate_a979045b6e18fef1d475bc78467a0824 extends Template
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
        $context["banner_img_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 42)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 42), 0, [], "array", false, false, true, 42))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 42)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 42), 0, [], "array", false, false, true, 42)), "#media", [], "array", false, false, true, 42)), "field_media_image", [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42), "uri", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42));
        // line 43
        yield "<div class=\"bg-white rounded-lg overflow-hidden shadow-lg\">
  <img src=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["banner_img_url"] ?? null), "html", null, true);
        yield "\" alt=\"Card 1 Image\" class=\"w-full h-48 object-cover\" />
  <div class=\"p-6\">
    <h3 class=\"text-xl font-bold mb-2\">";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 46), "html", null, true);
        yield "</h3>
    <p class=\"text-gray-700\">";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 47), "html", null, true);
        yield "</p>
  </div>
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
        return "themes/custom/drupify/templates/paragraph/paragraph--section-one-cards.html.twig";
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
        return array (  60 => 47,  56 => 46,  51 => 44,  48 => 43,  46 => 42,  44 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/drupify/templates/paragraph/paragraph--section-one-cards.html.twig", "/var/www/html/web/themes/custom/drupify/templates/paragraph/paragraph--section-one-cards.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41];
        static $filters = ["clean_class" => 41, "escape" => 44];
        static $functions = ["file_url" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
                ['file_url'],
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
