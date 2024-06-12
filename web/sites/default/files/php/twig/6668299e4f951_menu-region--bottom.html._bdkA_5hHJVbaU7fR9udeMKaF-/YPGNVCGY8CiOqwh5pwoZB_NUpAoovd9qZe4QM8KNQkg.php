<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/gin/templates/menu-region--bottom.html.twig */
class __TwigTemplate_34205fa54b442262ff31555345e7a2c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["item_id"] = ("item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 1, $this->source)));
        // line 2
        echo "
<div class=\"admin-toolbar__item toolbar-block\">
  <ul class=\"toolbar-menu\">
    ";
        // line 5
        if (($context["help_enabled"] ?? null)) {
            // line 6
            echo "    <li class=\"toolbar-menu__item toolbar-menu__item--level-1\">
      <a href=\"";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("help.main"));
            echo "\" class=\"toolbar-link toolbar-link--has-icon toolbar-link--help\">
        <span>";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Help"));
            echo "</span>
      </a>
    </li>
    ";
        }
        // line 12
        echo "    <li class=\"toolbar-menu__item toolbar-menu__item--level-1\">
      <button aria-controls=\"admin-toolbar\" aria-expanded=\"true\" class=\"toolbar-link toolbar-link--has-icon toolbar-link--sidebar-toggle sidebar-toggle\">
        ";
        // line 15
        echo "        <span id=\"sidebar-state\" class=\"toolbar-link__label\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Collapse sidebar"));
        echo "</span>
      </button>
    </li>
    <li class=\"toolbar-menu__item toolbar-menu__item--has-dropdown toolbar-menu__item--user toolbar-menu__item--level-1\">
      <button class=\"toolbar-link toolbar-link--has-icon toolbar-link--";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 19, $this->source)), "html", null, true);
        echo "\" data-url=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 19, $this->source), "html", null, true);
        echo "\">
        <span class=\"toolbar-link__action\">";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
        echo "</span>
        <span class=\"toolbar-link__label\">";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
        echo "</span>
      </button>
      <div class=\"toolbar-menu__submenu\">
        <div class=\"toolbar-menu__arrow-ref\"></div>
        <ul class=\"toolbar-menu\">
          <li class=\"toolbar-menu__item toolbar-menu__item--to-title\">
            <button class=\"toolbar-link toolbar-link--has-icon toolbar-link--";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 27, $this->source)), "html", null, true);
        echo "\" tabindex=\"-1\">
              <span class=\"toolbar-link__action\">";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
        echo "</span>
              <span class=\"toolbar-link__label\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 29, $this->source), "html", null, true);
        echo "</span>
            </button>
          </li>
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "            <li class=\"toolbar-menu__item toolbar-menu__item--level-2\">
              <a href=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\" class=\"toolbar-link\">
                <span>";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</span>
              </a>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </ul>
      </div>
    </li>
  </ul>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "help_enabled", "menu_name", "url", "items"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/menu-region--bottom.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  128 => 39,  118 => 35,  114 => 34,  111 => 33,  107 => 32,  101 => 29,  97 => 28,  93 => 27,  84 => 21,  80 => 20,  74 => 19,  66 => 15,  62 => 12,  55 => 8,  51 => 7,  48 => 6,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/menu-region--bottom.html.twig", "/var/www/html/web/themes/contrib/gin/templates/menu-region--bottom.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5, "for" => 32);
        static $filters = array("clean_class" => 1, "t" => 8, "escape" => 19);
        static $functions = array("path" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 't', 'escape'],
                ['path']
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
