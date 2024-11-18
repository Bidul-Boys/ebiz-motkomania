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

/* @PrestaShop/Admin/Common/Kpi/kpi_row.html.twig */
class __TwigTemplate_a39e03d671c874ecc68620f28dfcf79281ecf06cfac06afb2c3dcddbba33c9dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'kpi_row' => [$this, 'block_kpi_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "    ";
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('kpi_row', $context, $blocks);
    }

    public function block_kpi_row($context, array $blocks = [])
    {
        // line 27
        echo "    <div class=\"container\">
        <div class=\"kpi-container\">
            <div class=\"row justify-content-around\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["kpiRow"] ?? null), "kpis", []));
        foreach ($context['_seq'] as $context["_key"] => $context["kpi"]) {
            // line 31
            echo "                    <div>
                        ";
            // line 32
            echo $context["kpi"];
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kpi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div>
        </div>
    </div>

    ";
        // line 39
        if ($this->getAttribute(($context["kpiRow"] ?? null), "allowRefresh", [])) {
            // line 40
            echo "      <div class=\"kpi-refresh\">
        <button class=\"refresh-kpis btn btn-primary\" type=\"button\">
          <i class=\"material-icons\">refresh</i>
        </button>
      </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Kpi/kpi_row.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 40,  69 => 39,  63 => 35,  54 => 32,  51 => 31,  47 => 30,  42 => 27,  36 => 26,  33 => 25,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Kpi/kpi_row.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Kpi/kpi_row.html.twig");
    }
}
