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

/* portfolio.html.twig */
class __TwigTemplate_44c2d71d40491fe3ac5b44a406954a7744259a2b7620f00302faceca8061ed63 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "portfolio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 5
        echo "
<section class=\"section portfolio\">
    <section class=\"container ";
        // line 7
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
        <div class=\"columns\">
            <div class=\"column col-12\">
                <div class=\"content\">
                    ";
        // line 11
        echo ($context["content"] ?? null);
        echo "
                </div>
                
                ";
        // line 15
        echo "                ";
        $context["all_portfolio_items"] = [];
        // line 16
        echo "                
                ";
        // line 18
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 19
            echo "                    ";
            if ((($this->getAttribute($context["child"], "template", []) == "portfolio-item") && $this->getAttribute($this->getAttribute($context["child"], "header", []), "gallery", []))) {
                // line 20
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "header", []), "gallery", []));
                foreach ($context['_seq'] as $context["_key"] => $context["gallery_item"]) {
                    // line 21
                    echo "                            ";
                    $context["item_data"] = ["page" =>                     // line 22
$context["child"], "gallery_item" =>                     // line 23
$context["gallery_item"], "stand_type" => $this->getAttribute($this->getAttribute(                    // line 24
$context["child"], "header", []), "stand_type", []), "construction_area" => $this->getAttribute($this->getAttribute(                    // line 25
$context["child"], "header", []), "construction_area", []), "exhibition_name" => $this->getAttribute($this->getAttribute(                    // line 26
$context["child"], "header", []), "exhibition_name", []), "company_name" => $this->getAttribute($this->getAttribute(                    // line 27
$context["child"], "header", []), "company_name", []), "project_year" => $this->getAttribute($this->getAttribute(                    // line 28
$context["child"], "header", []), "project_year", []), "source" => "portfolio"];
                    // line 31
                    echo "                            ";
                    $context["all_portfolio_items"] = twig_array_merge(($context["all_portfolio_items"] ?? null), [0 => ($context["item_data"] ?? null)]);
                    // line 32
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery_item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                    ";
            }
            // line 34
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                
                ";
        // line 37
        echo "                ";
        $context["services_page"] = $this->getAttribute(($context["pages"] ?? null), "find", [0 => "/uslugi/razrabotka-stendov"], "method");
        // line 38
        echo "                ";
        if (($context["services_page"] ?? null)) {
            // line 39
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["services_page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["service_child"]) {
                // line 40
                echo "                        ";
                if ((($this->getAttribute($context["service_child"], "template", []) == "stand-page") && $this->getAttribute($this->getAttribute($context["service_child"], "header", []), "gallery", []))) {
                    // line 41
                    echo "                            ";
                    $context["stand_type"] = null;
                    // line 42
                    echo "                            ";
                    if (($this->getAttribute($context["service_child"], "slug", []) == "typovye")) {
                        // line 43
                        echo "                                ";
                        $context["stand_type"] = "typovye";
                        // line 44
                        echo "                            ";
                    } elseif (($this->getAttribute($context["service_child"], "slug", []) == "nestandart")) {
                        // line 45
                        echo "                                ";
                        $context["stand_type"] = "nestandart";
                        // line 46
                        echo "                            ";
                    } elseif (($this->getAttribute($context["service_child"], "slug", []) == "ekskluziv")) {
                        // line 47
                        echo "                                ";
                        $context["stand_type"] = "ekskluziv";
                        // line 48
                        echo "                            ";
                    }
                    // line 49
                    echo "                            
                            ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["service_child"], "header", []), "gallery", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["gallery_item"]) {
                        // line 51
                        echo "                                ";
                        if ($this->getAttribute($context["gallery_item"], "images", [])) {
                            // line 52
                            echo "                                    ";
                            // line 53
                            echo "                                    ";
                            $context["item_data"] = ["page" =>                             // line 54
$context["service_child"], "gallery_item" =>                             // line 55
$context["gallery_item"], "stand_type" =>                             // line 56
($context["stand_type"] ?? null), "construction_area" => $this->getAttribute(                            // line 57
$context["gallery_item"], "construction_area", []), "exhibition_name" => $this->getAttribute(                            // line 58
$context["gallery_item"], "exhibition_name", []), "company_name" => $this->getAttribute(                            // line 59
$context["gallery_item"], "company_name", []), "project_year" => $this->getAttribute(                            // line 60
$context["gallery_item"], "project_year", []), "source" => "services", "images" => $this->getAttribute(                            // line 62
$context["gallery_item"], "images", [])];
                            // line 64
                            echo "                                    ";
                            $context["all_portfolio_items"] = twig_array_merge(($context["all_portfolio_items"] ?? null), [0 => ($context["item_data"] ?? null)]);
                            // line 65
                            echo "                                ";
                        } else {
                            // line 66
                            echo "                                    ";
                            // line 67
                            echo "                                    ";
                            $context["item_data"] = ["page" =>                             // line 68
$context["service_child"], "gallery_item" =>                             // line 69
$context["gallery_item"], "stand_type" =>                             // line 70
($context["stand_type"] ?? null), "construction_area" => $this->getAttribute(                            // line 71
$context["gallery_item"], "construction_area", []), "exhibition_name" => $this->getAttribute(                            // line 72
$context["gallery_item"], "exhibition_name", []), "company_name" => $this->getAttribute(                            // line 73
$context["gallery_item"], "company_name", []), "project_year" => $this->getAttribute(                            // line 74
$context["gallery_item"], "project_year", []), "source" => "services"];
                            // line 77
                            echo "                                    ";
                            $context["all_portfolio_items"] = twig_array_merge(($context["all_portfolio_items"] ?? null), [0 => ($context["item_data"] ?? null)]);
                            // line 78
                            echo "                                ";
                        }
                        // line 79
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "                        ";
                }
                // line 81
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service_child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                ";
        }
        // line 83
        echo "                
                ";
        // line 84
        if ((twig_length_filter($this->env, ($context["all_portfolio_items"] ?? null)) > 0)) {
            // line 85
            echo "                <div class=\"portfolio-section\" id=\"portfolio-content\">
                    ";
            // line 87
            echo "                    <div class=\"portfolio-filters\">
                        <h3>Фильтр по типу стенда:</h3>
                        <div class=\"filter-buttons\">
                            <button class=\"filter-btn active\" data-filter=\"all\">Все проекты</button>
                            <button class=\"filter-btn\" data-filter=\"typovye\">Типовые стенды</button>
                            <button class=\"filter-btn\" data-filter=\"nestandart\">Нестандартные стенды</button>
                            <button class=\"filter-btn\" data-filter=\"ekskluziv\">Эксклюзивные стенды</button>
                        </div>
                        <div class=\"filter-status\" id=\"filter-status\"></div>
                    </div>
                    
                    <div class=\"portfolio-gallery\">
                        <div class=\"portfolio-grid\">
                            ";
            // line 100
            $context["gallery_id"] = "portfolio-main";
            // line 101
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all_portfolio_items"] ?? null));
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
                // line 102
                echo "                                ";
                $context["gallery_item"] = $this->getAttribute($context["item"], "gallery_item", []);
                // line 103
                echo "                                ";
                $context["page_obj"] = $this->getAttribute($context["item"], "page", []);
                // line 104
                echo "                                
                                <div class=\"portfolio-item\" data-type=\"";
                // line 105
                (($this->getAttribute($context["item"], "stand_type", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true))) : (print ("unknown")));
                echo "\">
                                    ";
                // line 106
                $context["project_images"] = [];
                // line 107
                echo "                                    ";
                $context["main_image"] = null;
                // line 108
                echo "                                    ";
                $context["title"] = (($this->getAttribute(($context["gallery_item"] ?? null), "title", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "title", [])) : ("Проект"));
                // line 109
                echo "                                    ";
                $context["desc"] = (($this->getAttribute(($context["gallery_item"] ?? null), "desc", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "desc", [])) : (""));
                // line 110
                echo "                                    
                                    ";
                // line 112
                echo "                                    ";
                if ($this->getAttribute($context["item"], "images", [])) {
                    // line 113
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "images", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["img_item"]) {
                        // line 114
                        echo "                                            ";
                        $context["img_obj"] = null;
                        // line 115
                        echo "                                            
                                            ";
                        // line 117
                        echo "                                            ";
                        if ($this->getAttribute($context["img_item"], "image_upload", [])) {
                            // line 118
                            echo "                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["img_item"], "image_upload", []));
                            foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                                // line 119
                                echo "                                                    ";
                                if (( !($context["img_obj"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                    // line 120
                                    echo "                                                        ";
                                    $context["img_obj"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                    // line 121
                                    echo "                                                    ";
                                }
                                // line 122
                                echo "                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 123
                            echo "                                            ";
                        }
                        // line 124
                        echo "                                            
                                            ";
                        // line 125
                        if (($context["img_obj"] ?? null)) {
                            // line 126
                            echo "                                                ";
                            $context["img_data"] = ["image" =>                             // line 127
($context["img_obj"] ?? null), "caption" => (($this->getAttribute(                            // line 128
$context["img_item"], "caption", [])) ? ($this->getAttribute($context["img_item"], "caption", [])) : ("")), "is_main" => (($this->getAttribute(                            // line 129
$context["img_item"], "is_main", [])) ? ($this->getAttribute($context["img_item"], "is_main", [])) : (false))];
                            // line 131
                            echo "                                                ";
                            $context["project_images"] = twig_array_merge(($context["project_images"] ?? null), [0 => ($context["img_data"] ?? null)]);
                            // line 132
                            echo "                                                
                                                ";
                            // line 134
                            echo "                                                ";
                            if (($this->getAttribute($context["img_item"], "is_main", []) &&  !($context["main_image"] ?? null))) {
                                // line 135
                                echo "                                                    ";
                                $context["main_image"] = ($context["img_obj"] ?? null);
                                // line 136
                                echo "                                                ";
                            }
                            // line 137
                            echo "                                            ";
                        }
                        // line 138
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo "                                    ";
                } else {
                    // line 140
                    echo "                                        ";
                    // line 141
                    echo "                                        ";
                    $context["item_image"] = null;
                    // line 142
                    echo "                                        
                                        ";
                    // line 144
                    echo "                                        ";
                    if ($this->getAttribute(($context["gallery_item"] ?? null), "image_upload", [])) {
                        // line 145
                        echo "                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["gallery_item"] ?? null), "image_upload", []));
                        foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                            // line 146
                            echo "                                                ";
                            if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                // line 147
                                echo "                                                    ";
                                $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                // line 148
                                echo "                                                ";
                            }
                            // line 149
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 150
                        echo "                                        ";
                    }
                    // line 151
                    echo "                                        
                                        ";
                    // line 153
                    echo "                                        ";
                    if (( !($context["item_image"] ?? null) && $this->getAttribute(($context["gallery_item"] ?? null), "image_name", []))) {
                        // line 154
                        echo "                                            ";
                        $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute(($context["gallery_item"] ?? null), "image_name", []), [], "array");
                        // line 155
                        echo "                                        ";
                    }
                    // line 156
                    echo "                                        
                                        ";
                    // line 158
                    echo "                                        ";
                    if (( !($context["item_image"] ?? null) && $this->getAttribute(($context["gallery_item"] ?? null), "image", []))) {
                        // line 159
                        echo "                                            ";
                        $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute(($context["gallery_item"] ?? null), "image", []), [], "array");
                        // line 160
                        echo "                                        ";
                    }
                    // line 161
                    echo "                                        
                                        ";
                    // line 162
                    if (($context["item_image"] ?? null)) {
                        // line 163
                        echo "                                            ";
                        $context["img_data"] = ["image" =>                         // line 164
($context["item_image"] ?? null), "caption" =>                         // line 165
($context["desc"] ?? null), "is_main" => true];
                        // line 168
                        echo "                                            ";
                        $context["project_images"] = [0 => ($context["img_data"] ?? null)];
                        // line 169
                        echo "                                            ";
                        $context["main_image"] = ($context["item_image"] ?? null);
                        // line 170
                        echo "                                        ";
                    }
                    // line 171
                    echo "                                    ";
                }
                // line 172
                echo "                                    
                                    ";
                // line 174
                echo "                                    ";
                if (( !($context["main_image"] ?? null) && (twig_length_filter($this->env, ($context["project_images"] ?? null)) > 0))) {
                    // line 175
                    echo "                                        ";
                    $context["main_image"] = $this->getAttribute($this->getAttribute(($context["project_images"] ?? null), 0, [], "array"), "image", []);
                    // line 176
                    echo "                                    ";
                }
                // line 177
                echo "                                    
                                    ";
                // line 178
                if ((($context["main_image"] ?? null) && (twig_length_filter($this->env, ($context["project_images"] ?? null)) > 0))) {
                    // line 179
                    echo "                                        ";
                    $context["thumb_width"] = 400;
                    // line 180
                    echo "                                        ";
                    $context["thumb_height"] = 300;
                    // line 181
                    echo "                                        
                                        <div class=\"portfolio-card\">
                                            <div class=\"portfolio-image\">
                                                ";
                    // line 185
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["main_image"] ?? null), "url", []), "html", null, true);
                    echo "\" 
                                                   class=\"glightbox\" 
                                                   data-gallery=\"gallery-";
                    // line 187
                    echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "\"
                                                   data-title=\"";
                    // line 188
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                                   data-description=\"";
                    // line 189
                    echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                    echo "\">
                                                    <img src=\"";
                    // line 190
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["main_image"] ?? null), "cropZoom", [0 => ($context["thumb_width"] ?? null), 1 => ($context["thumb_height"] ?? null)], "method"), "url", []), "html", null, true);
                    echo "\" 
                                                         alt=\"";
                    // line 191
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\" 
                                                         title=\"";
                    // line 192
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\">
                                                </a>
                                                
                                                ";
                    // line 196
                    echo "                                                ";
                    if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) > 1)) {
                        // line 197
                        echo "                                                    <div class=\"image-counter\">
                                                        <i class=\"fa fa-camera\"></i> ";
                        // line 198
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["project_images"] ?? null)), "html", null, true);
                        echo "
                                                    </div>
                                                ";
                    }
                    // line 201
                    echo "                                                
                                                ";
                    // line 203
                    echo "                                                ";
                    if ((twig_length_filter($this->env, ($context["project_images"] ?? null)) > 1)) {
                        // line 204
                        echo "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["project_images"] ?? null));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["img_data"]) {
                            // line 205
                            echo "                                                        ";
                            if (($this->getAttribute($context["img_data"], "image", []) != ($context["main_image"] ?? null))) {
                                // line 206
                                echo "                                                            <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["img_data"], "image", []), "url", []), "html", null, true);
                                echo "\" 
                                                               class=\"glightbox hidden-lightbox-item\" 
                                                               data-gallery=\"gallery-";
                                // line 208
                                echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", []), "loop", []), "index", []), "html", null, true);
                                echo "\"
                                                               data-title=\"";
                                // line 209
                                echo twig_escape_filter($this->env, (($this->getAttribute($context["img_data"], "caption", [])) ? ($this->getAttribute($context["img_data"], "caption", [])) : (($context["title"] ?? null))), "html", null, true);
                                echo "\"
                                                               data-description=\"";
                                // line 210
                                echo twig_escape_filter($this->env, $this->getAttribute($context["img_data"], "caption", []), "html", null, true);
                                echo "\"></a>
                                                        ";
                            }
                            // line 212
                            echo "                                                    ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 213
                        echo "                                                ";
                    }
                    // line 214
                    echo "                                            </div>
                                            
                                            <div class=\"portfolio-info\">
                                                <h4 class=\"portfolio-title\">";
                    // line 217
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "</h4>
                                                
                                                <div class=\"portfolio-metadata\">
                                                    ";
                    // line 220
                    if ($this->getAttribute($context["item"], "stand_type", [])) {
                        // line 221
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Тип стенда:</span>
                                                            <span class=\"value stand-type-";
                        // line 223
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true);
                        echo "\">
                                                                ";
                        // line 224
                        if (($this->getAttribute($context["item"], "stand_type", []) == "typovye")) {
                            echo "Типовой
                                                                ";
                        } elseif (($this->getAttribute(                        // line 225
$context["item"], "stand_type", []) == "nestandart")) {
                            echo "Нестандартный
                                                                ";
                        } elseif (($this->getAttribute(                        // line 226
$context["item"], "stand_type", []) == "ekskluziv")) {
                            echo "Эксклюзивный
                                                                ";
                        } else {
                            // line 227
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true);
                            echo "
                                                                ";
                        }
                        // line 229
                        echo "                                                            </span>
                                                        </div>
                                                    ";
                    }
                    // line 232
                    echo "                                                    
                                                    ";
                    // line 233
                    if ($this->getAttribute($context["item"], "construction_area", [])) {
                        // line 234
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Площадь:</span>
                                                            <span class=\"value\">";
                        // line 236
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "construction_area", []), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 239
                    echo "                                                    
                                                    ";
                    // line 240
                    if ($this->getAttribute($context["item"], "exhibition_name", [])) {
                        // line 241
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Выставка:</span>
                                                            <span class=\"value\">";
                        // line 243
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "exhibition_name", []), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 246
                    echo "                                                    
                                                    ";
                    // line 247
                    if ($this->getAttribute($context["item"], "company_name", [])) {
                        // line 248
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Клиент:</span>
                                                            <span class=\"value\">";
                        // line 250
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company_name", []), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 253
                    echo "                                                    
                                                    ";
                    // line 254
                    if ($this->getAttribute($context["item"], "project_year", [])) {
                        // line 255
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Год:</span>
                                                            <span class=\"value\">";
                        // line 257
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "project_year", []), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 260
                    echo "                                                </div>
                                                
                                                ";
                    // line 262
                    if (($context["desc"] ?? null)) {
                        // line 263
                        echo "                                                    <div class=\"portfolio-description\">";
                        echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                        echo "</div>
                                                ";
                    }
                    // line 265
                    echo "                                            </div>
                                        </div>
                                    ";
                }
                // line 268
                echo "                                </div>
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
            // line 270
            echo "                        </div>
                    </div>
                </div>
                ";
        } else {
            // line 274
            echo "                <div class=\"portfolio-empty\">
                    <p>Пока нет добавленных проектов в портфолио.</p>
                </div>
                ";
        }
        // line 278
        echo "            </div>
        </div>
    </section>
