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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig */
class __TwigTemplate_03afd1afa94ae0f8b0150225397637682b4710cece0086066fe1a22b1b02446b extends \Twig\Template
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
        echo "
";
        // line 26
        $context["actions"] = $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", []), "actions", []);
        // line 27
        echo "
";
        // line 28
        if ( !twig_test_empty(($context["actions"] ?? null))) {
            // line 29
            echo "    ";
            $context["inlineActions"] = [];
            // line 30
            echo "    ";
            $context["regularActions"] = [];
            // line 31
            echo "
    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 33
                echo "      ";
                if (($this->getAttribute($this->getAttribute($context["action"], "options", []), "use_inline_display", [], "array") == true)) {
                    // line 34
                    echo "          ";
                    $context["inlineActions"] = twig_array_merge(($context["inlineActions"] ?? null), [0 => $context["action"]]);
                    // line 35
                    echo "        ";
                } else {
                    // line 36
                    echo "          ";
                    $context["regularActions"] = twig_array_merge(($context["regularActions"] ?? null), [0 => $context["action"]]);
                    // line 37
                    echo "      ";
                }
                // line 38
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
    <div class=\"btn-group-action text-right\">
      ";
            // line 41
            if ( !twig_test_empty(($context["inlineActions"] ?? null))) {
                // line 42
                echo "        <div class=\"btn-group d-flex justify-content-between text-right\">
          ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["inlineActions"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["inlineAction"]) {
                    // line 44
                    if ($this->getAttribute($context["inlineAction"], "isApplicable", [0 => ($context["record"] ?? null)], "method")) {
                        // line 45
                        echo "
              ";
                        // line 46
                        $context["class"] = "dropdown-item inline-dropdown-item";
                        // line 47
                        echo "
              ";
                        // line 48
                        echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["inlineAction"], "type", [])) . ".html.twig"), ["grid" =>                         // line 49
($context["grid"] ?? null), "column" =>                         // line 50
($context["column"] ?? null), "attributes" => ["class" =>                         // line 51
($context["class"] ?? null), "tooltip_name" => true], "record" =>                         // line 52
($context["record"] ?? null), "action" =>                         // line 53
$context["inlineAction"]]);
                        // line 54
                        echo "
            ";
                    }
                    // line 56
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inlineAction'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "        </div>
      ";
            }
            // line 59
            echo "
      ";
            // line 60
            if ( !twig_test_empty(($context["regularActions"] ?? null))) {
                // line 61
                echo "        <div class=\"btn-group\">
          ";
                // line 62
                list($context["skippedActions"], $context["isFirstRendered"]) =                 [0, false];
                // line 63
                echo "
          ";
                // line 65
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["regularActions"] ?? null));
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
                    // line 66
                    echo "            ";
                    if ( !($context["isFirstRendered"] ?? null)) {
                        // line 67
                        echo "              ";
                        $context["skippedActions"] = (($context["skippedActions"] ?? null) + 1);
                        // line 68
                        echo "            ";
                    }
                    // line 69
                    echo "
            ";
                    // line 70
                    if (($this->getAttribute($context["action"], "isApplicable", [0 => ($context["record"] ?? null)], "method") &&  !($context["isFirstRendered"] ?? null))) {
                        // line 71
                        echo "              ";
                        echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["action"], "type", [])) . ".html.twig"), ["grid" =>                         // line 72
($context["grid"] ?? null), "column" =>                         // line 73
($context["column"] ?? null), "attributes" => ["class" => "dropdown-item", "tooltip_name" => true], "record" =>                         // line 75
($context["record"] ?? null), "action" =>                         // line 76
$context["action"]]);
                        // line 77
                        echo "

              ";
                        // line 79
                        $context["isFirstRendered"] = true;
                        // line 80
                        echo "            ";
                    }
                    // line 81
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "
          ";
                // line 84
                echo "          ";
                if ((twig_length_filter($this->env, ($context["regularActions"] ?? null)) > ($context["skippedActions"] ?? null))) {
                    // line 85
                    echo "            <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
               data-toggle=\"dropdown\"
               aria-haspopup=\"true\"
               aria-expanded=\"false\"
            >
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              ";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["regularActions"] ?? null), ($context["skippedActions"] ?? null)));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        if ($this->getAttribute($context["action"], "isApplicable", [0 => ($context["record"] ?? null)], "method")) {
                            // line 94
                            echo "                ";
                            echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . $this->getAttribute($context["action"], "type", [])) . ".html.twig"), ["grid" =>                             // line 95
($context["grid"] ?? null), "column" =>                             // line 96
($context["column"] ?? null), "attributes" => ["class" => "dropdown-item", "tooltip_name" => false], "record" =>                             // line 98
($context["record"] ?? null), "action" =>                             // line 99
$context["action"]]);
                            // line 100
                            echo "
              ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "            </div>
          ";
                }
                // line 104
                echo "        </div>
      ";
            }
            // line 106
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 106,  263 => 104,  259 => 102,  248 => 100,  246 => 99,  245 => 98,  244 => 96,  243 => 95,  241 => 94,  230 => 93,  220 => 85,  217 => 84,  214 => 82,  200 => 81,  197 => 80,  195 => 79,  191 => 77,  189 => 76,  188 => 75,  187 => 73,  186 => 72,  184 => 71,  182 => 70,  179 => 69,  176 => 68,  173 => 67,  170 => 66,  152 => 65,  149 => 63,  147 => 62,  144 => 61,  142 => 60,  139 => 59,  135 => 57,  121 => 56,  117 => 54,  115 => 53,  114 => 52,  113 => 51,  112 => 50,  111 => 49,  110 => 48,  107 => 47,  105 => 46,  102 => 45,  100 => 44,  83 => 43,  80 => 42,  78 => 41,  74 => 39,  68 => 38,  65 => 37,  62 => 36,  59 => 35,  56 => 34,  53 => 33,  49 => 32,  46 => 31,  43 => 30,  40 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/action.html.twig");
    }
}
