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
                        $context["item_data"] = ["page" =>                         // line 52
$context["service_child"], "gallery_item" =>                         // line 53
$context["gallery_item"], "stand_type" =>                         // line 54
($context["stand_type"] ?? null), "construction_area" => $this->getAttribute(                        // line 55
$context["gallery_item"], "construction_area", []), "exhibition_name" => $this->getAttribute(                        // line 56
$context["gallery_item"], "exhibition_name", []), "company_name" => $this->getAttribute(                        // line 57
$context["gallery_item"], "company_name", []), "project_year" => $this->getAttribute(                        // line 58
$context["gallery_item"], "project_year", []), "source" => "services"];
                        // line 61
                        echo "                                ";
                        $context["all_portfolio_items"] = twig_array_merge(($context["all_portfolio_items"] ?? null), [0 => ($context["item_data"] ?? null)]);
                        // line 62
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "                        ";
                }
                // line 64
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service_child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                ";
        }
        // line 66
        echo "                
                ";
        // line 67
        if ((twig_length_filter($this->env, ($context["all_portfolio_items"] ?? null)) > 0)) {
            // line 68
            echo "                <div class=\"portfolio-section\">
                    ";
            // line 70
            echo "                    <div class=\"portfolio-filters\">
                        <h3>Фильтр по типу стенда:</h3>
                        <div class=\"filter-buttons\">
                            <button class=\"filter-btn active\" data-filter=\"all\">Все проекты</button>
                            <button class=\"filter-btn\" data-filter=\"typovye\">Типовые стенды</button>
                            <button class=\"filter-btn\" data-filter=\"nestandart\">Нестандартные стенды</button>
                            <button class=\"filter-btn\" data-filter=\"ekskluziv\">Эксклюзивные стенды</button>
                        </div>
                    </div>
                    
                    <div class=\"portfolio-gallery\">
                        <div class=\"portfolio-grid\">
                            ";
            // line 82
            $context["gallery_id"] = "portfolio-main";
            // line 83
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all_portfolio_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 84
                echo "                                ";
                $context["gallery_item"] = $this->getAttribute($context["item"], "gallery_item", []);
                // line 85
                echo "                                ";
                $context["page_obj"] = $this->getAttribute($context["item"], "page", []);
                // line 86
                echo "                                
                                <div class=\"portfolio-item\" data-type=\"";
                // line 87
                (($this->getAttribute($context["item"], "stand_type", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true))) : (print ("unknown")));
                echo "\">
                                    ";
                // line 88
                $context["item_image"] = null;
                // line 89
                echo "                                    
                                    ";
                // line 91
                echo "                                    ";
                if ($this->getAttribute(($context["gallery_item"] ?? null), "image_upload", [])) {
                    // line 92
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["gallery_item"] ?? null), "image_upload", []));
                    foreach ($context['_seq'] as $context["filepath"] => $context["filedata"]) {
                        // line 93
                        echo "                                            ";
                        if (( !($context["item_image"] ?? null) && $this->getAttribute($context["filedata"], "name", []))) {
                            // line 94
                            echo "                                                ";
                            $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute($context["filedata"], "name", []), [], "array");
                            // line 95
                            echo "                                            ";
                        }
                        // line 96
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['filepath'], $context['filedata'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 97
                    echo "                                    ";
                }
                // line 98
                echo "                                    
                                    ";
                // line 100
                echo "                                    ";
                if (( !($context["item_image"] ?? null) && $this->getAttribute(($context["gallery_item"] ?? null), "image_name", []))) {
                    // line 101
                    echo "                                        ";
                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute(($context["gallery_item"] ?? null), "image_name", []), [], "array");
                    // line 102
                    echo "                                    ";
                }
                // line 103
                echo "                                    
                                    ";
                // line 105
                echo "                                    ";
                if (( !($context["item_image"] ?? null) && $this->getAttribute(($context["gallery_item"] ?? null), "image", []))) {
                    // line 106
                    echo "                                        ";
                    $context["item_image"] = $this->getAttribute($this->getAttribute(($context["page_obj"] ?? null), "media", []), $this->getAttribute(($context["gallery_item"] ?? null), "image", []), [], "array");
                    // line 107
                    echo "                                    ";
                }
                // line 108
                echo "                                    
                                    ";
                // line 109
                if (($context["item_image"] ?? null)) {
                    // line 110
                    echo "                                        ";
                    $context["title"] = (($this->getAttribute(($context["gallery_item"] ?? null), "title", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "title", [])) : ("Проект"));
                    // line 111
                    echo "                                        ";
                    $context["desc"] = (($this->getAttribute(($context["gallery_item"] ?? null), "desc", [])) ? ($this->getAttribute(($context["gallery_item"] ?? null), "desc", [])) : (""));
                    // line 112
                    echo "                                        ";
                    $context["thumb_width"] = 400;
                    // line 113
                    echo "                                        ";
                    $context["thumb_height"] = 300;
                    // line 114
                    echo "                                        
                                        <div class=\"portfolio-card\">
                                            <div class=\"portfolio-image\">
                                                <a href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item_image"] ?? null), "url", []), "html", null, true);
                    echo "\" 
                                                   class=\"glightbox\" 
                                                   data-gallery=\"gallery-";
                    // line 119
                    echo twig_escape_filter($this->env, ($context["gallery_id"] ?? null), "html", null, true);
                    echo "\"
                                                   data-title=\"";
                    // line 120
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\"
                                                   data-description=\"";
                    // line 121
                    echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                    echo "\">
                                                    <img src=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["item_image"] ?? null), "cropZoom", [0 => ($context["thumb_width"] ?? null), 1 => ($context["thumb_height"] ?? null)], "method"), "url", []), "html", null, true);
                    echo "\" 
                                                         alt=\"";
                    // line 123
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\" 
                                                         title=\"";
                    // line 124
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "\">
                                                </a>
                                            </div>
                                            
                                            <div class=\"portfolio-info\">
                                                <h4 class=\"portfolio-title\">";
                    // line 129
                    echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                    echo "</h4>
                                                
                                                <div class=\"portfolio-metadata\">
                                                    ";
                    // line 132
                    if ($this->getAttribute($context["item"], "stand_type", [])) {
                        // line 133
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Тип стенда:</span>
                                                            <span class=\"value stand-type-";
                        // line 135
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true);
                        echo "\">
                                                                ";
                        // line 136
                        if (($this->getAttribute($context["item"], "stand_type", []) == "typovye")) {
                            echo "Типовой
                                                                ";
                        } elseif (($this->getAttribute(                        // line 137
$context["item"], "stand_type", []) == "nestandart")) {
                            echo "Нестандартный
                                                                ";
                        } elseif (($this->getAttribute(                        // line 138
$context["item"], "stand_type", []) == "ekskluziv")) {
                            echo "Эксклюзивный
                                                                ";
                        } else {
                            // line 139
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stand_type", []), "html", null, true);
                            echo "
                                                                ";
                        }
                        // line 141
                        echo "                                                            </span>
                                                        </div>
                                                    ";
                    }
                    // line 144
                    echo "                                                    
                                                    ";
                    // line 145
                    if ($this->getAttribute($context["item"], "construction_area", [])) {
                        // line 146
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Площадь:</span>
                                                            <span class=\"value\">";
                        // line 148
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "construction_area", []), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 151
                    echo "                                                    
                                                    ";
                    // line 152
                    if ($this->getAttribute($context["item"], "exhibition_name", [])) {
                        // line 153
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Выставка:</span>
                                                            <span class=\"value\">";
                        // line 155
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "exhibition_name", []), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 158
                    echo "                                                    
                                                    ";
                    // line 159
                    if ($this->getAttribute($context["item"], "company_name", [])) {
                        // line 160
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Клиент:</span>
                                                            <span class=\"value\">";
                        // line 162
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "company_name", []), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 165
                    echo "                                                    
                                                    ";
                    // line 166
                    if ($this->getAttribute($context["item"], "project_year", [])) {
                        // line 167
                        echo "                                                        <div class=\"metadata-item\">
                                                            <span class=\"label\">Год:</span>
                                                            <span class=\"value\">";
                        // line 169
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "project_year", []), "html", null, true);
                        echo "</span>
                                                        </div>
                                                    ";
                    }
                    // line 172
                    echo "                                                </div>
                                                
                                                ";
                    // line 174
                    if (($context["desc"] ?? null)) {
                        // line 175
                        echo "                                                    <div class=\"portfolio-description\">";
                        echo twig_escape_filter($this->env, ($context["desc"] ?? null), "html", null, true);
                        echo "</div>
                                                ";
                    }
                    // line 177
                    echo "                                            </div>
                                        </div>
                                    ";
                }
                // line 180
                echo "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                        </div>
                    </div>
                </div>
                ";
        } else {
            // line 186
            echo "                <div class=\"portfolio-empty\">
                    <p>Пока нет добавленных проектов в портфолио.</p>
                </div>
                ";
        }
        // line 190
        echo "            </div>
        </div>
    </section>
