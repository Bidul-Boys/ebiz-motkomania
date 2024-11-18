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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig */
class __TwigTemplate_2ab699823731b5998a67f42d072a6a6a2c02f2bf8c7e0d20ee0ff74b71c897e3 extends \Twig\Template
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
        $context["id_property_name"] = $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "primary_field", []);
        // line 26
        $context["id_primary_key"] = $this->getAttribute(($context["record"] ?? null), ($context["id_property_name"] ?? null), [], "array");
        // line 27
        $context["record_id"] = $this->getAttribute(($context["record"] ?? null), ($context["id_property_name"] ?? null), [], "array");
        // line 28
        echo "
";
        // line 29
        $context["isValid"] = ($this->getAttribute(($context["record"] ?? null), $this->getAttribute(($context["column"] ?? null), "id", []), [], "array") === "1");
        // line 30
        echo "
<div class=\"text-center\">
  <div 
    class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center ps-togglable-row\"
    data-toggle-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route", []), [$this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route_param_name", []) => ($context["id_primary_key"] ?? null)]), "html", null, true);
        echo "\"
  >
  <input type=\"radio\" name=\"input-";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\" id=\"input-false-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\" value=\"0\" ";
        if ( !($context["isValid"] ?? null)) {
            echo "checked";
        }
        echo ">
      <label for=\"input-false-";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\">Off</label>
      <input type=\"radio\" name=\"input-";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\" id=\"input-true-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\" value=\"1\" ";
        if (($context["isValid"] ?? null)) {
            echo "checked";
        }
        echo ">
      <label for=\"input-true-";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route", []), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id_primary_key"] ?? null), "html", null, true);
        echo "\">On</label>
      <span class=\"slide-button\"></span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 39,  72 => 38,  66 => 37,  52 => 36,  47 => 34,  41 => 30,  39 => 29,  36 => 28,  34 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/toggle.html.twig");
    }
}
