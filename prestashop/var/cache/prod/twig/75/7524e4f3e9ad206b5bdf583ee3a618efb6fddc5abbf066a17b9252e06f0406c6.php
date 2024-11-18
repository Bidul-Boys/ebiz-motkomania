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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig */
class __TwigTemplate_c97012f91027f025507d4771bd24079ee3eee9818d62f676095b92716ba80b3f extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "with_bulk_field", [])) {
            // line 27
            echo "  <div class=\"md-checkbox d-inline-block\">
    <label>
      <input type=\"checkbox\"
             title=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? null), "name", []), "html", null, true);
            echo "\"
             class=\"js-bulk-action-checkbox\"
             name=\"";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["grid"] ?? null), "id", []) . "_") . $this->getAttribute(($context["column"] ?? null), "id", [])), "html", null, true);
            echo "[]\"
             value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "bulk_field", []), [], "array"), "html", null, true);
            echo "\"
      >
      <i class=\"md-checkbox-control\"></i>
    </label>
  </div>
";
        }
        // line 39
        echo "
";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "identifier_field", []), [], "array"), "html", null, true);
        echo "

";
        // line 42
        if ( !(null === $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "preview", []))) {
            // line 43
            echo "  ";
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig", 43)->display(twig_array_merge($context, ["column" => $this->getAttribute($this->getAttribute(            // line 44
($context["column"] ?? null), "options", []), "preview", []), "record" =>             // line 45
($context["record"] ?? null)]));
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 45,  70 => 44,  68 => 43,  66 => 42,  61 => 40,  58 => 39,  49 => 33,  45 => 32,  40 => 30,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/identifier.html.twig");
    }
}
