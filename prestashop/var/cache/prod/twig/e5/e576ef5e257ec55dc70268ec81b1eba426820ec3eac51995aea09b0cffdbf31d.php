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

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_cbee544c14fc5c9d9b4b55298c8f2601ad00ded424f1c98ea05ec3d02c3ccebf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 25, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'checkbox_radio_row' => [$this, 'block_checkbox_radio_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
                'text_with_unit_widget' => [$this, 'block_text_with_unit_widget'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('form_start', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_label', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 47
        echo "
";
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_row', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('radio_row', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('submit_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('form_row_class', $context, $blocks);
        // line 101
        echo "
";
        // line 102
        $this->displayBlock('text_with_unit_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('text_with_length_counter_widget', $context, $blocks);
    }

    // line 26
    public function block_form_start($context, array $blocks = [])
    {
        // line 27
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-horizontal"))]);
        // line 28
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 33
    public function block_form_label($context, array $blocks = [])
    {
        // line 34
        ob_start(function () { return ''; });
        // line 35
        echo "        ";
        if ((($context["label"] ?? null) === false)) {
            // line 36
            echo "            <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
        ";
        } else {
            // line 38
            echo "            ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 39
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 41
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_form_label_class($context, array $blocks = [])
    {
        // line 45
        echo "form-control-label";
    }

    // line 50
    public function block_form_row($context, array $blocks = [])
    {
        // line 51
        ob_start(function () { return ''; });
        // line 52
        echo "        <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        echo " ";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
            <div class=\"";
        // line 54
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
                ";
        // line 57
        $this->displayBlock("form_help", $context, $blocks);
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 63
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 64
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 67
    public function block_radio_row($context, array $blocks = [])
    {
        // line 68
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
    }

    // line 71
    public function block_checkbox_radio_row($context, array $blocks = [])
    {
        // line 72
        ob_start(function () { return ''; });
        // line 73
        echo "        <div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">
            <div class=\"";
        // line 74
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 75
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 83
    public function block_submit_row($context, array $blocks = [])
    {
        // line 84
        ob_start(function () { return ''; });
        // line 85
        echo "        <div class=\"form-group\">
            <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
            <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 94
    public function block_form_group_class($context, array $blocks = [])
    {
        // line 95
        echo "col-sm";
    }

    // line 98
    public function block_form_row_class($context, array $blocks = [])
    {
        // line 99
        echo "form-group row";
    }

    // line 102
    public function block_text_with_unit_widget($context, array $blocks = [])
    {
        // line 103
        echo "<div class=\"input-group\">";
        // line 104
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 105
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "unit", [], "any", true, true)) {
            // line 106
            echo "        <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "unit", []), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        // line 110
        echo "</div>
";
    }

    // line 113
    public function block_ip_address_text_widget($context, array $blocks = [])
    {
        // line 114
        echo "<div class=\"input-group\">";
        // line 115
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 116
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? null), "html", null, true);
        echo "\">
        <i class=\"material-icons\">add_circle</i> ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
</div>
";
    }

    // line 122
    public function block_switch_widget($context, array $blocks = [])
    {
        // line 123
        echo "<div class=\"input-group\">";
        // line 124
        $this->displayParentBlock("switch_widget", $context, $blocks);
        // line 125
        echo "</div>
";
    }

    // line 128
    public function block_text_with_length_counter_widget($context, array $blocks = [])
    {
        // line 129
        echo "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 130
        $context["current_length"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []) - twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", [])));
        // line 131
        echo "
    ";
        // line 132
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "position", []) == "before")) {
            // line 133
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 134
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 137
        echo "
    ";
        // line 138
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-max-length" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []), "maxlength" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []), "class" => "js-countable-input"]);
        // line 139
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 141
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "input", []) == "textarea")) {
            // line 142
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 144
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 146
        echo "
    ";
        // line 147
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "position", []) == "after")) {
            // line 148
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 149
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 152
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  403 => 152,  397 => 149,  394 => 148,  392 => 147,  389 => 146,  386 => 144,  383 => 142,  381 => 141,  379 => 139,  377 => 138,  374 => 137,  368 => 134,  365 => 133,  363 => 132,  360 => 131,  358 => 130,  355 => 129,  352 => 128,  347 => 125,  345 => 124,  343 => 123,  340 => 122,  332 => 117,  327 => 116,  325 => 115,  323 => 114,  320 => 113,  315 => 110,  309 => 107,  306 => 106,  304 => 105,  302 => 104,  300 => 103,  297 => 102,  293 => 99,  290 => 98,  286 => 95,  283 => 94,  274 => 88,  270 => 87,  266 => 86,  263 => 85,  261 => 84,  258 => 83,  249 => 77,  245 => 76,  241 => 75,  237 => 74,  230 => 73,  228 => 72,  225 => 71,  221 => 68,  218 => 67,  214 => 64,  211 => 63,  202 => 57,  198 => 56,  194 => 55,  190 => 54,  186 => 53,  177 => 52,  175 => 51,  172 => 50,  168 => 45,  165 => 44,  160 => 41,  157 => 39,  154 => 38,  148 => 36,  145 => 35,  143 => 34,  140 => 33,  136 => 28,  134 => 27,  131 => 26,  127 => 128,  124 => 127,  122 => 122,  119 => 121,  117 => 113,  114 => 112,  112 => 102,  109 => 101,  107 => 98,  104 => 97,  102 => 94,  99 => 93,  97 => 83,  94 => 82,  92 => 71,  89 => 70,  87 => 67,  84 => 66,  82 => 63,  79 => 62,  77 => 50,  74 => 49,  71 => 47,  69 => 44,  66 => 43,  64 => 33,  61 => 32,  58 => 30,  56 => 26,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_horizontal_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_horizontal_layout.html.twig");
    }
}