</section>
";
    }

    // line 284
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 285
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 286
        $context["portfolio_styles"] = ('' === $tmp = ".portfolio-section {
    margin: 30px 0;
}

.portfolio-filters {
    margin-bottom: 30px;
    text-align: center;
}

.portfolio-filters h3 {
    margin-bottom: 20px;
    font-size: 18px;
    color: #333;
}

.filter-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

.filter-btn {
    background: #f8f9fa;
    border: 2px solid #dee2e6;
    color: #495057;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 14px;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background: #007bff;
    border-color: #007bff;
    color: white;
}

.filter-status {
    margin-top: 15px;
    font-size: 14px;
    color: #666;
    font-style: italic;
    min-height: 20px;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.portfolio-item {
    opacity: 1;
    transition: all 0.3s ease;
}

.portfolio-item.filtered-out {
    opacity: 0;
    transform: scale(0.8);
    pointer-events: none;
    display: none !important;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.portfolio-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.portfolio-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 4/3;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.portfolio-image:hover img {
    transform: scale(1.05);
}

.image-counter {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 5px 8px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.image-counter i {
    font-size: 10px;
}

.hidden-lightbox-item {
    display: none;
}

.portfolio-info {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.portfolio-title {
    margin: 0 0 15px 0;
    font-size: 18px;
    color: #333;
    font-weight: 600;
}

.portfolio-metadata {
    margin-bottom: 15px;
}

.metadata-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
    font-size: 14px;
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
}

.stand-type-typovye {
    color: #28a745;
}

.stand-type-nestandart {
    color: #ffc107;
}

.stand-type-ekskluziv {
    color: #dc3545;
}

.portfolio-description {
    font-size: 14px;
    color: #666;
    line-height: 1.4;
    margin-top: auto;
}

.portfolio-empty {
    text-align: center;
    padding: 60px 20px;
    color: #666;
}

@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .filter-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .filter-btn {
        width: 200px;
    }
}
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 494
        echo "
";
        // line 495
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["portfolio_styles"] ?? null)], "method");
    }

    // line 498
    public function block_javascripts($context, array $blocks = [])
    {
        // line 499
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 500
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"], "method");
        // line 501
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css"], "method");
        // line 502
        echo "
";
        // line 503
        $context["portfolio_script"] = ('' === $tmp = "document.addEventListener('DOMContentLoaded', function() {
    // Initialize lightbox
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
    
    // Portfolio filtering
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filterValue = this.dataset.filter;
            const filterStatus = document.getElementById('filter-status');
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            let visibleCount = 0;
            portfolioItems.forEach(item => {
                const itemType = item.dataset.type;
                
                if (filterValue === 'all' || itemType === filterValue) {
                    item.classList.remove('filtered-out');
                    visibleCount++;
                } else {
                    item.classList.add('filtered-out');
                }
            });
            
            // Update filter status
            if (filterValue === 'all') {
                filterStatus.textContent = `Показано \${visibleCount} проектов`;
            } else {
                const filterLabels = {
                    'typovye': 'Типовые стенды',
                    'nestandart': 'Нестандартные стенды',
                    'ekskluziv': 'Эксклюзивные стенды'
                };
                filterStatus.textContent = `Показано \${visibleCount} проектов типа \"\${filterLabels[filterValue]}\"`;
            }
            
            // Scroll to top of portfolio section with smooth animation
            // Add a small delay to let the filtering animation complete
            setTimeout(() => {
                // Force scroll to the very top of the page
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
                
                // Then scroll to the portfolio content
                setTimeout(() => {
                    const portfolioContent = document.getElementById('portfolio-content');
                    if (portfolioContent) {
                        portfolioContent.scrollIntoView({ 
                            behavior: 'smooth', 
                            block: 'start' 
                        });
                    }
                }, 200);
            }, 100);
        });
    });
    
    // Initialize filter status on page load
    const initialFilterBtn = document.querySelector('.filter-btn.active');
    if (initialFilterBtn) {
        initialFilterBtn.click();
    }
});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 580
        echo "
