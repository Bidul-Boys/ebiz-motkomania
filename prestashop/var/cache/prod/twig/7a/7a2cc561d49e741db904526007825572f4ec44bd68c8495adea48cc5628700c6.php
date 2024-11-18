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

/* @PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig */
class __TwigTemplate_0114ad2d387898b0a32b2facb03a823511d42fe8243272f6d72fb6ed937f65b5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_pagination' => [$this, 'block_grid_pagination'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('grid_pagination', $context, $blocks);
        // line 48
        echo "
";
    }

    // line 26
    public function block_grid_pagination($context, array $blocks = [])
    {
        // line 27
        echo "  ";
        if ((($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "data", []), "records_total", []) > 10) || $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "pagination", []), "offset", []))) {
            // line 28
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
            // line 30
            $context["route_params"] = [];
            // line 31
            echo "
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route_params"], "method"));
            foreach ($context['_seq'] as $context["param_name"] => $context["param_value"]) {
                // line 33
                echo "          ";
                $context["route_params"] = twig_array_merge(($context["route_params"] ?? null), [$context["param_name"] => $context["param_value"]]);
                // line 34
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['param_name'], $context['param_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
        ";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", ["limit" => $this->getAttribute($this->getAttribute(            // line 37
($context["grid"] ?? null), "pagination", []), "limit", []), "offset" => $this->getAttribute($this->getAttribute(            // line 38
($context["grid"] ?? null), "pagination", []), "offset", []), "total" => $this->getAttribute($this->getAttribute(            // line 39
($context["grid"] ?? null), "data", []), "records_total", []), "prefix" => $this->getAttribute(            // line 40
($context["grid"] ?? null), "form_prefix", []), "caller_route" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 41
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"), "caller_parameters" =>             // line 42
($context["route_params"] ?? null)]));
            // line 43
            echo "
      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 43,  78 => 42,  77 => 41,  76 => 40,  75 => 39,  74 => 38,  73 => 37,  72 => 36,  69 => 35,  63 => 34,  60 => 33,  56 => 32,  53 => 31,  51 => 30,  47 => 28,  44 => 27,  41 => 26,  36 => 48,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/pagination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/pagination.html.twig");
    }
}
