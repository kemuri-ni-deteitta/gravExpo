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

/* partials/base.html.twig */
class __TwigTemplate_58a766b00a7d3fc8f1fdba937db60305f7924ed980cc4bb70df332a36766d82e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 5
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('assets', $context, $blocks);
        // line 39
        echo "</head>
<body id=\"top\" class=\"";
        // line 40
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\" style=\"margin: 0 !important; padding: 0 !important; padding-top: 60px !important;\">
    
    <!-- CUSTOM NAVBAR - COMPLETELY BYPASSING THEME SYSTEM -->
    <div id=\"custom-header\" style=\"position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; width: 100% !important; height: 60px !important; background: #ffffff !important; border-bottom: 1px solid #e0e0e0 !important; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) !important; z-index: 99999 !important; margin: 0 !important; padding: 0 !important;\">
                          <div style=\"height: 60px !important; padding: 0 1.5rem 0 0 !important; margin: 0 auto !important; max-width: 1200px !important; display: flex !important; align-items: center !important; justify-content: space-between !important;\">
             <!-- Logo Section - ABSOLUTE LEFT POSITIONING -->
             <div style=\"position: absolute !important; left: 15px !important; top: 0 !important; display: flex !important; align-items: center !important; height: 60px !important; z-index: 100000 !important;\">
                 <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" style=\"display: flex !important; align-items: center !important; text-decoration: none !important;\">
                     <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo/logo.gif"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
        echo "\" style=\"height: 50px !important; width: auto !important; margin-right: 25px !important;\" />
                 </a>
             </div>
            
            <!-- Navigation Menu with Dropdown Support -->
            <div style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
                <nav style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
                    <ul style=\"display: flex !important; align-items: center !important; margin: 0 !important; padding: 0 !important; list-style: none !important; height: 60px !important; flex-wrap: nowrap !important; white-space: nowrap !important;\">
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 57
            echo "                            ";
            $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
            // line 58
            echo "                            ";
            $context["has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0);
            // line 59
            echo "                            ";
            $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
            // line 60
            echo "                            <li style=\"margin: 0 0.8rem !important; position: relative !important; display: flex !important; align-items: center !important; height: 60px !important; white-space: nowrap !important; flex-shrink: 0 !important;\" 
                                onmouseenter=\"showDropdown(this)\" 
                                onmouseleave=\"hideDropdown(this)\">
                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            echo "\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.3rem 0.6rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 0.9rem !important; transition: all 0.2s ease !important; border-radius: 2px !important; height: 28px !important; white-space: nowrap !important; min-width: fit-content !important; ";
            if (($context["active_page"] ?? null)) {
                echo "color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;";
            }
            echo "\" 
                                   onmouseover=\"this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)'\" 
                                   onmouseout=\"this.style.color='#2c2c2c'; this.style.background='transparent'; ";
            // line 65
            if (($context["active_page"] ?? null)) {
                echo "this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';";
            }
            echo "\">
                                    ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
            if (($context["has_children"] ?? null)) {
                echo " <span style=\"margin-left: 5px; font-size: 0.7rem;\">▼</span>";
            }
            // line 67
            echo "                                </a>
                                ";
            // line 68
            if (($context["has_children"] ?? null)) {
                // line 69
                echo "                                <ul style=\"position: absolute !important; top: 100% !important; left: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; ";
                if (($context["show_children"] ?? null)) {
                    echo "display: block !important;";
                } else {
                    echo "display: none !important;";
                }
                echo " z-index: 100001 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-top: 4px !important; flex-direction: column !important;\">
                                    ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 71
                    echo "                                        ";
                    $context["child_active"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                    // line 72
                    echo "                                        <li style=\"margin: 0 !important; display: block !important; height: auto !important;\">
                                            <a href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                    echo "\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.85rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; ";
                    if (($context["child_active"] ?? null)) {
                        echo "color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;";
                    }
                    echo "\"
                                               onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                               onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; ";
                    // line 75
                    if (($context["child_active"] ?? null)) {
                        echo "this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';";
                    }
                    echo "\">
                                                ";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                    echo "
                                            </a>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                                </ul>
                                ";
            }
            // line 82
            echo "                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    <div id=\"page-wrapper\" style=\"margin: 0 !important; padding: 0 !important;\">
    ";
        // line 91
        $this->displayBlock('header', $context, $blocks);
        // line 96
        echo "
    ";
        // line 97
        $this->displayBlock('hero', $context, $blocks);
        // line 98
        echo "
        <section id=\"start\">
        ";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "        </section>

    </div>

    ";
        // line 114
        $this->displayBlock('footer', $context, $blocks);
        // line 117
        echo "
    ";
        // line 118
        $this->displayBlock('mobile', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('bottom', $context, $blocks);
        // line 134
        echo "
<script>
// Enhanced dropdown navigation with delays and better UX
let dropdownTimeouts = new Map();

function showDropdown(element) {
    const dropdown = element.querySelector('ul');
    if (!dropdown) return;
    
    // Clear any existing timeout for this element
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Show dropdown immediately
    dropdown.style.display = 'block';
    dropdown.style.opacity = '1';
    dropdown.style.transform = 'translateY(0)';
    dropdown.style.pointerEvents = 'auto';
    
    // Also add hover listeners to the dropdown itself
    dropdown.addEventListener('mouseenter', function() {
        if (dropdownTimeouts.has(element)) {
            clearTimeout(dropdownTimeouts.get(element));
            dropdownTimeouts.delete(element);
        }
    });
    
    dropdown.addEventListener('mouseleave', function() {
        hideDropdown(element);
    });
}

function hideDropdown(element) {
    const dropdown = element.querySelector('ul');
    if (!dropdown) return;
    
    // Clear any existing timeout
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
    }
    
    // Set a delay before hiding (300ms for comfortable navigation)
    const timeout = setTimeout(function() {
        dropdown.style.display = 'none';
        dropdown.style.opacity = '0';
        dropdown.style.transform = 'translateY(-10px)';
        dropdown.style.pointerEvents = 'none';
        dropdownTimeouts.delete(element);
    }, 300);
    
    dropdownTimeouts.set(element, timeout);
}

// Enhanced hover behavior for better UX
document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('#custom-header nav ul li');
    
    navItems.forEach(function(item) {
        const dropdown = item.querySelector('ul');
        if (!dropdown) return;
        
        // Create an invisible hover area for better navigation
        const hoverArea = document.createElement('div');
        hoverArea.style.cssText = `
            position: absolute !important;
            top: -10px !important;
            left: -10px !important;
            right: -10px !important;
            bottom: -10px !important;
            z-index: 100000 !important;
            pointer-events: none !important;
        `;
        item.style.position = 'relative';
        item.appendChild(hoverArea);
        
        // Improve dropdown positioning and styling
        dropdown.style.cssText += `
            transition: opacity 0.2s ease, transform 0.2s ease !important;
        `;
    });
});

