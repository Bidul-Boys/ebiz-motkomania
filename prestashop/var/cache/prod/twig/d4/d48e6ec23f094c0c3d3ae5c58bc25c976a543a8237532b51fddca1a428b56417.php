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

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_9d411d3688cfde4a8fffda670f522d46e1ea5fa1e00bcd0a1ae07d059c0c02a3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.', 25, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 26, $this->getSourceContext());
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 27);
        // line 27
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 27, $this->getSourceContext());
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 28);
        // line 28
        if (!$_trait_3->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig".'" cannot be used as a trait.', 28, $this->getSourceContext());
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
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'color_picker_widget' => [$this, 'block_color_picker_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'form_help' => [$this, 'block_form_help'],
                'form_hint' => [$this, 'block_form_hint'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 29
        echo "
";
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('button_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('money_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('date_widget', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('time_widget', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 248
        echo "
";
        // line 249
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 293
        echo "
";
        // line 294
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 335
        echo "
";
        // line 336
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 350
        echo "
";
        // line 351
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 357
        echo "
";
        // line 358
        $this->displayBlock('color_picker_widget', $context, $blocks);
        // line 366
        echo "
";
        // line 367
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 393
        echo "
";
        // line 394
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 406
        echo "
";
        // line 407
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 436
        echo "
";
        // line 438
        echo "
";
        // line 439
        $this->displayBlock('form_label', $context, $blocks);
        // line 442
        echo "
";
        // line 443
        $this->displayBlock('choice_label', $context, $blocks);
        // line 448
        echo "
";
        // line 449
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 452
        echo "
";
        // line 453
        $this->displayBlock('radio_label', $context, $blocks);
        // line 456
        echo "
";
        // line 457
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 486
        echo "
";
        // line 488
        echo "
";
        // line 489
        $this->displayBlock('form_row', $context, $blocks);
        // line 496
        echo "
";
        // line 497
        $this->displayBlock('button_row', $context, $blocks);
        // line 502
        echo "
";
        // line 503
        $this->displayBlock('choice_row', $context, $blocks);
        // line 507
        echo "
";
        // line 508
        $this->displayBlock('date_row', $context, $blocks);
        // line 512
        echo "
";
        // line 513
        $this->displayBlock('time_row', $context, $blocks);
        // line 517
        echo "
";
        // line 518
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 522
        echo "
";
        // line 523
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 529
        echo "
";
        // line 530
        $this->displayBlock('radio_row', $context, $blocks);
        // line 536
        echo "
";
        // line 538
        echo "
";
        // line 539
        $this->displayBlock('form_errors', $context, $blocks);
        // line 568
        echo "

";
        // line 571
        echo "
";
        // line 572
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 602
        echo "
";
        // line 603
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 655
        echo "
";
        // line 656
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 692
        echo "
";
        // line 693
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 717
        echo "
";
        // line 718
        $this->displayBlock('file_widget', $context, $blocks);
        // line 745
        echo "
";
        // line 746
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 762
        echo "
";
        // line 763
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 777
        echo "
";
        // line 778
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 803
        echo "
";
        // line 804
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 808
        echo "
";
        // line 809
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 813
        echo "
";
        // line 814
        $this->displayBlock('form_help', $context, $blocks);
        // line 819
        echo "
";
        // line 820
        $this->displayBlock('form_hint', $context, $blocks);
        // line 827
        echo "
";
        // line 828
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 831
        echo "
";
        // line 832
        $this->displayBlock('text_widget', $context, $blocks);
        // line 848
        echo "
";
        // line 849
        $this->displayBlock('submittable_input_widget', $context, $blocks);
    }

    // line 32
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 33
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 34
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 36
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 39
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 40
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        // line 41
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 44
    public function block_button_widget($context, array $blocks = [])
    {
        // line 45
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 46
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 49
    public function block_money_widget($context, array $blocks = [])
    {
        // line 50
        echo "<div class=\"input-group money-type\">
        ";
        // line 51
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 52
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 53
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 54
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 57
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 58
        if (($context["prepend"] ?? null)) {
            // line 59
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 60
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 63
        echo "    </div>";
    }

    // line 66
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 67
        echo "<div class=\"input-group\">";
        // line 68
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 69
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 75
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 76
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 80
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'errors');
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'errors');
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'widget', ["datetime" => true]);
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'widget', ["datetime" => true]);
            // line 85
            echo "</div>";
        }
    }

    // line 89
    public function block_date_widget($context, array $blocks = [])
    {
        // line 90
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 91
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 93
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 94
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 95
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 97
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 99
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 100
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')]);
            // line 102
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 103
                echo "</div>";
            }
        }
    }

    // line 108
    public function block_time_widget($context, array $blocks = [])
    {
        // line 109
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 113
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 114
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 116
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'widget');
            }
            // line 117
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 118
                echo "</div>";
            }
        }
    }

    // line 123
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 124
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-select"))]);
        // line 125
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", [])], "Admin.Global")]);
        // line 126
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 130
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) {
            // line 131
            echo "<div class=\"control-group\">";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 133
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 134
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 135
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "</div>";
        } else {
            // line 140
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 142
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 143
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 144
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "</div>";
        }
    }

    // line 151
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 152
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 153
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 156
            echo "<div class=\"checkbox\">";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 158
            echo "</div>";
        }
    }

    // line 162
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 163
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 164
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 167
            echo "<div class=\"radio form-check form-check-radio\">";
            // line 168
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 169
            echo "</div>";
        }
    }

    // line 173
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        // line 174
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 177
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
            // line 178
            echo "            ";
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
        // line 180
        echo "</ul>
    </div>";
    }

    // line 184
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        // line 185
        echo "<li";
        if ((array_key_exists("defaultHidden", $context) && (($context["defaultHidden"] ?? null) === true))) {
            echo " class=\"more\"";
        }
        echo ">
        ";
        // line 186
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "submitted_values", [], "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", []), [], "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 187
        echo "        ";
        if (($context["multiple"] ?? null)) {
            // line 188
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">
                    ";
            // line 191
            if (($this->getAttribute(($context["child"] ?? null), "active", [], "any", true, true) && ($this->getAttribute(($context["child"] ?? null), "active", []) == 0))) {
                // line 192
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "</i>";
            } else {
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
                echo "
                    ";
            }
            // line 196
            echo "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 197
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 199
            echo "                </label>
            </div>";
        } else {
            // line 202
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\"";
            if (($context["required"] ?? null)) {
                echo " required";
            }
            echo ">
                    ";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", []), "html", null, true);
            echo "
                    ";
            // line 206
            if (array_key_exists("defaultCategory", $context)) {
                // line 207
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", []), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 209
            echo "                </label>
            </div>";
        }
        // line 212
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", [], "any", true, true)) {
            // line 213
            echo "            <ul";
            if ((array_key_exists("defaultHidden", $context) && (($context["defaultHidden"] ?? null) === true))) {
                echo " style=\"display: none;\"";
            }
            echo ">
                ";
            // line 214
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
                // line 215
                echo "                    ";
                $context["child"] = $context["item"];
                // line 216
                echo "                    ";
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
            // line 218
            echo "</ul>
        ";
        }
        // line 220
        echo "    </li>";
    }

    // line 223
    public function block_translatefields_widget($context, array $blocks = [])
    {
        // line 224
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
        ";
        // line 226
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 227
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 229
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" data-locale=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", []), "html", null, true);
                echo "\" class=\"";
                if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", []) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "name", []))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "id", []), "html", null, true);
                echo "\">
                        ";
                // line 231
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", []), "label", [])), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "        </ul>
        ";
        }
        // line 237
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 240
            echo "                <div data-locale=\"";
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
            // line 241
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 242
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "        </div>
    </div>
