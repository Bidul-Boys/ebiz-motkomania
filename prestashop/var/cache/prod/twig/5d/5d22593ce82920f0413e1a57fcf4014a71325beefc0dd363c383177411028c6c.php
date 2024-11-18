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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig */
class __TwigTemplate_67ca473330bf9c9b68fdb1bf03a8051c7afe13b3fd8586ad8633162d9978633d extends \Twig\Template
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
        $context["class"] = "btn tooltip-link js-link-row-action";
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
        $context["route_params"] = [$this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "route_param_name", []) => $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "route_param_field", []), [], "array")];
        // line 33
        echo "  ";
        $context["extra_route_params"] = $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "extra_route_params", []);
        // line 34
        echo "
  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extra_route_params"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 36
            echo "    ";
            $context["route_params"] = twig_array_merge(($context["route_params"] ?? null), [$context["name"] => ((($this->getAttribute(($context["record"] ?? null), $context["field"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["record"] ?? null), $context["field"], [], "array")))) ? ($this->getAttribute(($context["record"] ?? null), $context["field"], [], "array")) : ($context["field"]))]);
            // line 37
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
<a class=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_lower_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", [])), [" " => "-"]), "html", null, true);
        echo "-row-link\"
   href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "route", []), ($context["route_params"] ?? null)), "html", null, true);
        echo "\"
   data-confirm-message=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "confirm_message", []), "html", null, true);
        echo "\"
  ";
        // line 42
        if ($this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 43
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
            echo "\"
  ";
        }
        // line 47
        echo "  data-clickable-row=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "clickable_row", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", [], "any", false, true), "clickable_row", []), false)) : (false)), "html", null, true);
        echo "\"
>
  ";
        // line 49
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? null), "icon", []))) {
            // line 50
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 52
        echo "  ";
        if ( !$this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 53
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
            echo "
  ";
        }
        // line 55
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 55,  113 => 53,  110 => 52,  104 => 50,  102 => 49,  96 => 47,  91 => 45,  87 => 43,  85 => 42,  81 => 41,  77 => 40,  71 => 39,  68 => 38,  62 => 37,  59 => 36,  55 => 35,  52 => 34,  49 => 33,  47 => 32,  44 => 31,  40 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/link.html.twig");
    }
}
