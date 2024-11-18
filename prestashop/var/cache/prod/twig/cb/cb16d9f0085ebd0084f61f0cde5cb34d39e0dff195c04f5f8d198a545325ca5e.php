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

/* @PrestaShop/Admin/Module/Includes/action_menu.html.twig */
class __TwigTemplate_2eb047124700d82e9d6fbb9b9a658261be1b37cee6a84d78152b58bfe4a23768 extends \Twig\Template
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
        list($context["url"], $context["priceRaw"], $context["priceDisplay"], $context["url_active"], $context["urls"], $context["name"], $context["transDomains"]) =         [$this->getAttribute($this->getAttribute(        // line 26
($context["module"] ?? null), "attributes", []), "url", []), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["module"] ?? null), "attributes", []), "price", []), "raw", []), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["module"] ?? null), "attributes", []), "price", []), "displayPrice", []), $this->getAttribute($this->getAttribute(        // line 29
($context["module"] ?? null), "attributes", []), "url_active", []), $this->getAttribute($this->getAttribute(        // line 30
($context["module"] ?? null), "attributes", []), "urls", []), $this->getAttribute($this->getAttribute(        // line 31
($context["module"] ?? null), "attributes", []), "name", []), $this->getAttribute($this->getAttribute(        // line 32
($context["module"] ?? null), "attributes", []), "actionTranslationDomains", [])];
        // line 34
        echo " <div class=\"btn-group module-actions\">
  ";
        // line 35
        if ((($context["url_active"] ?? null) == "buy")) {
            // line 36
            echo "    <a class=\"btn btn-primary btn-primary-reverse btn-block btn-outline-primary module_action_menu_go_to_addons\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" target=\"_blank\">
      ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discover", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
    </a>
  ";
        } elseif (twig_length_filter($this->env,         // line 39
($context["urls"] ?? null))) {
            // line 40
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_button.html.twig", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", 40)->display(twig_array_merge($context, ["name" =>             // line 41
($context["name"] ?? null), "classes_form" => "btn-group form-action-button", "classes" => "btn btn-primary-reverse btn-outline-primary", "url" => $this->getAttribute(            // line 44
($context["urls"] ?? null), ($context["url_active"] ?? null), [], "array"), "action" =>             // line 45
($context["url_active"] ?? null), "transDomain" =>             // line 46
($context["transDomains"] ?? null)]));
            // line 48
            echo "    ";
            if ((twig_length_filter($this->env, ($context["urls"] ?? null)) > 1)) {
                // line 49
                echo "        <input type=\"hidden\" class=\"btn\" /> 
        <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> 
          <span class=\"caret\"></span> 
        </button>
        <span class=\"sr-only\">";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Toggle Dropdown", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</span> 
        <div class=\"dropdown-menu\">
          ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["urls"] ?? null));
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
                foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                    // line 56
                    echo "            ";
                    if (($context["module_action"] != ($context["url_active"] ?? null))) {
                        // line 57
                        echo "                <li>
                  ";
                        // line 58
                        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_button.html.twig", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", 58)->display(twig_array_merge($context, ["name" =>                         // line 59
($context["name"] ?? null), "classes" => "dropdown-item", "url" =>                         // line 61
$context["module_url"], "action" =>                         // line 62
$context["module_action"], "transDomain" =>                         // line 63
($context["transDomains"] ?? null)]));
                        // line 65
                        echo "                </li>
            ";
                    }
                    // line 67
                    echo "          ";
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
                unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "        </div>
    ";
            }
            // line 70
            echo "  ";
        }
        // line 71
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/action_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 71,  128 => 70,  124 => 68,  110 => 67,  106 => 65,  104 => 63,  103 => 62,  102 => 61,  101 => 59,  100 => 58,  97 => 57,  94 => 56,  77 => 55,  72 => 53,  66 => 49,  63 => 48,  61 => 46,  60 => 45,  59 => 44,  58 => 41,  56 => 40,  54 => 39,  49 => 37,  44 => 36,  42 => 35,  39 => 34,  37 => 32,  36 => 31,  35 => 30,  34 => 29,  33 => 28,  32 => 27,  31 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/action_menu.html.twig");
    }
}
