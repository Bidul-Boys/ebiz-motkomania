<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig */
class __TwigTemplate_417a36852242ee39c7215caf86893449c63b4dd1af93c0e9c878d4794876fa16 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["class"] = "btn tooltip-link js-submit-row-action";
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute(($context["attributes"] ?? null), "class", [], "any", true, true)) {
            // line 29
            echo "  ";
            $context["class"] = ((($context["class"] ?? null) . " ") . $this->getAttribute(($context["attributes"] ?? null), "class", []));
        }
        // line 31
        echo "
";
        // line 32
        $context["confirmation_message"] = $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "confirm_message", []);
        // line 33
        if ((($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "confirm_message_type", []) == "dynamic") && $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "dynamic_message_field", []), [], "array", true, true))) {
            // line 34
            echo "  ";
            $context["dynamic_field"] = $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "dynamic_message_field", []), [], "array");
            // line 35
            echo "  ";
            $context["confirmation_message"] = ((array_key_exists("dynamic_field", $context)) ? (_twig_default_filter(($context["dynamic_field"] ?? null), $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "confirm_message", []))) : ($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "confirm_message", [])));
        }
        // line 37
        echo "
";
        // line 38
        $context["route_params"] = [$this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "route_param_name", []) => $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "route_param_field", []), [], "array")];
        // line 39
        $context["extra_route_params"] = $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "extra_route_params", []);
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extra_route_params"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 42
            echo "  ";
            $context["route_params"] = twig_array_merge(($context["route_params"] ?? null), [$context["name"] => ((($this->getAttribute(($context["record"] ?? null), $context["field"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["record"] ?? null), $context["field"], [], "array")))) ? ($this->getAttribute(($context["record"] ?? null), $context["field"], [], "array")) : ($context["field"]))]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
<a class=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", [])), "html", null, true);
        echo "-row-link\"
   href=\"#\"
   data-confirm-message=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["confirmation_message"] ?? null), "html", null, true);
        echo "\"
   data-url=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "route", []), ($context["route_params"] ?? null)), "html", null, true);
        echo "\"
   data-method=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "method", []), "html", null, true);
        echo "\"
  ";
        // line 50
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "modal_options", [], "any", false, true), "options", [], "any", true, true)) {
            // line 51
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "modal_options", []), "options", []));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 52
                echo "      data-";
                echo twig_escape_filter($this->env, twig_replace_filter($context["attribute"], ["_" => "-"]), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "  ";
        }
        // line 55
        echo "  ";
        if ($this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 56
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
            echo "\"
  ";
        }
        // line 60
        echo ">
  ";
        // line 61
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? null), "icon", []))) {
            // line 62
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 64
        echo "  ";
        if ( !$this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 65
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
            echo "
  ";
        }
        // line 67
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  148 => 65,  145 => 64,  139 => 62,  137 => 61,  134 => 60,  129 => 58,  125 => 56,  122 => 55,  119 => 54,  108 => 52,  103 => 51,  101 => 50,  97 => 49,  93 => 48,  89 => 47,  82 => 45,  79 => 44,  72 => 42,  68 => 41,  65 => 40,  63 => 39,  61 => 38,  58 => 37,  54 => 35,  51 => 34,  49 => 33,  47 => 32,  44 => 31,  40 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/submit.html.twig");
    }
}