";
    }

    // line 249
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        // line 250
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? null)))) {
            // line 251
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 253
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 256
    public function block_translate_text_widget($context, array $blocks = [])
    {
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 260
            echo "            ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 261
            echo "            ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 262
            echo "
            ";
            // line 263
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 264
                echo "                ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 265
                echo "            ";
            }
            // line 266
            echo "
            ";
            // line 267
            $context["attr"] = $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "attr", []);
            // line 268
            echo "
            ";
            // line 269
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "
        ";
        // line 272
        if ( !($context["hide_locales"] ?? null)) {
            // line 273
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
            >
                ";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
                ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 286
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "            </div>
        </div>
        ";
        }
        // line 291
        echo "    </div>";
    }

    // line 294
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 298
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["textarea"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 299
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "label", []));
            // line 300
            echo "
      ";
            // line 301
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["textarea"], "vars", []), "name", []))) {
                // line 302
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 303
                echo "      ";
            }
            // line 304
            echo "
      <div class=\"";
            // line 305
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 306
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter(($context["classes"] ?? null))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "
    ";
        // line 310
        if (($context["show_locale_select"] ?? null)) {
            // line 311
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 319
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 322
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 323
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 324
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 325
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", []), "html", null, true);
                echo "\"
            >
              ";
                // line 327
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", []), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "        </div>
      </div>
    ";
        }
        // line 333
        echo "  </div>";
    }

    // line 336
    public function block_date_picker_widget($context, array $blocks = [])
    {
        // line 337
        echo "  ";
        ob_start(function () { return ''; });
        // line 338
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " datepicker"))]);
        // line 339
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", [])], "Admin.Global")]);
        // line 340
        echo "<div class=\"input-group datepicker\">
      <input type=\"text\" class=\"form-control\" data-format=\"";
        // line 341
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
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 351
    public function block_date_range_widget($context, array $blocks = [])
    {
        // line 352
        echo "  ";
        ob_start(function () { return ''; });
        // line 353
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", []), 'widget');
        echo "
    ";
        // line 354
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", []), 'widget');
        echo "
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 358
    public function block_color_picker_widget($context, array $blocks = [])
    {
        // line 359
        echo "  ";
        ob_start(function () { return ''; });
        // line 360
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " colorpicker"))]);
        // line 361
        echo "    <div class=\"input-group colorpicker\">
      <input type=\"text\" class=\"form-control\" ";
        // line 362
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 367
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        // line 368
        echo "    ";
        ob_start(function () { return ''; });
        // line 369
        echo "        <button type=\"submit\"
                class=\"btn btn-primary grid-search-button d-block float-right\"
                title=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
                name=\"";
        // line 372
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
        >
          <i class=\"material-icons\">search</i>
          ";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      ";
        // line 377
        if (($context["show_reset_button"] ?? null)) {
            // line 378
            echo "          <div class=\"js-grid-reset-button\">
          <div class=\"clearfix\"></div>
            <button type=\"reset\"
                    name=\"";
            // line 381
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block grid-reset-button float-right\"
                    data-url=\"";
            // line 383
            echo twig_escape_filter($this->env, ($context["reset_url"] ?? null), "html", null, true);
            echo "\"
                    data-redirect=\"";
            // line 384
            echo twig_escape_filter($this->env, ($context["redirect_url"] ?? null), "html", null, true);
            echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
            // line 387
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
            </button>
          </div>
      ";
        }
        // line 391
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 394
    public function block_switch_widget($context, array $blocks = [])
    {
        // line 395
        echo "    ";
        ob_start(function () { return ''; });
        // line 396
        echo "    <span class=\"ps-switch\">
        ";
        // line 397
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
            // line 398
            echo "            ";
            $context["inputId"] = ((($context["id"] ?? null) . "_") . $this->getAttribute($context["choice"], "value", []));
            // line 399
            echo "            <input id=\"";
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
            echo "type=\"radio\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", []), [], ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "\">
            <label for=\"";
            // line 400
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
        // line 402
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 407
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        // line 408
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 412
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\">";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 423
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
            // line 424
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 425
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 426
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "data", []), $this->getAttribute($context["loop"], "index0", []), [], "array"), "file_name", [], "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 427
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
        // line 430
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
    }

    // line 439
    public function block_form_label($context, array $blocks = [])
    {
        // line 440
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 443
    public function block_choice_label($context, array $blocks = [])
    {
        // line 445
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 446
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 449
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 450
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 453
    public function block_radio_label($context, array $blocks = [])
    {
        // line 454
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 457
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 458
        echo "    ";
        // line 459
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 460
            echo "      ";
            if (($context["required"] ?? null)) {
                // line 461
                echo "        ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
                // line 462
                echo "      ";
            }
            // line 463
            echo "      ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 464
                echo "          ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 465
                echo "      ";
            }
            // line 466
            echo "      ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 467
                echo "          ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 468
                echo "      ";
            }
            // line 469
            echo "
      ";
            // line 470
            if ((array_key_exists("material_design", $context) || $this->getAttribute(($context["attr"] ?? null), "material_design", [], "any", true, true))) {
                // line 471
                echo "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 472
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
                // line 473
                echo ($context["widget"] ?? null);
                // line 474
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 475
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 476
                echo "</label>
        </div>
      ";
            } else {
                // line 479
                echo "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    if (($context["attrname"] === "class")) {
                        echo " form-check-label";
                    }
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                if ((twig_length_filter($this->env, ($context["label_attr"] ?? null)) <= 0)) {
                    echo " class=\"form-check-label\"";
                }
                echo ">";
                // line 480
                echo ($context["widget"] ?? null);
                // line 481
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 482
                echo "</label>
      ";
            }
            // line 484
            echo "    ";
        }
    }

    // line 489
    public function block_form_row($context, array $blocks = [])
    {
        // line 490
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 491
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 492
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 493
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 494
        echo "</div>";
    }

    // line 497
    public function block_button_row($context, array $blocks = [])
    {
        // line 498
        echo "<div class=\"form-group\">";
        // line 499
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 500
        echo "</div>";
    }

    // line 503
    public function block_choice_row($context, array $blocks = [])
    {
        // line 504
        $context["force_error"] = true;
        // line 505
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 508
    public function block_date_row($context, array $blocks = [])
    {
        // line 509
        $context["force_error"] = true;
        // line 510
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 513
    public function block_time_row($context, array $blocks = [])
    {
        // line 514
        $context["force_error"] = true;
        // line 515
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 518
    public function block_datetime_row($context, array $blocks = [])
    {
        // line 519
        $context["force_error"] = true;
        // line 520
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 523
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 524
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 525
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 526
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 527
        echo "</div>";
    }

    // line 530
    public function block_radio_row($context, array $blocks = [])
    {
        // line 531
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 532
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 533
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 534
        echo "</div>";
    }

    // line 539
    public function block_form_errors($context, array $blocks = [])
    {
        // line 540
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 541
            echo "<div class=\"alert alert-danger\">";
            // line 542
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 543
                echo "<ul class=\"alert-text\">";
                // line 544
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 545
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 546
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 547
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 548
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 549
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 552
                echo "</ul>";
            } else {
                // line 554
                echo "<div class=\"alert-text\">";
                // line 555
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 556
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 557
$context["error"], "messagePluralization", []))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 558
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 559
$context["error"], "messageTemplate", []), $this->getAttribute($context["error"], "messagePluralization", []), $this->getAttribute($context["error"], "messageParameters", []), "form_error"))), "html", null, true);
                    // line 560
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 563
                echo "</div>";
            }
            // line 565
            echo "</div>";
        }
    }

    // line 572
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        // line 573
        echo "  ";
        ob_start(function () { return ''; });
        // line 574
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
        // line 583
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 590
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 591
            echo "          <tr>
            <td>
              ";
            // line 593
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 597
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 603
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        // line 604
        echo "  ";
        ob_start(function () { return ''; });
        // line 605
        echo "    <div class=\"choice-table";
        if (($context["headers_fixed"] ?? null)) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
        // line 609
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</th>
            ";
        // line 610
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
            // line 611
            echo "              <th class=\"text-center\">
                ";
            // line 612
            if (($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", []) && !twig_in_filter($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "name", []), ($context["headers_to_disable"] ?? null)))) {
                // line 613
                echo "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                // line 615
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", []) + 1), "html", null, true);
                echo "\"
                     data-column-checked=\"false\"
                  >
                    ";
                // line 618
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
                  </a>
                ";
            } else {
                // line 621
                echo "                  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "label", []), "html", null, true);
                echo "
                ";
            }
            // line 623
            echo "              </th>
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
        // line 625
        echo "          </tr>
        </thead>
        <tbody>
        ";
        // line 628
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 629
            echo "          <tr>
            <td>
              ";
            // line 631
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 633
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 634
                echo "              <td class=\"text-center\">
                ";
                // line 635
                if ($this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true), $context["child_choice_name"], [], "array", true, true)) {
                    // line 636
                    echo "                  ";
                    $context["entry_index"] = $this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array"), $context["child_choice_name"], [], "array");
                    // line 637
                    echo "
                  ";
                    // line 638
                    if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", []), "multiple", [])) {
                        // line 639
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 641
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), [], "array"), 'widget');
                        echo "
                  ";
                    }
                    // line 643
                    echo "                ";
                } else {
                    // line 644
                    echo "                  --
                ";
                }
                // line 646
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 648
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 650
        echo "        </tbody>
      </table>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 656
    public function block_translatable_widget($context, array $blocks = [])
    {
        // line 657
        $context["formClass"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . twig_trim_filter(" input-group locale-input-group js-locale-input-group d-flex"));
        // line 658
        echo "  <div class=\"";
        echo twig_escape_filter($this->env, ($context["formClass"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 659
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 660
            echo "      ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", [], "any", false, true), "attr", [], "any", false, true), "class", []), "")) : ("")) . " js-locale-input");
            // line 661
            echo "      ";
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "label", []));
            // line 662
            echo "      ";
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", []) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", []), "name", []))) {
                // line 663
                echo "        ";
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
                // line 664
                echo "      ";
            }
            // line 665
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
        ";
            // line 666
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 669
        echo "    ";
        if ( !($context["hide_locales"] ?? null)) {
            // line 670
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                ";
            // line 674
            if (array_key_exists("change_form_language_url", $context)) {
                // line 675
                echo "                  data-change-language-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "change_form_language_url", []), "html", null, true);
                echo "\"
                ";
            }
            // line 677
            echo "                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 679
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\"
        >
          ";
            // line 681
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []), "iso_code", []), "html", null, true);
            echo "
        </button>
        <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 683
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
            echo "\">
          ";
            // line 684
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 685
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
            // line 687
            echo "        </div>
      </div>
    ";
        }
        // line 690
        echo "  </div>";
    }

    // line 693
    public function block_birthday_widget($context, array $blocks = [])
    {
        // line 694
        echo "  ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 695
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 697
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 698
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 699
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 701
            echo "
    ";
            // line 702
            $context["yearWidget"] = (("<div class=\"col pl-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget')) . "</div>");
            // line 703
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget')) . "</div>");
            // line 704
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')) . "</div>");
            // line 706
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 707
($context["yearWidget"] ?? null), "{{ month }}" =>             // line 708
($context["monthWidget"] ?? null), "{{ day }}" =>             // line 709
($context["dayWidget"] ?? null)]);
            // line 712
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 713
                echo "</div>";
            }
        }
    }

    // line 718
    public function block_file_widget($context, array $blocks = [])
    {
        // line 719
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 721
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 725
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(        // line 726
($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->env->getExtension('PrestaShopBundle\Twig\ContextIsoCodeProviderExtension')->getIsoCode()]);
        // line 731
        if (($this->getAttribute(($context["attr"] ?? null), "disabled", [], "any", true, true) && $this->getAttribute(($context["attr"] ?? null), "disabled", []))) {
            // line 732
            echo "      ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ($this->getAttribute(            // line 733
($context["attr"] ?? null), "class", []) . " disabled")]);
            // line 735
            echo "    ";
        }
        // line 736
        echo "
    ";
        // line 737
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

    <label class=\"custom-file-label\" for=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
      ";
        // line 740
        $context["attributes"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []);
        // line 741
        echo "      ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["attributes"] ?? null), "placeholder", [], "any", true, true)) ? ($this->getAttribute(($context["attributes"] ?? null), "placeholder", [])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>
