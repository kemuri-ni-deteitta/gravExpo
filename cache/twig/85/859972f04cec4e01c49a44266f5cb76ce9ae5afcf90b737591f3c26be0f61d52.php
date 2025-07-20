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
                // line 24
                echo "                                ";
                // line 25
                echo "                                ";
                if ($this->getAttribute($context["item"], "images", [])) {
                    // line 26
                    echo "                                    ";
                    // line 27
                    echo "                                    <div class=\"project-block\">
                                        <div class=\"project-title\">
                                            <h3>";
                    // line 29
                    (($this->getAttribute($context["item"], "title", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true))) : (print ("Проект")));
                    echo "</h3>
                                            ";
                    // line 30
                    if ($this->getAttribute($context["item"], "desc", [])) {
                        // line 31
                        echo "                                                <p class=\"project-description\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "desc", []), "html", null, true);
                        echo "</p>
                                            ";
                    }
                    // line 33
                    echo "                                            
                                            ";
                    // line 35
                    echo "                                            ";
                    if (((($this->getAttribute($context["item"], "construction_area", []) || $this->getAttribute($context["item"], "exhibition_name", [])) || $this->getAttribute($context["item"], "company_name", [])) || $this->getAttribute($context["item"], "project_year", []))) {
                        // line 36
                        echo "                                                <div class=\"project-metadata\">
                                                    ";
                        // line 37
                        if ($this->getAttribute($context["item"], "construction_area", [])) {
                            // line 38
                            echo "                                                        <span class=\"metadata-badge\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "construction_area", []), "html", null, true);
                            echo "</span>
                                                    ";
                        }
                        // line 40
                        echo "                                                    ";
                        if ($this->getAttribute($context["item"], "exhibition_name", [])) {
                            // line 41
                            echo "                                                        <span class=\"metadata-badge\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "exhibition_name", []), "html", null, true);
                            echo "</span>
                                                    ";
                        }
                        // line 43
                        echo "                                                    ";
                        if ($this->getAttribute($context["item"], "company_name", [])) {
                            // line 44
                            echo "                                                        <span class=\"metadata-badge\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company_name", []), "html", null, true);
                            echo "</span>
                                                    ";
                        }
                        // line 46
                        echo "                                                    ";
                        if ($this->getAttribute($context["item"], "project_year", [])) {
                            // line 47
                            echo "                                                        <span class=\"metadata-badge\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "project_year", []), "html", null, true);
                            echo "</span>
                                                    ";
                        }
                        // line 49
                        echo "                                                </div>
                                            ";
                    }
                    // line 51
                    echo "                                        </div>
                                        
                                        <div class=\"project-images\">
                                            ";
                    // line 54
                    $context["project_gallery_id"] = ((($context["gallery_id"] ?? null) . "-project-") . $this->getAttribute($context["loop"], "index", []));
                    // line 55
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "images", []));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["img_item"]) {
                        // line 56
                        echo "                                                ";
                        $context["img_obj"] = null;
                        // line 57
                        echo "                                                
                                                ";
                        // line 59
                        echo "                                                ";
                        if ($this->getAttribute($context["img_item"], "image_upload", [])) {
                            // line 60
                            echo "                                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["img_item"], "image_upload", []));
                            foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                                // line 61
                                echo "                                                        ";
                                if (( !($context["img_obj"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                    // line 62
                                    echo "                                                            ";
                                    $context["img_obj"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                    // line 63
                                    echo "                                                        ";
                                }
                                // line 64
                                echo "                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 65
                            echo "                                                ";
                        }
                        // line 66
                        echo "                                                
                                                ";
                        // line 67
                        if (($context["img_obj"] ?? null)) {
                            // line 68
                            echo "                                                    ";
                            $context["thumb_width"] = 300;
                            // line 69
                            echo "                                                    ";
                            $context["thumb_height"] = 225;
                            // line 70
                            echo "                                                    ";
                            $context["img_title"] = (($this->getAttribute($context["img_item"], "caption", [])) ? ($this->getAttribute($context["img_item"], "caption", [])) : ((($this->getAttribute($context["item"], "title", []) . " - Фото ") . $this->getAttribute($context["loop"], "index", []))));
                            // line 71
                            echo "                                                    
                                                    <div class=\"lightbox-gallery__column\">
                                                        <div class=\"gallery-item\">
                                                            <a href=\"";
                            // line 74
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["img_obj"] ?? null), "url", []), "html", null, true);
                            echo "\" 
                                                               class=\"glightbox\" 
                                                               data-gallery=\"gallery-";
                            // line 76
                            echo twig_escape_filter($this->env, ($context["project_gallery_id"] ?? null), "html", null, true);
                            echo "\"
                                                               data-title=\"";
                            // line 77
                            echo twig_escape_filter($this->env, ($context["img_title"] ?? null), "html", null, true);
                            echo "\"
                                                               data-description=\"";
                            // line 78
                            (($this->getAttribute($context["img_item"], "caption", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["img_item"], "caption", []), "html", null, true))) : (print ("")));
                            echo "\">
                                                                <img src=\"";
                            // line 79
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["img_obj"] ?? null), "cropZoom", [0 => ($context["thumb_width"] ?? null), 1 => ($context["thumb_height"] ?? null)], "method"), "url", []), "html", null, true);
                            echo "\" 
                                                                     alt=\"";
                            // line 80
                            echo twig_escape_filter($this->env, ($context["img_title"] ?? null), "html", null, true);
                            echo "\" 
                                                                     title=\"";
                            // line 81
                            echo twig_escape_filter($this->env, ($context["img_title"] ?? null), "html", null, true);
                            echo "\"
                                                                     style=\"width: 100%; height: auto; border-radius: 5px;\">
                                                            </a>
                                                            ";
                            // line 84
                            if ($this->getAttribute($context["img_item"], "caption", [])) {
                                // line 85
                                echo "                                                                <div class=\"gallery-item-title\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["img_item"], "caption", []), "html", null, true);
                                echo "</div>
                                                            ";
                            }
                            // line 87
                            echo "                                                            ";
                            if ($this->getAttribute($context["img_item"], "is_main", [])) {
                                // line 88
                                echo "                                                                <div class=\"main-image-badge\">Главное фото</div>
                                                            ";
                            }
                            // line 90
                            echo "                                                        </div>
                                                    </div>
                                                ";
                        }
                        // line 93
                        echo "                                            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    echo "                                        </div>
                                    </div>
                                ";
                } else {
                    // line 97
                    echo "                                    ";
                    // line 98
                    echo "                                    <div class=\"lightbox-gallery__column\">
                                        ";
                    // line 99
                    $context["item_image"] = null;
                    // line 100
                    echo "                                        
                                        ";
                    // line 102
                    echo "                                        ";
                    if ($this->getAttribute($context["item"], "image_upload", [])) {
                        // line 103
                        echo "                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "image_upload", []));
                        foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                            // line 104
                            echo "                                                ";
                            if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                                // line 105
                                echo "                                                    ";
                                $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                                // line 106
                                echo "                                                ";
                            }
                            // line 107
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        echo "                                        ";
                    }
                    // line 109
                    echo "                                        
                                        ";
                    // line 111
                    echo "                                        ";
                    if (( !($context["item_image"] ?? null) && $this->getAttribute($context["item"], "image_name", []))) {
                        // line 112
                        echo "                                            ";
                        $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image_name", []), [], "array");
                        // line 113
                        echo "                                        ";
                    }
                    // line 114
                    echo "                                        
                                        ";
                    // line 116
                    echo "                                        ";
                    if (( !($context["item_image"] ?? null) && $this->getAttribute($context["item"], "image", []))) {
                        // line 117
                        echo "                                            ";
                        $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array");
                        // line 118
                        echo "                                        ";
                    }
                    // line 119
                    echo "                                        
                                        ";
                    // line 120
                    if (($context["item_image"] ?? null)) {
                        // line 121
                        echo "                                            ";
                        $context["title"] = (($this->getAttribute($context["item"], "title", [])) ? ($this->getAttribute($context["item"], "title", [])) : (""));
                        // line 122
                        echo "                                            ";
                        $context["desc"] = (($this->getAttribute($context["item"], "desc", [])) ? ($this->getAttribute($context["item"], "desc", [])) : (""));
                        // line 123
                        echo "                                            ";
                        $context["thumb_width"] = 400;
                        // line 124
                        echo "                                            ";
                        $context["thumb_height"] = 300;
                        // line 125
                        echo "                                            
                                            <div class=\"gallery-item\">
                                                <a href=\"";
                        // line 127
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["item_image"] ?? null), "url", []), "html", null, true);
                        echo "\" 
                                                   class=\"glightbox\" 
                                                   data-gallery=\"gallery-";
                        // line 129
                        echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                        echo "\"
                                                   data-title=\"";
                        // line 130
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "\"
                                                   data-description=\"";
                        // line 131
                        echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                        echo "\">
                                                    <img src=\"";
                        // line 132
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["item_image"] ?? null), "cropZoom", [0 => ($context["thumb_width"] ?? null), 1 => ($context["thumb_height"] ?? null)], "method"), "url", []), "html", null, true);
                        echo "\" 
                                                         alt=\"";
                        // line 133
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "\" 
                                                         title=\"";
                        // line 134
                        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                        echo "\"
                                                         style=\"width: 100%; height: auto; border-radius: 5px;\">
                                                </a>
                                                ";
                        // line 137
                        if (($context["title"] ?? null)) {
                            // line 138
                            echo "                                                    <div class=\"gallery-item-title\">";
                            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                            echo "</div>
                                                ";
                        }
                        // line 140
                        echo "                                                
                                                ";
                        // line 142
                        echo "                                                ";
                        if (((($this->getAttribute($context["item"], "construction_area", []) || $this->getAttribute($context["item"], "exhibition_name", [])) || $this->getAttribute($context["item"], "company_name", [])) || $this->getAttribute($context["item"], "project_year", []))) {
                            // line 143
                            echo "                                                    <div class=\"legacy-metadata\">
                                                        ";
                            // line 144
                            if ($this->getAttribute($context["item"], "construction_area", [])) {
                                // line 145
                                echo "                                                            <small>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "construction_area", []), "html", null, true);
                                echo "</small>
                                                        ";
                            }
                            // line 147
                            echo "                                                        ";
                            if ($this->getAttribute($context["item"], "exhibition_name", [])) {
                                // line 148
                                echo "                                                            <small>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "exhibition_name", []), "html", null, true);
                                echo "</small>
                                                        ";
                            }
                            // line 150
                            echo "                                                        ";
                            if ($this->getAttribute($context["item"], "company_name", [])) {
                                // line 151
                                echo "                                                            <small>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company_name", []), "html", null, true);
                                echo "</small>
                                                        ";
                            }
                            // line 153
                            echo "                                                        ";
                            if ($this->getAttribute($context["item"], "project_year", [])) {
                                // line 154
                                echo "                                                            <small>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "project_year", []), "html", null, true);
                                echo "</small>
                                                        ";
                            }
                            // line 156
                            echo "                                                    </div>
                                                ";
                        }
                        // line 158
                        echo "                                            </div>
                                        ";
                    } elseif ((($this->getAttribute(                    // line 159
$context["item"], "image_upload", []) || $this->getAttribute($context["item"], "image_name", [])) || $this->getAttribute($context["item"], "image", []))) {
                        // line 160
                        echo "                                            <div class=\"gallery-item\">
                                                <div class=\"no-image\">
                                                    ";
                        // line 162
                        if ($this->getAttribute($context["item"], "image_upload", [])) {
                            // line 163
                            echo "                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "image_upload", []));
                            foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                                // line 164
                                echo "                                                            <p>Изображение не найдено: ";
                                echo twig_escape_filter($this->env, (($this->getAttribute($context["filedata"], "name", [])) ? ($this->getAttribute($context["filedata"], "name", [])) : ($context["filepath"])), "html", null, true);
                                echo "</p>
                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 166
                            echo "                                                    ";
                        } elseif ($this->getAttribute($context["item"], "image_name", [])) {
                            // line 167
                            echo "                                                        <p>Изображение не найдено: ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image_name", []), "html", null, true);
                            echo "</p>
                                                    ";
                        } elseif ($this->getAttribute(                        // line 168
$context["item"], "image", [])) {
                            // line 169
                            echo "                                                        <p>Изображение не найдено: ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", []), "html", null, true);
                            echo "</p>
                                                    ";
                        }
                        // line 171
                        echo "                                                </div>
                                            </div>
                                        ";
                    }
                    // line 174
                    echo "                                    </div>
                                ";
                }
                // line 176
                echo "                            ";
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
            // line 177
            echo "                        </div>
                    </div>
                </div>
                ";
        }
        // line 181
        echo "            </div>
        </div>
    </section>