";
        // line 581
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["portfolio_script"] ?? null)], "method");
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1055 => 581,  1052 => 580,  975 => 503,  972 => 502,  970 => 501,  968 => 500,  964 => 499,  961 => 498,  957 => 495,  954 => 494,  746 => 286,  742 => 285,  739 => 284,  731 => 278,  725 => 274,  719 => 270,  704 => 268,  699 => 265,  693 => 263,  691 => 262,  687 => 260,  681 => 257,  677 => 255,  675 => 254,  672 => 253,  666 => 250,  662 => 248,  660 => 247,  657 => 246,  651 => 243,  647 => 241,  645 => 240,  642 => 239,  636 => 236,  632 => 234,  630 => 233,  627 => 232,  622 => 229,  617 => 227,  612 => 226,  608 => 225,  604 => 224,  600 => 223,  596 => 221,  594 => 220,  588 => 217,  583 => 214,  580 => 213,  566 => 212,  561 => 210,  557 => 209,  551 => 208,  545 => 206,  542 => 205,  524 => 204,  521 => 203,  518 => 201,  512 => 198,  509 => 197,  506 => 196,  500 => 192,  496 => 191,  492 => 190,  488 => 189,  484 => 188,  478 => 187,  472 => 185,  467 => 181,  464 => 180,  461 => 179,  459 => 178,  456 => 177,  453 => 176,  450 => 175,  447 => 174,  444 => 172,  441 => 171,  438 => 170,  435 => 169,  432 => 168,  430 => 165,  429 => 164,  427 => 163,  425 => 162,  422 => 161,  419 => 160,  416 => 159,  413 => 158,  410 => 156,  407 => 155,  404 => 154,  401 => 153,  398 => 151,  395 => 150,  389 => 149,  386 => 148,  383 => 147,  380 => 146,  375 => 145,  372 => 144,  369 => 142,  366 => 141,  364 => 140,  361 => 139,  355 => 138,  352 => 137,  349 => 136,  346 => 135,  343 => 134,  340 => 132,  337 => 131,  335 => 129,  334 => 128,  333 => 127,  331 => 126,  329 => 125,  326 => 124,  323 => 123,  317 => 122,  314 => 121,  311 => 120,  308 => 119,  303 => 118,  300 => 117,  297 => 115,  294 => 114,  289 => 113,  286 => 112,  283 => 110,  280 => 109,  277 => 108,  274 => 107,  272 => 106,  268 => 105,  265 => 104,  262 => 103,  259 => 102,  241 => 101,  239 => 100,  224 => 87,  221 => 85,  219 => 84,  216 => 83,  213 => 82,  207 => 81,  204 => 80,  198 => 79,  195 => 78,  192 => 77,  190 => 74,  189 => 73,  188 => 72,  187 => 71,  186 => 70,  185 => 69,  184 => 68,  182 => 67,  180 => 66,  177 => 65,  174 => 64,  172 => 62,  171 => 60,  170 => 59,  169 => 58,  168 => 57,  167 => 56,  166 => 55,  165 => 54,  163 => 53,  161 => 52,  158 => 51,  154 => 50,  151 => 49,  148 => 48,  145 => 47,  142 => 46,  139 => 45,  136 => 44,  133 => 43,  130 => 42,  127 => 41,  124 => 40,  119 => 39,  116 => 38,  113 => 37,  110 => 35,  104 => 34,  101 => 33,  95 => 32,  92 => 31,  90 => 28,  89 => 27,  88 => 26,  87 => 25,  86 => 24,  85 => 23,  84 => 22,  82 => 21,  77 => 20,  74 => 19,  69 => 18,  66 => 16,  63 => 15,  57 => 11,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
{% set grid_size = theme_var('grid-size') %}

