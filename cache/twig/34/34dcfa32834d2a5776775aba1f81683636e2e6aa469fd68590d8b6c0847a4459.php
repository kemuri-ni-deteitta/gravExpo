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
        <div style=\"height: 60px !important; padding: 0 1.5rem !important; margin: 0 auto !important; max-width: 1200px !important; display: flex !important; align-items: center !important; justify-content: space-between !important;\">
            <!-- Logo Section -->
            <div style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
                ";
        // line 47
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "custom_logo");
        // line 48
        echo "                ";
        if (($context["logo"] ?? null)) {
            // line 49
            echo "                    ";
            $context["logo_file"] = $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", []);
            // line 50
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
            echo "\" style=\"display: flex !important; align-items: center !important; text-decoration: none !important;\">
                        <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
            echo "\" style=\"max-height: 40px !important; width: auto !important; margin-right: 10px !important;\" />
                    </a>
                ";
        }
        // line 54
        echo "            </div>
            
            <!-- Navigation Menu -->
            <div style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
                <nav style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
                                         <ul style=\"display: flex !important; align-items: center !important; margin: 0 !important; padding: 0 !important; list-style: none !important; height: 60px !important; flex-wrap: nowrap !important; white-space: nowrap !important;\">
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 61
            echo "                            ";
            $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
            // line 62
            echo "                                                         <li style=\"margin: 0 0.8rem !important; display: flex !important; align-items: center !important; height: 60px !important; white-space: nowrap !important; flex-shrink: 0 !important;\">
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
            echo "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
    <div id=\"page-wrapper\" style=\"margin: 0 !important; padding: 0 !important;\">
    ";
        // line 77
        $this->displayBlock('header', $context, $blocks);
        // line 82
        echo "
    ";
        // line 83
        $this->displayBlock('hero', $context, $blocks);
        // line 84
        echo "
        <section id=\"start\">
        ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "        </section>

    </div>

    ";
        // line 100
        $this->displayBlock('footer', $context, $blocks);
        // line 103
        echo "
    ";
        // line 104
        $this->displayBlock('mobile', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('bottom', $context, $blocks);
        // line 120
        echo "
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

    // line 77
    public function block_header($context, array $blocks = [])
    {
        // line 78
        echo "        <!-- HIDE ORIGINAL HEADER -->
        <section id=\"header\" class=\"section\" style=\"display: none !important;\">
        </section>
    ";
    }

    // line 83
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 86
    public function block_body($context, array $blocks = [])
    {
        // line 87
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 88
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 89
        $this->displayBlock('messages', $context, $blocks);
        // line 92
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
        ";
    }

    // line 89
    public function block_messages($context, array $blocks = [])
    {
        // line 90
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 90);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 91
        echo "                    ";
    }

    // line 100
    public function block_footer($context, array $blocks = [])
    {
        // line 101
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 101)->display($context);
        // line 102
        echo "    ";
    }

    // line 104
    public function block_mobile($context, array $blocks = [])
    {
        // line 105
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 108
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 108)->display(twig_array_merge($context, ["mobile" => true]));
        // line 109
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 111
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 111)->display(twig_array_merge($context, ["tree" => true]));
        // line 112
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 117
    public function block_bottom($context, array $blocks = [])
    {
        // line 118
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
        return array (  406 => 118,  403 => 117,  396 => 112,  394 => 111,  390 => 109,  388 => 108,  383 => 105,  380 => 104,  376 => 102,  373 => 101,  370 => 100,  366 => 91,  355 => 90,  352 => 89,  343 => 92,  341 => 89,  337 => 88,  334 => 87,  331 => 86,  326 => 83,  319 => 78,  316 => 77,  310 => 40,  303 => 37,  298 => 36,  295 => 35,  285 => 32,  282 => 31,  279 => 30,  276 => 29,  271 => 26,  268 => 25,  265 => 24,  260 => 23,  255 => 22,  252 => 21,  249 => 20,  242 => 17,  238 => 16,  235 => 15,  233 => 14,  222 => 10,  219 => 9,  216 => 8,  203 => 120,  201 => 117,  198 => 116,  196 => 104,  193 => 103,  191 => 100,  185 => 96,  183 => 86,  179 => 84,  177 => 83,  174 => 82,  172 => 77,  163 => 70,  153 => 66,  147 => 65,  138 => 63,  135 => 62,  132 => 61,  128 => 60,  120 => 54,  112 => 51,  107 => 50,  104 => 49,  101 => 48,  99 => 47,  89 => 40,  86 => 39,  84 => 35,  81 => 34,  79 => 29,  76 => 28,  74 => 20,  71 => 19,  69 => 8,  64 => 6,  61 => 5,  59 => 3,  57 => 2,  55 => 1,  25 => 4,);
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
        <div style=\"height: 60px !important; padding: 0 1.5rem !important; margin: 0 auto !important; max-width: 1200px !important; display: flex !important; align-items: center !important; justify-content: space-between !important;\">
            <!-- Logo Section -->
            <div style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
                {% set logo = theme_var('custom_logo') %}
                {% if logo %}
                    {% set logo_file = (logo|first).name %}
                    <a href=\"{{ home_url }}\" style=\"display: flex !important; align-items: center !important; text-decoration: none !important;\">
                        <img src=\"{{ url('theme://images/logo/' ~ logo_file) }}\" alt=\"{{ site.title }}\" style=\"max-height: 40px !important; width: auto !important; margin-right: 10px !important;\" />
                    </a>
                {% endif %}
            </div>
            
            <!-- Navigation Menu -->
            <div style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
                <nav style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
                                         <ul style=\"display: flex !important; align-items: center !important; margin: 0 !important; padding: 0 !important; list-style: none !important; height: 60px !important; flex-wrap: nowrap !important; white-space: nowrap !important;\">
                        {% for p in pages.children.visible %}
                            {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
                                                         <li style=\"margin: 0 0.8rem !important; display: flex !important; align-items: center !important; height: 60px !important; white-space: nowrap !important; flex-shrink: 0 !important;\">
                                <a href=\"{{ p.url }}\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.3rem 0.6rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 0.9rem !important; transition: all 0.2s ease !important; border-radius: 2px !important; height: 28px !important; white-space: nowrap !important; min-width: fit-content !important; {% if active_page %}color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;{% endif %}\" 
                                   onmouseover=\"this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)'\" 
                                   onmouseout=\"this.style.color='#2c2c2c'; this.style.background='transparent'; {% if active_page %}this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';{% endif %}\">
                                    {{ p.menu }}
                                </a>
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

</body>
</html>
", "partials/base.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/partials/base.html.twig");
    }
    private $deferred;
}
