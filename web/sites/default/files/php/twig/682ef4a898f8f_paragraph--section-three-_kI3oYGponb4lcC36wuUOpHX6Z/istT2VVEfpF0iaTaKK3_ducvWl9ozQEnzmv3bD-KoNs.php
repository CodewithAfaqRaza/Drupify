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

/* themes/custom/drupify/templates/paragraph/paragraph--section-three-wrapper.html.twig */
class __TwigTemplate_e7b3a17cdf7eeb561014b2eba9d05abb extends Template
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
        yield "<section class=\"section-1 relative max-w-[1920px] w-full bg-cover bg-center bg-no-repeat\" style=\"background-image: url('";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_wrapper_background", [], "any", false, false, true, 42)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_wrapper_background", [], "any", false, false, true, 42), 0, [], "array", false, false, true, 42))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#media"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_wrapper_background", [], "any", false, false, true, 42)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_wrapper_background", [], "any", false, false, true, 42), 0, [], "array", false, false, true, 42)), "#media", [], "array", false, false, true, 42)), "field_media_image", [], "any", false, false, true, 42), "entity", [], "any", false, false, true, 42), "uri", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42)), "html", null, true);
        yield "');\">
  <div class=\"absolute inset-0 bg-black opacity-60\"></div>
  <div class=\"container py-16 relative z-10\">
    <h2 class=\"text-4xl font-bold text-white text-center mb-5 py-10\">";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 45), "html", null, true);
        yield "</h2>

    <div class=\"grid  grid-cols-1   p-4  gap-8 ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v3 = (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_select_the_columns", [], "any", false, false, true, 47)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_select_the_columns", [], "any", false, false, true, 47), 0, [], "array", false, false, true, 47))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#markup"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_select_the_columns", [], "any", false, false, true, 47)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_select_the_columns", [], "any", false, false, true, 47), 0, [], "array", false, false, true, 47)), "#markup", [], "array", false, false, true, 47)), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_select_the_columns", "field_title", "field_wrapper_background"), "html", null, true);
        yield "</div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["paragraph", "view_mode", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/drupify/templates/paragraph/paragraph--section-three-wrapper.html.twig";
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
        return array (  58 => 47,  53 => 45,  46 => 42,  44 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/drupify/templates/paragraph/paragraph--section-three-wrapper.html.twig", "/var/www/html/web/themes/custom/drupify/templates/paragraph/paragraph--section-three-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41];
        static $filters = ["clean_class" => 41, "escape" => 42, "without" => 47];
        static $functions = ["file_url" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'without'],
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
