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

/* @Product/CatalogPage/Forms/form_products.html.twig */
class __TwigTemplate_5d51b82b04eda2fe25fdeb411e04b7135689194808d97331b02b77e1be2e1439 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table' => [$this, 'block_product_catalog_form_table'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "<form
  name=\"product_catalog_list\"
  id=\"product_catalog_list\"
  method=\"post\"
  action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["limit" => ($context["limit"] ?? null), "orderBy" => ($context["orderBy"] ?? null), "sortOrder" => ($context["sortOrder"] ?? null)]), "html", null, true);
        echo "\"
  orderingurl=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["offset" => 0, "limit" => 300, "orderBy" => "position_ordering", "sortOrder" => ($context["sortOrder"] ?? null)]), "html", null, true);
        echo "\"
  newproducturl=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter(($context["filter_category"] ?? null), "")) : ("")), "html", null, true);
        echo "\" />
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">
      ";
        // line 41
        $this->displayBlock('product_catalog_form_table', $context, $blocks);
        // line 62
        echo "    </div>
  </div>

  ";
        // line 65
        if ((($context["product_count_filtered"] ?? null) > 20)) {
            // line 66
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">

        ";
            // line 69
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", ["limit" =>             // line 70
($context["limit"] ?? null), "offset" =>             // line 71
($context["offset"] ?? null), "total" =>             // line 72
($context["product_count_filtered"] ?? null), "caller_route" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 73
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), "caller_parameters" =>             // line 74
($context["pagination_parameters"] ?? null), "limit_choices" =>             // line 75
($context["pagination_limit_choices"] ?? null)]));
            // line 76
            echo "
      </div>
    </div>
  ";
        }
        // line 80
        echo "</form>
";
    }

    // line 41
    public function block_product_catalog_form_table($context, array $blocks = [])
    {
        // line 42
        echo "        ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Lists/products_table.html.twig", ["limit" =>         // line 43
($context["limit"] ?? null), "orderBy" =>         // line 44
($context["orderBy"] ?? null), "offset" =>         // line 45
($context["offset"] ?? null), "sortOrder" =>         // line 46
($context["sortOrder"] ?? null), "filter_category" =>         // line 47
($context["filter_category"] ?? null), "filter_column_id_product" =>         // line 48
($context["filter_column_id_product"] ?? null), "filter_column_name" =>         // line 49
($context["filter_column_name"] ?? null), "filter_column_reference" =>         // line 50
($context["filter_column_reference"] ?? null), "filter_column_name_category" =>         // line 51
($context["filter_column_name_category"] ?? null), "filter_column_price" =>         // line 52
($context["filter_column_price"] ?? null), "filter_column_sav_quantity" =>         // line 53
($context["filter_column_sav_quantity"] ?? null), "filter_column_active" =>         // line 54
($context["filter_column_active"] ?? null), "has_category_filter" =>         // line 55
($context["has_category_filter"] ?? null), "activate_drag_and_drop" =>         // line 56
($context["activate_drag_and_drop"] ?? null), "products" =>         // line 57
($context["products"] ?? null), "last_sql" =>         // line 58
($context["last_sql"] ?? null)]);
        // line 60
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Forms/form_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 60,  114 => 58,  113 => 57,  112 => 56,  111 => 55,  110 => 54,  109 => 53,  108 => 52,  107 => 51,  106 => 50,  105 => 49,  104 => 48,  103 => 47,  102 => 46,  101 => 45,  100 => 44,  99 => 43,  97 => 42,  94 => 41,  89 => 80,  83 => 76,  81 => 75,  80 => 74,  79 => 73,  78 => 72,  77 => 71,  76 => 70,  75 => 69,  70 => 66,  68 => 65,  63 => 62,  61 => 41,  52 => 35,  45 => 31,  41 => 30,  37 => 29,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/CatalogPage/Forms/form_products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Forms/form_products.html.twig");
    }
}
