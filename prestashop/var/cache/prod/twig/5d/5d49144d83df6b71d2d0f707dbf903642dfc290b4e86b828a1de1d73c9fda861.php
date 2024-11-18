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

/* PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig */
class __TwigTemplate_4e4516dacf812ff276a55a4684e43917bc3ab102c1a9560ddc363773231a9e66 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_horizontal_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", 37);
        // line 37
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_horizontal_layout.html.twig".'" cannot be used as a trait.', 37, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", 38);
        // line 38
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 38, $this->getSourceContext());
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 36
        echo "
";
        // line 39
        echo "
";
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('form_start', $context, $blocks);
        // line 46
        echo "
";
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('form_label', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 65
        echo "
";
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('form_row', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('form_row_class', $context, $blocks);
    }

    // line 42
    public function block_form_start($context, array $blocks = [])
    {
        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-horizontal"))]);
        // line 44
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 49
    public function block_form_label($context, array $blocks = [])
    {
        // line 50
        ob_start(function () { return ''; });
        // line 51
        echo "    ";
        if ((($context["label"] ?? null) === null)) {
            // line 52
            echo "      <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } elseif ((        // line 53
($context["label"] ?? null) === false)) {
            // line 54
            echo "      ";
            // line 55
            echo "    ";
        } else {
            // line 56
            echo "      ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 57
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 59
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_form_label_class($context, array $blocks = [])
    {
        // line 63
        echo "form-control-label";
    }

    // line 68
    public function block_form_row($context, array $blocks = [])
    {
        // line 69
        ob_start(function () { return ''; });
        // line 70
        echo "    ";
        // line 71
        echo "    ";
        if (array_key_exists("label_tag_name", $context)) {
            // line 72
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
    ";
        }
        // line 74
        echo "
    ";
        // line 75
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", 75)->unwrap();
        // line 76
        echo "    ";
        $context["multistoreCheckboxName"] = (($context["multistore_field_prefix"] ?? null) . $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "name", []));
        // line 77
        echo "    ";
        $context["disabledField"] = false;
        // line 78
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "disabled", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "disabled", []))) {
            // line 79
            echo "      ";
            $context["disabledField"] = true;
            // line 80
            echo "    ";
        }
        // line 81
        echo "
    <div class=\"";
        // line 82
        $this->displayBlock("form_row_class", $context, $blocks);
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if (($this->getAttribute(($context["attr"] ?? null), "visible", [], "any", true, true) &&  !$this->getAttribute(($context["attr"] ?? null), "visible", []))) {
            echo " d-none";
        }
        echo "\">
      ";
        // line 83
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", [], "any", false, true), ($context["multistoreCheckboxName"] ?? null), [], "any", true, true)) {
            // line 84
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", []), ($context["multistoreCheckboxName"] ?? null)), 'errors');
            echo "
        ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", []), ($context["multistoreCheckboxName"] ?? null)), 'widget');
            echo "
      ";
        }
        // line 87
        echo "
      ";
        // line 88
        if ( !array_key_exists("label_tag_name", $context)) {
            // line 89
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
      ";
        }
        // line 91
        echo "      <div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        if (($context["disabledField"] ?? null)) {
            echo " disabled";
        }
        echo "\">
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["fieldError" => true]]);
        echo "
      </div>
      ";
        // line 95
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", [], "any", false, true), $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "name", []), [], "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", []), $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "name", [])), "vars", []), "multistore_dropdown", []) != false))) {
            // line 96
            echo "        ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", []), $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "name", [])), "vars", []), "multistore_dropdown", []);
            echo "
      ";
        }
        // line 99
        $this->displayBlock("form_external_link", $context, $blocks);
        // line 100
        $this->displayBlock("form_alert", $context, $blocks);
        // line 101
        echo "</div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 103
        echo "
  ";
        // line 104
        if (($context["column_breaker"] ?? null)) {
            // line 105
            echo "    <div class=\"form-group form-column-breaker\"></div>
  ";
        }
    }

    // line 109
    public function block_form_group_class($context, array $blocks = [])
    {
        // line 110
        echo "col-sm input-container";
    }

    // line 113
    public function block_form_row_class($context, array $blocks = [])
    {
        // line 114
        echo "form-group row";
        if ($this->getAttribute(($context["row_attr"] ?? null), "class", [], "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["row_attr"] ?? null), "class", []), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  279 => 114,  276 => 113,  272 => 110,  269 => 109,  263 => 105,  261 => 104,  258 => 103,  254 => 101,  252 => 100,  250 => 99,  244 => 96,  242 => 95,  237 => 93,  233 => 92,  225 => 91,  219 => 89,  217 => 88,  214 => 87,  209 => 85,  204 => 84,  202 => 83,  191 => 82,  188 => 81,  185 => 80,  182 => 79,  179 => 78,  176 => 77,  173 => 76,  171 => 75,  168 => 74,  162 => 72,  159 => 71,  157 => 70,  155 => 69,  152 => 68,  148 => 63,  145 => 62,  140 => 59,  137 => 57,  134 => 56,  131 => 55,  129 => 54,  127 => 53,  122 => 52,  119 => 51,  117 => 50,  114 => 49,  110 => 44,  108 => 43,  105 => 42,  101 => 113,  98 => 112,  96 => 109,  93 => 108,  91 => 68,  88 => 67,  85 => 65,  83 => 62,  80 => 61,  78 => 49,  75 => 48,  72 => 46,  70 => 42,  67 => 41,  64 => 39,  61 => 36,  58 => 25,  32 => 38,  25 => 37,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig");
    }
}
