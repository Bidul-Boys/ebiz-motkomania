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

/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_7f5e4c8edd01e4a263fef95ad223078dc8123060c283f87b2b4e8093cbcd16c0 extends \Twig\Template
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
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grid"] ?? null), "actions", []), "grid", [])) > 0)) {
            // line 26
            echo "  ";
            $context["gridActionsButtonId"] = ($this->getAttribute(($context["grid"] ?? null), "id", []) . "-grid-actions-button");
            // line 27
            echo "  ";
            $context["gridActionsDropdownMenuId"] = ($this->getAttribute(($context["grid"] ?? null), "id", []) . "-grid-actions-dropdown-menu");
            // line 28
            echo "
  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["gridActionsButtonId"] ?? null), "html", null, true);
            echo "\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "Admin.Global"), "html", null, true);
            echo "\"
    >
      <span class=\"sr-only\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings", [], "Admin.Global"), "html", null, true);
            echo "</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["gridActionsButtonId"] ?? null), "html", null, true);
            echo "\"
         id=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["gridActionsDropdownMenuId"] ?? null), "html", null, true);
            echo "\"
    >
      ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "actions", []), "grid", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 45
                echo "        ";
                echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Grid/" . $this->getAttribute($context["action"], "type", [])) . ".html.twig"), ["action" => $context["action"], "grid" => ($context["grid"] ?? null)]);
                echo "
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    </div>

    ";
            // line 49
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", 49, "1427960344")->display(twig_array_merge($context, ["id" => ($this->getAttribute(            // line 50
($context["grid"] ?? null), "id", []) . "_grid_common_show_query_modal"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg btn-sql-submit"]]]));
            // line 74
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 74,  110 => 50,  109 => 49,  105 => 47,  88 => 45,  71 => 44,  66 => 42,  62 => 41,  55 => 37,  50 => 35,  43 => 31,  38 => 28,  35 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/grid_actions.html.twig");
    }
}


/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_7f5e4c8edd01e4a263fef95ad223078dc8123060c283f87b2b4e8093cbcd16c0___1427960344 extends \Twig\Template
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
        // line 49
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", 49);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        // line 61
        echo "          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_sql_requests_create");
        echo "\"
                  id=\"";
        // line 64
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["grid"] ?? null), "id", []) . "_common_show_query_modal_form"), "html", null, true);
        echo "\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 64,  179 => 63,  175 => 61,  172 => 60,  162 => 49,  112 => 74,  110 => 50,  109 => 49,  105 => 47,  88 => 45,  71 => 44,  66 => 42,  62 => 41,  55 => 37,  50 => 35,  43 => 31,  38 => 28,  35 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/grid_actions.html.twig");
    }
}
