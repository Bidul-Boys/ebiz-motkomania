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

/* @Product/CatalogPage/Lists/products_table.html.twig */
class __TwigTemplate_bdb8f0557a1a20c613ce3448016036723812112201abe02886bba49947eeaf49 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table_header' => [$this, 'block_product_catalog_form_table_header'],
            'product_catalog_form_table_filters' => [$this, 'block_product_catalog_form_table_filters'],
            'product_catalog_form_table_items' => [$this, 'block_product_catalog_form_table_items'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 25)->unwrap();
        // line 26
        echo "<div class=\"table-responsive\">
  <table
    class=\"table product mt-3\"
    redirecturl=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["limit" =>         // line 30
($context["limit"] ?? null), "offset" =>         // line 31
($context["offset"] ?? null), "orderBy" =>         // line 32
($context["orderBy"] ?? null), "sortOrder" =>         // line 33
($context["sortOrder"] ?? null)]), "html", null, true);
        // line 35
        echo "\"
  >
    <thead class=\"with-filters\">
      ";
        // line 38
        $this->displayBlock('product_catalog_form_table_header', $context, $blocks);
        // line 84
        echo "
      ";
        // line 85
        $this->displayBlock('product_catalog_form_table_filters', $context, $blocks);
        // line 203
        echo "    </thead>
    ";
        // line 204
        $this->displayBlock('product_catalog_form_table_items', $context, $blocks);
        // line 214
        echo "  </table>
