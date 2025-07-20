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

/* stand-page.html.twig */
class __TwigTemplate_b907b6d946ff3b8680064c803a646028a3242581616b87b7530492c53ed46aa1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "stand-page.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 5
        echo "
<section class=\"section stand-page\">
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
        // line 14
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery", [])) {
            // line 15
            echo "                <div class=\"gallery-section\">
                    <div class=\"gallery-header\">
                        <h2>Примеры работ</h2>
                        <p><a href=\"/portfolio\" class=\"portfolio-link\">Смотреть все проекты в портфолио →</a></p>
                    </div>
                    <div class=\"lightbox-gallery\">
                        <div class=\"lightbox-gallery__columns\">
                            ";
            // line 22
            $context["gallery_id"] = md5($this->getAttribute(($context["page"] ?? null), "url", []));
            // line 23
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "                                <div class=\"lightbox-gallery__column\">
                                    ";
                // line 25
                $context["item_image"] = null;
                // line 26
                echo "                                    
                                    ";
                // line 28
                echo "                                    ";
                if ($this->getAttribute($context["item"], "image_upload", [])) {
                    // line 29
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "image_upload", []));
                    foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                        // line 30
                        echo "                                            ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                            // line 31
                            echo "                                                ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                            // line 32
                            echo "                                            ";
                        }
                        // line 33
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "                                    ";
                }
                // line 35
                echo "                                    
                                    ";
                // line 37
                echo "                                    ";
                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["item"], "image_name", []))) {
                    // line 38
                    echo "                                        ";
                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image_name", []), [], "array");
                    // line 39
                    echo "                                    ";
                }
                // line 40
                echo "                                    
                                    ";
                // line 42
                echo "                                    ";
                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["item"], "image", []))) {
                    // line 43
                    echo "                                        ";
                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array");
                    // line 44
                    echo "                                    ";
                }
                // line 45
                echo "                                    
                                    ";
                // line 46
                if (($context["item_image"] ?? null)) {
                    // line 47
                    echo "                                        ";
                    $context["title"] = (($this->getAttribute($context["item"], "title", [])) ? ($this->getAttribute($context["item"], "title", [])) : (""));
                    // line 48
                    echo "                                        ";
                    $context["desc"] = (($this->getAttribute($context["item"], "desc", [])) ? ($this->getAttribute($context["item"], "desc", [])) : (""));
                    // line 49
                    echo "                                        ";
                    $context["thumb_width"] = 400;
                    // line 50
                    echo "                                        ";
                    $context["thumb_height"] = 300;
                    // line 51
                    echo "                                        
                                        <div class=\"gallery-item\">
                                            <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item_image"] ?? null), "url", []), "html", null, true);
                    echo "\" 
                                               class=\"glightbox\" 
                                               data-gallery=\"gallery-";
                    // line 55
                    echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                    echo "\"
                                               data-title=\"";
                    // line 56
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                               data-description=\"";
                    // line 57
                    echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["item_image"] ?? null), "cropZoom", [0 => ($context["thumb_width"] ?? null), 1 => ($context["thumb_height"] ?? null)], "method"), "url", []), "html", null, true);
                    echo "\" 
                                                     alt=\"";
                    // line 59
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\" 
                                                     title=\"";
                    // line 60
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                                     style=\"width: 100%; height: auto; border-radius: 5px;\">
                                            </a>
                                            ";
                    // line 63
                    if (($context["title"] ?? null)) {
                        // line 64
                        echo "                                                <div class=\"gallery-item-title\">";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "</div>
                                            ";
                    }
                    // line 66
                    echo "                                        </div>
                                    ";
                } elseif ((($this->getAttribute(                // line 67
$context["item"], "image_upload", []) || $this->getAttribute($context["item"], "image_name", [])) || $this->getAttribute($context["item"], "image", []))) {
                    // line 68
                    echo "                                        <div class=\"gallery-item\">
                                            <div class=\"no-image\">
                                                ";
                    // line 70
                    if ($this->getAttribute($context["item"], "image_upload", [])) {
                        // line 71
                        echo "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "image_upload", []));
                        foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                            // line 72
                            echo "                                                        <p>Изображение не найдено: ";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["filedata"], "name", [])) ? ($this->getAttribute($context["filedata"], "name", [])) : ($context["filepath"])), "html", null, true);
                            echo "</p>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "                                                ";
                    } elseif ($this->getAttribute($context["item"], "image_name", [])) {
                        // line 75
                        echo "                                                    <p>Изображение не найдено: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image_name", []), "html", null, true);
                        echo "</p>
                                                ";
                    } elseif ($this->getAttribute(                    // line 76
$context["item"], "image", [])) {
                        // line 77
                        echo "                                                    <p>Изображение не найдено: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", []), "html", null, true);
                        echo "</p>
                                                ";
                    }
                    // line 79
                    echo "                                            </div>
                                        </div>
                                    ";
                }
                // line 82
                echo "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                        </div>
                    </div>
                </div>
                ";
        }
        // line 88
        echo "            </div>
        </div>
    </section>
