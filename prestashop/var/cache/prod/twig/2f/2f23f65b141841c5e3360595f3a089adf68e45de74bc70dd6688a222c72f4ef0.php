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

/* @PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig */
class __TwigTemplate_9086f8e6ec11b4ef609be7911996da2c863013a1a1e2199f2e80df33b306dd9e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'typeahead_product_collection_widget' => [$this, 'block_typeahead_product_collection_widget'],
            'typeahead_product_pack_collection_widget' => [$this, 'block_typeahead_product_pack_collection_widget'],
            'typeahead_customer_collection_widget' => [$this, 'block_typeahead_customer_collection_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $this->displayBlock('typeahead_product_collection_widget', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('typeahead_product_pack_collection_widget', $context, $blocks);
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('typeahead_customer_collection_widget', $context, $blocks);
    }

    // line 25
    public function block_typeahead_product_collection_widget($context, array $blocks = [])
    {
        // line 26
        echo "    <div
      class=\"autocomplete-search\"
      data-formid=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\"
      data-fullname=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
        echo "\"
      data-mappingvalue=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? null), "html", null, true);
        echo "\"
      data-mappingname=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo "\"
      data-remoteurl=\"";
        // line 32
        echo ($context["remote_url"] ?? null);
        echo "\"
      data-limit=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo "\"
    >
        <div class=\"search search-with-icon\">
          ";
        // line 37
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control search typeahead ") . $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", [])))]);
        // line 39
        $context["full_name"] = "";
        // line 40
        echo "<input type=\"text\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
        </div>
        <small class=\"form-text text-muted text-right typeahead-hint\">
          ";
        // line 43
        if (($context["help"] ?? null)) {
            // line 44
            echo "            ";
            echo ($context["help"] ?? null);
            echo "
          ";
        }
        // line 46
        echo "        </small>
        <ul id=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-data\" class=\"typeahead-list nostyle col-sm-12 product-list\">
            ";
        // line 48
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? null)) > 0))) {
            // line 49
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", []), "html", null, true);
                echo "\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        ";
                // line 55
                echo sprintf(($context["template_collection"] ?? null), $this->getAttribute($context["item"], "name", []));
                echo "
                      </div>
                      <input type=\"hidden\" name=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "\" />
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            ";
        }
        // line 61
        echo "        </ul>

        <div class=\"invisible\" id=\"tplcollection-";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\">
          ";
        // line 64
        echo ($context["template_collection"] ?? null);
        echo "
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "').on('focusout', function resetSearchBar() {
        \$('#";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "').typeahead('val', '');
      });
    </script>
