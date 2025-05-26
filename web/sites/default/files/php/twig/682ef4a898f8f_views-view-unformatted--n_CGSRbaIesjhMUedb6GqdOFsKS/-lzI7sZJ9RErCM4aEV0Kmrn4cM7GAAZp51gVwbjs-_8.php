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

/* themes/custom/drupify/templates/views/views-view-unformatted--news-view--block-1.html.twig */
class __TwigTemplate_a2b07cec98bfa21f471a259085535dcb extends Template
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
        // line 20
        yield "<div class=\"grid grid-cols-1 lg:grid-cols-4 gap-6\">
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 22
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 22) == 1)) {
                // line 23
                yield "      <div class=\"relative col-span-1 lg:col-span-2 rounded\">
    ";
            }
            // line 25
            yield "     ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 25) == 2)) {
                // line 26
                yield "        <div class=\"relative col-span-1 rounded\">
    ";
            }
            // line 28
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 28) == 3)) {
                // line 29
                yield "        <div class=\"space-y-6 col-span-1 flex flex-col\">
          <div class=\"relative h-[48%] rounded\">
      ";
            }
            // line 32
            yield "         ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 32) == 4)) {
                // line 33
                yield "          </div>
          <div class=\"relative h-[48%] rounded\">
      ";
            }
            // line 36
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 36), "html", null, true);
            // line 37
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 37)) {
                // line 38
                yield "          </div>
        </div>
     ";
            }
            // line 41
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 41) != 3)) {
                // line 42
                yield "        </div>
      ";
            }
            // line 44
            yield "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/drupify/templates/views/views-view-unformatted--news-view--block-1.html.twig";
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
        return array (  124 => 45,  110 => 44,  106 => 42,  103 => 41,  98 => 38,  96 => 37,  94 => 36,  89 => 33,  86 => 32,  81 => 29,  78 => 28,  74 => 26,  71 => 25,  67 => 23,  64 => 22,  47 => 21,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/drupify/templates/views/views-view-unformatted--news-view--block-1.html.twig", "/var/www/html/web/themes/custom/drupify/templates/views/views-view-unformatted--news-view--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 21, "if" => 22];
        static $filters = ["escape" => 36];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
