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

/* @PrestaShop/Admin/Common/Grid/Blocks/table.html.twig */
class __TwigTemplate_06ee52ffa08065fb457007ba14e3d6da328914c3ed6bbeba911a52ee0c6c6f00 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_table_head' => [$this, 'block_grid_table_head'],
            'grid_table_body' => [$this, 'block_grid_table_body'],
            'grid_table_footer' => [$this, 'block_grid_table_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminGridTableBefore", ["grid" =>         // line 27
($context["grid"] ?? null), "legacy_controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_legacy_controller"], "method"), "controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 29
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_controller"], "method")]);
        // line 31
        echo "

";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["grid"] ?? null), "filter_form", []), 'form_start', ["attr" => ["id" => ($this->getAttribute(($context["grid"] ?? null), "id", []) . "_filter_form"), "class" => "table-responsive"]]);
        echo "

<table class=\"grid-table js-grid-table table ";
        // line 35
        if ($this->env->getExtension('PrestaShopBundle\Twig\Extension\GridExtension')->isOrderingColumn(($context["grid"] ?? null))) {
            echo "grid-ordering-column";
        }
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "attributes", []), "is_empty_state", [])) {
            echo "border-0";
        }
        echo "\"
       id=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "id", []), "html", null, true);
        echo "_grid_table\"
       data-query=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "data", []), "query", []), "html", null, true);
        echo "\"
>
  <thead class=\"thead-default\">
  ";
        // line 40
        $this->displayBlock('grid_table_head', $context, $blocks);
        // line 46
        echo "  </thead>
  <tbody>
  ";
        // line 48
        $this->displayBlock('grid_table_body', $context, $blocks);
        // line 63
        echo "  </tbody>
  ";
        // line 64
        $this->displayBlock('grid_table_footer', $context, $blocks);
        // line 65
        echo "</table>

";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["grid"] ?? null), "filter_form", []), 'form_end');
        echo "

";
        // line 69
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminGridTableAfter", ["grid" =>         // line 70
($context["grid"] ?? null), "legacy_controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 71
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_legacy_controller"], "method"), "controller" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 72
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_controller"], "method")]);
        // line 74
        echo "
";
    }

    // line 40
    public function block_grid_table_head($context, array $blocks = [])
    {
        // line 41
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
    ";
        // line 42
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "actions", []), "bulk", [])) > 0) || (twig_length_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "filter_form", [])) > 1))) {
            // line 43
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
            echo "
    ";
        }
        // line 45
        echo "  ";
    }

    // line 48
    public function block_grid_table_body($context, array $blocks = [])
    {
        // line 49
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "data", []), "records", []))) {
            // line 50
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "data", []), "records", []));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 51
                echo "        <tr>
          ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["grid"] ?? null), "columns", []));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 53
                    echo "            <td class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "type", []), "html", null, true);
                    echo "-type column-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "id", []), "html", null, true);
                    if (($this->getAttribute($this->getAttribute($context["column"], "options", [], "any", false, true), "clickable", [], "any", true, true) && $this->getAttribute($this->getAttribute($context["column"], "options", []), "clickable", []))) {
                        echo " clickable";
                    }
                    echo "\">
              ";
                    // line 54
                    echo $this->env->getExtension('PrestaShopBundle\Twig\Extension\GridExtension')->renderColumnContent($context["record"], $context["column"], ($context["grid"] ?? null));
                    echo "
            </td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", ["grid" => ($context["grid"] ?? null)]);
            echo "
    ";
        }
        // line 62
        echo "  ";
    }

    // line 64
    public function block_grid_table_footer($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 64,  175 => 62,  169 => 60,  166 => 59,  159 => 57,  150 => 54,  140 => 53,  136 => 52,  133 => 51,  128 => 50,  125 => 49,  122 => 48,  118 => 45,  112 => 43,  110 => 42,  105 => 41,  102 => 40,  97 => 74,  95 => 72,  94 => 71,  93 => 70,  92 => 69,  87 => 67,  83 => 65,  81 => 64,  78 => 63,  76 => 48,  72 => 46,  70 => 40,  64 => 37,  60 => 36,  50 => 35,  45 => 33,  41 => 31,  39 => 29,  38 => 28,  37 => 27,  36 => 26,  33 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/table.html.twig");
    }
}
