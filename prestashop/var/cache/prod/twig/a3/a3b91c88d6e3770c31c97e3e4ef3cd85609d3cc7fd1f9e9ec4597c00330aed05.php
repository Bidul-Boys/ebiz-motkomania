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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig */
class __TwigTemplate_ce1c647f5dc576a664fac375d19fc49bff68595498547daa00ef1ab0dc00800a extends \Twig\Template
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "query", []), "has", [0 => "id_category"], "method") &&  !$this->getAttribute(($context["currentCategoryView"] ?? null), "is_home_category", []))) {
            // line 27
            echo "  ";
            if ($this->getAttribute(($context["currentCategoryView"] ?? null), "id_parent", [])) {
                // line 28
                echo "    ";
                $context["params"] = ["id_category" => $this->getAttribute(($context["currentCategoryView"] ?? null), "id_parent", [])];
                // line 29
                echo "  ";
            }
            // line 30
            echo "
  <div class=\"card-footer\">
    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_index", ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]))), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
      <i class=\"material-icons\">arrow_back</i>
      ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to list", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 34,  48 => 32,  44 => 30,  41 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/listing_panel_footer.html.twig");
    }
}