</section>
";
    }

    // line 196
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 197
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        // line 198
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
        // line 367
        echo "
";
        // line 368
        $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["portfolio_styles"] ?? null)], "method");
    }

    // line 371
    public function block_javascripts($context, array $blocks = [])
    {
        // line 372
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 373
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"], "method");
        // line 374
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css"], "method");
        // line 375
        echo "
";
        // line 376
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
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            portfolioItems.forEach(item => {
                const itemType = item.dataset.type;
                
                if (filterValue === 'all' || itemType === filterValue) {
                    item.classList.remove('filtered-out');
                } else {
                    item.classList.add('filtered-out');
                }
            });
        });
    });
});
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 411
        echo "
";
        // line 412
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
        return array (  719 => 412,  716 => 411,  681 => 376,  678 => 375,  676 => 374,  674 => 373,  670 => 372,  667 => 371,  663 => 368,  660 => 367,  491 => 198,  487 => 197,  484 => 196,  476 => 190,  470 => 186,  464 => 182,  457 => 180,  452 => 177,  446 => 175,  444 => 174,  440 => 172,  434 => 169,  430 => 167,  428 => 166,  425 => 165,  419 => 162,  415 => 160,  413 => 159,  410 => 158,  404 => 155,  400 => 153,  398 => 152,  395 => 151,  389 => 148,  385 => 146,  383 => 145,  380 => 144,  375 => 141,  370 => 139,  365 => 138,  361 => 137,  357 => 136,  353 => 135,  349 => 133,  347 => 132,  341 => 129,  333 => 124,  329 => 123,  325 => 122,  321 => 121,  317 => 120,  313 => 119,  308 => 117,  303 => 114,  300 => 113,  297 => 112,  294 => 111,  291 => 110,  289 => 109,  286 => 108,  283 => 107,  280 => 106,  277 => 105,  274 => 103,  271 => 102,  268 => 101,  265 => 100,  262 => 98,  259 => 97,  253 => 96,  250 => 95,  247 => 94,  244 => 93,  239 => 92,  236 => 91,  233 => 89,  231 => 88,  227 => 87,  224 => 86,  221 => 85,  218 => 84,  213 => 83,  211 => 82,  197 => 70,  194 => 68,  192 => 67,  189 => 66,  186 => 65,  180 => 64,  177 => 63,  171 => 62,  168 => 61,  166 => 58,  165 => 57,  164 => 56,  163 => 55,  162 => 54,  161 => 53,  160 => 52,  158 => 51,  154 => 50,  151 => 49,  148 => 48,  145 => 47,  142 => 46,  139 => 45,  136 => 44,  133 => 43,  130 => 42,  127 => 41,  124 => 40,  119 => 39,  116 => 38,  113 => 37,  110 => 35,  104 => 34,  101 => 33,  95 => 32,  92 => 31,  90 => 28,  89 => 27,  88 => 26,  87 => 25,  86 => 24,  85 => 23,  84 => 22,  82 => 21,  77 => 20,  74 => 19,  69 => 18,  66 => 16,  63 => 15,  57 => 11,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  31 => 1,);
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
                            {% endfor %}
                        {% endif %}
                    {% endfor %}
                {% endif %}
                
                {% if all_portfolio_items|length > 0 %}
                <div class=\"portfolio-section\">
                    {# Filter Controls #}
                    <div class=\"portfolio-filters\">
                        <h3>Фильтр по типу стенда:</h3>
                        <div class=\"filter-buttons\">
                            <button class=\"filter-btn active\" data-filter=\"all\">Все проекты</button>
                            <button class=\"filter-btn\" data-filter=\"typovye\">Типовые стенды</button>
                            <button class=\"filter-btn\" data-filter=\"nestandart\">Нестандартные стенды</button>
                            <button class=\"filter-btn\" data-filter=\"ekskluziv\">Эксклюзивные стенды</button>
                        </div>
                    </div>
                    
                    <div class=\"portfolio-gallery\">
                        <div class=\"portfolio-grid\">
                            {% set gallery_id = 'portfolio-main' %}
                            {% for item in all_portfolio_items %}
                                {% set gallery_item = item.gallery_item %}
                                {% set page_obj = item.page %}
                                
                                <div class=\"portfolio-item\" data-type=\"{{ item.stand_type ?: 'unknown' }}\">
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
                                        {% set title = gallery_item.title ?: 'Проект' %}
                                        {% set desc = gallery_item.desc ?: '' %}
                                        {% set thumb_width = 400 %}
                                        {% set thumb_height = 300 %}
                                        
                                        <div class=\"portfolio-card\">
                                            <div class=\"portfolio-image\">
                                                <a href=\"{{ item_image.url }}\" 
                                                   class=\"glightbox\" 
                                                   data-gallery=\"gallery-{{ gallery_id }}\"
                                                   data-title=\"{{ title }}\"
                                                   data-description=\"{{ desc }}\">
                                                    <img src=\"{{ item_image.cropZoom(thumb_width, thumb_height).url }}\" 
                                                         alt=\"{{ title }}\" 
                                                         title=\"{{ title }}\">
                                                </a>
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
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            portfolioItems.forEach(item => {
                const itemType = item.dataset.type;
                
                if (filterValue === 'all' || itemType === filterValue) {
                    item.classList.remove('filtered-out');
                } else {
                    item.classList.add('filtered-out');
                }
            });
        });
    });
});
{% endset %}

{% do assets.addInlineJs(portfolio_script) %}
{% endblock %} ", "portfolio.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/portfolio.html.twig");
    }
}
