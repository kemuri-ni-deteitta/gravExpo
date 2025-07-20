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

/* portfolio-item.html.twig */
class __TwigTemplate_a40c8c1ab38eb6647c33c978709019a9edbcc71d9a701986264269b173966d08 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "portfolio-item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 5
        echo "
<section class=\"section portfolio-item\">
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
        if ((((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "stand_type", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "construction_area", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "exhibition_name", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "company_name", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "project_year", []))) {
            // line 16
            echo "                <div class=\"project-metadata\">
                    <h2>Информация о проекте</h2>
                    <div class=\"metadata-grid\">
                        ";
            // line 19
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "stand_type", [])) {
                // line 20
                echo "                            <div class=\"metadata-item\">
                                <span class=\"label\">Тип стенда:</span>
                                <span class=\"value stand-type-";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "stand_type", []), "html", null, true);
                echo "\">
                                    ";
                // line 23
                if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "stand_type", []) == "typovye")) {
                    echo "Типовой
                                    ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 24
($context["page"] ?? null), "header", []), "stand_type", []) == "nestandart")) {
                    echo "Нестандартный
                                    ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 25
($context["page"] ?? null), "header", []), "stand_type", []) == "ekskluziv")) {
                    echo "Эксклюзивный
                                    ";
                } else {
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "stand_type", []), "html", null, true);
                    echo "
                                    ";
                }
                // line 28
                echo "                                </span>
                            </div>
                        ";
            }
            // line 31
            echo "                        
                        ";
            // line 32
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "construction_area", [])) {
                // line 33
                echo "                            <div class=\"metadata-item\">
                                <span class=\"label\">Площадь застройки:</span>
                                <span class=\"value\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "construction_area", []), "html", null, true);
                echo "</span>
                            </div>
                        ";
            }
            // line 38
            echo "                        
                        ";
            // line 39
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "exhibition_name", [])) {
                // line 40
                echo "                            <div class=\"metadata-item\">
                                <span class=\"label\">Название выставки:</span>
                                <span class=\"value\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "exhibition_name", []), "html", null, true);
                echo "</span>
                            </div>
                        ";
            }
            // line 45
            echo "                        
                        ";
            // line 46
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "company_name", [])) {
                // line 47
                echo "                            <div class=\"metadata-item\">
                                <span class=\"label\">Название компании:</span>
                                <span class=\"value\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "company_name", []), "html", null, true);
                echo "</span>
                            </div>
                        ";
            }
            // line 52
            echo "                        
                        ";
            // line 53
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "project_year", [])) {
                // line 54
                echo "                            <div class=\"metadata-item\">
                                <span class=\"label\">Год проекта:</span>
                                <span class=\"value\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "project_year", []), "html", null, true);
                echo "</span>
                            </div>
                        ";
            }
            // line 59
            echo "                    </div>
                </div>
                ";
        }
        // line 62
        echo "                
                ";
        // line 64
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery", [])) {
            // line 65
            echo "                <div class=\"gallery-section\">
                    <h2>Фотографии проекта</h2>
                    
                    ";
            // line 69
            echo "                    ";
            $context["display_type"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery_display", [])) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery_display", [])) : ("grid"));
            // line 70
            echo "                    ";
            $context["images_per_row"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "images_per_row", [])) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "images_per_row", [])) : (3));
            // line 71
            echo "                    ";
            $context["show_captions"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "show_captions", [], "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "show_captions", [])) : (true));
            // line 72
            echo "                    
                    <div class=\"lightbox-gallery gallery-";
            // line 73
            echo twig_escape_filter($this->env, ($context["display_type"] ?? null), "html", null, true);
            echo " columns-";
            echo twig_escape_filter($this->env, ($context["images_per_row"] ?? null), "html", null, true);
            echo "\">
                        <div class=\"lightbox-gallery__columns\">
                            ";
            // line 75
            $context["gallery_id"] = md5($this->getAttribute(($context["page"] ?? null), "url", []));
            // line 76
            echo "                            ";
            $context["image_counter"] = 0;
            // line 77
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 78
                echo "                                ";
                $context["item_image"] = null;
                // line 79
                echo "                                
                                ";
                // line 81
                echo "                                ";
                if ($this->getAttribute($context["item"], "image_upload", [])) {
                    // line 82
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "image_upload", []));
                    foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                        // line 83
                        echo "                                        ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                            // line 84
                            echo "                                            ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                            // line 85
                            echo "                                        ";
                        }
                        // line 86
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "                                ";
                }
                // line 88
                echo "                                
                                ";
                // line 90
                echo "                                ";
                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["item"], "image_name", []))) {
                    // line 91
                    echo "                                    ";
                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image_name", []), [], "array");
                    // line 92
                    echo "                                ";
                }
                // line 93
                echo "                                
                                ";
                // line 95
                echo "                                ";
                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["item"], "image", []))) {
                    // line 96
                    echo "                                    ";
                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array");
                    // line 97
                    echo "                                ";
                }
                // line 98
                echo "                                
                                ";
                // line 99
                if (($context["item_image"] ?? null)) {
                    // line 100
                    echo "                                    ";
                    $context["image_counter"] = (($context["image_counter"] ?? null) + 1);
                    // line 101
                    echo "                                    ";
                    $context["title"] = (($this->getAttribute($context["item"], "title", [])) ? ($this->getAttribute($context["item"], "title", [])) : (("Фото " . ($context["image_counter"] ?? null))));
                    // line 102
                    echo "                                    ";
                    $context["desc"] = (($this->getAttribute($context["item"], "desc", [])) ? ($this->getAttribute($context["item"], "desc", [])) : (""));
                    // line 103
                    echo "                                    ";
                    $context["alt_text"] = (($this->getAttribute($context["item"], "alt_text", [])) ? ($this->getAttribute($context["item"], "alt_text", [])) : (($context["title"] ?? null)));
                    // line 104
                    echo "                                    ";
                    $context["thumb_width"] = 400;
                    // line 105
                    echo "                                    ";
                    $context["thumb_height"] = 300;
                    // line 106
                    echo "                                    
                                    <div class=\"lightbox-gallery__column\">
                                        <div class=\"gallery-item ";
                    // line 108
                    echo (($this->getAttribute($context["item"], "is_main", [])) ? ("main-image") : (""));
                    echo "\">
                                            <a href=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item_image"] ?? null), "url", []), "html", null, true);
                    echo "\" 
                                               class=\"glightbox\" 
                                               data-gallery=\"gallery-";
                    // line 111
                    echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                    echo "\"
                                               data-title=\"";
                    // line 112
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                               data-description=\"";
                    // line 113
                    echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["item_image"] ?? null), "cropZoom", [0 => ($context["thumb_width"] ?? null), 1 => ($context["thumb_height"] ?? null)], "method"), "url", []), "html", null, true);
                    echo "\" 
                                                     alt=\"";
                    // line 115
                    echo twig_escape_filter($this->env, ($context["alt_text"] ?? null), "html", null, true);
                    echo "\" 
                                                     title=\"";
                    // line 116
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                                     style=\"width: 100%; height: auto; border-radius: 5px;\">
                                            </a>
                                            
                                            ";
                    // line 120
                    if ($this->getAttribute($context["item"], "is_main", [])) {
                        // line 121
                        echo "                                                <div class=\"main-image-badge\">Главное фото</div>
                                            ";
                    }
                    // line 123
                    echo "                                            
                                            ";
                    // line 124
                    if ((($context["show_captions"] ?? null) && ($context["title"] ?? null))) {
                        // line 125
                        echo "                                                <div class=\"gallery-item-title\">";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "</div>
                                            ";
                    }
                    // line 127
                    echo "                                        </div>
                                    </div>
                                ";
                }
                // line 130
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                        </div>
                    </div>
                    
                    ";
            // line 134
            if ((($context["image_counter"] ?? null) > 0)) {
                // line 135
                echo "                        <div class=\"gallery-info\">
                            <p><strong>Всего фотографий:</strong> ";
                // line 136
                echo twig_escape_filter($this->env, ($context["image_counter"] ?? null), "html", null, true);
                echo "</p>
                        </div>
                    ";
            }
            // line 139
            echo "                </div>
                ";
        }
        // line 141
        echo "                
                ";
        // line 143
        echo "                <div class=\"back-to-portfolio\">
                    <a href=\"/portfolio\" class=\"btn btn-primary\">← Вернуться к портфолио</a>
                </div>
            </div>
        </div>
    </section>
