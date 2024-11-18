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

/* @PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig */
class __TwigTemplate_ebcff51ae136e71b516518b2c2d2f95ec55ffed5237e7321507b95645b57bf6e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'translatable_choice_widget' => [$this, 'block_translatable_choice_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $this->displayBlock('translatable_choice_widget', $context, $blocks);
    }

    public function block_translatable_choice_widget($context, array $blocks = [])
    {
        // line 26
        echo "  ";
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", 26)->unwrap();
        // line 27
        echo "
  ";
        // line 28
        $context["class"] = (($this->getAttribute(($context["extraVars"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "class", []), "")) : (""));
        // line 29
        echo "  ";
        $context["rowAttributes"] = (($this->getAttribute(($context["extraVars"] ?? null), "row_attr", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "row_attr", []), [])) : ([]));
        // line 30
        echo "  ";
        $context["attr"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []);
        // line 31
        echo "  ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " custom-select translatable_choice"))]);
        // line 32
        echo "  <div class=\"form-group row type-choice ";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rowAttributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["rowAttr"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rowAttr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
  ";
        // line 33
        $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter(($context["extraVars"] ?? null), [])) : ([]));
        // line 34
        echo "
  ";
        // line 36
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "choices", []));
        foreach ($context['_seq'] as $context["language"] => $context["choices"]) {
            // line 37
            echo "    <div class=\"col-sm-6\" ";
            if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "default_locale", [], "any", true, true) &&  !($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "default_locale", []) === $context["language"]))) {
                echo "style=\"display: none\"";
            }
            echo ">
      <select class=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "class", []), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []) . "_") . $context["language"]), "html", null, true);
            echo "\" data-language=\"";
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\">
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["choices"]);
            foreach ($context['_seq'] as $context["choiceValue"] => $context["choiceLabel"]) {
                // line 40
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["choiceValue"], "html", null, true);
                echo "\"
            ";
                // line 41
                if (((array_key_exists("value", $context) && $this->getAttribute(($context["value"] ?? null), $context["language"], [], "array", true, true)) && ($context["choiceValue"] === $this->getAttribute(($context["value"] ?? null), $context["language"], [], "array")))) {
                    echo " selected=\"selected\"";
                }
                // line 42
                echo "             ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "row_attr", [], "any", false, true), $context["language"], [], "array", false, true), $context["choiceValue"], [], "array", true, true) && twig_test_iterable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "row_attr", []), $context["language"], [], "array"), $context["choiceValue"], [], "array")))) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "row_attr", []), $context["language"], [], "array"), $context["choiceValue"], [], "array"));
                    foreach ($context['_seq'] as $context["optionKey"] => $context["optionAttr"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["optionKey"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["optionAttr"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['optionKey'], $context['optionAttr'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo ">";
                echo twig_escape_filter($this->env, ((( !array_key_exists("choice_translation_domain", $context) || (($context["choice_translation_domain"] ?? null) === false))) ? ($context["choiceLabel"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["choiceLabel"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['choiceValue'], $context['choiceLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      </select>
      <input type=\"hidden\" id=\"";
            // line 45
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []) . "_") . $context["language"]) . "_value"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []) . "[") . $context["language"]) . "]"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, $context["choices"]), "html", null, true);
            echo "\" />
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language'], $context['choices'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
  ";
        // line 50
        echo "  ";
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "locales", [], "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "locales", [])))) {
            // line 51
            echo "    <div class=\"col-sm-3\">
      <select name=\"";
            // line 52
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []) . "_language"), "html", null, true);
            echo "\" class=\"custom-select translatable_choice_language\">
        ";
            // line 53
            if (twig_test_iterable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "locales", []))) {
                // line 54
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "locales", []));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 55
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "id_lang", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["language"], "iso_code", []) . " - ") . $this->getAttribute($context["language"], "name", [])), "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "        ";
            }
            // line 58
            echo "      </select>
    </div>
  ";
        }
        // line 61
        echo "
  ";
        // line 63
        echo "  ";
        if (array_key_exists("button", $context)) {
            // line 64
            echo "    <div class=\"col-sm-3\">
      <button type=\"button\" ";
            // line 65
            if ($this->getAttribute(($context["button"] ?? null), "id", [], "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "id", []), "html", null, true);
                echo "\"";
            }
            echo " class=\"btn ";
            if ($this->getAttribute(($context["button"] ?? null), "class", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "class", []), "html", null, true);
            } else {
                echo "btn-default";
            }
            echo "\" ";
            if ($this->getAttribute(($context["button"] ?? null), "action", [], "any", true, true)) {
                echo " onclick=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "action", []), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 66
            if ($this->getAttribute(($context["button"] ?? null), "icon", [], "any", true, true)) {
                echo "<i class=\"material-icons\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "icon", []), "html", null, true);
                echo "</i>";
            }
            // line 67
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "label", []), "html", null, true);
            echo "
      </button>
    </div>
  ";
        }
        // line 71
        echo "  </div>";
        // line 73
        $this->displayBlock("form_help", $context, $blocks);
        // line 74
        $this->displayBlock("form_hint", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  236 => 74,  234 => 73,  232 => 71,  224 => 67,  218 => 66,  198 => 65,  195 => 64,  192 => 63,  189 => 61,  184 => 58,  181 => 57,  170 => 55,  165 => 54,  163 => 53,  159 => 52,  156 => 51,  153 => 50,  150 => 48,  137 => 45,  134 => 44,  110 => 42,  106 => 41,  101 => 40,  97 => 39,  89 => 38,  82 => 37,  77 => 36,  74 => 34,  72 => 33,  54 => 32,  51 => 31,  48 => 30,  45 => 29,  43 => 28,  40 => 27,  37 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/translatable_choice.html.twig");
    }
}
