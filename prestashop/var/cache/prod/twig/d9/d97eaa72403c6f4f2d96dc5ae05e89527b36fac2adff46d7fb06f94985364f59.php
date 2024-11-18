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

/* @PrestaShop/Admin/macros.html.twig */
class __TwigTemplate_8f168cb7d646a5eba77e041a7dcb8f63fd9256ffbf0550a8bcff62441b6780b5 extends \Twig\Template
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
        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
";
        // line 50
        echo "
";
        // line 58
        echo "
";
        // line 71
        echo "
";
        // line 89
        echo "
";
        // line 96
        echo "
";
        // line 126
        echo "
";
        // line 241
        echo "
 ";
        // line 288
        echo "
";
        // line 307
        echo "
";
    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 26
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["name"] ?? null), 'label', ["label_attr" => ["tooltip" => ($context["tooltip"] ?? null), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (_twig_default_filter(($context["placement"] ?? null), "top")) : ("top"))]]);
            echo "
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

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 30
            echo "  ";
            (((array_key_exists("variable", $context) && (twig_length_filter($this->env, ($context["variable"] ?? null)) > 0))) ? (print (twig_escape_filter($this->env, ($context["variable"] ?? null), "html", null, true))) : (print (false)));
            echo "
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

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("position", $context)) ? (_twig_default_filter(($context["position"] ?? null), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "</i>
  </span>
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

    // line 39
    public function getinfotip($__text__ = null, $__use_raw__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "use_raw" => $__use_raw__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            if (($context["use_raw"] ?? null)) {
                // line 43
                echo "      ";
                echo ($context["text"] ?? null);
                echo "
    ";
            } else {
                // line 45
                echo "      ";
                echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
                echo "
    ";
            }
            // line 47
            echo "  </p>
</div>
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

    // line 51
    public function getwarningtip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 52
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 54
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "
  </p>
</div>
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

    // line 59
    public function getlabel_with_help($__label__ = null, $__help__ = null, $__class__ = "", $__for__ = "", $__isRequired__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "help" => $__help__,
            "class" => $__class__,
            "for" => $__for__,
            "isRequired" => $__isRequired__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 60
            echo "<label";
            if ( !twig_test_empty(($context["for"] ?? null))) {
                echo " for=\"";
                echo twig_escape_filter($this->env, ($context["for"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " class=\"form-control-label ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\">
  ";
            // line 61
            if (($context["isRequired"] ?? null)) {
                // line 62
                echo "    <span class=\"text-danger\">*</span>
  ";
            }
            // line 64
            echo "
  ";
            // line 65
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
  ";
            // line 66
            echo twig_include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => ($context["help"] ?? null)]);
            echo "
</label>

<p class=\"sr-only\">";
            // line 69
            echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
            echo "</p>
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

    // line 73
    public function getsortable_column_header($__title__ = null, $__sortColumnName__ = null, $__orderBy__ = null, $__sortOrder__ = null, $__prefix__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "sortColumnName" => $__sortColumnName__,
            "orderBy" => $__orderBy__,
            "sortOrder" => $__sortOrder__,
            "prefix" => $__prefix__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 74
            echo "  ";
            list($context["sortOrder"], $context["orderBy"], $context["prefix"]) =             [((array_key_exists("sortOrder", $context)) ? (_twig_default_filter(($context["sortOrder"] ?? null), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? null))) : ("")), ((array_key_exists("prefix", $context)) ? (_twig_default_filter(($context["prefix"] ?? null), "")) : (""))];
            // line 75
            echo "  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 77
            echo twig_escape_filter($this->env, ($context["sortColumnName"] ?? null), "html", null, true);
            echo "\"
      data-sort-prefix=\"";
            // line 78
            echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
            echo "\"
      ";
            // line 79
            if ((($context["orderBy"] ?? null) == ($context["sortColumnName"] ?? null))) {
                // line 80
                echo "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 81
                echo (((($context["sortOrder"] ?? null) == "desc")) ? ("desc") : ("asc"));
                echo "\"
      ";
            }
            // line 83
            echo "    >
      <span role=\"columnheader\">";
            // line 84
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", [], "Admin.Actions"), "html", null, true);
            echo "\"></span>
    </div>
  </th>
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

    // line 91
    public function getimport_file_sample($__label__ = null, $__filename__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "filename" => $__filename__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 92
            echo "    <a id=\"download-sample-";
            echo twig_escape_filter($this->env, ($context["filename"] ?? null), "html", null, true);
            echo "-file-link\" class=\"list-group-item list-group-item-action\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_sample_download", ["sampleName" => ($context["filename"] ?? null)]), "html", null, true);
            echo "\">
        ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
    </a>
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

    // line 106
    public function getform_widget_with_error($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 107
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 107)->unwrap();
            // line 108
            echo "
  ";
            // line 109
            $context["vars"] = ((array_key_exists("vars", $context)) ? (_twig_default_filter(($context["vars"] ?? null), [])) : ([]));
            // line 110
            echo "  ";
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter(($context["extraVars"] ?? null), [])) : ([]));
            // line 111
            echo "  ";
            $context["attr"] = (($this->getAttribute(($context["vars"] ?? null), "attr", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["vars"] ?? null), "attr", []), [])) : ([]));
            // line 112
            echo "  ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? ($this->getAttribute(($context["attr"] ?? null), "class", [])) : (""))]);
            // line 113
            echo "  ";
            $context["vars"] = twig_array_merge(($context["vars"] ?? null), ["attr" => ($context["attr"] ?? null)]);
            // line 114
            echo "
  ";
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["vars"] ?? null));
            echo "

  ";
            // line 117
            if (($this->getAttribute(($context["extraVars"] ?? null), "help", [], "any", true, true) && $this->getAttribute(($context["extraVars"] ?? null), "help", []))) {
                // line 118
                echo "      <small class=\"form-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["extraVars"] ?? null), "help", []), "html", null, true);
                echo "</small>
    ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 119
($context["form"] ?? null), "vars", [], "any", false, true), "help", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "help", []))) {
                // line 120
                echo "      <small class=\"form-text\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "help", []), "html", null, true);
                echo "</small>
  ";
            }
            // line 122
            echo "
  ";
            // line 123
            echo $context["self"]->getform_error_with_popover(($context["form"] ?? null));
            echo "

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

    // line 136
    public function getform_error_with_popover($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 137
            echo "  ";
            $context["errors"] = [];
            // line 138
            echo "
  ";
            // line 139
            if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "valid", [], "any", true, true) &&  !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "valid", []))) {
                // line 140
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "errors", []));
                foreach ($context['_seq'] as $context["_key"] => $context["parentError"]) {
                    // line 141
                    echo "      ";
                    $context["errors"] = twig_array_merge(($context["errors"] ?? null), [0 => $this->getAttribute($context["parentError"], "message", [])]);
                    // line 142
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parentError'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "
    ";
                // line 145
                echo "  ";
            }
            // line 146
            echo "
  ";
            // line 147
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 148
                echo "    ";
                // line 149
                echo "    ";
                $context["errorPopover"] = null;
                // line 150
                echo "
    ";
                // line 151
                if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                    // line 152
                    echo "      ";
                    $context["popoverContainer"] = ("popover-error-container-" . $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []));
                    // line 153
                    echo "      <div class=\"";
                    echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                    echo "\"></div>


      ";
                    // line 156
                    if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "errors_by_locale", [], "any", true, true)) {
                        // line 157
                        echo "          ";
                        $context["popoverErrors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "errors_by_locale", []);
                        // line 158
                        echo "
          ";
                        // line 160
                        echo "          ";
                        $context["translatableErrors"] = [];
                        // line 161
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["popoverErrors"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["translatableError"]) {
                            // line 162
                            echo "            ";
                            $context["translatableErrors"] = twig_array_merge(($context["translatableErrors"] ?? null), [0 => $this->getAttribute($context["translatableError"], "error_message", [])]);
                            // line 163
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translatableError'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 164
                        echo "
          ";
                        // line 166
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 167
                            echo "            ";
                            if (!twig_in_filter($context["error"], ($context["translatableErrors"] ?? null))) {
                                // line 168
                                echo "              ";
                                $context["popoverErrors"] = twig_array_merge(($context["popoverErrors"] ?? null), [0 => $context["error"]]);
                                // line 169
                                echo "            ";
                            }
                            // line 170
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 171
                        echo "
        ";
                    } else {
                        // line 173
                        echo "          ";
                        $context["popoverErrors"] = ($context["errors"] ?? null);
                        // line 174
                        echo "      ";
                    }
                    // line 175
                    echo "
      ";
                    // line 176
                    $context["errorMessages"] = [];
                    // line 177
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["popoverErrors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 178
                        echo "        ";
                        $context["errorMessage"] = $context["popoverError"];
                        // line 179
                        echo "
        ";
                        // line 180
                        if (($this->getAttribute($context["popoverError"], "error_message", [], "any", true, true) && $this->getAttribute($context["popoverError"], "locale_name", [], "any", true, true))) {
                            // line 181
                            echo "          ";
                            $context["errorMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%error_message% - Language: %language_name%", ["%error_message%" => $this->getAttribute($context["popoverError"], "error_message", []), "%language_name%" => $this->getAttribute($context["popoverError"], "locale_name", [])], "Admin.Notifications.Error");
                            // line 182
                            echo "        ";
                        }
                        // line 183
                        echo "
        ";
                        // line 184
                        $context["errorMessages"] = twig_array_merge(($context["errorMessages"] ?? null), [0 => ($context["errorMessage"] ?? null)]);
                        // line 185
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popoverError'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 186
                    echo "
      ";
                    // line 187
                    ob_start(function () { return ''; });
                    // line 188
                    echo "        <div class=\"popover-error-list\">
          <ul>
            ";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errorMessages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 191
                        echo "              <li class=\"text-danger\">
                ";
                        // line 192
                        echo twig_escape_filter($this->env, $context["popoverError"], "html", null, true);
                        echo "
              </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popoverError'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "          </ul>
        </div>
      ";
                    $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 198
                    echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                    echo "\">
        ";
                    // line 200
                    echo twig_escape_filter($this->env, ($context["popoverErrorContent"] ?? null), "html", null, true);
                    echo "
      </template>

      ";
                    // line 203
                    ob_start(function () { return ''; });
                    // line 204
                    echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                    // line 206
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                    echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                    // line 210
                    echo twig_escape_filter($this->env, ($context["popoverContainer"] ?? null), "html", null, true);
                    echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>";
                    // line 212
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("%count% errors", twig_length_filter($this->env, ($context["popoverErrors"] ?? null)), [], "Admin.Global"), "html", null, true);
                    echo "</u>
        </span>
      ";
                    $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 215
                    echo "
    ";
                } elseif ($this->getAttribute($this->getAttribute(                // line 216
($context["form"] ?? null), "vars", [], "any", false, true), "error_by_locale", [], "any", true, true)) {
                    // line 217
                    echo "      ";
                    $context["errorByLocale"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%error_message% - Language: %language_name%", ["%error_message%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "error_by_locale", []), "error_message", []), "%language_name%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "error_by_locale", []), "locale_name", [])], "Admin.Notifications.Error");
                    // line 218
                    echo "      ";
                    $context["errors"] = [0 => ($context["errorByLocale"] ?? null)];
                    // line 219
                    echo "    ";
                }
                // line 220
                echo "
    <div class=\"invalid-feedback-container\">
      ";
                // line 222
                if ( !(null === ($context["errorPopover"] ?? null))) {
                    // line 223
                    echo "        <div class=\"text-danger\">
          ";
                    // line 224
                    echo twig_escape_filter($this->env, ($context["errorPopover"] ?? null), "html", null, true);
                    echo "
        </div>
      ";
                } else {
                    // line 227
                    echo "        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          ";
                    // line 231
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 232
                        echo "            <div class=\"text-danger\">
              ";
                        // line 233
                        echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                        echo "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "        </div>
      ";
                }
                // line 238
                echo "    </div>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 248
    public function getform_group_row($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 249
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 249)->unwrap();
            // line 250
            echo "
  ";
            // line 251
            $context["class"] = (($this->getAttribute(($context["extraVars"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "class", []), "")) : (""));
            // line 252
            echo "  ";
            $context["inputType"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "block_prefixes", [], "any", false, true), 1, [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "block_prefixes", [], "any", false, true), 1, []), "text")) : ("text"));
            // line 253
            echo "  ";
            $context["rowAttributes"] = (($this->getAttribute(($context["extraVars"] ?? null), "row_attr", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "row_attr", []), [])) : ([]));
            // line 254
            echo "  <div class=\"form-group row type-";
            echo twig_escape_filter($this->env, ($context["inputType"] ?? null), "html", null, true);
            echo " ";
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
            // line 255
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter(($context["extraVars"] ?? null), [])) : ([]));
            // line 256
            echo "
    ";
            // line 258
            echo "    ";
            $context["labelOnTop"] = false;
            // line 259
            echo "
    ";
            // line 260
            if ($this->getAttribute(($context["extraVars"] ?? null), "label_on_top", [], "any", true, true)) {
                // line 261
                echo "      ";
                $context["labelOnTop"] = $this->getAttribute(($context["extraVars"] ?? null), "label_on_top", []);
                // line 262
                echo "    ";
            }
            // line 263
            echo "
    ";
            // line 264
            if ($this->getAttribute(($context["extraVars"] ?? null), "label", [], "any", true, true)) {
                // line 265
                echo "      ";
                $context["isRequired"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "required", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "required", []), false)) : (false));
                // line 266
                echo "
      ";
                // line 267
                if ($this->getAttribute(($context["extraVars"] ?? null), "required", [], "any", true, true)) {
                    // line 268
                    echo "        ";
                    $context["isRequired"] = $this->getAttribute(($context["extraVars"] ?? null), "required", []);
                    // line 269
                    echo "      ";
                }
                // line 270
                echo "
      <label for=\"";
                // line 271
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\" class=\"form-control-label ";
                echo ((($context["labelOnTop"] ?? null)) ? ("label-on-top col-12") : (""));
                echo "\">
        ";
                // line 272
                if (($context["isRequired"] ?? null)) {
                    // line 273
                    echo "          <span class=\"text-danger\">*</span>
        ";
                }
                // line 275
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["extraVars"] ?? null), "label", []), "html", null, true);
                echo "

        ";
                // line 277
                if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "label_attr", [], "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "label_attr", [], "any", false, true), "popover", [], "array", true, true))) {
                    // line 278
                    echo "          ";
                    echo twig_include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "label_attr", []), "popover", [], "array")]);
                    echo "
        ";
                }
                // line 280
                echo "      </label>
    ";
            }
            // line 282
            echo "
    <div class=\"";
            // line 283
            echo ((($context["labelOnTop"] ?? null)) ? ("col-12") : ("col-sm"));
            echo "\">
      ";
            // line 284
            echo $context["self"]->getform_widget_with_error(($context["form"] ?? null), ($context["vars"] ?? null), ($context["extraVars"] ?? null));
            echo "
    </div>
  </div>
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

    // line 289
    public function getmultistore_switch($__form__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 290
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 290)->unwrap();
            // line 291
            echo "  ";
            if ($this->getAttribute(($context["form"] ?? null), "shop_restriction_switch", [], "any", true, true)) {
                // line 292
                echo "    ";
                ob_start(function () { return ''; });
                // line 293
                echo "      <strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                echo "</strong> <br>
      ";
                // line 294
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.", ["%yes_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", [], "Admin.Global"), "%no_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", [], "Admin.Global")], "Admin.Design.Help"), "html", null, true);
                echo " <br>
      ";
                // line 295
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.", [], "Admin.Design.Help"), "html", null, true);
                echo "
    ";
                $context["defaultLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 297
                echo "
    ";
                // line 298
                if ( !$this->getAttribute(($context["extraVars"] ?? null), "help", [], "any", true, true)) {
                    // line 299
                    echo "      ";
                    $context["extraVars"] = twig_array_merge(($context["extraVars"] ?? null), ["help" => ($context["defaultLabel"] ?? null)]);
                    // line 300
                    echo "    ";
                }
                // line 301
                echo "
    ";
                // line 302
                $context["vars"] = ["attr" => ["class" => "js-multi-store-restriction-switch"]];
                // line 303
                echo "
    ";
                // line 304
                echo $context["self"]->getform_group_row($this->getAttribute(($context["form"] ?? null), "shop_restriction_switch", []), ($context["vars"] ?? null), ($context["extraVars"] ?? null));
                echo "
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 308
    public function getlanguage_dependant_select($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 309
            echo "  ";
            $context["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 309)->unwrap();
            // line 310
            echo "
  ";
            // line 311
            $context["class"] = (($this->getAttribute(($context["extraVars"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "class", []), "")) : (""));
            // line 312
            echo "  ";
            $context["inputType"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "block_prefixes", [], "any", false, true), 1, [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "block_prefixes", [], "any", false, true), 1, []), "text")) : ("text"));
            // line 313
            echo "  ";
            $context["rowAttributes"] = (($this->getAttribute(($context["extraVars"] ?? null), "row_attr", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["extraVars"] ?? null), "row_attr", []), [])) : ([]));
            // line 314
            echo "  ";
            $context["attr"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "attr", []);
            // line 315
            echo "  ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " language_dependant_select"))]);
            // line 316
            echo "  <div class=\"form-group row type-";
            echo twig_escape_filter($this->env, ($context["inputType"] ?? null), "html", null, true);
            echo " ";
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
            // line 317
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter(($context["extraVars"] ?? null), [])) : ([]));
            // line 318
            echo "
  ";
            // line 320
            echo "  ";
            $context["labelOnTop"] = false;
            // line 321
            echo "
  ";
            // line 322
            if ($this->getAttribute(($context["extraVars"] ?? null), "label_on_top", [], "any", true, true)) {
                // line 323
                echo "    ";
                $context["labelOnTop"] = $this->getAttribute(($context["extraVars"] ?? null), "label_on_top", []);
                // line 324
                echo "  ";
            }
            // line 325
            echo "
  ";
            // line 326
            if ($this->getAttribute(($context["extraVars"] ?? null), "label", [], "any", true, true)) {
                // line 327
                echo "    ";
                $context["isRequired"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "required", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", [], "any", false, true), "required", []), false)) : (false));
                // line 328
                echo "
    ";
                // line 329
                if ($this->getAttribute(($context["extraVars"] ?? null), "required", [], "any", true, true)) {
                    // line 330
                    echo "      ";
                    $context["isRequired"] = $this->getAttribute(($context["extraVars"] ?? null), "required", []);
                    // line 331
                    echo "    ";
                }
                // line 332
                echo "
    <label for=\"";
                // line 333
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
                echo "\" class=\"form-control-label ";
                echo ((($context["labelOnTop"] ?? null)) ? ("label-on-top col-12") : (""));
                echo "\">
      ";
                // line 334
                if (($context["isRequired"] ?? null)) {
                    // line 335
                    echo "        <span class=\"text-danger\">*</span>
      ";
                }
                // line 337
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["extraVars"] ?? null), "label", []), "html", null, true);
                echo "
    </label>
  ";
            }
            // line 340
            echo "
  <div class=\"";
            // line 341
            echo "col-sm-5";
            echo "\">
    ";
            // line 342
            echo $context["self"]->getform_widget_with_error(($context["form"] ?? null), ["attr" => ($context["attr"] ?? null)], ($context["extraVars"] ?? null));
            echo "
  </div>
  ";
            // line 344
            if (($this->getAttribute(($context["extraVars"] ?? null), "languages", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["extraVars"] ?? null), "languages", [])))) {
                // line 345
                echo "  <div class=\"";
                echo "col-sm-3";
                echo "\">
    <select name=\"";
                // line 346
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []) . "_language"), "html", null, true);
                echo "\" class=\"custom-select language_dependant_select_language\">
    ";
                // line 347
                if (twig_test_iterable($this->getAttribute(($context["extraVars"] ?? null), "languages", []))) {
                    // line 348
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["extraVars"] ?? null), "languages", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 349
                        echo "        <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "id", []), "html", null, true);
                        echo "\">";
                        echo $this->getAttribute($context["language"], "value", []);
                        echo "</option>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 351
                    echo "    ";
                }
                // line 352
                echo "    </select>
  </div>
  ";
            }
            // line 355
            echo "  </div>
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
        return "@PrestaShop/Admin/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1176 => 355,  1171 => 352,  1168 => 351,  1157 => 349,  1152 => 348,  1150 => 347,  1146 => 346,  1141 => 345,  1139 => 344,  1134 => 342,  1130 => 341,  1127 => 340,  1120 => 337,  1116 => 335,  1114 => 334,  1108 => 333,  1105 => 332,  1102 => 331,  1099 => 330,  1097 => 329,  1094 => 328,  1091 => 327,  1089 => 326,  1086 => 325,  1083 => 324,  1080 => 323,  1078 => 322,  1075 => 321,  1072 => 320,  1069 => 318,  1067 => 317,  1047 => 316,  1044 => 315,  1041 => 314,  1038 => 313,  1035 => 312,  1033 => 311,  1030 => 310,  1027 => 309,  1013 => 308,  995 => 304,  992 => 303,  990 => 302,  987 => 301,  984 => 300,  981 => 299,  979 => 298,  976 => 297,  971 => 295,  967 => 294,  962 => 293,  959 => 292,  956 => 291,  953 => 290,  940 => 289,  921 => 284,  917 => 283,  914 => 282,  910 => 280,  904 => 278,  902 => 277,  896 => 275,  892 => 273,  890 => 272,  884 => 271,  881 => 270,  878 => 269,  875 => 268,  873 => 267,  870 => 266,  867 => 265,  865 => 264,  862 => 263,  859 => 262,  856 => 261,  854 => 260,  851 => 259,  848 => 258,  845 => 256,  843 => 255,  823 => 254,  820 => 253,  817 => 252,  815 => 251,  812 => 250,  809 => 249,  795 => 248,  778 => 238,  774 => 236,  765 => 233,  762 => 232,  758 => 231,  752 => 227,  746 => 224,  743 => 223,  741 => 222,  737 => 220,  734 => 219,  731 => 218,  728 => 217,  726 => 216,  723 => 215,  717 => 212,  712 => 210,  705 => 206,  701 => 204,  699 => 203,  693 => 200,  689 => 199,  686 => 198,  681 => 195,  672 => 192,  669 => 191,  665 => 190,  661 => 188,  659 => 187,  656 => 186,  650 => 185,  648 => 184,  645 => 183,  642 => 182,  639 => 181,  637 => 180,  634 => 179,  631 => 178,  626 => 177,  624 => 176,  621 => 175,  618 => 174,  615 => 173,  611 => 171,  605 => 170,  602 => 169,  599 => 168,  596 => 167,  591 => 166,  588 => 164,  582 => 163,  579 => 162,  574 => 161,  571 => 160,  568 => 158,  565 => 157,  563 => 156,  556 => 153,  553 => 152,  551 => 151,  548 => 150,  545 => 149,  543 => 148,  541 => 147,  538 => 146,  535 => 145,  532 => 143,  526 => 142,  523 => 141,  518 => 140,  516 => 139,  513 => 138,  510 => 137,  498 => 136,  480 => 123,  477 => 122,  471 => 120,  469 => 119,  464 => 118,  462 => 117,  457 => 115,  454 => 114,  451 => 113,  448 => 112,  445 => 111,  442 => 110,  440 => 109,  437 => 108,  434 => 107,  420 => 106,  402 => 93,  395 => 92,  382 => 91,  363 => 85,  359 => 84,  356 => 83,  351 => 81,  348 => 80,  346 => 79,  342 => 78,  338 => 77,  334 => 75,  331 => 74,  315 => 73,  298 => 69,  292 => 66,  288 => 65,  285 => 64,  281 => 62,  279 => 61,  268 => 60,  252 => 59,  233 => 54,  229 => 52,  217 => 51,  200 => 47,  194 => 45,  188 => 43,  186 => 42,  182 => 40,  169 => 39,  151 => 35,  144 => 34,  130 => 33,  112 => 30,  100 => 29,  82 => 26,  68 => 25,  63 => 307,  60 => 288,  57 => 241,  54 => 126,  51 => 96,  48 => 89,  45 => 71,  42 => 58,  39 => 50,  36 => 38,  33 => 32,  30 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/macros.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
