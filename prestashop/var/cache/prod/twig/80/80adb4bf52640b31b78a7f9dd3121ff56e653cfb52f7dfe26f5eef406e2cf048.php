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

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_b8c27cb530ced55730f99edf763571b6fa749969f04fbc8e7c2806029f1a7ef2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return $this->loadTemplate(twig_template_from_string($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getLegacyLayout($this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_legacy_controller"], "method"), ((        // line 28
array_key_exists("layoutTitle", $context)) ? (($context["layoutTitle"] ?? null)) : ("")), ((        // line 29
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (($context["layoutHeaderToolbarBtn"] ?? null)) : ([])), ((        // line 30
array_key_exists("layoutDisplayType", $context)) ? (($context["layoutDisplayType"] ?? null)) : ("")), ((        // line 31
array_key_exists("showContentHeader", $context)) ? (($context["showContentHeader"] ?? null)) : (true)), ((        // line 32
array_key_exists("headerTabContent", $context)) ? (($context["headerTabContent"] ?? null)) : ("")), ((        // line 33
array_key_exists("enableSidebar", $context)) ? (($context["enableSidebar"] ?? null)) : (false)), ((        // line 34
array_key_exists("help_link", $context)) ? (($context["help_link"] ?? null)) : ("")), $this->env->getExtension('PrestaShopBundle\Twig\Extension\JsRouterMetadataExtension')->getJsRouterMetadata(), ((        // line 36
array_key_exists("meta_title", $context)) ? (($context["meta_title"] ?? null)) : ("")), ((        // line 37
array_key_exists("use_regular_h1_structure", $context)) ? (($context["use_regular_h1_structure"] ?? null)) : (true)))), "@PrestaShop/Admin/layout.html.twig", 25);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 41
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/layout.html.twig", 41)->unwrap();
        // line 25
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        // line 44
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/form_popover_error.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 49
    public function block_translate_javascripts($context, array $blocks = [])
    {
        // line 50
        echo "  <script>
    var translate_javascripts = ";
        // line 51
        echo twig_jsonencode_filter(($context["js_translatable"] ?? null));
        echo ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->intCast($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        echo ";
  </script>
";
    }

    // line 56
    public function block_content_header($context, array $blocks = [])
    {
        // line 57
        echo "  ";
        $this->displayBlock("session_alert", $context, $blocks);
        echo "
";
    }

    // line 60
    public function block_session_alert($context, array $blocks = [])
    {
        // line 61
        echo "  ";
        // line 81
        echo "  ";
        $context["layout"] = $this;
        // line 82
        echo "
  ";
        // line 83
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "peek", [0 => "error"], "method")) > 0)) {
            // line 84
            echo "    ";
            echo $context["layout"]->getalert("danger", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "error"], "method"));
            echo "
  ";
        }
        // line 86
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "peek", [0 => "failure"], "method")) > 0)) {
            // line 87
            echo "    ";
            echo $context["layout"]->getalert("danger", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "failure"], "method"));
            echo "
  ";
        }
        // line 89
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "peek", [0 => "success"], "method")) > 0)) {
            // line 90
            echo "    ";
            echo $context["layout"]->getalert("success", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "success"], "method"));
            echo "
  ";
        }
        // line 92
        echo "  ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "peek", [0 => "warning"], "method")) > 0)) {
            // line 93
            echo "    ";
            echo $context["layout"]->getalert("warning", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "warning"], "method"));
            echo "
  ";
        }
    }

    // line 97
    public function block_sidebar_right($context, array $blocks = [])
    {
        // line 98
        echo "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        echo "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Loading...", [], "Admin.Global"), "html", null, true);
        echo "\"
    />
  </nav>
";
    }

    // line 61
    public function getalert($__type__ = null, $__flashbagContent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "flashbagContent" => $__flashbagContent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 62
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo " d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      ";
            // line 66
            if ((twig_length_filter($this->env, ($context["flashbagContent"] ?? null)) > 1)) {
                // line 67
                echo "        <ul class=\"alert-text\">
          ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 69
                    echo "            <li>";
                    echo $context["flashMessage"];
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </ul>
      ";
            } else {
                // line 73
                echo "        <div class=\"alert-text\">
          ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 75
                    echo "            <p>";
                    echo $context["flashMessage"];
                    echo "</p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "        </div>
      ";
            }
            // line 79
            echo "    </div>
  ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 79,  230 => 77,  221 => 75,  217 => 74,  214 => 73,  210 => 71,  201 => 69,  197 => 68,  194 => 67,  192 => 66,  184 => 62,  171 => 61,  163 => 105,  159 => 104,  151 => 98,  148 => 97,  140 => 93,  137 => 92,  131 => 90,  128 => 89,  122 => 87,  119 => 86,  113 => 84,  111 => 83,  108 => 82,  105 => 81,  103 => 61,  100 => 60,  93 => 57,  90 => 56,  83 => 52,  79 => 51,  76 => 50,  73 => 49,  67 => 46,  63 => 45,  58 => 44,  55 => 43,  51 => 25,  49 => 41,  43 => 37,  42 => 36,  41 => 34,  40 => 33,  39 => 32,  38 => 31,  37 => 30,  36 => 29,  35 => 28,  34 => 27,  33 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/layout.html.twig");
    }
}
