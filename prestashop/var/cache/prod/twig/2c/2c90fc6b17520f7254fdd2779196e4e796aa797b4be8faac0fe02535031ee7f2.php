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

/* @PrestaShop/Admin/TwigTemplateForm/material.html.twig */
class __TwigTemplate_256ea207203b18878006df2f4d3d7d3c5d67bea6f24aeb0d175acab40e3cefee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'material_choice_tree_widget' => [$this, 'block_material_choice_tree_widget'],
            'material_choice_tree_item_widget' => [$this, 'block_material_choice_tree_item_widget'],
            'material_choice_tree_item_checkbox_widget' => [$this, 'block_material_choice_tree_item_checkbox_widget'],
            'material_choice_tree_item_radio_widget' => [$this, 'block_material_choice_tree_item_radio_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('material_choice_tree_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('material_choice_tree_item_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('material_choice_tree_item_checkbox_widget', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('material_choice_tree_item_radio_widget', $context, $blocks);
    }

    // line 26
    public function block_material_choice_tree_widget($context, array $blocks = [])
    {
        // line 27
        echo "  <div class=\"material-choice-tree-container js-choice-tree-container";
        if (($context["required"] ?? null)) {
            echo " required";
        }
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
  <div class=\"choice-tree-actions\">
    <span class=\"form-control-label js-toggle-choice-tree-action\"
          data-expanded-text=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-expanded-icon=\"expand_more\"
          data-collapsed-text=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-collapsed-icon=\"expand_less\"
          data-action=\"expand\"
    >
      <i class=\"material-icons\">expand_more</i>
      <span class=\"js-toggle-text\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "</span>
    </span>
  </div>

  <ul class=\"choice-tree\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices_tree"] ?? null));
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
            // line 43
            echo "      ";
            $this->displayBlock("material_choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </ul>
</div>
";
    }

    // line 49
    public function block_material_choice_tree_item_widget($context, array $blocks = [])
    {
        // line 50
        echo "  ";
        $context["has_children"] = $this->getAttribute(($context["choice"] ?? null), ($context["choice_children"] ?? null), [], "array", true, true);
        // line 51
        echo "
  <li class=\"";
        // line 52
        if ($this->getAttribute(($context["choice"] ?? null), "has_selected_children", [])) {
            echo "expanded";
        } elseif (($context["has_children"] ?? null)) {
            echo "collapsed";
        }
        echo "\">
    ";
        // line 53
        if (($context["multiple"] ?? null)) {
            // line 54
            echo "      ";
            $this->displayBlock("material_choice_tree_item_checkbox_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 56
            echo "      ";
            $this->displayBlock("material_choice_tree_item_radio_widget", $context, $blocks);
            echo "
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (($context["has_children"] ?? null)) {
            // line 60
            echo "      <ul>
        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["choice"] ?? null), ($context["choice_children"] ?? null), [], "array"));
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
                // line 62
                echo "          ";
                $context["choice"] = $context["item"];
                // line 63
                echo "          ";
                $this->displayBlock("material_choice_tree_item_widget", $context, $blocks);
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
            // line 65
            echo "      </ul>
    ";
        }
        // line 67
        echo "  </li>
";
    }

    // line 70
    public function block_material_choice_tree_item_checkbox_widget($context, array $blocks = [])
    {
        // line 71
        echo "  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
         ";
        // line 75
        if ( !(null === $this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"))) {
            // line 76
            echo "           name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
            echo "[]\"
           value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), "html", null, true);
            echo "\"
           ";
            // line 78
            if (twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["selected_values"] ?? null))) {
                echo "checked";
            }
            // line 79
            echo "         ";
        }
        // line 80
        echo "         ";
        if ((($context["disabled"] ?? null) || twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["disabled_values"] ?? null)))) {
            echo "disabled";
        }
        // line 81
        echo "        >
        <i class=\"md-checkbox-control\"></i>
        ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_label"] ?? null), [], "array"), "html", null, true);
        echo "
      </label>
    </div>
  </div>
";
    }

    // line 89
    public function block_material_choice_tree_item_radio_widget($context, array $blocks = [])
    {
        // line 90
        echo "  <div class=\"radio js-input-wrapper form-check form-check-radio\">
    <label class=\"form-check-label\">
      <input type=\"radio\"
       name=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
        echo "\"
       value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), "html", null, true);
        echo "\"
       ";
        // line 95
        if (twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["selected_values"] ?? null))) {
            echo "checked";
        }
        // line 96
        echo "       ";
        if ((($context["disabled"] ?? null) || twig_in_filter($this->getAttribute(($context["choice"] ?? null), ($context["choice_value"] ?? null), [], "array"), ($context["disabled_values"] ?? null)))) {
            echo "disabled";
        }
        // line 97
        echo "       ";
        if (($context["required"] ?? null)) {
            echo "required";
        }
        // line 98
        echo "      >
      <i class=\"form-check-round\"></i>
      ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["choice"] ?? null), ($context["choice_label"] ?? null), [], "array"), "html", null, true);
        echo "
    </label>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/material.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  295 => 100,  291 => 98,  286 => 97,  281 => 96,  277 => 95,  273 => 94,  269 => 93,  264 => 90,  261 => 89,  252 => 83,  248 => 81,  243 => 80,  240 => 79,  236 => 78,  232 => 77,  227 => 76,  225 => 75,  219 => 71,  216 => 70,  211 => 67,  207 => 65,  190 => 63,  187 => 62,  170 => 61,  167 => 60,  165 => 59,  162 => 58,  156 => 56,  150 => 54,  148 => 53,  140 => 52,  137 => 51,  134 => 50,  131 => 49,  125 => 45,  108 => 43,  91 => 42,  83 => 37,  75 => 32,  70 => 30,  59 => 27,  56 => 26,  52 => 89,  49 => 88,  47 => 70,  44 => 69,  42 => 49,  39 => 48,  37 => 26,  34 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/material.html.twig");
    }
}
