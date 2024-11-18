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

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_a0e490290422fc5c90847e184f521dd1239f60da7b3f52e45f5cdb49ed7ed2d3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('date_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('time_widget', $context, $blocks);
        // line 102
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 140
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 164
        echo "
";
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('choice_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('radio_label', $context, $blocks);
        // line 180
        echo "
";
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('button_row', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('choice_row', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('date_row', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('time_row', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('datetime_row', $context, $blocks);
    }

    // line 5
    public function block_textarea_widget($context, array $blocks = [])
    {
        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 10
    public function block_money_widget($context, array $blocks = [])
    {
        // line 11
        $context["prepend"] =  !(is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["money_pattern"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "{{") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["money_pattern"] ?? null)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "}}") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 === substr($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, -strlen($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? null)) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? null)) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 28
    public function block_percent_widget($context, array $blocks = [])
    {
        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 35
    public function block_datetime_widget($context, array $blocks = [])
    {
        // line 36
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'errors');
            // line 44
            echo "<div class=\"sr-only\">";
            // line 45
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", [], "any", false, true), "year", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", []), "year", []), 'label');
            }
            // line 46
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", [], "any", false, true), "month", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", []), "month", []), 'label');
            }
            // line 47
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", [], "any", false, true), "day", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", []), "day", []), 'label');
            }
            // line 48
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", [], "any", false, true), "hour", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", []), "hour", []), 'label');
            }
            // line 49
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", [], "any", false, true), "minute", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", []), "minute", []), 'label');
            }
            // line 50
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", [], "any", false, true), "second", [], "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", []), "second", []), 'label');
            }
            // line 51
            echo "</div>";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", []), 'widget', ["datetime" => true]);
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", []), 'widget', ["datetime" => true]);
            // line 55
            echo "</div>";
        }
    }

    // line 59
    public function block_date_widget($context, array $blocks = [])
    {
        // line 60
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 61
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 63
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 64
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 65
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 67
            echo "            <div class=\"sr-only\">
                ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'label');
            echo "
                ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'label');
            echo "
                ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'label');
            echo "
            </div>";
            // line 73
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 74
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget'), "{{ month }}" =>             // line 75
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", []), 'widget'), "{{ day }}" =>             // line 76
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", []), 'widget')]);
            // line 78
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 79
                echo "</div>";
            }
        }
    }

    // line 84
    public function block_time_widget($context, array $blocks = [])
    {
        // line 85
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 86
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 88
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 89
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 90
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 92
            echo "<div class=\"sr-only\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'label');
            echo "</div>";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", []), 'widget');
            // line 94
            if (($context["with_minutes"] ?? null)) {
                echo ":<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'label');
                echo "</div>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", []), 'widget');
            }
            // line 95
            if (($context["with_seconds"] ?? null)) {
                echo ":<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'label');
                echo "</div>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", []), 'widget');
            }
            // line 96
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 97
                echo "</div>";
            }
        }
    }

    // line 102
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        // line 103
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 104
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 106
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
            // line 107
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 109
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 110
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? null), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\" role=\"presentation\">
                    <thead>
                    <tr>";
            // line 113
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "years", []), 'label');
                echo "</th>";
            }
            // line 114
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "months", []), 'label');
                echo "</th>";
            }
            // line 115
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weeks", []), 'label');
                echo "</th>";
            }
            // line 116
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "days", []), 'label');
                echo "</th>";
            }
            // line 117
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hours", []), 'label');
                echo "</th>";
            }
            // line 118
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minutes", []), 'label');
                echo "</th>";
            }
            // line 119
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "seconds", []), 'label');
                echo "</th>";
            }
            // line 120
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 124
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "years", []), 'widget');
                echo "</td>";
            }
            // line 125
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "months", []), 'widget');
                echo "</td>";
            }
            // line 126
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weeks", []), 'widget');
                echo "</td>";
            }
            // line 127
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "days", []), 'widget');
                echo "</td>";
            }
            // line 128
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hours", []), 'widget');
                echo "</td>";
            }
            // line 129
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minutes", []), 'widget');
                echo "</td>";
            }
            // line 130
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "seconds", []), 'widget');
                echo "</td>";
            }
            // line 131
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 135
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "invert", []), 'widget');
            }
            // line 136
            echo "</div>";
        }
    }

    // line 140
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        // line 141
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        // line 142
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 145
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        // line 146
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) {
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 148
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 149
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 150
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 154
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => (($this->getAttribute(                // line 157
($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), "translation_domain" =>                 // line 158
($context["choice_translation_domain"] ?? null)]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "</div>";
        }
    }

    // line 167
    public function block_choice_label($context, array $blocks = [])
    {
        // line 169
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => ""]))]);
        // line 170
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 173
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 177
    public function block_radio_label($context, array $blocks = [])
    {
        // line 178
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 183
    public function block_button_row($context, array $blocks = [])
    {
        // line 184
        echo "<div class=\"form-group\">";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 186
        echo "</div>";
    }

    // line 189
    public function block_choice_row($context, array $blocks = [])
    {
        // line 190
        $context["force_error"] = true;
        // line 191
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 194
    public function block_date_row($context, array $blocks = [])
    {
        // line 195
        $context["force_error"] = true;
        // line 196
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 199
    public function block_time_row($context, array $blocks = [])
    {
        // line 200
        $context["force_error"] = true;
        // line 201
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 204
    public function block_datetime_row($context, array $blocks = [])
    {
        // line 205
        $context["force_error"] = true;
        // line 206
        $this->displayBlock("form_row", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  599 => 206,  597 => 205,  594 => 204,  590 => 201,  588 => 200,  585 => 199,  581 => 196,  579 => 195,  576 => 194,  572 => 191,  570 => 190,  567 => 189,  563 => 186,  561 => 185,  559 => 184,  556 => 183,  552 => 178,  549 => 177,  545 => 174,  542 => 173,  538 => 170,  536 => 169,  533 => 167,  528 => 161,  522 => 158,  521 => 157,  520 => 156,  516 => 155,  512 => 154,  505 => 150,  504 => 149,  503 => 148,  499 => 147,  497 => 146,  494 => 145,  490 => 142,  488 => 141,  485 => 140,  480 => 136,  476 => 135,  471 => 131,  465 => 130,  459 => 129,  453 => 128,  447 => 127,  441 => 126,  435 => 125,  429 => 124,  424 => 120,  418 => 119,  412 => 118,  406 => 117,  400 => 116,  394 => 115,  388 => 114,  382 => 113,  377 => 110,  374 => 109,  372 => 108,  368 => 107,  366 => 106,  363 => 104,  361 => 103,  358 => 102,  352 => 97,  350 => 96,  343 => 95,  336 => 94,  334 => 93,  330 => 92,  325 => 90,  323 => 89,  321 => 88,  318 => 86,  316 => 85,  313 => 84,  307 => 79,  305 => 78,  303 => 76,  302 => 75,  301 => 74,  300 => 73,  296 => 70,  292 => 69,  288 => 68,  285 => 67,  280 => 65,  278 => 64,  276 => 63,  273 => 61,  271 => 60,  268 => 59,  263 => 55,  261 => 54,  259 => 53,  257 => 51,  253 => 50,  249 => 49,  245 => 48,  241 => 47,  237 => 46,  233 => 45,  231 => 44,  229 => 42,  227 => 41,  223 => 40,  221 => 39,  218 => 37,  216 => 36,  213 => 35,  208 => 31,  206 => 30,  204 => 29,  201 => 28,  196 => 24,  192 => 22,  186 => 20,  184 => 19,  182 => 18,  176 => 16,  174 => 15,  169 => 14,  166 => 13,  163 => 12,  161 => 11,  158 => 10,  154 => 7,  152 => 6,  149 => 5,  145 => 204,  142 => 203,  140 => 199,  137 => 198,  135 => 194,  132 => 193,  130 => 189,  127 => 188,  125 => 183,  122 => 182,  119 => 180,  117 => 177,  114 => 176,  112 => 173,  109 => 172,  107 => 167,  104 => 166,  101 => 164,  99 => 145,  96 => 144,  94 => 140,  92 => 102,  90 => 84,  87 => 83,  85 => 59,  82 => 58,  80 => 35,  77 => 34,  75 => 28,  72 => 27,  70 => 10,  67 => 9,  65 => 5,  62 => 4,  59 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_base_layout.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
