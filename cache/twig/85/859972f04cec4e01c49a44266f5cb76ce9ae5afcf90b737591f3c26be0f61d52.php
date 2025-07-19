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
                    <h2>Примеры работ</h2>
                    <div class=\"lightbox-gallery\">
                        <div class=\"lightbox-gallery__columns\">
                            ";
            // line 19
            $context["gallery_id"] = md5($this->getAttribute(($context["page"] ?? null), "url", []));
            // line 20
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "gallery", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "                                <div class=\"lightbox-gallery__column\">
                                    ";
                // line 22
                $context["item_image"] = null;
                // line 23
                echo "                                    
                                    ";
                // line 25
                echo "                                    ";
                if ($this->getAttribute($context["item"], "image_upload", [])) {
                    // line 26
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "image_upload", []));
                    foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                        // line 27
                        echo "                                            ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                            // line 28
                            echo "                                                ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                            // line 29
                            echo "                                            ";
                        }
                        // line 30
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                                    ";
                }
                // line 32
                echo "                                    
                                    ";
                // line 34
                echo "                                    ";
                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["item"], "image_name", []))) {
                    // line 35
                    echo "                                        ";
                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image_name", []), [], "array");
                    // line 36
                    echo "                                    ";
                }
                // line 37
                echo "                                    
                                    ";
                // line 39
                echo "                                    ";
                if (( !($context["item_image"] ?? null) && $this->getAttribute($context["item"], "image", []))) {
                    // line 40
                    echo "                                        ";
                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array");
                    // line 41
                    echo "                                    ";
                }
                // line 42
                echo "                                    
                                    ";
                // line 43
                if (($context["item_image"] ?? null)) {
                    // line 44
                    echo "                                        ";
                    $context["title"] = (($this->getAttribute($context["item"], "title", [])) ? ($this->getAttribute($context["item"], "title", [])) : (""));
                    // line 45
                    echo "                                        ";
                    $context["desc"] = (($this->getAttribute($context["item"], "desc", [])) ? ($this->getAttribute($context["item"], "desc", [])) : (""));
                    // line 46
                    echo "                                        ";
                    $context["thumb_width"] = 400;
                    // line 47
                    echo "                                        ";
                    $context["thumb_height"] = 300;
                    // line 48
                    echo "                                        
                                        <div class=\"gallery-item\">
                                            <a href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item_image"] ?? null), "url", []), "html", null, true);
                    echo "\" 
                                               class=\"glightbox\" 
                                               data-gallery=\"gallery-";
                    // line 52
                    echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                    echo "\"
                                               data-title=\"";
                    // line 53
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                               data-description=\"";
                    // line 54
                    echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["item_image"] ?? null), "cropZoom", [0 => ($context["thumb_width"] ?? null), 1 => ($context["thumb_height"] ?? null)], "method"), "url", []), "html", null, true);
                    echo "\" 
                                                     alt=\"";
                    // line 56
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\" 
                                                     title=\"";
                    // line 57
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                                     style=\"width: 100%; height: auto; border-radius: 5px;\">
                                            </a>
                                            ";
                    // line 60
                    if (($context["title"] ?? null)) {
                        // line 61
                        echo "                                                <div class=\"gallery-item-title\">";
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "</div>
                                            ";
                    }
                    // line 63
                    echo "                                        </div>
                                    ";
                } elseif ((($this->getAttribute(                // line 64
$context["item"], "image_upload", []) || $this->getAttribute($context["item"], "image_name", [])) || $this->getAttribute($context["item"], "image", []))) {
                    // line 65
                    echo "                                        <div class=\"gallery-item\">
                                            <div class=\"no-image\">
                                                ";
                    // line 67
                    if ($this->getAttribute($context["item"], "image_upload", [])) {
                        // line 68
                        echo "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "image_upload", []));
                        foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                            // line 69
                            echo "                                                        <p>Изображение не найдено: ";
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["filedata"], "name", [])) ? ($this->getAttribute($context["filedata"], "name", [])) : ($context["filepath"])), "html", null, true);
                            echo "</p>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 71
                        echo "                                                ";
                    } elseif ($this->getAttribute($context["item"], "image_name", [])) {
                        // line 72
                        echo "                                                    <p>Изображение не найдено: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image_name", []), "html", null, true);
                        echo "</p>
                                                ";
                    } elseif ($this->getAttribute(                    // line 73
$context["item"], "image", [])) {
                        // line 74
                        echo "                                                    <p>Изображение не найдено: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", []), "html", null, true);
                        echo "</p>
                                                ";
                    }
                    // line 76
                    echo "                                            </div>
                                        </div>
                                    ";
                }
                // line 79
                echo "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        </div>
                    </div>
                </div>
                ";
        }
        // line 85
        echo "            </div>
        </div>
    </section>
</section>
";
    }

    // line 91
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 92
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 93
        $context["gallery_styles"] = ('' === $tmp = ".lightbox-gallery {
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
        // line 172
        echo "
";
        // line 173
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["gallery_styles"] ?? null)], "method");
    }

    // line 176
    public function block_javascripts($context, array $blocks = [])
    {
        // line 177
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 178
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"], "method");
        // line 179
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css"], "method");
        // line 180
        echo "
";
        // line 181
        $context["gallery_script"] = ('' === $tmp = "document.addEventListener('DOMContentLoaded', function() {
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 190
        echo "
";
        // line 191
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
        return array (  382 => 191,  379 => 190,  370 => 181,  367 => 180,  365 => 179,  363 => 178,  359 => 177,  356 => 176,  352 => 173,  349 => 172,  270 => 93,  266 => 92,  263 => 91,  255 => 85,  249 => 81,  242 => 79,  237 => 76,  231 => 74,  229 => 73,  224 => 72,  221 => 71,  212 => 69,  207 => 68,  205 => 67,  201 => 65,  199 => 64,  196 => 63,  190 => 61,  188 => 60,  182 => 57,  178 => 56,  174 => 55,  170 => 54,  166 => 53,  162 => 52,  157 => 50,  153 => 48,  150 => 47,  147 => 46,  144 => 45,  141 => 44,  139 => 43,  136 => 42,  133 => 41,  130 => 40,  127 => 39,  124 => 37,  121 => 36,  118 => 35,  115 => 34,  112 => 32,  109 => 31,  103 => 30,  100 => 29,  97 => 28,  94 => 27,  89 => 26,  86 => 25,  83 => 23,  81 => 22,  78 => 21,  73 => 20,  71 => 19,  65 => 15,  63 => 14,  57 => 11,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  31 => 1,);
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
                    <h2>Примеры работ</h2>
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