</section>
";
    }

    // line 94
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 95
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 96
        $context["gallery_styles"] = ('' === $tmp = ".gallery-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.gallery-header h2 {
    margin: 0;
}

.portfolio-link {
    color: #007bff;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    transition: color 0.3s ease;
}

.portfolio-link:hover {
    color: #0056b3;
    text-decoration: underline;
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

.no-image {
    background: #f8f9fa;
    border: 2px dashed #dee2e6;
    padding: 40px 20px;
    text-align: center;
    color: #6c757d;
    border-radius: 5px;
}

.no-image p {
    margin: 0;
    font-size: 14px;
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
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 199
        echo "
";
        // line 200
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["gallery_styles"] ?? null)], "method");
    }

    // line 203
    public function block_javascripts($context, array $blocks = [])
    {
        // line 204
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 205
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"], "method");
        // line 206
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css"], "method");
        // line 207
        echo "
";
        // line 208
        $context["gallery_script"] = ('' === $tmp = "document.addEventListener('DOMContentLoaded', function() {
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 217
        echo "
";
        // line 218
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => ($context["gallery_script"] ?? null)], "method");
    }

    public function getTemplateName()
    {
        return "stand-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 218,  406 => 217,  397 => 208,  394 => 207,  392 => 206,  390 => 205,  386 => 204,  383 => 203,  379 => 200,  376 => 199,  273 => 96,  269 => 95,  266 => 94,  258 => 88,  252 => 84,  245 => 82,  240 => 79,  234 => 77,  232 => 76,  227 => 75,  224 => 74,  215 => 72,  210 => 71,  208 => 70,  204 => 68,  202 => 67,  199 => 66,  193 => 64,  191 => 63,  185 => 60,  181 => 59,  177 => 58,  173 => 57,  169 => 56,  165 => 55,  160 => 53,  156 => 51,  153 => 50,  150 => 49,  147 => 48,  144 => 47,  142 => 46,  139 => 45,  136 => 44,  133 => 43,  130 => 42,  127 => 40,  124 => 39,  121 => 38,  118 => 37,  115 => 35,  112 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  92 => 29,  89 => 28,  86 => 26,  84 => 25,  81 => 24,  76 => 23,  74 => 22,  65 => 15,  63 => 14,  57 => 11,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  31 => 1,);
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

<section class=\"section stand-page\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-12\">
                <div class=\"content\">
                    {{ content|raw }}
                </div>
                
                {% if page.header.gallery %}
                <div class=\"gallery-section\">
                    <div class=\"gallery-header\">
                        <h2>Примеры работ</h2>
                        <p><a href=\"/portfolio\" class=\"portfolio-link\">Смотреть все проекты в портфолио →</a></p>
                    </div>
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
                                    {% elseif item.image_upload or item.image_name or item.image %}
                                        <div class=\"gallery-item\">
                                            <div class=\"no-image\">
                                                {% if item.image_upload %}
                                                    {% for filepath, filedata in item.image_upload %}
                                                        <p>Изображение не найдено: {{ filedata.name ?: filepath }}</p>
                                                    {% endfor %}
                                                {% elseif item.image_name %}
                                                    <p>Изображение не найдено: {{ item.image_name }}</p>
                                                {% elseif item.image %}
                                                    <p>Изображение не найдено: {{ item.image }}</p>
                                                {% endif %}
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
                {% endif %}
            </div>
        </div>
    </section>
</section>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
{% set gallery_styles %}
.gallery-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.gallery-header h2 {
    margin: 0;
}

.portfolio-link {
    color: #007bff;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    transition: color 0.3s ease;
}

.portfolio-link:hover {
    color: #0056b3;
    text-decoration: underline;
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

.no-image {
    background: #f8f9fa;
    border: 2px dashed #dee2e6;
    padding: 40px 20px;
    text-align: center;
    color: #6c757d;
    border-radius: 5px;
}

.no-image p {
    margin: 0;
    font-size: 14px;
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
{% endset %}

{% do assets.addInlineCss(gallery_styles) %}
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
{% endblock %} ", "stand-page.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/stand-page.html.twig");
    }
}