";
    }

    // line 74
    public function block_typeahead_product_pack_collection_widget($context, array $blocks = [])
    {
        // line 75
        echo "    <h2 class=\"title-products ";
        echo (((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? null)) > 0))) ? ("") : ("hide"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of products for this pack", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <ul id=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-data\" class=\"typeahead-list pack nostyle row\">
        ";
        // line 77
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? null)) > 0))) {
            // line 78
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 79
                echo "                <li data-product=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", []), "html", null, true);
                echo "\" class=\"col-xl-3 col-lg-6 mb-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", []), "html", null, true);
                echo "\" /> ";
                echo sprintf(($context["template_collection"] ?? null), $this->getAttribute($context["item"], "name", []), $this->getAttribute($context["item"], "ref", []), $this->getAttribute($context["item"], "quantity", []));
                echo "
                        <input type=\"hidden\" name=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", []), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", []), "html", null, true);
                echo "\" />
                        <input type=\"hidden\" name=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", []), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", []), "html", null, true);
                echo "\" />
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        ";
        }
        // line 88
        echo "    </ul>

    <h2>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "label", []), "html", null, true);
        echo "</h2>

    <div class=\"row mb-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"form-control typeahead search ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">×</span>
                </div>
                <input type=\"number\" id=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-curPackItemAdd\" class=\"btn btn-secondary btn-block\">
                    <i class=\"material-icons\">add</i>
                    ";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure you want to delete this item?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo " h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 mb-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('";
        // line 141
        ob_start(function () { return ''; });
        echo ($context["template_collection"] ?? null);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', data.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo ", data.ref, number);
                        html += '<input type=\"hidden\" name=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-data').append(html);
                        \$('#js_";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo " h4.title-products').removeClass('hide');

                        \$('#";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-curPackItemQty').val(1);
                });

                //define source
                this['";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.";
        // line 161
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? null), "html", null, true);
        echo ";
                    },
                    remote: {
                        url: '";
        // line 164
        echo ($context["remote_url"] ?? null);
        echo "',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '";
        // line 198
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo "',
                    source: this['";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
";
    }

    // line 219
    public function block_typeahead_customer_collection_widget($context, array $blocks = [])
    {
        // line 220
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <input type=\"text\" id=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"form-control typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? null), "html", null, true);
        echo "\" autocomplete=\"off\" />
    <ul id=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-data\" class=\"typeahead-list product-list nostyle col-sm-12\">
      ";
        // line 223
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? null)) > 0))) {
            // line 224
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 225
                echo "            <li class=\"media\">
                <div class=\"media-body\">
                  ";
                // line 227
                echo sprintf(($context["template_collection"] ?? null), $this->getAttribute($context["item"], "name", []));
                echo "
                </div>
                <input type=\"hidden\" name=\"";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
                echo "\" />
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "      ";
        }
        // line 233
        echo "    </ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure you want to delete this item?'], null, {
                    onContinue: function(){
                        _this.closest('li').remove();
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.";
        // line 255
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? null), "html", null, true);
        echo ";
                },
                remote: {
                    url: '";
        // line 258
        echo ($context["remote_url"] ?? null);
        echo "',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '";
        // line 278
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo "',
                source: this['";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.";
        // line 283
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo " +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if(";
        // line 289
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo " != 0 && \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-data li').length >= ";
        echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
        echo "){
                    return;
                }

                var value = suggestion.";
        // line 293
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? null), "html", null, true);
        echo ";
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('";
        // line 299
        ob_start(function () { return ''; });
        echo ($context["template_collection"] ?? null);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', suggestion.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? null), "html", null, true);
        echo ");
                html += '<input type=\"hidden\" name=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "full_name", []), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-data').show();
                \$('#";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "id", []), "html", null, true);
        echo "-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  616 => 303,  612 => 302,  607 => 300,  599 => 299,  590 => 293,  579 => 289,  570 => 283,  563 => 279,  559 => 278,  549 => 271,  533 => 258,  527 => 255,  520 => 251,  503 => 237,  497 => 233,  494 => 232,  483 => 229,  478 => 227,  474 => 225,  469 => 224,  467 => 223,  463 => 222,  455 => 221,  450 => 220,  447 => 219,  437 => 212,  421 => 199,  417 => 198,  408 => 192,  389 => 176,  374 => 164,  368 => 161,  361 => 157,  354 => 153,  347 => 149,  342 => 147,  338 => 146,  331 => 142,  323 => 141,  313 => 134,  307 => 131,  298 => 125,  287 => 117,  275 => 108,  270 => 106,  262 => 101,  248 => 94,  241 => 90,  237 => 88,  234 => 87,  218 => 83,  208 => 82,  202 => 81,  194 => 79,  189 => 78,  187 => 77,  183 => 76,  176 => 75,  173 => 74,  165 => 69,  161 => 68,  154 => 64,  150 => 63,  146 => 61,  143 => 60,  132 => 57,  127 => 55,  121 => 52,  117 => 50,  112 => 49,  110 => 48,  106 => 47,  103 => 46,  97 => 44,  95 => 43,  84 => 40,  82 => 39,  80 => 37,  74 => 33,  70 => 32,  66 => 31,  62 => 30,  58 => 29,  54 => 28,  50 => 26,  47 => 25,  43 => 219,  40 => 218,  38 => 74,  35 => 73,  33 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/typeahead.html.twig");
    }
}
