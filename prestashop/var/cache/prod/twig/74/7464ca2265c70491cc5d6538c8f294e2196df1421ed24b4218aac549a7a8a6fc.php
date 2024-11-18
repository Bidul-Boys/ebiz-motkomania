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

/* @PrestaShop/Admin/Common/Grid/grid.html.twig */
class __TwigTemplate_c8ada3e691eec766e59d74d18a8ad74497bc1a356279e27790f2c0ace171674a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_header_row' => [$this, 'block_grid_header_row'],
            'grid_bulk_actions_block' => [$this, 'block_grid_bulk_actions_block'],
            'grid_table_row' => [$this, 'block_grid_table_row'],
            'grid_footer_row' => [$this, 'block_grid_footer_row'],
            'grid_extra_content' => [$this, 'block_grid_extra_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"row grid js-grid\" id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
        echo "_grid\" data-grid-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
        echo "\">
  <div class=\"col-sm\">
    ";
        // line 28
        $this->displayBlock('grid_header_row', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('grid_table_row', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        $this->displayBlock('grid_footer_row', $context, $blocks);
        // line 57
        echo "  </div>
</div>

";
        // line 60
        $this->displayBlock('grid_extra_content', $context, $blocks);
    }

    // line 28
    public function block_grid_header_row($context, array $blocks = [])
    {
        // line 29
        echo "      <div class=\"row\">
        ";
        // line 30
        $this->displayBlock('grid_bulk_actions_block', $context, $blocks);
        // line 39
        echo "      </div>
    ";
    }

    // line 30
    public function block_grid_bulk_actions_block($context, array $blocks = [])
    {
        // line 31
        echo "          <div class=\"col-sm\">
            <div class=\"row\">
              <div class=\"col-sm\">
                ";
        // line 34
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/bulk_actions.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
              </div>
            </div>
          </div>
        ";
    }

    // line 42
    public function block_grid_table_row($context, array $blocks = [])
    {
        // line 43
        echo "      <div class=\"row\">
        <div class=\"col-sm\">
          ";
        // line 45
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
        </div>
      </div>
    ";
    }

    // line 50
    public function block_grid_footer_row($context, array $blocks = [])
    {
        // line 51
        echo "      <div class=\"row\">
        <div class=\"col\">
          ";
        // line 53
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
        </div>
      </div>
    ";
    }

    // line 60
    public function block_grid_extra_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 60,  118 => 53,  114 => 51,  111 => 50,  103 => 45,  99 => 43,  96 => 42,  87 => 34,  82 => 31,  79 => 30,  74 => 39,  72 => 30,  69 => 29,  66 => 28,  62 => 60,  57 => 57,  55 => 50,  52 => 49,  50 => 42,  47 => 41,  45 => 28,  38 => 26,  35 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/grid.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/grid.html.twig");
    }
}
