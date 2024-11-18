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

/* @PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig */
class __TwigTemplate_a21c034990627e8174e5f95eca2dc58ba49555cdc91ff57ebdc3b6168032cb33 extends \Twig\Template
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
        echo "<div class=\"ps-dropdown dropdown btn-group bordered mb-1 module-bulk-actions disabled\">
  <div id=\"bulk-actions-dropdown\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-flip=\"false\">
    <span class=\"js-selected-item selected-item module-bulk-actions-selector-label\">
      ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Uninstall", [], "Admin.Actions"), "html", null, true);
        echo "
    </span>
    <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
  </div>

  <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\">
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bulkActions"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 35
            echo "      <a 
        class=\"dropdown-item module-bulk-menu\"
        data-ref=\"";
            // line 37
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
        data-display-name=\"";
            // line 38
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"
      >
        ";
            // line 40
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 43,  61 => 40,  56 => 38,  52 => 37,  48 => 35,  44 => 34,  35 => 28,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/dropdown_bulk.html.twig");
    }
}
