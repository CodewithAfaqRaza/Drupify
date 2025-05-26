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

/* __string_template__4e94979fa1d8778b169d92487a40a8ad */
class __TwigTemplate_d985eaca39ed6368e55c0509a9c424ca extends Template
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
        // line 1
        yield "<div
          class=\"relative group h-110 rounded overflow-hidden cursor-pointer\"
        >
          <img
            src=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true);
        yield "\"
            alt=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
        yield "\"
            class=\"w-full h-full object-cover transition-transform group-hover:scale-105 duration-300\"
          />
          <div
            class=\"absolute inset-0 bg-black opacity-40 group-hover:bg-opacity-60 transition duration-300\"
          ></div>
          <div
            class=\"absolute bottom-4 left-4 text-white font-bold text-xl flex justify-between items-center gap-2\"
          >
            ";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
        yield "
            <span
              class=\"bg-red-500 rounded-full w-6 h-6 flex items-center justify-center text-white text-sm\"
              >&#8594;
            </span>
          </div>
        </div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_image", "name"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__4e94979fa1d8778b169d92487a40a8ad";
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
        return array (  66 => 15,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__4e94979fa1d8778b169d92487a40a8ad", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 5];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
