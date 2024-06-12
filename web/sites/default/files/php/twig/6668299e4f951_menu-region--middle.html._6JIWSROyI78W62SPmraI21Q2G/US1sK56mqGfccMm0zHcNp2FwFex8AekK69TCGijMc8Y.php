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

/* themes/contrib/gin/templates/menu-region--middle.html.twig */
class __TwigTemplate_8d16a1761f7ae236fa86babd6ac86251 extends Template
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
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        echo "<div class=\"admin-toolbar__item toolbar-block\">
  ";
        // line 3
        $context["menu_heading_id"] = ("menu--" . $this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 3, $this->source));
        // line 4
        echo "  <h2 id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_heading_id"] ?? null), 4, $this->source), "html", null, true);
        echo "\" class=\"toolbar-block__title visually-hidden focusable\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        echo "</h2>
  <ul class=\"toolbar-menu toolbar-menu toolbar-block__content toolbar-block__content--";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 5, $this->source), "html", null, true);
        echo "\" aria-toolbar-link__labelledby=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_heading_id"] ?? null), 5, $this->source), "html", null, true);
        echo "\">
    ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_items", [($context["items"] ?? null), ($context["attribute"] ?? null)], 6, $context, $this->getSourceContext()));
        echo "
  </ul>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "menu_name", "title", "items", "attribute", "item_id"]);    }

    // line 10
    public function macro_menu_items($__items__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 11
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 12
                echo "    ";
                $context["item_class"] = ("toolbar-link--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, true, 12), 12, $this->source)));
                // line 13
                echo "    <li id=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 13, $this->source), "html", null, true);
                echo "\" class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 13)) ? ("toolbar-menu__item--has-dropdown") : ("")));
                echo " toolbar-menu__item toolbar-menu__item--level-1\" data-url=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "\">
      ";
                // line 14
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 14))) {
                    // line 15
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15)) {
                        // line 16
                        echo "          <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                        echo "\" class=\"toolbar-link toolbar-link--has-icon ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 16, $this->source), "html", null, true);
                        echo "\">
            <span>";
                        // line 17
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                        echo "</span>
          </a>
        ";
                    } else {
                        // line 20
                        echo "          <button class=\"toolbar-link toolbar-link--has-icon ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 20, $this->source), "html", null, true);
                        echo "\">
            <span>";
                        // line 21
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                        echo "</span>
          </button>
        ";
                    }
                    // line 24
                    echo "      ";
                }
                // line 25
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 25)) {
                    // line 26
                    echo "      <button class=\"toolbar-link toolbar-link--has-icon ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 26, $this->source), "html", null, true);
                    echo "\">
        <span class=\"toolbar-link__action\">";
                    // line 27
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                    echo "</span>
        <span class=\"toolbar-link__label\">";
                    // line 28
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                    echo "</span>
      </button>
      <div class=\"toolbar-menu__submenu\">
        <div class=\"toolbar-menu__arrow-ref\"></div>
        <ul class=\"toolbar-menu\">
          <li class=\"toolbar-menu__item toolbar-menu__item--to-title\">
            <button class=\"toolbar-link toolbar-link--has-icon ";
                    // line 34
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 34, $this->source), "html", null, true);
                    echo "\" tabindex=\"-1\" data-url=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "\">
              <span class=\"toolbar-link__action\">";
                    // line 35
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                    echo "</span>
              <span class=\"toolbar-link__label\">";
                    // line 36
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                    echo "</span>
            </button>
          </li>
          ";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 39));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 40
                        echo "            <li class=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 40)) ? ("toolbar-menu__item--has-dropdown") : ("")));
                        echo " toolbar-menu__item toolbar-menu__item--level-2\">
              ";
                        // line 41
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 41))) {
                            // line 42
                            echo "                <a href=\"";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                            echo "\" class=\"toolbar-link\">
                <span>";
                            // line 43
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                            echo "</span>
              </a>
              ";
                        }
                        // line 46
                        echo "              ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 46)) {
                            // line 47
                            echo "                <button class=\"toolbar-link\" aria-expanded=\"false\">
                  <span class=\"toolbar-link__action\">";
                            // line 48
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                            echo "</span>
                  <span class=\"toolbar-link__label\">";
                            // line 49
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                            echo "</span>
                </button>
                <ul class=\"toolbar-menu\">
                  ";
                            // line 52
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 53
                                echo "                    <li class=\"toolbar-menu__item toolbar-menu__item--level-3\">
                      <a href=\"";
                                // line 54
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                                echo "\" class=\"toolbar-link\">
                        <span class=\"toolbar-link__label\">";
                                // line 55
                                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                                echo "</span>
                      </a>
                    </li>
                  ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 59
                            echo "                </ul>
              ";
                        }
                        // line 61
                        echo "            </li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "        </ul>
      </div>
    ";
                }
                // line 66
                echo "  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/menu-region--middle.html.twig";
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
        return array (  244 => 66,  239 => 63,  232 => 61,  228 => 59,  218 => 55,  214 => 54,  211 => 53,  207 => 52,  201 => 49,  197 => 48,  194 => 47,  191 => 46,  185 => 43,  180 => 42,  178 => 41,  173 => 40,  169 => 39,  163 => 36,  159 => 35,  153 => 34,  144 => 28,  140 => 27,  135 => 26,  132 => 25,  129 => 24,  123 => 21,  118 => 20,  112 => 17,  105 => 16,  102 => 15,  100 => 14,  91 => 13,  88 => 12,  83 => 11,  69 => 10,  59 => 6,  53 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/menu-region--middle.html.twig", "/var/www/html/web/themes/contrib/gin/templates/menu-region--middle.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "set" => 3, "macro" => 10, "for" => 11, "if" => 14);
        static $filters = array("escape" => 4, "clean_class" => 12, "t" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'for', 'if'],
                ['escape', 'clean_class', 't'],
                []
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
