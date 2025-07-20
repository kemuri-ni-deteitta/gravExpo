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
                    <div class=\"lightbox-gallery\">
                        <div class=\"lightbox-gallery__columns\">
                            ";
            // line 69
            $context["gallery_id"] = md5($this->getAttribute(($context["page"] ?? null), "url", []));
            // line 70
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 71
                echo "                                <div class=\"lightbox-gallery__column\">
                                    ";
                // line 72
                $context["item_image"] = null;
                // line 73
                echo "                                    
                                    ";
                // line 75
                echo "                                    ";
                if ($this->getAttribute($context["item"], "image_upload", [])) {
                    // line 76
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "image_upload", []));
                    foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                        // line 77
                        echo "                                            ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                            // line 78
                            echo "                                                ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                            // line 79
                            echo "                                            ";
                        }
                        // line 80
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "                                    ";
                }
                // line 82
                echo "                                    
                                    ";
                // line 84
                echo "                                    ";
                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["item"], "image_name", []))) {
                    // line 85
                    echo "                                        ";
                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image_name", []), [], "array");
                    // line 86
                    echo "                                    ";
                }
                // line 87
                echo "                                    
                                    ";
                // line 89
                echo "                                    ";
                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["item"], "image", []))) {
                    // line 90
                    echo "                                        ";
                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array");
                    // line 91
                    echo "                                    ";
                }
                // line 92
                echo "                                    
                                    ";
                // line 93
                if (($context["item_image"] ?? null)) {
                    // line 94
                    echo "                                        ";
                    $context["title"] = (($this->getAttribute($context["item"], "title", [])) ? ($this->getAttribute($context["item"], "title", [])) : (""));
                    // line 95
                    echo "                                        ";
                    $context["desc"] = (($this->getAttribute($context["item"], "desc", [])) ? ($this->getAttribute($context["item"], "desc", [])) : (""));
                    // line 96
                    echo "                                        ";
                    $context["thumb_width"] = 400;
                    // line 97
                    echo "                                        ";
                    $context["thumb_height"] = 300;
                    // line 98
                    echo "                                        
                                        <div class=\"gallery-item\">
                                            <a href=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item_image"] ?? null), "url", []), "html", null, true);
                    echo "\" 
                                               class=\"glightbox\" 
                                               data-gallery=\"gallery-";
                    // line 102
                    echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                    echo "\"
                                               data-title=\"";
                    // line 103
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                               data-description=\"";
                    // line 104
                    echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["item_image"] ?? null), "cropZoom", [0 => ($context["thumb_width"] ?? null), 1 => ($context["thumb_height"] ?? null)], "method"), "url", []), "html", null, true);
                    echo "\" 
                                                     alt=\"";
                    // line 106
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\" 
                                                     title=\"";
                    // line 107
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                                     style=\"width: 100%; height: auto; border-radius: 5px;\">
                                            </a>
                                            ";
                    // line 110
                    if (($context["title"] ?? null)) {
                        // line 111
                        echo "                                                <div class=\"gallery-item-title\">";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "</div>
                                            ";
                    }
                    // line 113
                    echo "                                        </div>
                                    ";
                }
                // line 115
                echo "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                        </div>
                    </div>
                </div>
                ";
        }
        // line 121
        echo "                
                ";
        // line 123
        echo "                <div class=\"back-to-portfolio\">
                    <a href=\"/portfolio\" class=\"btn btn-primary\">← Вернуться к портфолио</a>
                </div>
            </div>
        </div>
    </section>
</section>
";
    }

    // line 132
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 133
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 134
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
}
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 294
        echo "
";
        // line 295
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["portfolio_item_styles"] ?? null)], "method");
    }

    // line 298
    public function block_javascripts($context, array $blocks = [])
    {
        // line 299
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 300
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"], "method");
        // line 301
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css"], "method");
        // line 302
        echo "
";
        // line 303
        $context["gallery_script"] = ('' === $tmp = "document.addEventListener('DOMContentLoaded', function() {
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 312
        echo "
";
        // line 313
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
        return array (  537 => 313,  534 => 312,  525 => 303,  522 => 302,  520 => 301,  518 => 300,  514 => 299,  511 => 298,  507 => 295,  504 => 294,  344 => 134,  340 => 133,  337 => 132,  326 => 123,  323 => 121,  317 => 117,  310 => 115,  306 => 113,  300 => 111,  298 => 110,  292 => 107,  288 => 106,  284 => 105,  280 => 104,  276 => 103,  272 => 102,  267 => 100,  263 => 98,  260 => 97,  257 => 96,  254 => 95,  251 => 94,  249 => 93,  246 => 92,  243 => 91,  240 => 90,  237 => 89,  234 => 87,  231 => 86,  228 => 85,  225 => 84,  222 => 82,  219 => 81,  213 => 80,  210 => 79,  207 => 78,  204 => 77,  199 => 76,  196 => 75,  193 => 73,  191 => 72,  188 => 71,  183 => 70,  181 => 69,  175 => 65,  172 => 64,  169 => 62,  164 => 59,  158 => 56,  154 => 54,  152 => 53,  149 => 52,  143 => 49,  139 => 47,  137 => 46,  134 => 45,  128 => 42,  124 => 40,  122 => 39,  119 => 38,  113 => 35,  109 => 33,  107 => 32,  104 => 31,  99 => 28,  94 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 20,  71 => 19,  66 => 16,  63 => 15,  57 => 11,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  31 => 1,);
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
                    <div class=\"lightbox-gallery\">
                        <div class=\"lightbox-gallery__columns\">
                            {% set gallery_id = md5(page.url) %}
                            {% for item in page.header.gallery %}
                                <div class=\"lightbox-gallery__column\">
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
                                        {% set title = item.title ? item.title : '' %}
                                        {% set desc = item.desc ? item.desc : '' %}
                                        {% set thumb_width = 400 %}
                                        {% set thumb_height = 300 %}
                                        
                                        <div class=\"gallery-item\">
                                            <a href=\"{{ item_image.url }}\" 
                                               class=\"glightbox\" 
                                               data-gallery=\"gallery-{{ gallery_id }}\"
                                               data-title=\"{{ title }}\"
                                               data-description=\"{{ desc }}\">
                                                <img src=\"{{ item_image.cropZoom(thumb_width, thumb_height).url }}\" 
                                                     alt=\"{{ title }}\" 
                                                     title=\"{{ title }}\"
                                                     style=\"width: 100%; height: auto; border-radius: 5px;\">
                                            </a>
                                            {% if title %}
                                                <div class=\"gallery-item-title\">{{ title }}</div>
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
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
