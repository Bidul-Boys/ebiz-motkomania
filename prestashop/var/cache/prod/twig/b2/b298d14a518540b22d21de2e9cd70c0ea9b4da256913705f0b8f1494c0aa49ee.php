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

/* @PrestaShop/Admin/Common/Grid/grid_panel.html.twig */
class __TwigTemplate_6874783c32505b73b520d872823ae3e3c2606c6c96bd6584eae3f9cb6884fc5b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_panel_header' => [$this, 'block_grid_panel_header'],
            'grid_actions_block' => [$this, 'block_grid_actions_block'],
            'grid_panel_body' => [$this, 'block_grid_panel_body'],
            'grid_view_block' => [$this, 'block_grid_view_block'],
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
            'grid_panel_extra_content' => [$this, 'block_grid_panel_extra_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 19
        $context["displayName"] = true;
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "view_options", [], "any", false, true), "display_name", [], "any", true, true)) {
            // line 21
            echo "    ";
            $context["displayName"] = $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "view_options", []), "display_name", []);
        }
        // line 23
        echo "
<div class=\"card js-grid-panel\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
        echo "_grid_panel\" data-hook-name=\"";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_split_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "name", []), " ")), "html", null, true);
        echo "\">
  ";
        // line 25
        $this->displayBlock('grid_panel_header', $context, $blocks);
        // line 39
        echo "
  ";
        // line 40
        $this->displayBlock('grid_panel_body', $context, $blocks);
        // line 47
        echo "
  ";
        // line 48
        $this->displayBlock('grid_panel_footer', $context, $blocks);
        // line 49
        echo "</div>

";
        // line 51
        $this->displayBlock('grid_panel_extra_content', $context, $blocks);
    }

    // line 25
    public function block_grid_panel_header($context, array $blocks = [])
    {
        // line 26
        echo "      ";
        if ( !(($context["displayName"] ?? null) === false)) {
            // line 27
            echo "          <div class=\"card-header js-grid-header\">
            <h3 class=\"d-inline-block card-header-title\">
              ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "name", []), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "data", []), "records_total", []), "html", null, true);
            echo ")
            </h3>
            ";
            // line 31
            $this->displayBlock('grid_actions_block', $context, $blocks);
            // line 36
            echo "          </div>
      ";
        }
        // line 38
        echo "  ";
    }

    // line 31
    public function block_grid_actions_block($context, array $blocks = [])
    {
        // line 32
        echo "              <div class=\"d-inline-block float-right\">
                ";
        // line 33
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
              </div>
            ";
    }

    // line 40
    public function block_grid_panel_body($context, array $blocks = [])
    {
        // line 41
        echo "    <div class=\"card-body\">
      ";
        // line 42
        $this->displayBlock('grid_view_block', $context, $blocks);
        // line 45
        echo "    </div>
  ";
    }

    // line 42
    public function block_grid_view_block($context, array $blocks = [])
    {
        // line 43
        echo "        ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
      ";
    }

    // line 48
    public function block_grid_panel_footer($context, array $blocks = [])
    {
    }

    // line 51
    public function block_grid_panel_extra_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  136 => 48,  129 => 43,  126 => 42,  121 => 45,  119 => 42,  116 => 41,  113 => 40,  106 => 33,  103 => 32,  100 => 31,  96 => 38,  92 => 36,  90 => 31,  83 => 29,  79 => 27,  76 => 26,  73 => 25,  69 => 51,  65 => 49,  63 => 48,  60 => 47,  58 => 40,  55 => 39,  53 => 25,  47 => 24,  44 => 23,  40 => 21,  38 => 20,  36 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "/var/www/html/modules/ps_linklist/views/PrestaShop/Admin/Common/Grid/grid_panel.html.twig");
    }
}
