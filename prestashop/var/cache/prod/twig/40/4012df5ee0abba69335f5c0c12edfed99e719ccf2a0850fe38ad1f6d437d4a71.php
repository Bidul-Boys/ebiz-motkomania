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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_7e397590e01ead4cffd2125eaa4411078c1b3d6ff49d16f52e6a186ff1865fe7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45);
        // line 45
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 45, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError(sprintf('Block "radio_widget" is not defined in trait "bootstrap_base_layout.html.twig".'), 45, $this->getSourceContext());
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]);

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError(sprintf('Block "checkbox_widget" is not defined in trait "bootstrap_base_layout.html.twig".'), 45, $this->getSourceContext());
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]);

        $_trait_1 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 48);
        // line 48
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 48, $this->getSourceContext());
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 49);
        // line 49
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 49, $this->getSourceContext());
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 50);
        // line 50
        if (!$_trait_3->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 50, $this->getSourceContext());
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'text_with_unit_widget' => [$this, 'block_text_with_unit_widget'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'form_row' => [$this, 'block_form_row'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_help' => [$this, 'block_form_help'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 46
        echo "
";
        // line 51
        echo "
";
        // line 53
        echo "
";
        // line 56
        $this->displayBlock('form_widget', $context, $blocks);
        // line 64
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 69
        $this->displayBlock('text_with_unit_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 90
        echo "
";
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('widget_type_class', $context, $blocks);
        // line 129
        echo "
";
        // line 132
        $this->displayBlock('form_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('money_widget', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 226
        $this->displayBlock('url_widget', $context, $blocks);
        // line 232
        $this->displayBlock('date_widget', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_widget', $context, $blocks);
        // line 266
        $this->displayBlock('email_widget', $context, $blocks);
        // line 272
        $this->displayBlock('button_widget', $context, $blocks);
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('icon_button_widget', $context, $blocks);
        // line 295
        echo "
";
        // line 296
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 300
        echo "
";
        // line 301
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 305
        echo "
";
        // line 306
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 340
        echo "
";
        // line 341
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 379
        echo "
";
        // line 380
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 405
        echo "
";
        // line 406
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 412
        echo "
";
        // line 413
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 449
        echo "
";
        // line 450
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 491
        echo "
";
        // line 492
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 506
        echo "
";
        // line 507
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 513
        echo "
";
        // line 514
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 540
        echo "
";
        // line 541
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 556
        echo "
";
        // line 557
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 586
        echo "
";
        // line 588
        echo "
";
        // line 589
        $this->displayBlock('choice_label', $context, $blocks);
        // line 594
        echo "
";
        // line 595
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 598
        echo "
";
        // line 599
        $this->displayBlock('radio_label', $context, $blocks);
        // line 602
        echo "
";
        // line 603
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 635
        echo "
";
        // line 636
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 650
        echo "
";
        // line 651
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 658
        echo "
";
        // line 660
        echo "
";
        // line 661
        $this->displayBlock('form_errors', $context, $blocks);
        // line 668
        echo "
";
        // line 669
        $this->displayBlock('form_errors_field', $context, $blocks);
        // line 735
        echo "
";
        // line 736
        $this->displayBlock('form_errors_other', $context, $blocks);
        // line 755
        echo "
";
        // line 757
        echo "
";
        // line 758
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 788
        echo "
";
        // line 789
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 841
        echo "
";
        // line 843
        $this->displayBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 866
        echo "
";
        // line 867
        $this->displayBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 903
        echo "
";
        // line 904
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 912
        echo "
";
        // line 913
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 937
        echo "
";
        // line 938
        $this->displayBlock('file_widget', $context, $blocks);
        // line 970
        echo "
";
        // line 971
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 987
        echo "
";
        // line 988
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 1007
        echo "
";
        // line 1008
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1033
        echo "
";
        // line 1034
        $this->displayBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1062
        echo "
";
        // line 1063
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1067
        echo "
";
        // line 1068
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1073
        $this->displayBlock('number_widget', $context, $blocks);
        // line 1079
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 1085
        $this->displayBlock('form_help', $context, $blocks);
        // line 1093
        echo "
";
        // line 1094
        $this->displayBlock('form_external_link', $context, $blocks);
        // line 1107
        $this->displayBlock('form_external_link_attributes', $context, $blocks);
        // line 1121
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 1124
        echo "
";
        // line 1125
        $this->displayBlock('text_widget', $context, $blocks);
        // line 1142
        $this->displayBlock('form_prepend_alert', $context, $blocks);
        // line 1148
        $this->displayBlock('form_append_alert', $context, $blocks);
        // line 1154
        $this->displayBlock('form_alert', $context, $blocks);
        // line 1187
        $this->displayBlock('unavailable_widget', $context, $blocks);
    }

    // line 56
    public function block_form_widget($context, array $blocks = [])
    {
        // line 57
        if (array_key_exists("columns_number", $context)) {
            // line 58
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-columns-") . ($context["columns_number"] ?? null)))]);
            // line 59
            echo "  ";
        }
        // line 60
        echo "  ";
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 61
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 64
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 65
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 66
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 66)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
    }

    // line 69
    public function block_text_with_unit_widget($context, array $blocks = [])
    {
        // line 70
        echo "  <div class=\"input-group\">";
        // line 71
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 72
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "unit", [], "any", true, true)) {
            // line 73
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "unit", []), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 77
        echo "  </div>
  ";
        // line 78
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 81
    public function block_ip_address_text_widget($context, array $blocks = [])
    {
        // line 82
        echo "  <div class=\"input-group\">";
        // line 83
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 84
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, ($context["currentIp"] ?? null), "html", null, true);
        echo "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
  ";
        // line 88
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 93
    public function block_form_row($context, array $blocks = [])
    {
        // line 94
        echo "<div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        if ($this->getAttribute(($context["row_attr"] ?? null), "class", [], "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["row_attr"] ?? null), "class", []), "html", null, true);
        }
        echo "\">";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 96
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 101
        $this->displayBlock("form_external_link", $context, $blocks);
        // line 102
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 103
        echo "</div>

  ";
        // line 105
        if (($context["column_breaker"] ?? null)) {
            // line 106
            echo "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
    }

    // line 110
    public function block_widget_type_class($context, array $blocks = [])
    {
        // line 111
        if (( !($context["compound"] ?? null) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "block_prefixes", [])) > 2))) {
            // line 112
            echo " ";
            ob_start(function () { return ''; });
            // line 113
            echo "
    ";
            // line 114
            $context["index"] = (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "block_prefixes", [])) - 2);
            // line 115
            echo "    ";
            $context["widgetType"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "block_prefixes", []), ($context["index"] ?? null), [], "array");
            // line 116
            echo "    ";
            if ((($context["widgetType"] ?? null) == "choice")) {
                // line 117
                echo "      ";
                if ( !($context["expanded"] ?? null)) {
                    // line 118
                    echo "        ";
                    $context["widgetType"] = "select";
                    // line 119
                    echo "      ";
                } elseif (($context["multiple"] ?? null)) {
                    // line 120
                    echo "        ";
                    $context["widgetType"] = "checboxes";
                    // line 121
                    echo "      ";
                } else {
                    // line 122
                    echo "        ";
                    $context["widgetType"] = "radio";
                    // line 123
                    echo "      ";
                }
                // line 124
                echo "    ";
            }
            // line 125
            echo "    ";
            echo twig_escape_filter($this->env, ($context["widgetType"] ?? null), "html", null, true);
            echo "-widget
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    // line 132
    public function block_form_label($context, array $blocks = [])
    {
        // line 133
        if ( !(($context["label"] ?? null) === false)) {
            // line 134
            if ( !($context["compound"] ?? null)) {
                // line 135
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 137
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 140
            echo "    ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 141
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 142
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 143
($context["name"] ?? null), "%id%" =>                     // line 144
($context["id"] ?? null)]);
                } else {
                    // line 147
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 151
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (_twig_default_filter(($context["label_tag_name"] ?? null), "label")) : ("label"));
            // line 152
            echo "    <";
            echo twig_escape_filter($this->env, ($context["labelTag"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 153
            if (($context["required"] ?? null)) {
                // line 154
                echo "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 156
            echo "    ";
            echo (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)));
            echo "
    ";
            // line 157
            if ($this->getAttribute(($context["label_attr"] ?? null), "tooltip", [], "array", true, true)) {
                // line 158
                echo "      ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? null), "tooltip_placement", [], "array")) : ("top"));
                // line 159
                echo "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, ($context["placement"] ?? null), "html", null, true);
                echo "\"
         title=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute(($context["label_attr"] ?? null), "tooltip", [], "array"), "html", null, true);
                echo "\"></i>
    ";
            }
            // line 162
            echo "
    ";
            // line 163
            if ((array_key_exists("label_help_box", $context) || $this->getAttribute(($context["label_attr"] ?? null), "popover", [], "array", true, true))) {
                // line 164
                echo "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? (($context["label_help_box"] ?? null)) : ($this->getAttribute(($context["label_attr"] ?? null), "popover", [], "array")));
                // line 165
                echo "      ";
                $context["placement"] = (($this->getAttribute(($context["label_attr"] ?? null), "popover_placement", [], "array", true, true)) ? ($this->getAttribute(($context["label_attr"] ?? null), "popover_placement", [], "array")) : ("top"));
                // line 166
                echo "      ";
                $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 166)->display(twig_array_merge($context, ["placement" => ($context["placement"] ?? null), "content" => ($context["content"] ?? null)]));
                // line 167
                echo "    ";
            }
            // line 168
            echo "    </";
            echo twig_escape_filter($this->env, ($context["labelTag"] ?? null), "html", null, true);
            echo ">
    ";
            // line 169
            if (array_key_exists("label_subtitle", $context)) {
                // line 170
                echo "      <p class=\"subtitle\">";
                echo twig_escape_filter($this->env, ($context["label_subtitle"] ?? null), "html", null, true);
                echo "</p>
    ";
            }
        }
    }

    // line 177
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 178
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        // line 179
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        // line 180
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 180)->display(twig_array_merge($context, ["attr" => ($context["attr"] ?? null)]));
        // line 181
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 184
    public function block_money_widget($context, array $blocks = [])
    {
        // line 185
        echo "<div class=\"input-group money-type\">
    ";
        // line 186
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 187
        echo "    ";
        if ( !($context["prepend"] ?? null)) {
            // line 188
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 189
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 192
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 193
        if (($context["prepend"] ?? null)) {
            // line 194
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 195
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 198
        echo "  </div>

  ";
        // line 200
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 203
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 204
        echo "<div class=\"input-group\">";
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 206
        echo "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
    }

    // line 212
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 213
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 214
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 216
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 217
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 218
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'errors');
            // line 219
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'errors');
            // line 220
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'widget', ["datetime" => true]);
            // line 221
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'widget', ["datetime" => true]);
            // line 222
            echo "</div>";
        }
    }

    // line 226
    public function block_url_widget($context, array $blocks = [])
    {
        // line 227
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 228
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 229
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 232
    public function block_date_widget($context, array $blocks = [])
    {
        // line 233
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 234
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 236
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 237
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 238
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 240
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 241
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 242
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 243
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')]);
            // line 245
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 246
                echo "</div>";
            }
        }
    }

    // line 251
    public function block_time_widget($context, array $blocks = [])
    {
        // line 252
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 253
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 255
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 256
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 257
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 259
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'widget');
            }
            // line 260
            echo "    ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 261
                echo "</div>";
            }
        }
    }

    // line 266
    public function block_email_widget($context, array $blocks = [])
    {
        // line 267
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 268
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 269
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 272
    public function block_button_widget($context, array $blocks = [])
    {
        // line 273
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 274
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 277
    public function block_icon_button_widget($context, array $blocks = [])
    {
        // line 278
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 279
        echo "  ";
        if ((($context["button_type"] ?? null) == "link")) {
            // line 280
            echo "    ";
            $context["buttonTag"] = "a";
            // line 281
            echo "    ";
            // line 282
            echo "    ";
            if ((($this->getAttribute(($context["attr"] ?? null), "disabled", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "disabled", []), false)) : (false))) {
                // line 283
                echo "      ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(($this->getAttribute(($context["attr"] ?? null), "class", []) . " disabled"))]);
                // line 284
                echo "    ";
            }
            // line 285
            echo "  ";
        } else {
            // line 286
            echo "    ";
            $context["buttonTag"] = "button";
            // line 287
            echo "    ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["type" => "button"]);
            // line 288
            echo "  ";
        }
        // line 289
        echo "
  <";
        // line 290
        echo twig_escape_filter($this->env, ($context["buttonTag"] ?? null), "html", null, true);
        echo " ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    <i class=\"material-icons\">";
        // line 291
        echo twig_escape_filter($this->env, ($context["button_icon"] ?? null), "html", null, true);
        echo "</i>
    ";
        // line 292
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "
  </";
        // line 293
        echo twig_escape_filter($this->env, ($context["buttonTag"] ?? null), "html", null, true);
        echo ">";
    }

    // line 296
    public function block_choice_widget($context, array $blocks = [])
    {
        // line 297
        $this->displayParentBlock("choice_widget", $context, $blocks);
        // line 298
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 301
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 302
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-select"))]);
        // line 303
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 306
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 307
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) {
            // line 308
            echo "<div class=\"control-group\">";
            // line 309
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 310
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 311
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 312
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 313
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "</div>";
        } else {
            // line 318
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 319
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 320
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 321
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 322
($context["choice_translation_domain"] ?? null), "valid" =>                 // line 323
($context["valid"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            echo "</div>";
        }
    }

    // line 330
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        // line 331
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 335
            echo "        ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "</ul>
  </div>";
    }

    // line 341
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        // line 342
        echo "<li>
    ";
        // line 343
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "submitted_values", [], "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", []), [], "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 344
        echo "    ";
        if (($context["multiple"] ?? null)) {
            // line 345
            echo "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 347
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
          ";
            // line 348
            if (($this->getAttribute(($context["child"] ?? null), "active", [], "any", true, true) && ($this->getAttribute(($context["child"] ?? null), "active", []) == 0))) {
                // line 349
                echo "            <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "</i>";
            } else {
                // line 351
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "
          ";
            }
            // line 353
            echo "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 354
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 356
            echo "        </label>
      </div>";
        } else {
            // line 359
            echo "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">
          ";
            // line 362
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
            echo "
          ";
            // line 363
            if (array_key_exists("defaultCategory", $context)) {
                // line 364
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 366
            echo "        </label>
      </div>";
        }
        // line 369
        echo "    ";
        if ($this->getAttribute(($context["child"] ?? null), "children", [], "any", true, true)) {
            // line 370
            echo "      <ul>
        ";
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? null), "children", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 372
                echo "          ";
                $context["child"] = $context["item"];
                // line 373
                echo "          ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 375
            echo "</ul>
    ";
        }
        // line 377
        echo "  </li>";
    }

    // line 380
    public function block_translatefields_widget($context, array $blocks = [])
    {
        // line 381
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"translations tabbable\" id=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
    ";
        // line 383
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 384
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 386
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 387
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
                echo "\" class=\"";
                if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
                echo "\">
              ";
                // line 388
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", [])), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "      </ul>
    ";
        }
        // line 394
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 396
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 397
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "valid", [])) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\">
          ";
            // line 398
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
          ";
            // line 399
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "    </div>
  </div>
