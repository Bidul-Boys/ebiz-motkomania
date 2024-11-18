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

/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_75fda9f0f2d4c6fae669637df65fffb6414480b739b36af4b24213f330eb8920 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
            'product_catalog_tools' => [$this, 'block_product_catalog_tools'],
            'product_catalog_filters' => [$this, 'block_product_catalog_filters'],
            'product_catalog_form' => [$this, 'block_product_catalog_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["categories"] ?? null), [0 => "@PrestaShop/Admin/Product/Themes/categories_theme.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 29
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product_catalog.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        // line 33
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/catalog.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        // line 42
        echo "  <div class=\"products-catalog\">

    ";
        // line 44
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", ["kpi_controller" => "AdminProductsController"]);
        echo "

    <div class=\"content container-fluid\">

      ";
        // line 48
        if (twig_length_filter($this->env, ($context["permission_error"] ?? null))) {
            // line 49
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              ";
            // line 56
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? null), "html", null, true);
            echo "
            </p>
          </div>
        </div>
      </div>
      ";
        }
        // line 62
        echo "
      <div class=\"row align-items-start\">
        ";
        // line 64
        $this->displayBlock('product_catalog_tools', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('product_catalog_filters', $context, $blocks);
        // line 77
        echo "      </div>

      ";
        // line 79
        $this->displayBlock('product_catalog_form', $context, $blocks);
        // line 103
        echo "
    </div>
  </div>

  ";
        // line 108
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 108, "1830527762")->display(twig_array_merge($context, ["id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 127
        echo "

  ";
        // line 130
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 130, "799573365")->display(twig_array_merge($context, ["id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 149
        echo "

  ";
        // line 152
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 152, "67507260")->display(twig_array_merge($context, ["id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 171
        echo "

  ";
        // line 174
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 174, "1726905775")->display(twig_array_merge($context, ["id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 193
        echo "

  ";
        // line 196
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 196, "1062754338")->display(twig_array_merge($context, ["id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", [], "Admin.Catalog.Feature"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", [], "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg"]]]));
        // line 213
        echo "
  ";
        // line 214
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 214, "1198639136")->display(twig_array_merge($context, ["id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg"]]]));
        // line 234
        echo "
";
    }

    // line 64
    public function block_product_catalog_tools($context, array $blocks = [])
    {
        // line 65
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/tools.html.twig", ["import_link" => ($context["import_link"] ?? null)]);
        echo "
        ";
    }

    // line 68
    public function block_product_catalog_filters($context, array $blocks = [])
    {
        // line 69
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/filters.html.twig", ["limit" =>         // line 70
($context["limit"] ?? null), "offset" =>         // line 71
($context["offset"] ?? null), "orderBy" =>         // line 72
($context["orderBy"] ?? null), "sortOrder" =>         // line 73
($context["sortOrder"] ?? null)]);
        // line 75
        echo "
        ";
    }

    // line 79
    public function block_product_catalog_form($context, array $blocks = [])
    {
        // line 80
        echo "        ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Forms/form_products.html.twig", ["limit" =>         // line 81
($context["limit"] ?? null), "orderBy" =>         // line 82
($context["orderBy"] ?? null), "offset" =>         // line 83
($context["offset"] ?? null), "sortOrder" =>         // line 84
($context["sortOrder"] ?? null), "filter_category" =>         // line 85
($context["filter_category"] ?? null), "filter_column_id_product" =>         // line 86
($context["filter_column_id_product"] ?? null), "filter_column_name" =>         // line 87
($context["filter_column_name"] ?? null), "filter_column_reference" =>         // line 88
($context["filter_column_reference"] ?? null), "filter_column_name_category" =>         // line 89
($context["filter_column_name_category"] ?? null), "filter_column_price" =>         // line 90
($context["filter_column_price"] ?? null), "filter_column_sav_quantity" =>         // line 91
($context["filter_column_sav_quantity"] ?? null), "filter_column_active" =>         // line 92
($context["filter_column_active"] ?? null), "has_category_filter" =>         // line 93
($context["has_category_filter"] ?? null), "activate_drag_and_drop" =>         // line 94
($context["activate_drag_and_drop"] ?? null), "products" =>         // line 95
($context["products"] ?? null), "last_sql" =>         // line 96
($context["last_sql"] ?? null), "product_count_filtered" =>         // line 97
($context["product_count_filtered"] ?? null), "pagination_parameters" =>         // line 98
($context["pagination_parameters"] ?? null), "pagination_limit_choices" =>         // line 99
($context["pagination_limit_choices"] ?? null)]);
        // line 101
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 101,  233 => 99,  232 => 98,  231 => 97,  230 => 96,  229 => 95,  228 => 94,  227 => 93,  226 => 92,  225 => 91,  224 => 90,  223 => 89,  222 => 88,  221 => 87,  220 => 86,  219 => 85,  218 => 84,  217 => 83,  216 => 82,  215 => 81,  213 => 80,  210 => 79,  205 => 75,  203 => 73,  202 => 72,  201 => 71,  200 => 70,  198 => 69,  195 => 68,  188 => 65,  185 => 64,  180 => 234,  178 => 214,  175 => 213,  172 => 196,  168 => 193,  165 => 174,  161 => 171,  158 => 152,  154 => 149,  151 => 130,  147 => 127,  144 => 108,  138 => 103,  136 => 79,  132 => 77,  130 => 68,  127 => 67,  125 => 64,  121 => 62,  112 => 56,  103 => 49,  101 => 48,  94 => 44,  90 => 42,  87 => 41,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  65 => 34,  60 => 33,  57 => 32,  50 => 29,  47 => 28,  42 => 25,  40 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_75fda9f0f2d4c6fae669637df65fffb6414480b739b36af4b24213f330eb8920___1830527762 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 108
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 108);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 118
    public function block_content($context, array $blocks = [])
    {
        // line 119
        echo "      <div class=\"modal-body\">
        ";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 122,  300 => 120,  297 => 119,  294 => 118,  284 => 108,  235 => 101,  233 => 99,  232 => 98,  231 => 97,  230 => 96,  229 => 95,  228 => 94,  227 => 93,  226 => 92,  225 => 91,  224 => 90,  223 => 89,  222 => 88,  221 => 87,  220 => 86,  219 => 85,  218 => 84,  217 => 83,  216 => 82,  215 => 81,  213 => 80,  210 => 79,  205 => 75,  203 => 73,  202 => 72,  201 => 71,  200 => 70,  198 => 69,  195 => 68,  188 => 65,  185 => 64,  180 => 234,  178 => 214,  175 => 213,  172 => 196,  168 => 193,  165 => 174,  161 => 171,  158 => 152,  154 => 149,  151 => 130,  147 => 127,  144 => 108,  138 => 103,  136 => 79,  132 => 77,  130 => 68,  127 => 67,  125 => 64,  121 => 62,  112 => 56,  103 => 49,  101 => 48,  94 => 44,  90 => 42,  87 => 41,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  65 => 34,  60 => 33,  57 => 32,  50 => 29,  47 => 28,  42 => 25,  40 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_75fda9f0f2d4c6fae669637df65fffb6414480b739b36af4b24213f330eb8920___799573365 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 130
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 130);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 140
    public function block_content($context, array $blocks = [])
    {
        // line 141
        echo "      <div class=\"modal-body\">
        ";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 144,  373 => 142,  370 => 141,  367 => 140,  357 => 130,  305 => 122,  300 => 120,  297 => 119,  294 => 118,  284 => 108,  235 => 101,  233 => 99,  232 => 98,  231 => 97,  230 => 96,  229 => 95,  228 => 94,  227 => 93,  226 => 92,  225 => 91,  224 => 90,  223 => 89,  222 => 88,  221 => 87,  220 => 86,  219 => 85,  218 => 84,  217 => 83,  216 => 82,  215 => 81,  213 => 80,  210 => 79,  205 => 75,  203 => 73,  202 => 72,  201 => 71,  200 => 70,  198 => 69,  195 => 68,  188 => 65,  185 => 64,  180 => 234,  178 => 214,  175 => 213,  172 => 196,  168 => 193,  165 => 174,  161 => 171,  158 => 152,  154 => 149,  151 => 130,  147 => 127,  144 => 108,  138 => 103,  136 => 79,  132 => 77,  130 => 68,  127 => 67,  125 => 64,  121 => 62,  112 => 56,  103 => 49,  101 => 48,  94 => 44,  90 => 42,  87 => 41,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  65 => 34,  60 => 33,  57 => 32,  50 => 29,  47 => 28,  42 => 25,  40 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_75fda9f0f2d4c6fae669637df65fffb6414480b739b36af4b24213f330eb8920___67507260 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 152
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 152);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 162
    public function block_content($context, array $blocks = [])
    {
        // line 163
        echo "      <div class=\"modal-body\">
        ";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 166,  446 => 164,  443 => 163,  440 => 162,  430 => 152,  378 => 144,  373 => 142,  370 => 141,  367 => 140,  357 => 130,  305 => 122,  300 => 120,  297 => 119,  294 => 118,  284 => 108,  235 => 101,  233 => 99,  232 => 98,  231 => 97,  230 => 96,  229 => 95,  228 => 94,  227 => 93,  226 => 92,  225 => 91,  224 => 90,  223 => 89,  222 => 88,  221 => 87,  220 => 86,  219 => 85,  218 => 84,  217 => 83,  216 => 82,  215 => 81,  213 => 80,  210 => 79,  205 => 75,  203 => 73,  202 => 72,  201 => 71,  200 => 70,  198 => 69,  195 => 68,  188 => 65,  185 => 64,  180 => 234,  178 => 214,  175 => 213,  172 => 196,  168 => 193,  165 => 174,  161 => 171,  158 => 152,  154 => 149,  151 => 130,  147 => 127,  144 => 108,  138 => 103,  136 => 79,  132 => 77,  130 => 68,  127 => 67,  125 => 64,  121 => 62,  112 => 56,  103 => 49,  101 => 48,  94 => 44,  90 => 42,  87 => 41,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  65 => 34,  60 => 33,  57 => 32,  50 => 29,  47 => 28,  42 => 25,  40 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_75fda9f0f2d4c6fae669637df65fffb6414480b739b36af4b24213f330eb8920___1726905775 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 174
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 174);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 184
    public function block_content($context, array $blocks = [])
    {
        // line 185
        echo "      <div class=\"modal-body\">
        ";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 188,  519 => 186,  516 => 185,  513 => 184,  503 => 174,  451 => 166,  446 => 164,  443 => 163,  440 => 162,  430 => 152,  378 => 144,  373 => 142,  370 => 141,  367 => 140,  357 => 130,  305 => 122,  300 => 120,  297 => 119,  294 => 118,  284 => 108,  235 => 101,  233 => 99,  232 => 98,  231 => 97,  230 => 96,  229 => 95,  228 => 94,  227 => 93,  226 => 92,  225 => 91,  224 => 90,  223 => 89,  222 => 88,  221 => 87,  220 => 86,  219 => 85,  218 => 84,  217 => 83,  216 => 82,  215 => 81,  213 => 80,  210 => 79,  205 => 75,  203 => 73,  202 => 72,  201 => 71,  200 => 70,  198 => 69,  195 => 68,  188 => 65,  185 => 64,  180 => 234,  178 => 214,  175 => 213,  172 => 196,  168 => 193,  165 => 174,  161 => 171,  158 => 152,  154 => 149,  151 => 130,  147 => 127,  144 => 108,  138 => 103,  136 => 79,  132 => 77,  130 => 68,  127 => 67,  125 => 64,  121 => 62,  112 => 56,  103 => 49,  101 => 48,  94 => 44,  90 => 42,  87 => 41,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  65 => 34,  60 => 33,  57 => 32,  50 => 29,  47 => 28,  42 => 25,  40 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_75fda9f0f2d4c6fae669637df65fffb6414480b739b36af4b24213f330eb8920___1062754338 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 196
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 196);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 207
    public function block_content($context, array $blocks = [])
    {
        // line 208
        echo "      <div class=\"modal-body\">
        ";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 209,  589 => 208,  586 => 207,  576 => 196,  524 => 188,  519 => 186,  516 => 185,  513 => 184,  503 => 174,  451 => 166,  446 => 164,  443 => 163,  440 => 162,  430 => 152,  378 => 144,  373 => 142,  370 => 141,  367 => 140,  357 => 130,  305 => 122,  300 => 120,  297 => 119,  294 => 118,  284 => 108,  235 => 101,  233 => 99,  232 => 98,  231 => 97,  230 => 96,  229 => 95,  228 => 94,  227 => 93,  226 => 92,  225 => 91,  224 => 90,  223 => 89,  222 => 88,  221 => 87,  220 => 86,  219 => 85,  218 => 84,  217 => 83,  216 => 82,  215 => 81,  213 => 80,  210 => 79,  205 => 75,  203 => 73,  202 => 72,  201 => 71,  200 => 70,  198 => 69,  195 => 68,  188 => 65,  185 => 64,  180 => 234,  178 => 214,  175 => 213,  172 => 196,  168 => 193,  165 => 174,  161 => 171,  158 => 152,  154 => 149,  151 => 130,  147 => 127,  144 => 108,  138 => 103,  136 => 79,  132 => 77,  130 => 68,  127 => 67,  125 => 64,  121 => 62,  112 => 56,  103 => 49,  101 => 48,  94 => 44,  90 => 42,  87 => 41,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  65 => 34,  60 => 33,  57 => 32,  50 => 29,  47 => 28,  42 => 25,  40 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_75fda9f0f2d4c6fae669637df65fffb6414480b739b36af4b24213f330eb8920___1198639136 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 214
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 214);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 225
    public function block_content($context, array $blocks = [])
    {
        // line 226
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? null), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 226,  653 => 225,  643 => 214,  592 => 209,  589 => 208,  586 => 207,  576 => 196,  524 => 188,  519 => 186,  516 => 185,  513 => 184,  503 => 174,  451 => 166,  446 => 164,  443 => 163,  440 => 162,  430 => 152,  378 => 144,  373 => 142,  370 => 141,  367 => 140,  357 => 130,  305 => 122,  300 => 120,  297 => 119,  294 => 118,  284 => 108,  235 => 101,  233 => 99,  232 => 98,  231 => 97,  230 => 96,  229 => 95,  228 => 94,  227 => 93,  226 => 92,  225 => 91,  224 => 90,  223 => 89,  222 => 88,  221 => 87,  220 => 86,  219 => 85,  218 => 84,  217 => 83,  216 => 82,  215 => 81,  213 => 80,  210 => 79,  205 => 75,  203 => 73,  202 => 72,  201 => 71,  200 => 70,  198 => 69,  195 => 68,  188 => 65,  185 => 64,  180 => 234,  178 => 214,  175 => 213,  172 => 196,  168 => 193,  165 => 174,  161 => 171,  158 => 152,  154 => 149,  151 => 130,  147 => 127,  144 => 108,  138 => 103,  136 => 79,  132 => 77,  130 => 68,  127 => 67,  125 => 64,  121 => 62,  112 => 56,  103 => 49,  101 => 48,  94 => 44,  90 => 42,  87 => 41,  81 => 38,  77 => 37,  73 => 36,  69 => 35,  65 => 34,  60 => 33,  57 => 32,  50 => 29,  47 => 28,  42 => 25,  40 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}