</section>
";
    }

    // line 152
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 153
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 154
        $context["portfolio_item_styles"] = ('' === $tmp = ".project-metadata {
    margin: 30px 0;
    padding: 25px;
    background: #f8f9fa;
    border-radius: 10px;
}

.project-metadata h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 22px;
}

.metadata-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
}

.metadata-item {
    display: flex;
    flex-direction: column;
    padding: 15px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
    font-size: 14px;
    margin-bottom: 5px;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
    font-size: 16px;
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

.gallery-section {
    margin: 30px 0;
}

.gallery-section h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 22px;
}

.lightbox-gallery {
    margin: 30px 0;
}

.lightbox-gallery .lightbox-gallery__columns {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px;
}

.lightbox-gallery .lightbox-gallery__column {
    width: 50%;
    padding: 0 10px;
    margin-bottom: 20px;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 5px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.gallery-item img {
    display: block;
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

.gallery-item-title {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 10px;
    font-size: 14px;
    text-align: center;
}

.back-to-portfolio {
    margin-top: 40px;
    text-align: center;
}

.btn {
    display: inline-block;
    padding: 12px 24px;
    background: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn:hover {
    background: #0056b3;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,123,255,0.3);
}

@media only screen and (min-width: 600px) {
    .lightbox-gallery .lightbox-gallery__column {
        width: calc(100% / 3);
    }
}

@media only screen and (min-width: 1000px) {
    .lightbox-gallery .lightbox-gallery__column {
        width: 25%;
    }
}

@media (max-width: 768px) {
    .metadata-grid {
        grid-template-columns: 1fr;
    }
    
    .lightbox-gallery .lightbox-gallery__column {
    width: 100%;
}

.gallery-grid .lightbox-gallery__columns {
    display: grid;
    gap: 20px;
}

.gallery-grid.columns-2 .lightbox-gallery__columns {
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
}

.gallery-grid.columns-3 .lightbox-gallery__columns {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
}

.gallery-grid.columns-4 .lightbox-gallery__columns {
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
}

.gallery-slider .lightbox-gallery__columns {
    display: flex;
    overflow-x: auto;
    gap: 20px;
    padding-bottom: 10px;
}

.gallery-slider .lightbox-gallery__column {
    flex: 0 0 300px;
}

.gallery-masonry .lightbox-gallery__columns {
    columns: auto;
    column-gap: 20px;
}

.gallery-masonry .lightbox-gallery__column {
    width: 100%;
    break-inside: avoid;
    margin-bottom: 20px;
}

.gallery-list .lightbox-gallery__columns {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.gallery-list .lightbox-gallery__column {
    width: 100%;
}

.gallery-list .gallery-item {
    display: flex;
    align-items: center;
    gap: 20px;
}

.gallery-list .gallery-item img {
    width: 200px;
    height: auto;
    flex-shrink: 0;
}

.gallery-list .gallery-item-title {
    position: static;
    background: none;
    color: #333;
    padding: 0;
    font-size: 16px;
}

.gallery-item.main-image {
    border: 3px solid #28a745;
    border-radius: 8px;
}

.gallery-info {
    margin-top: 20px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    text-align: center;
}

.gallery-info p {
    margin: 0;
    color: #666;
}
}
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 401
        echo "
";
        // line 402
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["portfolio_item_styles"] ?? null)], "method");
    }

    // line 405
    public function block_javascripts($context, array $blocks = [])
    {
        // line 406
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 407
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"], "method");
        // line 408
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css"], "method");
        // line 409
        echo "
";
        // line 410
        $context["gallery_script"] = ('' === $tmp = "document.addEventListener('DOMContentLoaded', function() {
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 419
        echo "
";
        // line 420
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["gallery_script"] ?? null)], "method");
    }

    public function getTemplateName()
    {
        return "portfolio-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  677 => 420,  674 => 419,  665 => 410,  662 => 409,  660 => 408,  658 => 407,  654 => 406,  651 => 405,  647 => 402,  644 => 401,  397 => 154,  393 => 153,  390 => 152,  379 => 143,  376 => 141,  372 => 139,  366 => 136,  363 => 135,  361 => 134,  356 => 131,  350 => 130,  345 => 127,  339 => 125,  337 => 124,  334 => 123,  330 => 121,  328 => 120,  321 => 116,  317 => 115,  313 => 114,  309 => 113,  305 => 112,  301 => 111,  296 => 109,  292 => 108,  288 => 106,  285 => 105,  282 => 104,  279 => 103,  276 => 102,  273 => 101,  270 => 100,  268 => 99,  265 => 98,  262 => 97,  259 => 96,  256 => 95,  253 => 93,  250 => 92,  247 => 91,  244 => 90,  241 => 88,  238 => 87,  232 => 86,  229 => 85,  226 => 84,  223 => 83,  218 => 82,  215 => 81,  212 => 79,  209 => 78,  204 => 77,  201 => 76,  199 => 75,  192 => 73,  189 => 72,  186 => 71,  183 => 70,  180 => 69,  175 => 65,  172 => 64,  169 => 62,  164 => 59,  158 => 56,  154 => 54,  152 => 53,  149 => 52,  143 => 49,  139 => 47,  137 => 46,  134 => 45,  128 => 42,  124 => 40,  122 => 39,  119 => 38,  113 => 35,  109 => 33,  107 => 32,  104 => 31,  99 => 28,  94 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 20,  71 => 19,  66 => 16,  63 => 15,  57 => 11,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  31 => 1,);
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

<section class=\"section portfolio-item\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-12\">
                <div class=\"content\">
                    {{ content|raw }}
                </div>
                
                {# Project Metadata #}
                {% if page.header.stand_type or page.header.construction_area or page.header.exhibition_name or page.header.company_name or page.header.project_year %}
                <div class=\"project-metadata\">
                    <h2>Информация о проекте</h2>
                    <div class=\"metadata-grid\">
                        {% if page.header.stand_type %}
                            <div class=\"metadata-item\">
                                <span class=\"label\">Тип стенда:</span>
                                <span class=\"value stand-type-{{ page.header.stand_type }}\">
                                    {% if page.header.stand_type == 'typovye' %}Типовой
                                    {% elseif page.header.stand_type == 'nestandart' %}Нестандартный
                                    {% elseif page.header.stand_type == 'ekskluziv' %}Эксклюзивный
                                    {% else %}{{ page.header.stand_type }}
                                    {% endif %}
                                </span>
                            </div>
                        {% endif %}
                        
                        {% if page.header.construction_area %}
                            <div class=\"metadata-item\">
                                <span class=\"label\">Площадь застройки:</span>
                                <span class=\"value\">{{ page.header.construction_area }}</span>
                            </div>
                        {% endif %}
                        
                        {% if page.header.exhibition_name %}
                            <div class=\"metadata-item\">
                                <span class=\"label\">Название выставки:</span>
                                <span class=\"value\">{{ page.header.exhibition_name }}</span>
                            </div>
                        {% endif %}
                        
                        {% if page.header.company_name %}
                            <div class=\"metadata-item\">
                                <span class=\"label\">Название компании:</span>
                                <span class=\"value\">{{ page.header.company_name }}</span>
                            </div>
                        {% endif %}
                        
                        {% if page.header.project_year %}
                            <div class=\"metadata-item\">
                                <span class=\"label\">Год проекта:</span>
                                <span class=\"value\">{{ page.header.project_year }}</span>
                            </div>
                        {% endif %}
                    </div>
                </div>
                {% endif %}
                
                {# Project Gallery #}
                {% if page.header.gallery %}
                <div class=\"gallery-section\">
                    <h2>Фотографии проекта</h2>
                    
                    {# Gallery display settings #}
                    {% set display_type = page.header.gallery_display ?: 'grid' %}
                    {% set images_per_row = page.header.images_per_row ?: 3 %}
                    {% set show_captions = page.header.show_captions is defined ? page.header.show_captions : true %}
                    
                    <div class=\"lightbox-gallery gallery-{{ display_type }} columns-{{ images_per_row }}\">
                        <div class=\"lightbox-gallery__columns\">
                            {% set gallery_id = md5(page.url) %}
                            {% set image_counter = 0 %}
                            {% for item in page.header.gallery %}
                                {% set item_image = null %}
                                
                                {# Check for uploaded image first #}
                                {% if item.image_upload %}
                                    {% for filepath, filedata in item.image_upload %}
                                        {% if not item_image and filedata.name %}
                                            {% set item_image = page.media[filedata.name] %}
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                                
                                {# If no uploaded image, check for image_name #}
                                {% if not item_image and item.image_name %}
                                    {% set item_image = page.media[item.image_name] %}
                                {% endif %}
                                
                                {# Fallback to old image field #}
                                {% if not item_image and item.image %}
                                    {% set item_image = page.media[item.image] %}
                                {% endif %}
                                
                                {% if item_image %}
                                    {% set image_counter = image_counter + 1 %}
                                    {% set title = item.title ? item.title : ('Фото ' ~ image_counter) %}
                                    {% set desc = item.desc ? item.desc : '' %}
                                    {% set alt_text = item.alt_text ? item.alt_text : title %}
                                    {% set thumb_width = 400 %}
                                    {% set thumb_height = 300 %}
                                    
                                    <div class=\"lightbox-gallery__column\">
                                        <div class=\"gallery-item {{ item.is_main ? 'main-image' : '' }}\">
                                            <a href=\"{{ item_image.url }}\" 
                                               class=\"glightbox\" 
                                               data-gallery=\"gallery-{{ gallery_id }}\"
                                               data-title=\"{{ title }}\"
                                               data-description=\"{{ desc }}\">
                                                <img src=\"{{ item_image.cropZoom(thumb_width, thumb_height).url }}\" 
                                                     alt=\"{{ alt_text }}\" 
                                                     title=\"{{ title }}\"
                                                     style=\"width: 100%; height: auto; border-radius: 5px;\">
                                            </a>
                                            
                                            {% if item.is_main %}
                                                <div class=\"main-image-badge\">Главное фото</div>
                                            {% endif %}
                                            
                                            {% if show_captions and title %}
                                                <div class=\"gallery-item-title\">{{ title }}</div>
                                            {% endif %}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                    
                    {% if image_counter > 0 %}
                        <div class=\"gallery-info\">
                            <p><strong>Всего фотографий:</strong> {{ image_counter }}</p>
                        </div>
                    {% endif %}
                </div>
                {% endif %}
                
                {# Back to Portfolio link #}
                <div class=\"back-to-portfolio\">
                    <a href=\"/portfolio\" class=\"btn btn-primary\">← Вернуться к портфолио</a>
                </div>
            </div>
        </div>
    </section>
</section>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
{% set portfolio_item_styles %}
.project-metadata {
    margin: 30px 0;
    padding: 25px;
    background: #f8f9fa;
    border-radius: 10px;
}

.project-metadata h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 22px;
}

.metadata-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
}

.metadata-item {
    display: flex;
    flex-direction: column;
    padding: 15px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.metadata-item .label {
    color: #666;
    font-weight: 500;
    font-size: 14px;
    margin-bottom: 5px;
}

.metadata-item .value {
    color: #333;
    font-weight: 600;
    font-size: 16px;
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

.gallery-section {
    margin: 30px 0;
}

.gallery-section h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 22px;
}

.lightbox-gallery {
    margin: 30px 0;
}

.lightbox-gallery .lightbox-gallery__columns {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px;
}

.lightbox-gallery .lightbox-gallery__column {
    width: 50%;
    padding: 0 10px;
    margin-bottom: 20px;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 5px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.gallery-item img {
    display: block;
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

.gallery-item-title {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0.7);
    color: white;
    padding: 10px;
    font-size: 14px;
    text-align: center;
}

.back-to-portfolio {
    margin-top: 40px;
    text-align: center;
}

.btn {
    display: inline-block;
    padding: 12px 24px;
    background: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn:hover {
    background: #0056b3;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,123,255,0.3);
}

@media only screen and (min-width: 600px) {
    .lightbox-gallery .lightbox-gallery__column {
        width: calc(100% / 3);
    }
}

@media only screen and (min-width: 1000px) {
    .lightbox-gallery .lightbox-gallery__column {
        width: 25%;
    }
}

@media (max-width: 768px) {
    .metadata-grid {
        grid-template-columns: 1fr;
    }
    
    .lightbox-gallery .lightbox-gallery__column {
    width: 100%;
}

.gallery-grid .lightbox-gallery__columns {
    display: grid;
    gap: 20px;
}

.gallery-grid.columns-2 .lightbox-gallery__columns {
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
}

.gallery-grid.columns-3 .lightbox-gallery__columns {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
}

.gallery-grid.columns-4 .lightbox-gallery__columns {
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
}

.gallery-slider .lightbox-gallery__columns {
    display: flex;
    overflow-x: auto;
    gap: 20px;
    padding-bottom: 10px;
}

.gallery-slider .lightbox-gallery__column {
    flex: 0 0 300px;
}

.gallery-masonry .lightbox-gallery__columns {
    columns: auto;
    column-gap: 20px;
}

.gallery-masonry .lightbox-gallery__column {
    width: 100%;
    break-inside: avoid;
    margin-bottom: 20px;
}

.gallery-list .lightbox-gallery__columns {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.gallery-list .lightbox-gallery__column {
    width: 100%;
}

.gallery-list .gallery-item {
    display: flex;
    align-items: center;
    gap: 20px;
}

.gallery-list .gallery-item img {
    width: 200px;
    height: auto;
    flex-shrink: 0;
}

.gallery-list .gallery-item-title {
    position: static;
    background: none;
    color: #333;
    padding: 0;
    font-size: 16px;
}

.gallery-item.main-image {
    border: 3px solid #28a745;
    border-radius: 8px;
}

.gallery-info {
    margin-top: 20px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    text-align: center;
}

.gallery-info p {
    margin: 0;
    color: #666;
}
}
{% endset %}

{% do assets.addInlineCss(portfolio_item_styles) %}
{% endblock %}

{% block javascripts %}
{{ parent() }}
{% do assets.addJs('https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js') %}
{% do assets.addCss('https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css') %}

{% set gallery_script %}
document.addEventListener('DOMContentLoaded', function() {
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
});
{% endset %}

{% do assets.addInlineJs(gallery_script) %}
{% endblock %} ", "portfolio-item.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/portfolio-item.html.twig");
    }
}