";
    }

    // line 406
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        // line 407
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 408
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 410
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 413
    public function block_translate_text_widget($context, array $blocks = [])
    {
        // line 414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 416
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 417
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 418
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 419
            echo "
      ";
            // line 420
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 421
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 422
                echo "      ";
            }
            // line 424
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(($context["classes"] ?? null))]);
            // line 425
            $this->displayBlock("form_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 427
        echo "
    ";
        // line 428
        if ( !($context["hide_locales"] ?? null)) {
            // line 429
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 435
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 437
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 442
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 444
            echo "        </div>
      </div>
    ";
        }
        // line 447
        echo "  </div>";
    }

    // line 450
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        // line 451
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 454
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 455
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "label", []));
            // line 456
            echo "
      ";
            // line 457
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "name", []))) {
                // line 458
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 459
                echo "      ";
            }
            // line 460
            echo "
      <div class=\"";
            // line 461
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 462
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        echo "
    ";
        // line 466
        if (($context["show_locale_select"] ?? null)) {
            // line 467
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 473
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 475
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 478
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 479
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 480
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 481
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\"
            >
              ";
                // line 483
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            echo "        </div>
      </div>
    ";
        }
        // line 489
        echo "  </div>";
    }

    // line 492
    public function block_date_picker_widget($context, array $blocks = [])
    {
        // line 493
        echo "  ";
        ob_start(function () { return ''; });
        // line 494
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " datepicker"))]);
        // line 495
        echo "    <div class=\"input-group datepicker\">
      <input type=\"text\" class=\"form-control\" data-format=\"";
        // line 496
        echo twig_escape_filter($this->env, ($context["date_format"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    ";
        // line 503
        $this->displayBlock("form_help", $context, $blocks);
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 507
    public function block_date_range_widget($context, array $blocks = [])
    {
        // line 508
        echo "  ";
        ob_start(function () { return ''; });
        // line 509
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", []), 'widget');
        echo "
    ";
        // line 510
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", []), 'widget');
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 514
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        // line 515
        echo "  ";
        ob_start(function () { return ''; });
        // line 516
        echo "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button d-block float-right\"
            title=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            name=\"";
        // line 519
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
    ";
        // line 524
        if (($context["show_reset_button"] ?? null)) {
            // line 525
            echo "      <div class=\"js-grid-reset-button\">
        <div class=\"clearfix\"></div>
        <button type=\"reset\"
                name=\"";
            // line 528
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button float-right\"
                data-url=\"";
            // line 530
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                data-redirect=\"";
            // line 531
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
            // line 534
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      </div>
    ";
        }
        // line 538
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 541
    public function block_switch_widget($context, array $blocks = [])
    {
        // line 542
        echo "  ";
        ob_start(function () { return ''; });
        // line 543
        echo "  <div class=\"input-group\">
    <span class=\"ps-switch\">
        ";
        // line 545
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 546
            echo "          ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . $this->getAttribute($context["choice"], "value", []));
            // line 547
            echo "          <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\" ";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", []), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
          <label for=\"";
            // line 548
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "</label>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 550
        echo "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 554
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 557
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        // line 558
        echo "  <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
    <small>";
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 562
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 567
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-6\">";
        // line 568
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-2\">";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
          </thead>
          <tbody>";
        // line 573
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 574
            echo "            <tr>
              <td class=\"col-md-3\">";
            // line 575
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 576
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "file_name", [], "array"), "html", null, true);
            echo "</span></td>
              <td class=\"col-md-2\">";
            // line 577
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "mime", [], "array"), "html", null, true);
            echo "</td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        echo "</tbody>
        </table>
      </div>
    </div>
  </div>
";
    }

    // line 589
    public function block_choice_label($context, array $blocks = [])
    {
        // line 591
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 592
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 595
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 596
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 599
    public function block_radio_label($context, array $blocks = [])
    {
        // line 600
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 603
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 604
        echo "  ";
        // line 605
        echo "  ";
        if (array_key_exists("widget", $context)) {
            // line 606
            echo "    ";
            if (($context["required"] ?? null)) {
                // line 607
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
                // line 608
                echo "    ";
            }
            // line 609
            echo "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 610
                echo "      ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 611
                echo "    ";
            }
            // line 612
            echo "    ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 613
                echo "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 614
                echo "    ";
            }
            // line 615
            echo "
    ";
            // line 616
            if (($this->getAttribute(($context["block_prefixes"] ?? null), 2, [], "array") == "radio")) {
                // line 617
                echo "      <label class=\"form-check-label\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 618
                echo ($context["widget"] ?? null);
                // line 620
                echo "<i class=\"form-check-round\"></i>";
                // line 622
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 623
                echo "</label>
    ";
            } else {
                // line 625
                echo "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 626
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 627
                echo ($context["widget"] ?? null);
                // line 628
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 629
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 630
                echo "</label>
      </div>
    ";
            }
            // line 633
            echo "  ";
        }
    }

    // line 636
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 637
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : (""))));
        // line 638
        if (twig_in_filter("radio-custom", ($context["parent_label_class"] ?? null))) {
            // line 639
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-control-input"))]);
            // line 640
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 641
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 642
            echo "</div>";
        } else {
            // line 644
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-check-input"))]);
            // line 645
            echo "<div class=\"form-check form-check-radio form-radio";
            echo ((twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 646
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 647
            echo "</div>";
        }
    }

    // line 651
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 652
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : (""))));
        // line 653
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-check-input"))]);
        // line 654
        echo "<div class=\"form-check form-check-radio form-checkbox\">";
        // line 655
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" =>         $this->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 656
        echo "</div>";
    }

    // line 661
    public function block_form_errors($context, array $blocks = [])
    {
        // line 662
        if (($this->getAttribute(($context["attr"] ?? null), "fieldError", [], "array", true, true) && ($this->getAttribute(($context["attr"] ?? null), "fieldError", [], "array") == true))) {
            // line 663
            echo "    ";
            $this->displayBlock("form_errors_field", $context, $blocks);
            echo "
  ";
        } else {
            // line 665
            echo "    ";
            $this->displayBlock("form_errors_other", $context, $blocks);
            echo "
  ";
        }
    }

    // line 669
    public function block_form_errors_field($context, array $blocks = [])
    {
        // line 670
        echo "  ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 672
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 674
                $context["popoverContainer"] = ("popover-error-container-" . $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []));
                // line 675
                echo "      <div class=\"";
                echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                echo "\"></div>

      ";
                // line 677
                ob_start(function () { return ''; });
                // line 678
                echo "        <div class=\"popover-error-list\">
          <ul>";
                // line 680
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 681
                    echo "<li class=\"text-danger\"> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 682
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 683
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 684
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 685
                    echo "
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 688
                echo "          </ul>
        </div>
      ";
                $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 691
                echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 692
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\">
        ";
                // line 693
                echo twig_escape_filter($this->env, ($context["popoverErrorContent"] ?? null), "html", null, true);
                echo "
      </template>

      ";
                // line 696
                ob_start(function () { return ''; });
                // line 697
                echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                // line 699
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                // line 703
                echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                // line 705
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("%count% errors", twig_length_filter($this->env, ($context["errors"] ?? null)), [], "Admin.Global"), "html", null, true);
                echo "</u>
        </span>
      ";
                $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 708
                echo "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 711
                echo twig_escape_filter($this->env, ($context["errorPopover"] ?? null), "html", null, true);
                echo "
        </div>
      </div>

      ";
            } else {
                // line 717
                echo "<div class=\"d-inline-block text-danger align-top\">
        <i class=\"material-icons form-error-icon\">error_outline</i>
      </div>
      <div class=\"d-inline-block\">
        ";
                // line 721
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 722
                    echo "          <div class=\"text-danger\">
            <p> ";
                    // line 723
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 724
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 725
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 726
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 727
                    echo "
            </p>
          </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 731
                echo "</div>";
            }
        }
    }

    // line 736
    public function block_form_errors_other($context, array $blocks = [])
    {
        // line 737
        echo "  ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 738
            echo "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 743
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 744
                echo "            <p> ";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute(                // line 745
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                // line 746
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                // line 747
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                // line 748
                echo "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 751
            echo "</div>
    </div>
  ";
        }
    }

    // line 758
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        // line 759
        echo "  ";
        ob_start(function () { return ''; });
        // line 760
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input type=\"checkbox\" class=\"js-choice-table-select-all\">
                <i class=\"md-checkbox-control\"></i>
                ";
        // line 769
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 776
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 777
            echo "          <tr>
            <td>
              ";
            // line 779
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 783
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 789
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        // line 790
        echo "  ";
        ob_start(function () { return ''; });
        // line 791
        echo "    <div class=\"choice-table";
        if (($context["headers_fixed"] ?? null)) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
        // line 795
        echo twig_escape_filter($this->env, ($context["table_label"] ?? null), "html", null, true);
        echo "</th>
          ";
        // line 796
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 797
            echo "            <th class=\"text-center\">
              ";
            // line 798
            if (($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", []) && !twig_in_filter($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "name", []), ($context["headers_to_disable"] ?? null)))) {
                // line 799
                echo "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                // line 801
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) + 1), "html", null, true);
                echo "\"
                   data-column-checked=\"false\"
                >
                  ";
                // line 804
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
                </a>
              ";
            } else {
                // line 807
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
              ";
            }
            // line 809
            echo "            </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 811
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 814
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 815
            echo "          <tr>
            <td>
              ";
            // line 817
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 819
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 820
                echo "              <td class=\"text-center\">
                ";
                // line 821
                if ($this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true), $context["child_choice_name"], [], "array", true, true)) {
                    // line 822
                    echo "                  ";
                    $context["entry_index"] = $this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array"), $context["child_choice_name"], [], "array");
                    // line 823
                    echo "
                  ";
                    // line 824
                    if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", [])) {
                        // line 825
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 827
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget');
                        echo "
                  ";
                    }
                    // line 829
                    echo "                ";
                } else {
                    // line 830
                    echo "                  --
                ";
                }
                // line 832
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 834
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 836
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 843
    public function block_translatable_fields_with_tabs($context, array $blocks = [])
    {
        // line 844
        echo "  <div class=\"translations tabbable\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
    ";
        // line 845
        if (((($context["hide_locales"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 846
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 847
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 848
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 849
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
                echo "\" class=\"";
                if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
                echo "\">
              ";
                // line 850
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", [])), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 854
            echo "      </ul>
    ";
        }
        // line 856
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 858
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 859
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hide_locales"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "valid", [])) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
            echo "\">
          ";
            // line 860
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 863
        echo "    </div>
  </div>
";
    }

    // line 867
    public function block_translatable_fields_with_dropdown($context, array $blocks = [])
    {
        // line 868
        $context["formClass"] = twig_trim_filter(((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 869
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["formClass"] ?? null), "html", null, true);
        echo "\">
      ";
        // line 870
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 871
            echo "        ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 872
            echo "        ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 873
            echo "        ";
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 874
                echo "          ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 875
                echo "        ";
            }
            // line 876
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
          ";
            // line 877
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 880
        echo "      ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 881
            echo "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 885
            if (array_key_exists("change_form_language_url", $context)) {
                // line 886
                echo "              data-change-language-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "change_form_language_url", []), "html", null, true);
                echo "\"
            ";
            }
            // line 888
            echo "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 890
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
          >
            ";
            // line 892
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
          </button>
          <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 894
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
            ";
            // line 895
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 896
                echo "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 898
            echo "          </div>
        </div>
      ";
        }
        // line 901
        echo "    </div>";
    }

    // line 904
    public function block_translatable_widget($context, array $blocks = [])
    {
        // line 905
        if (($context["use_tabs"] ?? null)) {
            // line 906
            echo "    ";
            $this->displayBlock("translatable_fields_with_tabs", $context, $blocks);
            echo "
  ";
        } else {
            // line 908
            echo "    ";
            $this->displayBlock("translatable_fields_with_dropdown", $context, $blocks);
            echo "
  ";
        }
        // line 910
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 913
    public function block_birthday_widget($context, array $blocks = [])
    {
        // line 914
        echo "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 915
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 917
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 918
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 919
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 921
            echo "
    ";
            // line 922
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget')) . "</div>");
            // line 923
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget')) . "</div>");
            // line 924
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')) . "</div>");
            // line 926
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 927
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 928
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 929
($context["dayWidget"] ?? null)]);
            // line 932
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 933
                echo "</div>";
            }
        }
    }

    // line 938
    public function block_file_widget($context, array $blocks = [])
    {
        // line 939
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 941
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 945
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(        // line 946
($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->env->getExtension('PrestaShopBundle\Twig\ContextIsoCodeProviderExtension')->getIsoCode()]);
        // line 951
        if (($this->getAttribute(($context["attr"] ?? null), "disabled", [], "any", true, true) && $this->getAttribute(($context["attr"] ?? null), "disabled", []))) {
            // line 952
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($this->getAttribute(            // line 953
($context["attr"] ?? null), "class", []) . " disabled")]);
            // line 955
            echo "    ";
        }
        // line 956
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 958
        echo "<label class=\"custom-file-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
      ";
        // line 959
        $context["attributes"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []);
        // line 960
        echo "      ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["attributes"] ?? null), "placeholder", [], "any", true, true)) ? ($this->getAttribute(($context["attributes"] ?? null), "placeholder", [])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>";
        // line 963
        $this->displayBlock("form_help", $context, $blocks);
        // line 964
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "download_url", [])) {
            // line 965
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "download_url", []), "html", null, true);
            echo "\">
      ";
            // line 966
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download file", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  ";
        }
    }

    // line 971
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        // line 972
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "is_allowed_to_display", [])) {
            // line 973
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 975
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 976
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 978
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 979
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 980
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 988
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        // line 989
        echo "  <div class=\"input-group\">
    ";
        // line 990
        if (($context["compound"] ?? null)) {
            // line 991
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 993
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 995
        echo "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 998
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 999
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 1001
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
  ";
        // line 1005
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
    }

    // line 1008
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        // line 1009
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 1010
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1014
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 1015
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1017
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1019
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1021
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1024
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 1025
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1027
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 1029
        echo "
    </em>
  </small>
";
    }

    // line 1034
    public function block_text_with_length_counter_widget($context, array $blocks = [])
    {
        // line 1035
        echo "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1036
        $context["current_length"] = ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []) - twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", [])));
        // line 1037
        echo "
    ";
        // line 1038
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "position", []) == "before")) {
            // line 1039
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1040
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1043
        echo "
    ";
        // line 1044
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-max-length" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []), "maxlength" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "max_length", []), "class" => "js-countable-input"]);
        // line 1045
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ($context["input_attr"] ?? null));
        // line 1047
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "input", []) == "input")) {
            // line 1048
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } elseif (($this->getAttribute($this->getAttribute(        // line 1049
($context["form"] ?? null), "vars", []), "input", []) == "textarea")) {
            // line 1050
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1052
            $this->displayBlock("form_widget", $context, $blocks);
        }
        // line 1054
        echo "
    ";
        // line 1055
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "position", []) == "after")) {
            // line 1056
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1057
            echo twig_escape_filter($this->env, ($context["current_length"] ?? null), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1060
        echo "  </div>
";
    }

    // line 1063
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        // line 1064
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_field", [], "array"), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1065
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_field", [], "array"), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 1068
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        // line 1069
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_field", [], "array"), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1070
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_field", [], "array"), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 1073
    public function block_number_widget($context, array $blocks = [])
    {
        // line 1074
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 1075
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1076
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 1079
    public function block_integer_widget($context, array $blocks = [])
    {
        // line 1080
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 1081
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1082
        $this->displayBlock("form_help", $context, $blocks);
    }

    // line 1085
    public function block_form_help($context, array $blocks = [])
    {
        // line 1086
        echo "  ";
        if (($context["help"] ?? null)) {
            // line 1087
            echo "    <small class=\"form-text\">";
            echo ($context["help"] ?? null);
            echo "</small>
  ";
        }
        // line 1089
        echo "  ";
        if (array_key_exists("warning", $context)) {
            // line 1090
            echo "    ";
            echo twig_escape_filter($this->env, ($context["warning"] ?? null), "html", null, true);
            echo "
  ";
        }
    }

    // line 1094
    public function block_form_external_link($context, array $blocks = [])
    {
        // line 1095
        echo "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1096
            ob_start(function () { return ''; });
            // line 1097
            echo "<a ";
            $this->displayBlock("form_external_link_attributes", $context, $blocks);
            echo ">
        <i class=\"material-icons\">open_in_new</i>";
            $context["openingTag"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1101
            echo "<div class=\"small font-secondary";
            if (($this->getAttribute(($context["external_link"] ?? null), "align", []) === "right")) {
                echo " text-right";
            }
            echo "\">
      ";
            // line 1102
            echo twig_replace_filter($this->getAttribute(($context["external_link"] ?? null), "text", []), ["[1]" => ($context["openingTag"] ?? null), "[/1]" => "</a>"]);
            echo "
    </div>
  ";
        }
    }

    // line 1107
    public function block_form_external_link_attributes($context, array $blocks = [])
    {
        // line 1108
        $context["external_link_attr"] = twig_array_merge($this->getAttribute(($context["external_link"] ?? null), "attr", []), ["class" => twig_trim_filter(((($this->getAttribute($this->getAttribute(($context["external_link"] ?? null), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["external_link"] ?? null), "attr", [], "any", false, true), "class", []), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1109
        echo "
  ";
        // line 1110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["external_link_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1111
            echo "    ";
            if (!twig_in_filter($context["attrname"], [0 => "href", 1 => "class"])) {
                // line 1112
                echo "      ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"
    ";
            }
            // line 1114
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1115
        echo "
  target=\"_blank\"
  href=\"";
        // line 1117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["external_link"] ?? null), "href", []), "html", null, true);
        echo "\"
  class=\"";
        // line 1118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["external_link_attr"] ?? null), "class", []), "html", null, true);
        echo "\"";
    }

    // line 1121
    public function block_custom_content_widget($context, array $blocks = [])
    {
        // line 1122
        echo "  ";
        $this->loadTemplate(($context["template"] ?? null), "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 1122)->display(twig_array_merge($context, ($context["data"] ?? null)));
    }

    // line 1125
    public function block_text_widget($context, array $blocks = [])
    {
        // line 1126
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", [])], "Admin.Global")]);
        // line 1127
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1128
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 1130
        echo "
  ";
        // line 1131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

  ";
        // line 1133
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 1134
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 1135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1136
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1138
            echo "    </datalist>
  ";
        }
    }

    // line 1142
    public function block_form_prepend_alert($context, array $blocks = [])
    {
        // line 1143
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "prepend"))) {
            // line 1144
            $this->displayBlock("form_alert", $context, $blocks);
        }
    }

    // line 1148
    public function block_form_append_alert($context, array $blocks = [])
    {
        // line 1149
        if ((array_key_exists("alert_position", $context) && (($context["alert_position"] ?? null) == "append"))) {
            // line 1150
            $this->displayBlock("form_alert", $context, $blocks);
        }
    }

    // line 1154
    public function block_form_alert($context, array $blocks = [])
    {
        // line 1155
        if (array_key_exists("alert_message", $context)) {
            // line 1156
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["alert_type"] ?? null), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                echo " expandable-alert";
            }
            echo "\" role=\"alert\">
    ";
            // line 1157
            if (array_key_exists("alert_title", $context)) {
                // line 1158
                echo "      <p class=\"alert-text\">
        ";
                // line 1159
                echo ($context["alert_title"] ?? null);
                echo "
      </p>
    ";
            } else {
                // line 1162
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1163
                    echo "        <p class=\"alert-text\">
          ";
                    // line 1164
                    echo $context["message"];
                    echo "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1167
                echo "    ";
            }
            // line 1168
            echo "
    ";
            // line 1169
            if (array_key_exists("alert_title", $context)) {
                // line 1170
                echo "      <div class=\"alert-more collapse\" id=\"expandable_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\" style=\"\">
        ";
                // line 1171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alert_message"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1172
                    echo "          <p>
            ";
                    // line 1173
                    echo $context["message"];
                    echo "
          </p>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1176
                echo "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1178
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1179
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read more", [], "Admin.Actions"), "html", null, true);
                echo "
          </button>
       </div>
    ";
            }
            // line 1183
            echo "  </div>
  ";
        }
    }

    // line 1187
    public function block_unavailable_widget($context, array $blocks = [])
    {
        // line 1188
        echo "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not available yet", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </p>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  3175 => 1190,  3171 => 1188,  3168 => 1187,  3162 => 1183,  3155 => 1179,  3151 => 1178,  3147 => 1176,  3138 => 1173,  3135 => 1172,  3131 => 1171,  3126 => 1170,  3124 => 1169,  3121 => 1168,  3118 => 1167,  3109 => 1164,  3106 => 1163,  3101 => 1162,  3095 => 1159,  3092 => 1158,  3090 => 1157,  3082 => 1156,  3080 => 1155,  3077 => 1154,  3072 => 1150,  3070 => 1149,  3067 => 1148,  3062 => 1144,  3060 => 1143,  3057 => 1142,  3051 => 1138,  3042 => 1136,  3038 => 1135,  3033 => 1134,  3031 => 1133,  3026 => 1131,  3023 => 1130,  3020 => 1128,  3018 => 1127,  3016 => 1126,  3013 => 1125,  3008 => 1122,  3005 => 1121,  3000 => 1118,  2996 => 1117,  2992 => 1115,  2986 => 1114,  2978 => 1112,  2975 => 1111,  2971 => 1110,  2968 => 1109,  2966 => 1108,  2963 => 1107,  2955 => 1102,  2948 => 1101,  2942 => 1097,  2940 => 1096,  2937 => 1095,  2934 => 1094,  2926 => 1090,  2923 => 1089,  2917 => 1087,  2914 => 1086,  2911 => 1085,  2907 => 1082,  2905 => 1081,  2903 => 1080,  2900 => 1079,  2896 => 1076,  2894 => 1075,  2892 => 1074,  2889 => 1073,  2883 => 1070,  2878 => 1069,  2875 => 1068,  2869 => 1065,  2864 => 1064,  2861 => 1063,  2856 => 1060,  2850 => 1057,  2847 => 1056,  2845 => 1055,  2842 => 1054,  2839 => 1052,  2836 => 1050,  2834 => 1049,  2832 => 1048,  2830 => 1047,  2828 => 1045,  2826 => 1044,  2823 => 1043,  2817 => 1040,  2814 => 1039,  2812 => 1038,  2809 => 1037,  2807 => 1036,  2804 => 1035,  2801 => 1034,  2794 => 1029,  2792 => 1027,  2791 => 1025,  2790 => 1024,  2784 => 1021,  2780 => 1019,  2777 => 1017,  2774 => 1015,  2772 => 1014,  2770 => 1010,  2768 => 1009,  2765 => 1008,  2759 => 1005,  2752 => 1001,  2747 => 999,  2743 => 998,  2738 => 995,  2735 => 993,  2732 => 991,  2730 => 990,  2727 => 989,  2724 => 988,  2713 => 980,  2709 => 979,  2705 => 978,  2701 => 976,  2699 => 975,  2695 => 973,  2692 => 972,  2689 => 971,  2681 => 966,  2676 => 965,  2674 => 964,  2672 => 963,  2666 => 960,  2664 => 959,  2659 => 958,  2657 => 956,  2654 => 955,  2652 => 953,  2650 => 952,  2648 => 951,  2646 => 946,  2645 => 945,  2638 => 941,  2634 => 939,  2631 => 938,  2625 => 933,  2623 => 932,  2621 => 929,  2620 => 928,  2619 => 927,  2618 => 926,  2615 => 924,  2612 => 923,  2610 => 922,  2607 => 921,  2602 => 919,  2600 => 918,  2598 => 917,  2595 => 915,  2592 => 914,  2589 => 913,  2584 => 910,  2578 => 908,  2572 => 906,  2570 => 905,  2567 => 904,  2563 => 901,  2558 => 898,  2547 => 896,  2543 => 895,  2539 => 894,  2534 => 892,  2529 => 890,  2525 => 888,  2519 => 886,  2517 => 885,  2511 => 881,  2508 => 880,  2499 => 877,  2494 => 876,  2491 => 875,  2488 => 874,  2485 => 873,  2482 => 872,  2479 => 871,  2475 => 870,  2470 => 869,  2468 => 868,  2465 => 867,  2459 => 863,  2450 => 860,  2429 => 859,  2425 => 858,  2421 => 856,  2417 => 854,  2407 => 850,  2397 => 849,  2394 => 848,  2390 => 847,  2387 => 846,  2385 => 845,  2380 => 844,  2377 => 843,  2369 => 836,  2362 => 834,  2355 => 832,  2351 => 830,  2348 => 829,  2342 => 827,  2336 => 825,  2334 => 824,  2331 => 823,  2328 => 822,  2326 => 821,  2323 => 820,  2319 => 819,  2314 => 817,  2310 => 815,  2306 => 814,  2301 => 811,  2286 => 809,  2280 => 807,  2274 => 804,  2268 => 801,  2264 => 799,  2262 => 798,  2259 => 797,  2242 => 796,  2238 => 795,  2228 => 791,  2225 => 790,  2222 => 789,  2214 => 783,  2204 => 779,  2200 => 777,  2196 => 776,  2186 => 769,  2175 => 760,  2172 => 759,  2169 => 758,  2162 => 751,  2155 => 748,  2153 => 747,  2152 => 746,  2151 => 745,  2149 => 744,  2145 => 743,  2138 => 738,  2135 => 737,  2132 => 736,  2126 => 731,  2118 => 727,  2116 => 726,  2115 => 725,  2114 => 724,  2113 => 723,  2110 => 722,  2106 => 721,  2100 => 717,  2092 => 711,  2087 => 708,  2081 => 705,  2076 => 703,  2069 => 699,  2065 => 697,  2063 => 696,  2057 => 693,  2053 => 692,  2050 => 691,  2045 => 688,  2037 => 685,  2035 => 684,  2034 => 683,  2033 => 682,  2031 => 681,  2027 => 680,  2024 => 678,  2022 => 677,  2016 => 675,  2014 => 674,  2012 => 672,  2009 => 670,  2006 => 669,  1998 => 665,  1992 => 663,  1990 => 662,  1987 => 661,  1983 => 656,  1981 => 655,  1979 => 654,  1977 => 653,  1975 => 652,  1972 => 651,  1967 => 647,  1965 => 646,  1961 => 645,  1959 => 644,  1956 => 642,  1954 => 641,  1950 => 640,  1948 => 639,  1946 => 638,  1944 => 637,  1941 => 636,  1936 => 633,  1931 => 630,  1929 => 629,  1927 => 628,  1925 => 627,  1911 => 626,  1908 => 625,  1904 => 623,  1902 => 622,  1900 => 620,  1898 => 618,  1883 => 617,  1881 => 616,  1878 => 615,  1875 => 614,  1872 => 613,  1869 => 612,  1866 => 611,  1863 => 610,  1860 => 609,  1857 => 608,  1854 => 607,  1851 => 606,  1848 => 605,  1846 => 604,  1843 => 603,  1839 => 600,  1836 => 599,  1832 => 596,  1829 => 595,  1825 => 592,  1823 => 591,  1820 => 589,  1811 => 580,  1794 => 577,  1790 => 576,  1786 => 575,  1783 => 574,  1766 => 573,  1760 => 569,  1756 => 568,  1752 => 567,  1744 => 562,  1738 => 559,  1733 => 558,  1730 => 557,  1726 => 554,  1720 => 550,  1702 => 548,  1684 => 547,  1681 => 546,  1664 => 545,  1660 => 543,  1657 => 542,  1654 => 541,  1649 => 538,  1642 => 534,  1636 => 531,  1632 => 530,  1627 => 528,  1622 => 525,  1620 => 524,  1615 => 522,  1609 => 519,  1605 => 518,  1601 => 516,  1598 => 515,  1595 => 514,  1588 => 510,  1583 => 509,  1580 => 508,  1577 => 507,  1570 => 503,  1552 => 496,  1549 => 495,  1546 => 494,  1543 => 493,  1540 => 492,  1536 => 489,  1531 => 486,  1522 => 483,  1517 => 481,  1514 => 480,  1510 => 479,  1506 => 478,  1500 => 475,  1495 => 473,  1487 => 467,  1485 => 466,  1482 => 465,  1473 => 462,  1469 => 461,  1466 => 460,  1463 => 459,  1460 => 458,  1458 => 457,  1455 => 456,  1452 => 455,  1449 => 454,  1445 => 453,  1440 => 451,  1437 => 450,  1433 => 447,  1428 => 444,  1417 => 442,  1413 => 441,  1409 => 440,  1403 => 437,  1398 => 435,  1390 => 429,  1388 => 428,  1385 => 427,  1369 => 425,  1367 => 424,  1364 => 422,  1361 => 421,  1359 => 420,  1356 => 419,  1353 => 418,  1350 => 417,  1333 => 416,  1328 => 414,  1325 => 413,  1321 => 410,  1318 => 408,  1316 => 407,  1313 => 406,  1307 => 402,  1298 => 399,  1294 => 398,  1273 => 397,  1269 => 396,  1265 => 394,  1261 => 392,  1251 => 388,  1241 => 387,  1238 => 386,  1234 => 385,  1231 => 384,  1229 => 383,  1225 => 382,  1220 => 381,  1217 => 380,  1213 => 377,  1209 => 375,  1192 => 373,  1189 => 372,  1172 => 371,  1169 => 370,  1166 => 369,  1162 => 366,  1156 => 364,  1154 => 363,  1150 => 362,  1142 => 361,  1138 => 359,  1134 => 356,  1128 => 354,  1125 => 353,  1120 => 351,  1115 => 349,  1113 => 348,  1105 => 347,  1101 => 345,  1098 => 344,  1096 => 343,  1093 => 342,  1090 => 341,  1085 => 337,  1068 => 335,  1051 => 334,  1048 => 333,  1042 => 331,  1039 => 330,  1034 => 326,  1028 => 323,  1027 => 322,  1026 => 321,  1025 => 320,  1021 => 319,  1017 => 318,  1014 => 316,  1008 => 313,  1007 => 312,  1006 => 311,  1005 => 310,  1001 => 309,  999 => 308,  997 => 307,  994 => 306,  990 => 303,  988 => 302,  985 => 301,  979 => 298,  977 => 297,  974 => 296,  969 => 293,  965 => 292,  961 => 291,  955 => 290,  952 => 289,  949 => 288,  946 => 287,  943 => 286,  940 => 285,  937 => 284,  934 => 283,  931 => 282,  929 => 281,  926 => 280,  923 => 279,  921 => 278,  918 => 277,  914 => 274,  912 => 273,  909 => 272,  905 => 269,  901 => 268,  899 => 267,  896 => 266,  890 => 261,  887 => 260,  879 => 259,  874 => 257,  872 => 256,  870 => 255,  867 => 253,  865 => 252,  862 => 251,  856 => 246,  854 => 245,  852 => 243,  851 => 242,  850 => 241,  849 => 240,  844 => 238,  842 => 237,  840 => 236,  837 => 234,  835 => 233,  832 => 232,  828 => 229,  824 => 228,  822 => 227,  819 => 226,  814 => 222,  812 => 221,  810 => 220,  808 => 219,  806 => 218,  802 => 217,  800 => 216,  797 => 214,  795 => 213,  792 => 212,  785 => 206,  783 => 205,  781 => 204,  778 => 203,  774 => 200,  770 => 198,  764 => 195,  761 => 194,  759 => 193,  757 => 192,  751 => 189,  748 => 188,  745 => 187,  743 => 186,  740 => 185,  737 => 184,  732 => 181,  730 => 180,  728 => 179,  726 => 178,  723 => 177,  714 => 170,  712 => 169,  707 => 168,  704 => 167,  701 => 166,  698 => 165,  695 => 164,  693 => 163,  690 => 162,  685 => 160,  680 => 159,  677 => 158,  675 => 157,  670 => 156,  666 => 154,  664 => 153,  647 => 152,  645 => 151,  641 => 147,  638 => 144,  637 => 143,  636 => 142,  634 => 141,  631 => 140,  628 => 138,  625 => 137,  622 => 135,  620 => 134,  618 => 133,  615 => 132,  606 => 125,  603 => 124,  600 => 123,  597 => 122,  594 => 121,  591 => 120,  588 => 119,  585 => 118,  582 => 117,  579 => 116,  576 => 115,  574 => 114,  571 => 113,  568 => 112,  566 => 111,  563 => 110,  557 => 106,  555 => 105,  551 => 103,  549 => 102,  547 => 101,  545 => 99,  543 => 98,  541 => 96,  539 => 95,  528 => 94,  525 => 93,  519 => 88,  513 => 85,  508 => 84,  506 => 83,  504 => 82,  501 => 81,  495 => 78,  492 => 77,  486 => 74,  483 => 73,  481 => 72,  479 => 71,  477 => 70,  474 => 69,  470 => 66,  466 => 65,  463 => 64,  459 => 61,  456 => 60,  453 => 59,  450 => 58,  448 => 57,  445 => 56,  441 => 1187,  439 => 1154,  437 => 1148,  435 => 1142,  433 => 1125,  430 => 1124,  428 => 1121,  426 => 1107,  424 => 1094,  421 => 1093,  419 => 1085,  417 => 1079,  415 => 1073,  413 => 1068,  410 => 1067,  408 => 1063,  405 => 1062,  403 => 1034,  400 => 1033,  398 => 1008,  395 => 1007,  393 => 988,  390 => 987,  388 => 971,  385 => 970,  383 => 938,  380 => 937,  378 => 913,  375 => 912,  373 => 904,  370 => 903,  368 => 867,  365 => 866,  363 => 843,  360 => 841,  358 => 789,  355 => 788,  353 => 758,  350 => 757,  347 => 755,  345 => 736,  342 => 735,  340 => 669,  337 => 668,  335 => 661,  332 => 660,  329 => 658,  327 => 651,  324 => 650,  322 => 636,  319 => 635,  317 => 603,  314 => 602,  312 => 599,  309 => 598,  307 => 595,  304 => 594,  302 => 589,  299 => 588,  296 => 586,  294 => 557,  291 => 556,  289 => 541,  286 => 540,  284 => 514,  281 => 513,  279 => 507,  276 => 506,  274 => 492,  271 => 491,  269 => 450,  266 => 449,  264 => 413,  261 => 412,  259 => 406,  256 => 405,  254 => 380,  251 => 379,  249 => 341,  246 => 340,  244 => 330,  241 => 329,  239 => 306,  236 => 305,  234 => 301,  231 => 300,  229 => 296,  226 => 295,  224 => 277,  221 => 276,  219 => 272,  217 => 266,  215 => 251,  212 => 250,  210 => 232,  208 => 226,  206 => 212,  203 => 211,  201 => 203,  198 => 202,  196 => 184,  193 => 183,  191 => 177,  188 => 176,  186 => 132,  183 => 129,  181 => 110,  178 => 109,  176 => 93,  173 => 92,  170 => 90,  168 => 81,  165 => 80,  163 => 69,  161 => 64,  159 => 56,  156 => 53,  153 => 51,  150 => 46,  147 => 34,  144 => 25,  58 => 50,  51 => 49,  44 => 48,  25 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig");
    }
}