<section class=\"section portfolio\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-12\">
                <div class=\"content\">
                    {{ content|raw }}
                </div>
                
                {# Collect all portfolio items from multiple sources #}
                {% set all_portfolio_items = [] %}
                
                {# Get items from Portfolio section #}
                {% for child in page.children.visible %}
                    {% if child.template == 'portfolio-item' and child.header.gallery %}
                        {% for gallery_item in child.header.gallery %}
                            {% set item_data = {
                                'page': child,
                                'gallery_item': gallery_item,
                                'stand_type': child.header.stand_type,
                                'construction_area': child.header.construction_area,
                                'exhibition_name': child.header.exhibition_name,
                                'company_name': child.header.company_name,
                                'project_year': child.header.project_year,
                                'source': 'portfolio'
                            } %}
                            {% set all_portfolio_items = all_portfolio_items|merge([item_data]) %}
                        {% endfor %}
                    {% endif %}
                {% endfor %}
                
                {# Get items from Services section #}
                {% set services_page = pages.find('/uslugi/razrabotka-stendov') %}
                {% if services_page %}
                    {% for service_child in services_page.children.visible %}
                        {% if service_child.template == 'stand-page' and service_child.header.gallery %}
                            {% set stand_type = null %}
                            {% if service_child.slug == 'typovye' %}
                                {% set stand_type = 'typovye' %}
                            {% elseif service_child.slug == 'nestandart' %}
                                {% set stand_type = 'nestandart' %}
                            {% elseif service_child.slug == 'ekskluziv' %}
                                {% set stand_type = 'ekskluziv' %}
                            {% endif %}
                            
                            {% for gallery_item in service_child.header.gallery %}
                                {% if gallery_item.images %}
                                    {# New structure with multiple images per project #}
                                    {% set item_data = {
                                        'page': service_child,
                                        'gallery_item': gallery_item,
                                        'stand_type': stand_type,
                                        'construction_area': gallery_item.construction_area,
                                        'exhibition_name': gallery_item.exhibition_name,
                                        'company_name': gallery_item.company_name,
                                        'project_year': gallery_item.project_year,
                                        'source': 'services',
                                        'images': gallery_item.images
                                    } %}
                                    {% set all_portfolio_items = all_portfolio_items|merge([item_data]) %}
                                {% else %}
                                    {# Legacy structure with single image #}
                                    {% set item_data = {
                                        'page': service_child,
                                        'gallery_item': gallery_item,
                                        'stand_type': stand_type,
                                        'construction_area': gallery_item.construction_area,
                                        'exhibition_name': gallery_item.exhibition_name,
                                        'company_name': gallery_item.company_name,
                                        'project_year': gallery_item.project_year,
                                        'source': 'services'
                                    } %}
                                    {% set all_portfolio_items = all_portfolio_items|merge([item_data]) %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                
                {% if all_portfolio_items|length > 0 %}
                <div class=\"portfolio-section\" id=\"portfolio-content\">
                    {# Filter Controls #}
                    <div class=\"portfolio-filters\">
                        <h3>Фильтр по типу стенда:</h3>
                        <div class=\"filter-buttons\">
                            <button class=\"filter-btn active\" data-filter=\"all\">Все проекты</button>
                            <button class=\"filter-btn\" data-filter=\"typovye\">Типовые стенды</button>
                            <button class=\"filter-btn\" data-filter=\"nestandart\">Нестандартные стенды</button>
                            <button class=\"filter-btn\" data-filter=\"ekskluziv\">Эксклюзивные стенды</button>
                        </div>
                        <div class=\"filter-status\" id=\"filter-status\"></div>
                    </div>
                    
                    <div class=\"portfolio-gallery\">
                        <div class=\"portfolio-grid\">
                            {% set gallery_id = 'portfolio-main' %}
                            {% for item in all_portfolio_items %}
                                {% set gallery_item = item.gallery_item %}
                                {% set page_obj = item.page %}
                                
                                <div class=\"portfolio-item\" data-type=\"{{ item.stand_type ?: 'unknown' }}\">
                                    {% set project_images = [] %}
                                    {% set main_image = null %}
                                    {% set title = gallery_item.title ?: 'Проект' %}
                                    {% set desc = gallery_item.desc ?: '' %}
                                    
                                    {# Handle new multiple images structure #}
                                    {% if item.images %}
                                        {% for img_item in item.images %}
                                            {% set img_obj = null %}
                                            
                                            {# Check for uploaded image #}
                                            {% if img_item.image_upload %}
                                                {% for filepath, filedata in img_item.image_upload %}
                                                    {% if not img_obj and filedata.name %}
                                                        {% set img_obj = page_obj.media[filedata.name] %}
                                                    {% endif %}
                                                {% endfor %}
                                            {% endif %}
                                            
                                            {% if img_obj %}
                                                {% set img_data = {
                                                    'image': img_obj,
                                                    'caption': img_item.caption ?: '',
                                                    'is_main': img_item.is_main ?: false
                                                } %}
                                                {% set project_images = project_images|merge([img_data]) %}
                                                
                                                {# Set main image #}
                                                {% if img_item.is_main and not main_image %}
                                                    {% set main_image = img_obj %}
                                                {% endif %}
                                            {% endif %}
                                        {% endfor %}
                                    {% else %}
                                        {# Legacy single image handling #}
                                        {% set item_image = null %}
                                        
                                        {# Check for uploaded image first #}
                                        {% if gallery_item.image_upload %}
                                            {% for filepath, filedata in gallery_item.image_upload %}
                                                {% if not item_image and filedata.name %}
                                                    {% set item_image = page_obj.media[filedata.name] %}
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                        
                                        {# If no uploaded image, check for image_name #}
                                        {% if not item_image and gallery_item.image_name %}
                                            {% set item_image = page_obj.media[gallery_item.image_name] %}
                                        {% endif %}
                                        
                                        {# Fallback to old image field #}
                                        {% if not item_image and gallery_item.image %}
                                            {% set item_image = page_obj.media[gallery_item.image] %}
                                        {% endif %}
                                        
                                        {% if item_image %}
                                            {% set img_data = {
                                                'image': item_image,
                                                'caption': desc,
                                                'is_main': true
                                            } %}
                                            {% set project_images = [img_data] %}
                                            {% set main_image = item_image %}
                                        {% endif %}
                                    {% endif %}
                                    
                                    {# Use first image as main if no main image specified #}
                                    {% if not main_image and project_images|length > 0 %}
                                        {% set main_image = project_images[0].image %}
                                    {% endif %}
                                    
                                    {% if main_image and project_images|length > 0 %}
                                        {% set thumb_width = 400 %}
                                        {% set thumb_height = 300 %}
                                        
                                        <div class=\"portfolio-card\">
                                            <div class=\"portfolio-image\">
                                                {# Main image with multiple images support #}
                                                <a href=\"{{ main_image.url }}\" 
                                                   class=\"glightbox\" 
                                                   data-gallery=\"gallery-{{ gallery_id }}-{{ loop.index }}\"
                                                   data-title=\"{{ title }}\"
                                                   data-description=\"{{ desc }}\">
                                                    <img src=\"{{ main_image.cropZoom(thumb_width, thumb_height).url }}\" 
                                                         alt=\"{{ title }}\" 
                                                         title=\"{{ title }}\">
                                                </a>
                                                
                                                {# Image counter if multiple images #}
                                                {% if project_images|length > 1 %}
                                                    <div class=\"image-counter\">
                                                        <i class=\"fa fa-camera\"></i> {{ project_images|length }}
                                                    </div>
                                                {% endif %}
                                                
                                                {# Hidden images for lightbox #}
                                                {% if project_images|length > 1 %}
                                                    {% for img_data in project_images %}
                                                        {% if img_data.image != main_image %}
                                                            <a href=\"{{ img_data.image.url }}\" 
                                                               class=\"glightbox hidden-lightbox-item\" 
                                                               data-gallery=\"gallery-{{ gallery_id }}-{{ loop.parent.loop.index }}\"
                                                               data-title=\"{{ img_data.caption ?: title }}\"
                                                               data-description=\"{{ img_data.caption }}\"></a>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            </div>
                                            
                                            <div class=\"portfolio-info\">
                                                <h4 class=\"portfolio-title\">{{ title }}</h4>
                                                
                                                <div class=\"portfolio-metadata\">
                                                    {% if item.stand_type %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Тип стенда:</span>
                                                            <span class=\"value stand-type-{{ item.stand_type }}\">
                                                                {% if item.stand_type == 'typovye' %}Типовой
                                                                {% elseif item.stand_type == 'nestandart' %}Нестандартный
                                                                {% elseif item.stand_type == 'ekskluziv' %}Эксклюзивный
                                                                {% else %}{{ item.stand_type }}
                                                                {% endif %}
                                                            </span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if item.construction_area %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Площадь:</span>
                                                            <span class=\"value\">{{ item.construction_area }}</span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if item.exhibition_name %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Выставка:</span>
                                                            <span class=\"value\">{{ item.exhibition_name }}</span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if item.company_name %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Клиент:</span>
                                                            <span class=\"value\">{{ item.company_name }}</span>
                                                        </div>
                                                    {% endif %}
                                                    
                                                    {% if item.project_year %}
                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Год:</span>
                                                            <span class=\"value\">{{ item.project_year }}</span>
                                                        </div>
                                                    {% endif %}
                                                </div>
                                                
                                                {% if desc %}
                                                    <div class=\"portfolio-description\">{{ desc }}</div>
                                                {% endif %}
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
                {% else %}
                <div class=\"portfolio-empty\">
                    <p>Пока нет добавленных проектов в портфолио.</p>
                </div>
                {% endif %}
            </div>
        </div>
    </section>
</section>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
{% set portfolio_styles %}
.portfolio-section {
    margin: 30px 0;
}

.portfolio-filters {
    margin-bottom: 30px;
    text-align: center;
}

.portfolio-filters h3 {
    margin-bottom: 20px;
    font-size: 18px;
    color: #333;
}

.filter-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
}

.filter-btn {
    background: #f8f9fa;
    border: 2px solid #dee2e6;
    color: #495057;
    padding: 10px 20px;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 14px;
    font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
    background: #007bff;
    border-color: #007bff;
    color: white;
}

.filter-status {
    margin-top: 15px;
    font-size: 14px;
    color: #666;
    font-style: italic;
    min-height: 20px;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.portfolio-item {
    opacity: 1;
    transition: all 0.3s ease;
}

.portfolio-item.filtered-out {
    opacity: 0;
    transform: scale(0.8);
    pointer-events: none;
    display: none !important;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 30px;
}

.portfolio-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.portfolio-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.portfolio-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 4/3;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.portfolio-image:hover img {
    transform: scale(1.05);
}

.image-counter {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 5px 8px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.image-counter i {
    font-size: 10px;
}

.hidden-lightbox-item {
    display: none;
}

.portfolio-info {
    padding: 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.portfolio-title {
    margin: 0 0 15px 0;
    font-size: 18px;
    color: #333;
    font-weight: 600;
}

.portfolio-metadata {
    margin-bottom: 15px;
}

.metadata-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
    font-size: 14px;
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
}

.stand-type-typovye {
    color: #28a745;
}

.stand-type-nestandart {
    color: #ffc107;
}

.stand-type-ekskluziv {
    color: #dc3545;
}

.portfolio-description {
    font-size: 14px;
    color: #666;
    line-height: 1.4;
    margin-top: auto;
}

.portfolio-empty {
    text-align: center;
    padding: 60px 20px;
    color: #666;
}

@media (max-width: 768px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .filter-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .filter-btn {
        width: 200px;
    }
}
{% endset %}

{% do assets.addInlineCss(portfolio_styles) %}
{% endblock %}

{% block javascripts %}
{{ parent() }}
{% do assets.addJs('https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js') %}
{% do assets.addCss('https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css') %}

{% set portfolio_script %}
document.addEventListener('DOMContentLoaded', function() {
    // Initialize lightbox
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
    
    // Portfolio filtering
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filterValue = this.dataset.filter;
            const filterStatus = document.getElementById('filter-status');
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            let visibleCount = 0;
            portfolioItems.forEach(item => {
                const itemType = item.dataset.type;
                
                if (filterValue === 'all' || itemType === filterValue) {
                    item.classList.remove('filtered-out');
                    visibleCount++;
                } else {
                    item.classList.add('filtered-out');
                }
            });
            
            // Update filter status
            if (filterValue === 'all') {
                filterStatus.textContent = `Показано \${visibleCount} проектов`;
            } else {
                const filterLabels = {
                    'typovye': 'Типовые стенды',
                    'nestandart': 'Нестандартные стенды',
                    'ekskluziv': 'Эксклюзивные стенды'
                };
                filterStatus.textContent = `Показано \${visibleCount} проектов типа \"\${filterLabels[filterValue]}\"`;
            }
            
            // Scroll to top of portfolio section with smooth animation
            // Add a small delay to let the filtering animation complete
            setTimeout(() => {
                // Force scroll to the very top of the page
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
                
                // Then scroll to the portfolio content
                setTimeout(() => {
                    const portfolioContent = document.getElementById('portfolio-content');
                    if (portfolioContent) {
                        portfolioContent.scrollIntoView({ 
                            behavior: 'smooth', 
                            block: 'start' 
                        });
                    }
                }, 200);
            }, 100);
        });
    });
    
    // Initialize filter status on page load
    const initialFilterBtn = document.querySelector('.filter-btn.active');
    if (initialFilterBtn) {
        initialFilterBtn.click();
    }
});
{% endset %}

{% do assets.addInlineJs(portfolio_script) %}
{% endblock %} ", "portfolio.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/portfolio.html.twig");
    }
}
