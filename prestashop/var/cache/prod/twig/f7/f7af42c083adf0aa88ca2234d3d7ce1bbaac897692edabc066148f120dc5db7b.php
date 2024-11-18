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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig */
class __TwigTemplate_4b55cf82aef38958ae276e6a153f30af7ac4ba984951fc00f58c4602409cad50 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'link' => [$this, 'block_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["color"] = $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "color_template", []);
        // line 27
        $context["class"] = ("text-" . ($context["color"] ?? null));
        // line 28
        echo "
";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "button_template", [])) {
            // line 30
            echo "  ";
            $context["style"] = $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "button_template", []);
            // line 31
            echo "  ";
            if ((($context["style"] ?? null) == "normal")) {
                // line 32
                echo "    ";
                $context["class"] = ("btn btn-" . ($context["color"] ?? null));
                // line 33
                echo "  ";
            } elseif ((($context["style"] ?? null) == "outline")) {
                // line 34
                echo "    ";
                $context["class"] = ("btn btn-outline-" . ($context["color"] ?? null));
                // line 35
                echo "  ";
            }
        }
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('link', $context, $blocks);
    }

    public function block_link($context, array $blocks = [])
    {
        // line 39
        echo "<a 
  class=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " text-nowrap\"
  href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route", []), [$this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route_param_name", []) => $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "route_param_field", []), [], "array")]), "html", null, true);
        echo "\"
  ";
        // line 42
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", [], "any", false, true), "target", [], "any", true, true)) {
            // line 43
            echo "    target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "target", []), "html", null, true);
            echo "\"
  ";
        }
        // line 45
        echo ">
  ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", [], "any", false, true), "icon", [], "any", true, true)) {
            // line 47
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 49
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "field", []), [], "array"), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 49,  95 => 47,  93 => 46,  90 => 45,  84 => 43,  82 => 42,  78 => 41,  74 => 40,  71 => 39,  65 => 38,  62 => 37,  58 => 35,  55 => 34,  52 => 33,  49 => 32,  46 => 31,  43 => 30,  41 => 29,  38 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/link.html.twig");
    }
}