</section>
";
    }

    // line 187
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 188
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 189
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

.project-block {
    margin-bottom: 40px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
    border: 1px solid #e9ecef;
}

.project-title h3 {
    margin: 0 0 10px 0;
    color: #333;
    font-size: 20px;
}

.project-description {
    margin: 0 0 15px 0;
    color: #666;
    font-size: 14px;
    line-height: 1.4;
}

.project-metadata {
    margin-bottom: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.metadata-badge {
    background: #007bff;
    color: white;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 500;
}

.project-images {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px;
}

.main-image-badge {
    position: absolute;
    top: 5px;
    left: 5px;
    background: #28a745;
    color: white;
    padding: 2px 6px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 500;
}

.legacy-metadata {
    margin-top: 8px;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.legacy-metadata small {
    background: #e9ecef;
    color: #495057;
    padding: 2px 6px;
    border-radius: 8px;
    font-size: 10px;
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
        // line 362
        echo "
";
        // line 363
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["gallery_styles"] ?? null)], "method");
    }

    // line 366
    public function block_javascripts($context, array $blocks = [])
    {
        // line 367
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 368
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"], "method");
        // line 369
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css"], "method");
        // line 370
        echo "
";
        // line 371
        $context["gallery_script"] = ('' === $tmp = "document.addEventListener('DOMContentLoaded', function() {
    const lightbox = GLightbox({
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 380
        echo "
";
        // line 381
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
        return array (  770 => 381,  767 => 380,  758 => 371,  755 => 370,  753 => 369,  751 => 368,  747 => 367,  744 => 366,  740 => 363,  737 => 362,  564 => 189,  560 => 188,  557 => 187,  549 => 181,  543 => 177,  529 => 176,  525 => 174,  520 => 171,  514 => 169,  512 => 168,  507 => 167,  504 => 166,  495 => 164,  490 => 163,  488 => 162,  484 => 160,  482 => 159,  479 => 158,  475 => 156,  469 => 154,  466 => 153,  460 => 151,  457 => 150,  451 => 148,  448 => 147,  442 => 145,  440 => 144,  437 => 143,  434 => 142,  431 => 140,  425 => 138,  423 => 137,  417 => 134,  413 => 133,  409 => 132,  405 => 131,  401 => 130,  397 => 129,  392 => 127,  388 => 125,  385 => 124,  382 => 123,  379 => 122,  376 => 121,  374 => 120,  371 => 119,  368 => 118,  365 => 117,  362 => 116,  359 => 114,  356 => 113,  353 => 112,  350 => 111,  347 => 109,  344 => 108,  338 => 107,  335 => 106,  332 => 105,  329 => 104,  324 => 103,  321 => 102,  318 => 100,  316 => 99,  313 => 98,  311 => 97,  306 => 94,  292 => 93,  287 => 90,  283 => 88,  280 => 87,  274 => 85,  272 => 84,  266 => 81,  262 => 80,  258 => 79,  254 => 78,  250 => 77,  246 => 76,  241 => 74,  236 => 71,  233 => 70,  230 => 69,  227 => 68,  225 => 67,  222 => 66,  219 => 65,  213 => 64,  210 => 63,  207 => 62,  204 => 61,  199 => 60,  196 => 59,  193 => 57,  190 => 56,  172 => 55,  170 => 54,  165 => 51,  161 => 49,  155 => 47,  152 => 46,  146 => 44,  143 => 43,  137 => 41,  134 => 40,  128 => 38,  126 => 37,  123 => 36,  120 => 35,  117 => 33,  111 => 31,  109 => 30,  105 => 29,  101 => 27,  99 => 26,  96 => 25,  94 => 24,  76 => 23,  74 => 22,  65 => 15,  63 => 14,  57 => 11,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  31 => 1,);
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
                                {# Handle new multiple images structure #}
                                {% if item.images %}
                                    {# New structure - each project has multiple images #}
                                    <div class=\"project-block\">
                                        <div class=\"project-title\">
                                            <h3>{{ item.title ?: 'Проект' }}</h3>
                                            {% if item.desc %}
                                                <p class=\"project-description\">{{ item.desc }}</p>
                                            {% endif %}
                                            
                                            {# Project metadata #}
                                            {% if item.construction_area or item.exhibition_name or item.company_name or item.project_year %}
                                                <div class=\"project-metadata\">
                                                    {% if item.construction_area %}
                                                        <span class=\"metadata-badge\">{{ item.construction_area }}</span>
                                                    {% endif %}
                                                    {% if item.exhibition_name %}
                                                        <span class=\"metadata-badge\">{{ item.exhibition_name }}</span>
                                                    {% endif %}
                                                    {% if item.company_name %}
                                                        <span class=\"metadata-badge\">{{ item.company_name }}</span>
                                                    {% endif %}
                                                    {% if item.project_year %}
                                                        <span class=\"metadata-badge\">{{ item.project_year }}</span>
                                                    {% endif %}
                                                </div>
                                            {% endif %}
                                        </div>
                                        
                                        <div class=\"project-images\">
                                            {% set project_gallery_id = gallery_id ~ '-project-' ~ loop.index %}
                                            {% for img_item in item.images %}
                                                {% set img_obj = null %}
                                                
                                                {# Check for uploaded image #}
                                                {% if img_item.image_upload %}
                                                    {% for filepath, filedata in img_item.image_upload %}
                                                        {% if not img_obj and filedata.name %}
                                                            {% set img_obj = page.media[filedata.name] %}
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                                
                                                {% if img_obj %}
                                                    {% set thumb_width = 300 %}
                                                    {% set thumb_height = 225 %}
                                                    {% set img_title = img_item.caption ?: (item.title ~ ' - Фото ' ~ loop.index) %}
                                                    
                                                    <div class=\"lightbox-gallery__column\">
                                                        <div class=\"gallery-item\">
                                                            <a href=\"{{ img_obj.url }}\" 
                                                               class=\"glightbox\" 
                                                               data-gallery=\"gallery-{{ project_gallery_id }}\"
                                                               data-title=\"{{ img_title }}\"
                                                               data-description=\"{{ img_item.caption ?: '' }}\">
                                                                <img src=\"{{ img_obj.cropZoom(thumb_width, thumb_height).url }}\" 
                                                                     alt=\"{{ img_title }}\" 
                                                                     title=\"{{ img_title }}\"
                                                                     style=\"width: 100%; height: auto; border-radius: 5px;\">
                                                            </a>
                                                            {% if img_item.caption %}
                                                                <div class=\"gallery-item-title\">{{ img_item.caption }}</div>
                                                            {% endif %}
                                                            {% if img_item.is_main %}
                                                                <div class=\"main-image-badge\">Главное фото</div>
                                                            {% endif %}
                                                        </div>
                                                    </div>
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                    </div>
                                {% else %}
                                    {# Legacy structure - single image per item #}
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
                                                
                                                {# Show metadata if available #}
                                                {% if item.construction_area or item.exhibition_name or item.company_name or item.project_year %}
                                                    <div class=\"legacy-metadata\">
                                                        {% if item.construction_area %}
                                                            <small>{{ item.construction_area }}</small>
                                                        {% endif %}
                                                        {% if item.exhibition_name %}
                                                            <small>{{ item.exhibition_name }}</small>
                                                        {% endif %}
                                                        {% if item.company_name %}
                                                            <small>{{ item.company_name }}</small>
                                                        {% endif %}
                                                        {% if item.project_year %}
                                                            <small>{{ item.project_year }}</small>
                                                        {% endif %}
                                                    </div>
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
                                {% endif %}
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

.project-block {
    margin-bottom: 40px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
    border: 1px solid #e9ecef;
}

.project-title h3 {
    margin: 0 0 10px 0;
    color: #333;
    font-size: 20px;
}

.project-description {
    margin: 0 0 15px 0;
    color: #666;
    font-size: 14px;
    line-height: 1.4;
}

.project-metadata {
    margin-bottom: 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.metadata-badge {
    background: #007bff;
    color: white;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 500;
}

.project-images {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -10px;
}

.main-image-badge {
    position: absolute;
    top: 5px;
    left: 5px;
    background: #28a745;
    color: white;
    padding: 2px 6px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 500;
}

.legacy-metadata {
    margin-top: 8px;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.legacy-metadata small {
    background: #e9ecef;
    color: #495057;
    padding: 2px 6px;
    border-radius: 8px;
    font-size: 10px;
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