";
    }

    // line 746
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        // line 747
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []), "is_allowed_to_display", [])) {
            // line 748
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 750
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "checkbox")) : ("checkbox"));
            // line 751
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 753
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\"
          ";
            // line 754
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 755
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
    }

    // line 763
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        // line 764
        echo "  <div class=\"input-group\">";
        // line 765
        $this->displayBlock("form_widget", $context, $blocks);
        // line 766
        echo "<span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 769
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 770
        echo twig_escape_filter($this->env, ($context["generated_value_length"] ?? null), "html", null, true);
        echo "\"
      >
        ";
        // line 772
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
";
    }

    // line 778
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        // line 779
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-recommended-length-counter" => (("#" .         // line 780
($context["id"] ?? null)) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 784
        if ((($context["input_type"] ?? null) == "textarea")) {
            // line 785
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 787
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 789
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 791
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 794
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 795
($context["value"] ?? null))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 797
($context["recommended_length"] ?? null)), "[/2]" => "</span>"]);
        // line 799
        echo "
    </em>
  </small>
";
    }

    // line 804
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        // line 805
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_field", [], "array"), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 806
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_field", [], "array"), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 809
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        // line 810
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "min_field", [], "array"), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 811
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "max_field", [], "array"), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
    }

    // line 814
    public function block_form_help($context, array $blocks = [])
    {
        // line 815
        echo "  ";
        if (($context["help"] ?? null)) {
            // line 816
            echo "    <small class=\"form-text\">";
            echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            echo "</small>
  ";
        }
    }

    // line 820
    public function block_form_hint($context, array $blocks = [])
    {
        // line 821
        echo "  ";
        if (($context["hint"] ?? null)) {
            // line 822
            echo "    <div class=\"row col-lg hint-box\">
      <div class=\"alert alert-info\">";
            // line 823
            echo ($context["hint"] ?? null);
            echo "</div>
    </div>
  ";
        }
    }

    // line 828
    public function block_custom_content_widget($context, array $blocks = [])
    {
        // line 829
        echo "  ";
        $this->loadTemplate(($context["template"] ?? null), "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 829)->display(twig_array_merge($context, ($context["data"] ?? null)));
    }

    // line 832
    public function block_text_widget($context, array $blocks = [])
    {
        // line 833
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["aria-label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", [])], "Admin.Global")]);
        // line 834
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 835
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["list" => (($context["id"] ?? null) . "_datalist")]);
        }
        // line 837
        echo "
  ";
        // line 838
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => ($context["attr"] ?? null)]);
        echo "

  ";
        // line 840
        if ( !(null === ($context["data_list"] ?? null))) {
            // line 841
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, (($context["id"] ?? null) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 842
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 843
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 845
            echo "    </datalist>
  ";
        }
    }

    // line 849
    public function block_submittable_input_widget($context, array $blocks = [])
    {
        // line 850
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 851
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 852
        $context["typeAttr"] = twig_array_merge($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "type_attr", []), ["class" => twig_trim_filter(((($this->getAttribute($this->getAttribute($this->getAttribute(        // line 853
($context["form"] ?? null), "vars", [], "any", false, true), "type_attr", [], "any", false, true), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "type_attr", [], "any", false, true), "class", []), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 854
($context["value"] ?? null), "value" =>         // line 855
($context["value"] ?? null)]);
        // line 858
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", []), 'widget', ["attr" => ($context["typeAttr"] ?? null)]);
        echo "
    <button type=\"button\" class=\"check-button d-none\">
      <i class=\"material-icons\">check</i>
    </button>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2385 => 858,  2383 => 855,  2382 => 854,  2381 => 853,  2380 => 852,  2376 => 851,  2374 => 850,  2371 => 849,  2365 => 845,  2356 => 843,  2352 => 842,  2347 => 841,  2345 => 840,  2340 => 838,  2337 => 837,  2334 => 835,  2332 => 834,  2330 => 833,  2327 => 832,  2322 => 829,  2319 => 828,  2311 => 823,  2308 => 822,  2305 => 821,  2302 => 820,  2294 => 816,  2291 => 815,  2288 => 814,  2282 => 811,  2277 => 810,  2274 => 809,  2268 => 806,  2263 => 805,  2260 => 804,  2253 => 799,  2251 => 797,  2250 => 795,  2249 => 794,  2243 => 791,  2239 => 789,  2236 => 787,  2233 => 785,  2231 => 784,  2229 => 780,  2227 => 779,  2224 => 778,  2215 => 772,  2210 => 770,  2206 => 769,  2201 => 766,  2199 => 765,  2197 => 764,  2194 => 763,  2183 => 755,  2179 => 754,  2175 => 753,  2171 => 751,  2169 => 750,  2165 => 748,  2162 => 747,  2159 => 746,  2150 => 741,  2148 => 740,  2144 => 739,  2139 => 737,  2136 => 736,  2133 => 735,  2131 => 733,  2129 => 732,  2127 => 731,  2125 => 726,  2124 => 725,  2117 => 721,  2113 => 719,  2110 => 718,  2104 => 713,  2102 => 712,  2100 => 709,  2099 => 708,  2098 => 707,  2097 => 706,  2094 => 704,  2091 => 703,  2089 => 702,  2086 => 701,  2081 => 699,  2079 => 698,  2077 => 697,  2074 => 695,  2071 => 694,  2068 => 693,  2064 => 690,  2059 => 687,  2048 => 685,  2044 => 684,  2040 => 683,  2035 => 681,  2030 => 679,  2026 => 677,  2020 => 675,  2018 => 674,  2012 => 670,  2009 => 669,  2000 => 666,  1995 => 665,  1992 => 664,  1989 => 663,  1986 => 662,  1983 => 661,  1980 => 660,  1976 => 659,  1971 => 658,  1969 => 657,  1966 => 656,  1958 => 650,  1951 => 648,  1944 => 646,  1940 => 644,  1937 => 643,  1931 => 641,  1925 => 639,  1923 => 638,  1920 => 637,  1917 => 636,  1915 => 635,  1912 => 634,  1908 => 633,  1903 => 631,  1899 => 629,  1895 => 628,  1890 => 625,  1875 => 623,  1869 => 621,  1863 => 618,  1857 => 615,  1853 => 613,  1851 => 612,  1848 => 611,  1831 => 610,  1827 => 609,  1817 => 605,  1814 => 604,  1811 => 603,  1803 => 597,  1793 => 593,  1789 => 591,  1785 => 590,  1775 => 583,  1764 => 574,  1761 => 573,  1758 => 572,  1753 => 565,  1750 => 563,  1743 => 560,  1741 => 559,  1740 => 558,  1739 => 557,  1737 => 556,  1733 => 555,  1731 => 554,  1728 => 552,  1721 => 549,  1719 => 548,  1718 => 547,  1717 => 546,  1715 => 545,  1711 => 544,  1709 => 543,  1707 => 542,  1705 => 541,  1703 => 540,  1700 => 539,  1696 => 534,  1694 => 533,  1692 => 532,  1686 => 531,  1683 => 530,  1679 => 527,  1677 => 526,  1675 => 525,  1669 => 524,  1666 => 523,  1662 => 520,  1660 => 519,  1657 => 518,  1653 => 515,  1651 => 514,  1648 => 513,  1644 => 510,  1642 => 509,  1639 => 508,  1635 => 505,  1633 => 504,  1630 => 503,  1626 => 500,  1624 => 499,  1622 => 498,  1619 => 497,  1615 => 494,  1613 => 493,  1611 => 492,  1609 => 491,  1603 => 490,  1600 => 489,  1595 => 484,  1591 => 482,  1589 => 481,  1587 => 480,  1566 => 479,  1561 => 476,  1559 => 475,  1557 => 474,  1555 => 473,  1541 => 472,  1538 => 471,  1536 => 470,  1533 => 469,  1530 => 468,  1527 => 467,  1524 => 466,  1521 => 465,  1518 => 464,  1515 => 463,  1512 => 462,  1509 => 461,  1506 => 460,  1503 => 459,  1501 => 458,  1498 => 457,  1494 => 454,  1491 => 453,  1487 => 450,  1484 => 449,  1480 => 446,  1478 => 445,  1475 => 443,  1471 => 440,  1468 => 439,  1459 => 430,  1442 => 427,  1438 => 426,  1434 => 425,  1431 => 424,  1414 => 423,  1408 => 419,  1404 => 418,  1400 => 417,  1392 => 412,  1386 => 409,  1381 => 408,  1378 => 407,  1371 => 402,  1353 => 400,  1333 => 399,  1330 => 398,  1313 => 397,  1310 => 396,  1307 => 395,  1304 => 394,  1299 => 391,  1292 => 387,  1286 => 384,  1282 => 383,  1277 => 381,  1272 => 378,  1270 => 377,  1265 => 375,  1259 => 372,  1255 => 371,  1251 => 369,  1248 => 368,  1245 => 367,  1231 => 362,  1228 => 361,  1225 => 360,  1222 => 359,  1219 => 358,  1212 => 354,  1207 => 353,  1204 => 352,  1201 => 351,  1180 => 341,  1177 => 340,  1175 => 339,  1172 => 338,  1169 => 337,  1166 => 336,  1162 => 333,  1157 => 330,  1148 => 327,  1143 => 325,  1140 => 324,  1136 => 323,  1132 => 322,  1126 => 319,  1121 => 317,  1113 => 311,  1111 => 310,  1108 => 309,  1099 => 306,  1095 => 305,  1092 => 304,  1089 => 303,  1086 => 302,  1084 => 301,  1081 => 300,  1078 => 299,  1075 => 298,  1071 => 297,  1066 => 295,  1063 => 294,  1059 => 291,  1054 => 288,  1043 => 286,  1039 => 285,  1035 => 284,  1029 => 281,  1024 => 279,  1016 => 273,  1014 => 272,  1011 => 271,  1003 => 269,  1000 => 268,  998 => 267,  995 => 266,  992 => 265,  989 => 264,  987 => 263,  984 => 262,  981 => 261,  978 => 260,  974 => 259,  969 => 257,  966 => 256,  962 => 253,  959 => 251,  957 => 250,  954 => 249,  948 => 245,  939 => 242,  935 => 241,  914 => 240,  910 => 239,  906 => 237,  902 => 235,  892 => 231,  882 => 230,  879 => 229,  875 => 228,  872 => 227,  870 => 226,  866 => 225,  861 => 224,  858 => 223,  854 => 220,  850 => 218,  833 => 216,  830 => 215,  813 => 214,  806 => 213,  803 => 212,  799 => 209,  793 => 207,  791 => 206,  787 => 205,  775 => 204,  771 => 202,  767 => 199,  761 => 197,  758 => 196,  753 => 194,  748 => 192,  746 => 191,  738 => 190,  734 => 188,  731 => 187,  729 => 186,  722 => 185,  719 => 184,  714 => 180,  697 => 178,  680 => 177,  677 => 176,  671 => 174,  668 => 173,  663 => 169,  661 => 168,  659 => 167,  656 => 165,  654 => 164,  652 => 163,  649 => 162,  644 => 158,  642 => 157,  640 => 156,  637 => 154,  635 => 153,  633 => 152,  630 => 151,  625 => 147,  619 => 144,  618 => 143,  617 => 142,  613 => 141,  609 => 140,  606 => 138,  600 => 135,  599 => 134,  598 => 133,  594 => 132,  592 => 131,  590 => 130,  587 => 129,  583 => 126,  581 => 125,  579 => 124,  576 => 123,  570 => 118,  567 => 117,  559 => 116,  554 => 114,  552 => 113,  550 => 112,  547 => 110,  545 => 109,  542 => 108,  536 => 103,  534 => 102,  532 => 100,  531 => 99,  530 => 98,  529 => 97,  524 => 95,  522 => 94,  520 => 93,  517 => 91,  515 => 90,  512 => 89,  507 => 85,  505 => 84,  503 => 83,  501 => 82,  499 => 81,  495 => 80,  493 => 79,  490 => 77,  488 => 76,  485 => 75,  478 => 69,  476 => 68,  474 => 67,  471 => 66,  467 => 63,  461 => 60,  458 => 59,  456 => 58,  454 => 57,  448 => 54,  445 => 53,  442 => 52,  440 => 51,  437 => 50,  434 => 49,  430 => 46,  428 => 45,  425 => 44,  421 => 41,  419 => 40,  416 => 39,  412 => 36,  409 => 34,  407 => 33,  404 => 32,  400 => 849,  397 => 848,  395 => 832,  392 => 831,  390 => 828,  387 => 827,  385 => 820,  382 => 819,  380 => 814,  377 => 813,  375 => 809,  372 => 808,  370 => 804,  367 => 803,  365 => 778,  362 => 777,  360 => 763,  357 => 762,  355 => 746,  352 => 745,  350 => 718,  347 => 717,  345 => 693,  342 => 692,  340 => 656,  337 => 655,  335 => 603,  332 => 602,  330 => 572,  327 => 571,  323 => 568,  321 => 539,  318 => 538,  315 => 536,  313 => 530,  310 => 529,  308 => 523,  305 => 522,  303 => 518,  300 => 517,  298 => 513,  295 => 512,  293 => 508,  290 => 507,  288 => 503,  285 => 502,  283 => 497,  280 => 496,  278 => 489,  275 => 488,  272 => 486,  270 => 457,  267 => 456,  265 => 453,  262 => 452,  260 => 449,  257 => 448,  255 => 443,  252 => 442,  250 => 439,  247 => 438,  244 => 436,  242 => 407,  239 => 406,  237 => 394,  234 => 393,  232 => 367,  229 => 366,  227 => 358,  224 => 357,  222 => 351,  219 => 350,  217 => 336,  214 => 335,  212 => 294,  209 => 293,  207 => 256,  204 => 255,  202 => 249,  199 => 248,  197 => 223,  194 => 222,  192 => 184,  189 => 183,  187 => 173,  184 => 172,  182 => 162,  179 => 161,  177 => 151,  174 => 150,  172 => 129,  169 => 128,  167 => 123,  164 => 122,  162 => 108,  159 => 107,  157 => 89,  154 => 88,  152 => 75,  149 => 74,  147 => 66,  144 => 65,  142 => 49,  139 => 48,  137 => 44,  134 => 43,  132 => 39,  129 => 38,  127 => 32,  124 => 31,  121 => 29,  46 => 28,  39 => 27,  32 => 26,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig");
    }
}