// Keyboard navigation support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        // Close all dropdowns on Escape key
        dropdownTimeouts.forEach(function(timeout, element) {
            clearTimeout(timeout);
            const dropdown = element.querySelector('ul');
            if (dropdown) {
                dropdown.style.display = 'none';
                dropdown.style.opacity = '0';
                dropdown.style.transform = 'translateY(-10px)';
                dropdown.style.pointerEvents = 'none';
            }
        });
        dropdownTimeouts.clear();
    }
});
</script>

</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 8
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 9
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 22
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 23
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 35
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 36
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 37
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 40
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 91
    public function block_header($context, array $blocks = [])
    {
        // line 92
        echo "        <!-- HIDE ORIGINAL HEADER -->
        <section id=\"header\" class=\"section\" style=\"display: none !important;\">
        </section>
    ";
    }

    // line 97
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        // line 101
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 102
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 103
        $this->displayBlock('messages', $context, $blocks);
        // line 106
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
        ";
    }

    // line 103
    public function block_messages($context, array $blocks = [])
    {
        // line 104
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 104);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 105
        echo "                    ";
    }

    // line 114
    public function block_footer($context, array $blocks = [])
    {
        // line 115
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 115)->display($context);
        // line 116
        echo "    ";
    }

    // line 118
    public function block_mobile($context, array $blocks = [])
    {
        // line 119
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 122
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 122)->display(twig_array_merge($context, ["mobile" => true]));
        // line 123
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 125
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 125)->display(twig_array_merge($context, ["tree" => true]));
        // line 126
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 131
    public function block_bottom($context, array $blocks = [])
    {
        // line 132
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 132,  556 => 131,  549 => 126,  547 => 125,  543 => 123,  541 => 122,  536 => 119,  533 => 118,  529 => 116,  526 => 115,  523 => 114,  519 => 105,  508 => 104,  505 => 103,  496 => 106,  494 => 103,  490 => 102,  487 => 101,  484 => 100,  479 => 97,  472 => 92,  469 => 91,  463 => 40,  456 => 37,  451 => 36,  448 => 35,  438 => 32,  435 => 31,  432 => 30,  429 => 29,  424 => 26,  421 => 25,  418 => 24,  413 => 23,  408 => 22,  405 => 21,  402 => 20,  395 => 17,  391 => 16,  388 => 15,  386 => 14,  375 => 10,  372 => 9,  369 => 8,  254 => 134,  252 => 131,  249 => 130,  247 => 118,  244 => 117,  242 => 114,  236 => 110,  234 => 100,  230 => 98,  228 => 97,  225 => 96,  223 => 91,  214 => 84,  207 => 82,  203 => 80,  193 => 76,  187 => 75,  178 => 73,  175 => 72,  172 => 71,  168 => 70,  159 => 69,  157 => 68,  154 => 67,  149 => 66,  143 => 65,  134 => 63,  129 => 60,  126 => 59,  123 => 58,  120 => 57,  116 => 56,  103 => 48,  99 => 47,  89 => 40,  86 => 39,  84 => 35,  81 => 34,  79 => 29,  76 => 28,  74 => 20,  71 => 19,  69 => 8,  64 => 6,  61 => 5,  59 => 3,  57 => 2,  55 => 1,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress) %}{% endif %}
    {% if theme_var('spectre.icons') %}{% do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addCss('theme://css/line-awesome.min.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\" style=\"margin: 0 !important; padding: 0 !important; padding-top: 60px !important;\">
    
    <!-- CUSTOM NAVBAR - COMPLETELY BYPASSING THEME SYSTEM -->
    <div id=\"custom-header\" style=\"position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; width: 100% !important; height: 60px !important; background: #ffffff !important; border-bottom: 1px solid #e0e0e0 !important; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1) !important; z-index: 99999 !important; margin: 0 !important; padding: 0 !important;\">
                          <div style=\"height: 60px !important; padding: 0 1.5rem 0 0 !important; margin: 0 auto !important; max-width: 1200px !important; display: flex !important; align-items: center !important; justify-content: space-between !important;\">
             <!-- Logo Section - ABSOLUTE LEFT POSITIONING -->
             <div style=\"position: absolute !important; left: 15px !important; top: 0 !important; display: flex !important; align-items: center !important; height: 60px !important; z-index: 100000 !important;\">
                 <a href=\"{{ home_url }}\" style=\"display: flex !important; align-items: center !important; text-decoration: none !important;\">
                     <img src=\"{{ url('theme://images/logo/logo.gif') }}\" alt=\"{{ site.title }}\" style=\"height: 50px !important; width: auto !important; margin-right: 25px !important;\" />
                 </a>
             </div>
            
            <!-- Navigation Menu with Dropdown Support -->
            <div style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
                <nav style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
                    <ul style=\"display: flex !important; align-items: center !important; margin: 0 !important; padding: 0 !important; list-style: none !important; height: 60px !important; flex-wrap: nowrap !important; white-space: nowrap !important;\">
                        {% for p in pages.children.visible %}
                            {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
                            {% set has_children = p.children.visible.count > 0 %}
                            {% set show_children = has_children and (p.active or p.activeChild) %}
                            <li style=\"margin: 0 0.8rem !important; position: relative !important; display: flex !important; align-items: center !important; height: 60px !important; white-space: nowrap !important; flex-shrink: 0 !important;\" 
                                onmouseenter=\"showDropdown(this)\" 
                                onmouseleave=\"hideDropdown(this)\">
                                <a href=\"{{ p.url }}\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.3rem 0.6rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 0.9rem !important; transition: all 0.2s ease !important; border-radius: 2px !important; height: 28px !important; white-space: nowrap !important; min-width: fit-content !important; {% if active_page %}color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;{% endif %}\" 
                                   onmouseover=\"this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)'\" 
                                   onmouseout=\"this.style.color='#2c2c2c'; this.style.background='transparent'; {% if active_page %}this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';{% endif %}\">
                                    {{ p.menu }}{% if has_children %} <span style=\"margin-left: 5px; font-size: 0.7rem;\">▼</span>{% endif %}
                                </a>
                                {% if has_children %}
                                <ul style=\"position: absolute !important; top: 100% !important; left: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; {% if show_children %}display: block !important;{% else %}display: none !important;{% endif %} z-index: 100001 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-top: 4px !important; flex-direction: column !important;\">
                                    {% for child in p.children.visible %}
                                        {% set child_active = (child.active or child.activeChild) ? 'active' : '' %}
                                        <li style=\"margin: 0 !important; display: block !important; height: auto !important;\">
                                            <a href=\"{{ child.url }}\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.85rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; {% if child_active %}color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;{% endif %}\"
                                               onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                               onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; {% if child_active %}this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';{% endif %}\">
                                                {{ child.menu }}
                                            </a>
                                        </li>
                                    {% endfor %}
                                </ul>
                                {% endif %}
                            </li>
                        {% endfor %}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    <div id=\"page-wrapper\" style=\"margin: 0 !important; padding: 0 !important;\">
    {% block header %}
        <!-- HIDE ORIGINAL HEADER -->
        <section id=\"header\" class=\"section\" style=\"display: none !important;\">
        </section>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {{ block('content_surround') }}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>
    {% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

<script>
// Enhanced dropdown navigation with delays and better UX
let dropdownTimeouts = new Map();

function showDropdown(element) {
    const dropdown = element.querySelector('ul');
    if (!dropdown) return;
    
    // Clear any existing timeout for this element
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
        dropdownTimeouts.delete(element);
    }
    
    // Show dropdown immediately
    dropdown.style.display = 'block';
    dropdown.style.opacity = '1';
    dropdown.style.transform = 'translateY(0)';
    dropdown.style.pointerEvents = 'auto';
    
    // Also add hover listeners to the dropdown itself
    dropdown.addEventListener('mouseenter', function() {
        if (dropdownTimeouts.has(element)) {
            clearTimeout(dropdownTimeouts.get(element));
            dropdownTimeouts.delete(element);
        }
    });
    
    dropdown.addEventListener('mouseleave', function() {
        hideDropdown(element);
    });
}

function hideDropdown(element) {
    const dropdown = element.querySelector('ul');
    if (!dropdown) return;
    
    // Clear any existing timeout
    if (dropdownTimeouts.has(element)) {
        clearTimeout(dropdownTimeouts.get(element));
    }
    
    // Set a delay before hiding (300ms for comfortable navigation)
    const timeout = setTimeout(function() {
        dropdown.style.display = 'none';
        dropdown.style.opacity = '0';
        dropdown.style.transform = 'translateY(-10px)';
        dropdown.style.pointerEvents = 'none';
        dropdownTimeouts.delete(element);
    }, 300);
    
    dropdownTimeouts.set(element, timeout);
}

// Enhanced hover behavior for better UX
document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('#custom-header nav ul li');
    
    navItems.forEach(function(item) {
        const dropdown = item.querySelector('ul');
        if (!dropdown) return;
        
        // Create an invisible hover area for better navigation
        const hoverArea = document.createElement('div');
        hoverArea.style.cssText = `
            position: absolute !important;
            top: -10px !important;
            left: -10px !important;
            right: -10px !important;
            bottom: -10px !important;
            z-index: 100000 !important;
            pointer-events: none !important;
        `;
        item.style.position = 'relative';
        item.appendChild(hoverArea);
        
        // Improve dropdown positioning and styling
        dropdown.style.cssText += `
            transition: opacity 0.2s ease, transform 0.2s ease !important;
        `;
    });
});

// Keyboard navigation support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        // Close all dropdowns on Escape key
        dropdownTimeouts.forEach(function(timeout, element) {
            clearTimeout(timeout);
            const dropdown = element.querySelector('ul');
            if (dropdown) {
                dropdown.style.display = 'none';
                dropdown.style.opacity = '0';
                dropdown.style.transform = 'translateY(-10px)';
                dropdown.style.pointerEvents = 'none';
            }
        });
        dropdownTimeouts.clear();
    }
});
</script>

</body>
</html>
", "partials/base.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/partials/base.html.twig");
    }
    private $deferred;
}
