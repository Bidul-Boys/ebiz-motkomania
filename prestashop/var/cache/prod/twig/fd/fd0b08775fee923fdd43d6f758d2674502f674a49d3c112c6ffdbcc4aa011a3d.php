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

/* @PrestaShop/Admin/Multistore/header.html.twig */
class __TwigTemplate_13e8089c6757552e140d84c2e0472d82ccd0cae638d5927552be17a9f2ce3def extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'multistore_header' => [$this, 'block_multistore_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $this->displayBlock('multistore_header', $context, $blocks);
    }

    public function block_multistore_header($context, array $blocks = [])
    {
        // line 26
        echo "  ";
        if ((($context["isMultistoreUsed"] ?? null) &&  !(null === $this->getAttribute(($context["app"] ?? null), "request", [])))) {
            // line 27
            echo "    <div class=\"header-multishop";
            if (($context["isAllShopContext"] ?? null)) {
                echo " header-multishop-allshops";
            } elseif (twig_test_empty($this->getAttribute(($context["currentContext"] ?? null), "color", []))) {
                echo " header-multishop-default";
            }
            if ((($context["isTitleDark"] ?? null) === true)) {
                echo " header-multishop-dark";
            } else {
                echo " header-multishop-bright";
            }
            echo "\">
      <div class=\"header-multishop-top-bar\"";
            // line 28
            if ( !twig_test_empty($this->getAttribute(($context["currentContext"] ?? null), "color", []))) {
                echo " style=\"background-color: ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentContext"] ?? null), "color", []), "html", null, true);
                echo ";\"";
            }
            echo ">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
          ";
            // line 30
            if (($context["isShopContext"] ?? null)) {
                // line 31
                echo "            <svg width=\"43px\" height=\"30px\" viewBox=\"0 0 43 30\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
              <defs>
                  <rect id=\"path-1\" x=\"0\" y=\"0\" width=\"51\" height=\"36\"></rect>
              </defs>
              <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" opacity=\"0.599844\">
                <g id=\"storefront-24px-(1)\" transform=\"translate(-4.000000, -6.000000)\">
                  <g id=\"Shape\">
                    <mask id=\"mask-2\" fill=\"";
                // line 38
                if ( !(($context["isTitleDark"] ?? null) === true)) {
                    echo "white";
                } else {
                    echo "#fefefe";
                }
                echo "\">
                      <use xlink:href=\"#path-1\"></use>
                    </mask>
                    <g id=\"Mask\"></g>
                    <path d=\"M46.787234,18.4344444 L44.5290073,9.20888889 C44.0558551,7.30888889 42.3783153,6 40.4211856,6 L10.5480733,6 C8.61245052,6 6.91340382,7.33 6.46175849,9.20888889 L4.20353187,18.4344444 C3.68736578,20.5877778 4.16051803,22.7833333 5.53696092,24.5144444 C5.70901628,24.7466667 5.94559241,24.9155556 6.13915469,25.1266667 L6.13915469,39.7777778 C6.13915469,42.1 8.07477751,44 10.4405387,44 L40.5502271,44 C42.9159883,44 44.8516111,42.1 44.8516111,39.7777778 L44.8516111,25.1266667 C45.0451734,24.9366667 45.2817495,24.7466667 45.4538049,24.5355556 C46.8302478,22.8044444 47.324907,20.5877778 46.787234,18.4344444 Z M40.3566648,10.2011111 L42.6148914,19.4266667 C42.8299606,20.3133333 42.6363984,21.2 42.0772184,21.8966667 C41.7761215,22.2766667 41.1309139,22.8888889 40.0555679,22.8888889 C38.7436458,22.8888889 37.603779,21.8544444 37.4532306,20.4822222 L36.2058292,10.2222222 L40.3566648,10.2011111 Z M27.6460749,10.2222222 L31.8614313,10.2222222 L33.022805,19.7644444 C33.1303396,20.5877778 32.8722566,21.4111111 32.3130766,22.0233333 C31.8399244,22.5722222 31.1517029,22.8888889 30.2699192,22.8888889 C28.8289556,22.8888889 27.6460749,21.6433333 27.6460749,20.1233333 L27.6460749,10.2222222 Z M17.9464539,19.7644444 L19.1293345,10.2222222 L23.3446909,10.2222222 L23.3446909,20.1233333 C23.3446909,21.6433333 22.1618103,22.8888889 20.5702982,22.8888889 C19.8390629,22.8888889 19.1723484,22.5722222 18.6561823,22.0233333 C18.1185093,21.4111111 17.8604262,20.5877778 17.9464539,19.7644444 Z M8.37587439,19.4266667 L10.5480733,10.2222222 L14.7849366,10.2222222 L13.5375353,20.4822222 C13.3654799,21.8544444 12.24712,22.8888889 10.9351979,22.8888889 C9.88135881,22.8888889 9.21464428,22.2766667 8.93505432,21.8966667 C8.35436747,21.2211111 8.16080519,20.3133333 8.37587439,19.4266667 Z M10.4405387,39.7777778 L10.4405387,27.0477778 C10.6125941,27.0688889 10.7631425,27.1111111 10.9351979,27.1111111 C12.8063,27.1111111 14.5053467,26.3511111 15.752748,25.1055556 C17.0431633,26.3722222 18.7637169,27.1111111 20.7208466,27.1111111 C22.5919487,27.1111111 24.2694885,26.3511111 25.5168898,25.1477778 C26.7857981,26.3511111 28.5063517,27.1111111 30.4419746,27.1111111 C32.2485559,27.1111111 33.9691095,26.3722222 35.2595247,25.1055556 C36.5069261,26.3511111 38.2059728,27.1111111 40.0770748,27.1111111 C40.2491302,27.1111111 40.3996786,27.0688889 40.571734,27.0477778 L40.571734,39.7777778 L10.4405387,39.7777778 Z\" fill=\"";
                // line 42
                if ( !(($context["isTitleDark"] ?? null) === true)) {
                    echo "white";
                } else {
                    echo "black";
                }
                echo "\" fill-rule=\"nonzero\" mask=\"url(#mask-2)\"></path>
                  </g>
                </g>
              </g>
            </svg>
          ";
            } else {
                // line 48
                echo "            <svg width=\"81px\" height=\"30px\" viewBox=\"0 0 81 30\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                <defs>
                    <path d=\"M6.548,0 L36.421,0 C38.378,0 40.056,1.309 40.528,3.208 L42.787,12.434 C43.324,14.588 42.83,16.805 41.453,18.536 C41.281,18.747 41.045,18.937 40.852,19.127 L40.852,30 L36.572,30 L36.572,21.047 C36.4,21.069 36.25,21.111 36.078,21.111 C34.206,21.111 32.507,20.352 31.259,19.106 C29.969,20.372 28.248,21.111 26.441,21.111 C24.506,21.111 22.786,20.352 21.516,19.148 C20.27,20.352 18.592,21.111 16.721,21.111 C14.764,21.111 13.043,20.372 11.753,19.106 C10.505,20.352 8.806,21.111 6.935,21.111 C6.763,21.111 6.612,21.069 6.441,21.047 L6.441,30 L2.139,30 L2.139,19.127 C1.945,18.916 1.709,18.747 1.537,18.515 C0.16,16.783 -0.312,14.588 0.204,12.434 L2.462,3.208 C2.914,1.33 4.613,0 6.548,0 Z M33.453,14.482 C33.604,15.854 34.744,16.888 36.056,16.888 C37.131,16.888 37.776,16.276 38.077,15.897 C38.636,15.2 38.831,14.314 38.615,13.426 L36.357,4.201 L32.207,4.223 L33.453,14.482 Z M23.646,14.124 C23.646,15.643 24.829,16.888 26.269,16.888 C27.151,16.888 27.84,16.572 28.312,16.024 C28.872,15.411 29.13,14.588 29.023,13.765 L27.862,4.223 L23.646,4.223 L23.646,14.124 Z M14.657,16.024 C15.172,16.572 15.839,16.888 16.57,16.888 C18.161,16.888 19.345,15.643 19.345,14.124 L19.345,4.223 L15.129,4.223 L13.947,13.765 C13.86,14.588 14.118,15.411 14.657,16.024 Z M4.935,15.897 C5.215,16.276 5.881,16.888 6.935,16.888 C8.247,16.888 9.366,15.854 9.537,14.482 L10.786,4.223 L6.548,4.223 L4.376,13.426 C4.16,14.314 4.354,15.221 4.935,15.897 Z\" id=\"path-1\"></path>
                </defs>
                <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" opacity=\"0.6\">
                    <g id=\"Group-9\">
                        <g id=\"Group-3\" transform=\"translate(19.000000, 0.000000)\">
                            <mask id=\"mask-2\" fill=\"";
                // line 55
                if ( !(($context["isTitleDark"] ?? null) === true)) {
                    echo "white";
                } else {
                    echo "black";
                }
                echo "\">
                                <use xlink:href=\"#path-1\"></use>
                            </mask>
                            <use id=\"Clip-2\" fill=\"";
                // line 58
                if ( !(($context["isTitleDark"] ?? null) === true)) {
                    echo "white";
                } else {
                    echo "black";
                }
                echo "\" xlink:href=\"#path-1\"></use>
                        </g>
                        <g id=\"Group-8\" transform=\"translate(0.000000, 4.000000)\" fill=\"";
                // line 60
                if ( !(($context["isTitleDark"] ?? null) === true)) {
                    echo "#FEFEFE";
                } else {
                    echo "black";
                }
                echo "\">
                            <path d=\"M4.2258,11.7283 L6.0998,3.8023 L9.7558,3.8023 L8.6798,12.6373 C8.5318,13.8193 7.5658,14.7093 6.4338,14.7093 C5.5248,14.7093 4.9498,14.1833 4.7078,13.8553 C4.2068,13.2733 4.0398,12.4923 4.2258,11.7283 M2.2958,16.6373 L2.2958,25.9113 L6.0068,25.9113 L6.0068,18.2913 C6.1558,18.3093 6.2858,18.3453 6.4338,18.3453 C8.0488,18.3453 9.5138,17.6913 10.5898,16.6183 C11.7048,17.7093 13.1888,18.3453 14.8768,18.3453 C16.2248,18.3453 17.4538,17.8843 18.4508,17.1303 C18.0988,16.6513 17.1618,15.7283 16.5088,13.9473 C16.0798,14.4133 15.4638,14.7093 14.7468,14.7093 C14.1168,14.7093 13.5408,14.4373 13.0958,13.9643 C12.6318,13.4373 12.4098,12.7283 12.4838,12.0193 L13.5038,3.8023 L17.1408,3.8023 L17.1408,5.0093 C17.4468,3.5693 17.8188,1.9613 18.2638,0.1663 L6.0998,0.1663 C4.4298,0.1663 2.9638,1.3113 2.5748,2.9303 L0.6258,10.8743 C0.1808,12.7283 0.5888,14.6193 1.7768,16.1093 C1.9248,16.3103 2.1288,16.4553 2.2958,16.6373\" id=\"Fill-4\"></path>
                            <path d=\"M75.1653,3.8025 L77.0393,11.7285 C77.2253,12.4915 77.0583,13.2735 76.5573,13.8555 C76.3153,14.1825 75.7403,14.7095 74.8313,14.7095 C73.6993,14.7095 72.7343,13.8195 72.5863,12.6375 L71.5103,3.8025 L75.1653,3.8025 Z M66.5193,14.7095 C65.8023,14.7095 65.1863,14.4135 64.7563,13.9475 C64.1033,15.7285 63.1663,16.6515 62.8143,17.1305 C63.8113,17.8845 65.0403,18.3455 66.3893,18.3455 C68.0773,18.3455 69.5613,17.7095 70.6753,16.6185 C71.7513,17.6915 73.2173,18.3455 74.8313,18.3455 C74.9793,18.3455 75.1093,18.3095 75.2583,18.2915 L75.2583,26.0025 L78.9693,26.0025 L78.9693,16.6365 C79.1363,16.4545 79.3403,16.3095 79.4883,16.1095 C80.6763,14.6185 81.0843,12.7285 80.6393,10.8745 L78.6903,2.9295 C78.3013,1.3115 76.8353,0.1665 75.1653,0.1665 L63.0013,0.1665 C63.4463,1.9615 63.8183,3.5695 64.1253,5.0095 L64.1253,3.8025 L67.7623,3.8025 L68.7823,12.0195 C68.8563,12.7285 68.6343,13.4375 68.1703,13.9645 C67.7253,14.4375 67.1493,14.7095 66.5193,14.7095 Z\" id=\"Fill-6\"></path>
                        </g>
                    </g>
                </g>
            </svg>
          ";
            }
            // line 68
            echo "
          <h2 class=\"header-multishop-title\">
          ";
            // line 70
            if (($context["isGroupContext"] ?? null)) {
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", [], "Admin.Global") . " "), "html", null, true);
                echo " ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentContext"] ?? null), "name", []), "html", null, true);
            echo "
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      ";
            // line 79
            if (($context["isShopContext"] ?? null)) {
                // line 80
                echo "        <div class=\"header-multishop-right\">
          <a class=\"header-multishop-view-action\" href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute(($context["link"] ?? null), "getBaseLink", [0 => $this->getAttribute(($context["currentContext"] ?? null), "id", [])], "method"), "html", null, true);
                echo "\" target=\"_blank\" rel=\"nofollow\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View my shop", [], "Admin.Navigation.Header"), "html", null, true);
                echo " <i class=\"material-icons\">visibility</i></a>
        </div>
      ";
            }
            // line 84
            echo "
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
            ";
            // line 88
            if ((($context["lockedToAllShopContext"] ?? null) == false)) {
                // line 89
                echo "            <div class=\"multishop-modal-search-container\">
              <i class=\"material-icons\">search</i>
              <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"Search shop name\" data-no-results=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No results found for", [], "Admin.Global"), "html", null, true);
                echo "\" data-searching=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching for", [], "Admin.Global"), "html", null, true);
                echo "\">
            </div>
            ";
            }
            // line 94
            echo "
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
                <li class=\"multishop-modal-all multishop-modal-item\">
                  ";
            // line 97
            if (($context["isAllShopContext"] ?? null)) {
                // line 98
                echo "                    <i class=\"material-icons\">check</i>
                  ";
            } else {
                // line 100
                echo "                    <span class=\"multishop-modal-color\" style=\"background-color:#25b9d7;\"></span>
                  ";
            }
            // line 102
            echo "                  <a class=\"multishop-modal-all-name\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\MultistoreUrlExtension')->generateUrl(), "html", null, true);
            echo "\">
                    <span>";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All shops", [], "Admin.Global"), "html", null, true);
            echo "</span>
                  </a>
                </li>

              ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groupList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                if ( !twig_test_empty($this->getAttribute($context["group"], "shops", []))) {
                    // line 108
                    echo "                <li class=\"multishop-modal-group-item multishop-modal-item\">
                  <span class=\"multishop-modal-color-container";
                    // line 109
                    if ((($context["isGroupContext"] ?? null) && ($this->getAttribute(($context["currentContext"] ?? null), "id", []) == $this->getAttribute($context["group"], "id", [])))) {
                        echo " multishop-modal-color-check";
                    }
                    echo "\">
                    <i class=\"material-icons\">check</i>
                    <a class=\"multishop-modal-color\"";
                    // line 111
                    if ( !twig_test_empty($this->getAttribute($context["group"], "color", []))) {
                        echo " style=\"background-color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "color", []), "html", null, true);
                        echo ";\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminShopGroup", true, ["id_shop_group" => $this->getAttribute($context["group"], "id", []), "updateshop_group" => true]), "html", null, true);
                    echo "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit color", [], "Admin.Global"), "html", null, true);
                    echo "\" data-original-title=\"\" title=\"\"></a>
                  </span>
                  <a class=\"multishop-modal-group-name\" href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\MultistoreUrlExtension')->generateGroupUrl($context["group"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Group", [], "Admin.Global") . " ") . $this->getAttribute($context["group"], "name", [])), "html", null, true);
                    echo "</a>
                </li>

                ";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "shops", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                        // line 117
                        echo "                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    <div class=\"multishop-modal-item-left\">
                    <span class=\"multishop-modal-color-container";
                        // line 119
                        if ((($context["isShopContext"] ?? null) && ($this->getAttribute(($context["currentContext"] ?? null), "id", []) == $this->getAttribute($context["shop"], "id", [])))) {
                            echo " multishop-modal-color-check";
                        }
                        echo "\">
                      <i class=\"material-icons\">check</i>
                      <a class=\"multishop-modal-color\"";
                        // line 121
                        if ( !twig_test_empty($this->getAttribute($context["shop"], "color", []))) {
                            echo " style=\"background-color: ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "color", []), "html", null, true);
                            echo ";\"";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminShop", true, ["shop_id" => $this->getAttribute($context["shop"], "id", []), "updateshop" => true]), "html", null, true);
                        echo "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit color", [], "Admin.Global"), "html", null, true);
                        echo "\" data-original-title=\"\" title=\"\"></a>
                    </span>
                    <a class=\"multishop-modal-shop-name";
                        // line 123
                        if (($this->getAttribute($context["shop"], "hasMainUrl", [], "method") == false)) {
                            echo " multishop-modal-no-url\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "name", []), "html", null, true);
                            echo "</a>";
                        } else {
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\MultistoreUrlExtension')->generateShopUrl($context["shop"]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "name", []), "html", null, true);
                            echo "</a>";
                        }
                        // line 124
                        echo "                    </div>
                    ";
                        // line 125
                        if ($this->getAttribute($context["shop"], "hasMainUrl", [], "method")) {
                            // line 126
                            echo "                      <a class=\"multishop-modal-shop-view\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["link"] ?? null), "getBaseLink", [0 => $this->getAttribute($context["shop"], "id", [])], "method"), "html", null, true);
                            echo "\" target=\"_blank\" rel=\"noreferrer\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View my shop", [], "Admin.Navigation.Header"), "html", null, true);
                            echo " <i class=\"material-icons\">visibility</i></a>
                    ";
                        } else {
                            // line 128
                            echo "                      <a class=\"multishop-modal-shop-view\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminShopUrl", true, ["shop_id" => $this->getAttribute($context["shop"], "id", []), "addshop_url" => 1]), "html", null, true);
                            echo "\" rel=\"noreferrer\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure URL", [], "Admin.Actions"), "html", null, true);
                            echo " <i class=\"material-icons\">visibility</i></a>
                    ";
                        }
                        // line 130
                        echo "                  </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo "              ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/multistore_header.bundle.js"), "html", null, true);
            echo "\"></script>
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Multistore/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  340 => 139,  332 => 133,  325 => 132,  318 => 130,  310 => 128,  302 => 126,  300 => 125,  297 => 124,  285 => 123,  272 => 121,  265 => 119,  261 => 117,  257 => 116,  249 => 113,  236 => 111,  229 => 109,  226 => 108,  221 => 107,  214 => 103,  209 => 102,  205 => 100,  201 => 98,  199 => 97,  194 => 94,  186 => 91,  182 => 89,  180 => 88,  174 => 84,  166 => 81,  163 => 80,  161 => 79,  145 => 70,  141 => 68,  126 => 60,  117 => 58,  107 => 55,  98 => 48,  85 => 42,  74 => 38,  65 => 31,  63 => 30,  54 => 28,  40 => 27,  37 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Multistore/header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Multistore/header.html.twig");
    }
}