</div>
";
    }

    // line 38
    public function block_product_catalog_form_table_header($context, array $blocks = [])
    {
        // line 39
        echo "        <tr class=\"column-headers\">
          <th scope=\"col\" style=\"width: 2rem\"></th>
          <th scope=\"col\" style=\"width: 5rem\">
            ";
        // line 42
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "id_product", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", [], "Admin.Global"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 48
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "name", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            ";
        // line 51
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "reference", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 54
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", [], "Admin.Catalog.Feature"), "name_category", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 57
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", [], "Admin.Catalog.Feature"), "price", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax incl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          </th>

          ";
        // line 63
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 64
            echo "          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
            // line 65
            echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Catalog.Feature"), "sav_quantity", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
            echo "
          </th>
          ";
        } else {
            // line 68
            echo "            <th></th>
          ";
        }
        // line 70
        echo "
          <th scope=\"col\" class=\"text-center\">
            ";
        // line 72
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "active", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
        echo "
          </th>
          ";
        // line 74
        if ((($context["has_category_filter"] ?? null) == true)) {
            // line 75
            echo "            <th scope=\"col\">
              ";
            // line 76
            echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", [], "Admin.Global"), "position", ($context["orderBy"] ?? null), ($context["sortOrder"] ?? null));
            echo "
            </th>
          ";
        }
        // line 79
        echo "          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
              ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
          </th>
        </tr>
      ";
    }

    // line 85
    public function block_product_catalog_form_table_filters($context, array $blocks = [])
    {
        // line 86
        echo "        ";
        $context["filters_disabled"] = ($context["activate_drag_and_drop"] ?? null);
        // line 87
        echo "        <tr class=\"column-filters\">
          <th colspan=\"2\">
            ";
        // line 89
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 89)->display(twig_array_merge($context, ["input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", [], "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", [], "Admin.Global"), "value" =>         // line 95
($context["filter_column_id_product"] ?? null), "disabled" =>         // line 96
($context["filters_disabled"] ?? null)]));
        // line 98
        echo "          </th>
          <th>&nbsp;</th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name\"
              value=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? null), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_name"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 108
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 109
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_reference\"
              value=\"";
        // line 117
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? null), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_reference"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 119
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 120
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name_category\"
              value=\"";
        // line 128
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? null), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_name_category"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 130
        if (($context["filters_disabled"] ?? null)) {
            echo "disabled";
        }
        // line 131
        echo "            />
          </th>
          <th class=\"text-center\">
            ";
        // line 134
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 134)->display(twig_array_merge($context, ["input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", [], "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", [], "Admin.Global"), "value" =>         // line 140
($context["filter_column_price"] ?? null), "disabled" =>         // line 141
($context["filters_disabled"] ?? null)]));
        // line 143
        echo "          </th>
          <th class=\"text-center\"></th>
          ";
        // line 145
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 146
            echo "          <th class=\"text-center\">
            ";
            // line 147
            $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 147)->display(twig_array_merge($context, ["input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", [], "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", [], "Admin.Global"), "value" =>             // line 153
($context["filter_column_sav_quantity"] ?? null), "disabled" =>             // line 154
($context["filters_disabled"] ?? null)]));
            // line 156
            echo "          </th>
          ";
        } else {
            // line 158
            echo "            <th></th>
          ";
        }
        // line 160
        echo "
          <th id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\"";
        // line 163
        if (($context["filters_disabled"] ?? null)) {
            echo " disabled";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% select", ["%inputId%" => "filter_column_active"], "Admin.Global"), "html", null, true);
        echo "\"
                >
                <option value=\"\"></option>
                <option value=\"1\" ";
        // line 166
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? null) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                <option value=\"0\" ";
        // line 167
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? null) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
              </select>
            </div>
          </th>
          ";
        // line 171
        if ((($context["has_category_filter"] ?? null) == true)) {
            // line 172
            echo "            <th>
              ";
            // line 173
            if ( !($context["activate_drag_and_drop"] ?? null)) {
                // line 174
                echo "                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", [], "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                ";
            } else {
                // line 176
                echo "                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", [], "Admin.Actions");
                echo "\" />
              ";
            }
            // line 178
            echo "            </th>
          ";
        }
        // line 180
        echo "          <th class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">search</i>
              ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </th>
        </tr>
      ";
    }

    // line 204
    public function block_product_catalog_form_table_items($context, array $blocks = [])
    {
        // line 205
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", ["limit" =>         // line 206
($context["limit"] ?? null), "offset" =>         // line 207
($context["offset"] ?? null), "orderBy" =>         // line 208
($context["orderBy"] ?? null), "sortOrder" =>         // line 209
($context["sortOrder"] ?? null), "products" =>         // line 210
($context["products"] ?? null), "last_sql" =>         // line 211
($context["last_sql"] ?? null)]));
        // line 212
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Lists/products_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 212,  385 => 211,  384 => 210,  383 => 209,  382 => 208,  381 => 207,  380 => 206,  378 => 205,  375 => 204,  366 => 198,  360 => 195,  350 => 188,  344 => 185,  337 => 180,  333 => 178,  327 => 176,  321 => 174,  319 => 173,  316 => 172,  314 => 171,  305 => 167,  299 => 166,  289 => 163,  284 => 160,  280 => 158,  276 => 156,  274 => 154,  273 => 153,  272 => 147,  269 => 146,  267 => 145,  263 => 143,  261 => 141,  260 => 140,  259 => 134,  254 => 131,  250 => 130,  246 => 129,  242 => 128,  237 => 126,  229 => 120,  225 => 119,  221 => 118,  217 => 117,  212 => 115,  204 => 109,  200 => 108,  196 => 107,  192 => 106,  187 => 104,  179 => 98,  177 => 96,  176 => 95,  175 => 89,  171 => 87,  168 => 86,  165 => 85,  157 => 80,  154 => 79,  148 => 76,  145 => 75,  143 => 74,  138 => 72,  134 => 70,  130 => 68,  124 => 65,  121 => 64,  119 => 63,  113 => 60,  107 => 57,  101 => 54,  95 => 51,  89 => 48,  83 => 45,  77 => 42,  72 => 39,  69 => 38,  63 => 214,  61 => 204,  58 => 203,  56 => 85,  53 => 84,  51 => 38,  46 => 35,  44 => 33,  43 => 32,  42 => 31,  41 => 30,  40 => 29,  35 => 26,  33 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Product/CatalogPage/Lists/products_table.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Lists/products_table.html.twig");
    }
}
