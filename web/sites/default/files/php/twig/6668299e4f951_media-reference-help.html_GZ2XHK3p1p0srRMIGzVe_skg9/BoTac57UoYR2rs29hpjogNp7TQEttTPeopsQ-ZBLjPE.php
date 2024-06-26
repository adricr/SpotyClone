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

/* core/modules/media/templates/media-reference-help.html.twig */
class __TwigTemplate_98ca4220cfa236ca4382e44e5d89207b extends Template
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
        // line 10
        $context["classes"] = ["js-form-item", "form-item", "js-form-wrapper", "form-wrapper"];
        // line 17
        echo "<fieldset";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo ">
  ";
        // line 19
        $context["legend_span_classes"] = ["fieldset-legend", ((        // line 21
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 22
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 25
        echo "  ";
        // line 26
        echo "  <legend";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["legend_attributes"] ?? null), 26, $this->source), "html", null, true);
        echo ">
    <span";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["legend_span_attributes"] ?? null), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["original_label"] ?? null), 27, $this->source), "html", null, true);
        echo "</span>
  </legend>

  <div class=\"js-form-item form-item\">
    ";
        // line 31
        if (($context["media_add_help"] ?? null)) {
            // line 32
            echo "      <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["header_attributes"] ?? null), "addClass", ["label"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo ">
        ";
            // line 33
            echo t("Create new media", array());
            // line 36
            echo "      </h4><br />
      <div class=\"description\">
        ";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_add_help"] ?? null), 38, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if (($context["multiple"] ?? null)) {
            // line 43
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["table"] ?? null), 43, $this->source), "html", null, true);
            echo "
    ";
        } else {
            // line 45
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 46
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["element"], 46, $this->source), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        }
        // line 49
        echo "
    <div";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 50), "addClass", ["description"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">
      ";
        // line 51
        if ((($context["multiple"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 51))) {
            // line 52
            echo "        <ul>
          <li>";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_help"] ?? null), 53, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_link"] ?? null), 53, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["allowed_types_help"] ?? null), 53, $this->source), "html", null, true);
            echo "</li>
          <li>";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</li>
        </ul>
      ";
        } else {
            // line 57
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_help"] ?? null), 57, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_list_link"] ?? null), 57, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["allowed_types_help"] ?? null), 57, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 59
        echo "      ";
        if ((($context["multiple"] ?? null) && ($context["button"] ?? null))) {
            // line 60
            echo "        <div class=\"clearfix\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button"] ?? null), 60, $this->source), "html", null, true);
            echo "</div>
      ";
        }
        // line 62
        echo "    </div>

  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "legend_attributes", "legend_span_attributes", "original_label", "media_add_help", "header_attributes", "multiple", "table", "elements", "description", "media_list_help", "media_list_link", "allowed_types_help", "button"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/media/templates/media-reference-help.html.twig";
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
        return array (  158 => 62,  152 => 60,  149 => 59,  139 => 57,  133 => 54,  125 => 53,  122 => 52,  120 => 51,  116 => 50,  113 => 49,  110 => 48,  101 => 46,  96 => 45,  90 => 43,  88 => 42,  85 => 41,  79 => 38,  75 => 36,  73 => 33,  68 => 32,  66 => 31,  57 => 27,  52 => 26,  50 => 25,  48 => 22,  47 => 21,  46 => 19,  41 => 17,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/media/templates/media-reference-help.html.twig", "/var/www/html/web/core/modules/media/templates/media-reference-help.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 31, "trans" => 33, "for" => 45);
        static $filters = array("escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'for'],
                ['escape'],
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
