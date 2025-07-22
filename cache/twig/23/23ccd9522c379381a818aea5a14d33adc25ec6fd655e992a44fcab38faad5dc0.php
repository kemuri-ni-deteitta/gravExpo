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

/* partials/navigation.html.twig */
class __TwigTemplate_fa9c158f13fa436beeca64a73e12d07a0d8f2f7738a4c83cf8c26ac24e07beb4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 4
        $context["dropdown_enabled"] = ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [])))) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdowns", [], "any", false, true), "enabled", [])) : (true));
        // line 5
        $context["mobile_enabled"] = ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [])))) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "mobile", [], "any", false, true), "enabled", [])) : (true));
        // line 6
        $context["jquery_enabled"] = ((($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "jquery", [], "any", false, true), "enabled", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "jquery", [], "any", false, true), "enabled", [])))) ? ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "jquery", [], "any", false, true), "enabled", [])) : (true));
        // line 7
        echo "
";
        // line 9
        echo "<nav style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
    <ul style=\"display: flex !important; align-items: center !important; margin: 0 !important; padding: 0 !important; list-style: none !important; height: 60px !important; flex-wrap: nowrap !important; white-space: nowrap !important;\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 12
            echo "            ";
            $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
            // line 13
            echo "            ";
            $context["has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0);
            // line 14
            echo "            ";
            $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
            // line 15
            echo "            ";
            // line 16
            echo "            ";
            if (($this->getAttribute($context["p"], "slug", []) == "portfolio")) {
                // line 17
                echo "                ";
                $context["visible_children"] = [];
                // line 18
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 19
                    echo "                    ";
                    if (($this->getAttribute($context["child"], "template", []) != "portfolio-item")) {
                        // line 20
                        echo "                        ";
                        $context["visible_children"] = twig_array_merge(($context["visible_children"] ?? null), [0 => $context["child"]]);
                        // line 21
                        echo "                    ";
                    }
                    // line 22
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                ";
                $context["has_children"] = (twig_length_filter($this->env, ($context["visible_children"] ?? null)) > 0);
                // line 24
                echo "                ";
                $context["show_children"] = (($context["has_children"] ?? null) && ($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", [])));
                // line 25
                echo "            ";
            }
            // line 26
            echo "            <li style=\"margin: 0 0.8rem !important; position: relative !important; display: flex !important; align-items: center !important; height: 60px !important; white-space: nowrap !important; flex-shrink: 0 !important;\" 
                onmouseenter=\"showDropdown(this)\" 
                onmouseleave=\"hideDropdown(this)\"
                data-has-children=\"";
            // line 29
            echo ((($context["has_children"] ?? null)) ? ("true") : ("false"));
            echo "\">
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            echo "\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.3rem 0.6rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 0.9rem !important; transition: all 0.2s ease !important; border-radius: 2px !important; height: 28px !important; white-space: nowrap !important; min-width: fit-content !important; ";
            if (($context["active_page"] ?? null)) {
                echo "color: #ff6600 !important;";
            }
            echo "\" 
                   onmouseover=\"this.style.color='#ff6600'\" 
                   onmouseout=\"this.style.color='#2c2c2c'; ";
            // line 32
            if (($context["active_page"] ?? null)) {
                echo "this.style.color='#ff6600';";
            }
            echo "\"
                   ";
            // line 33
            if (($context["has_children"] ?? null)) {
                echo "onclick=\"handleDropdownClick(event, this.parentElement)\"";
            }
            echo ">
                    ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
            if (($context["has_children"] ?? null)) {
                echo " <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.7rem; transition: transform 0.2s ease; ";
                if (($context["active_page"] ?? null)) {
                    echo "opacity: 1 !important;";
                }
                echo "\">▼</span>";
            }
            // line 35
            echo "                </a>
                ";
            // line 36
            if (($context["has_children"] ?? null)) {
                // line 37
                echo "                <ul class=\"dropdown-menu\" style=\"position: absolute !important; top: 100% !important; left: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; ";
                if (($context["show_children"] ?? null)) {
                    echo "display: block !important;";
                } else {
                    echo "display: none !important;";
                }
                echo " z-index: 100001 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-top: 4px !important; flex-direction: column !important; opacity: 0; transform: translateY(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                    ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 39
                    echo "                        ";
                    // line 40
                    echo "                        ";
                    if ( !(($this->getAttribute($context["p"], "slug", []) == "portfolio") && ($this->getAttribute($context["child"], "template", []) == "portfolio-item"))) {
                        // line 41
                        echo "                        ";
                        $context["child_active"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                        // line 42
                        echo "                        ";
                        $context["child_has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []), "count", []) > 0);
                        // line 43
                        echo "                        <li style=\"margin: 0 !important; display: block !important; height: auto !important; position: relative !important;\" 
                            onmouseenter=\"showChildDropdown(this)\" 
                            onmouseleave=\"hideChildDropdown(this)\"
                            data-has-children=\"";
                        // line 46
                        echo ((($context["child_has_children"] ?? null)) ? ("true") : ("false"));
                        echo "\">
                            <a href=\"";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                        echo "\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.85rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; ";
                        if (($context["child_active"] ?? null)) {
                            echo "color: #ff6600 !important;";
                        }
                        echo "\"
                               onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                               onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; ";
                        // line 49
                        if (($context["child_active"] ?? null)) {
                            echo "this.style.color='#ff6600';";
                        }
                        echo "\"
                               ";
                        // line 50
                        if (($context["child_has_children"] ?? null)) {
                            echo "onclick=\"handleChildDropdownClick(event, this.parentElement)\"";
                        }
                        echo ">
                                ";
                        // line 51
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                        if (($context["child_has_children"] ?? null)) {
                            echo " <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.6rem; transition: transform 0.2s ease; ";
                            if (($context["child_active"] ?? null)) {
                                echo "opacity: 1 !important;";
                            }
                            echo "\">▶</span>";
                        }
                        // line 52
                        echo "                            </a>
                            ";
                        // line 53
                        if (($context["child_has_children"] ?? null)) {
                            // line 54
                            echo "                            <ul class=\"child-dropdown-menu\" style=\"position: absolute !important; left: 100% !important; top: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; display: none !important; z-index: 100002 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-left: 4px !important; flex-direction: column !important; opacity: 0; transform: translateX(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                                ";
                            // line 55
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []));
                            foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                                // line 56
                                echo "                                    ";
                                $context["grandchild_active"] = ((($this->getAttribute($context["grandchild"], "active", []) || $this->getAttribute($context["grandchild"], "activeChild", []))) ? ("active") : (""));
                                // line 57
                                echo "                                    <li style=\"margin: 0 !important; display: block !important; height: auto !important;\">
                                        <a href=\"";
                                // line 58
                                echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "url", []), "html", null, true);
                                echo "\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.8rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; ";
                                if (($context["grandchild_active"] ?? null)) {
                                    echo "color: #ff6600 !important;";
                                }
                                echo "\"
                                           onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                           onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; ";
                                // line 60
                                if (($context["grandchild_active"] ?? null)) {
                                    echo "this.style.color='#ff6600';";
                                }
                                echo "\">
                                            ";
                                // line 61
                                echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "menu", []), "html", null, true);
                                echo "
                                        </a>
                                    </li>
                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandchild'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 65
                            echo "                            </ul>
                            ";
                        }
                        // line 67
                        echo "                        </li>
                        ";
                    }
                    // line 69
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                </ul>
                ";
            }
            // line 72
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</ul>
</nav>

";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 74,  266 => 72,  262 => 70,  256 => 69,  252 => 67,  248 => 65,  238 => 61,  232 => 60,  223 => 58,  220 => 57,  217 => 56,  213 => 55,  210 => 54,  208 => 53,  205 => 52,  196 => 51,  190 => 50,  184 => 49,  175 => 47,  171 => 46,  166 => 43,  163 => 42,  160 => 41,  157 => 40,  155 => 39,  151 => 38,  142 => 37,  140 => 36,  137 => 35,  128 => 34,  122 => 33,  116 => 32,  107 => 30,  103 => 29,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  83 => 22,  80 => 21,  77 => 20,  74 => 19,  69 => 18,  66 => 17,  63 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  48 => 11,  44 => 9,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}

{# Check if dropdowns are enabled in theme config #}
{% set dropdown_enabled = theme_config.dropdowns.enabled ?? true %}
{% set mobile_enabled = theme_config.mobile.enabled ?? true %}
{% set jquery_enabled = theme_config.jquery.enabled ?? true %}

{# Main Navigation Container - Using original styling #}
<nav style=\"display: flex !important; align-items: center !important; height: 60px !important;\">
    <ul style=\"display: flex !important; align-items: center !important; margin: 0 !important; padding: 0 !important; list-style: none !important; height: 60px !important; flex-wrap: nowrap !important; white-space: nowrap !important;\">
        {% for p in pages.children.visible %}
            {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
            {% set has_children = p.children.visible.count > 0 %}
            {% set show_children = has_children and (p.active or p.activeChild) %}
            {# For portfolio pages, don't show dropdown if all children are portfolio items #}
            {% if p.slug == 'portfolio' %}
                {% set visible_children = [] %}
                {% for child in p.children.visible %}
                    {% if child.template != 'portfolio-item' %}
                        {% set visible_children = visible_children|merge([child]) %}
                    {% endif %}
                {% endfor %}
                {% set has_children = visible_children|length > 0 %}
                {% set show_children = has_children and (p.active or p.activeChild) %}
            {% endif %}
            <li style=\"margin: 0 0.8rem !important; position: relative !important; display: flex !important; align-items: center !important; height: 60px !important; white-space: nowrap !important; flex-shrink: 0 !important;\" 
                onmouseenter=\"showDropdown(this)\" 
                onmouseleave=\"hideDropdown(this)\"
                data-has-children=\"{{ has_children ? 'true' : 'false' }}\">
                <a href=\"{{ p.url }}\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.3rem 0.6rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 0.9rem !important; transition: all 0.2s ease !important; border-radius: 2px !important; height: 28px !important; white-space: nowrap !important; min-width: fit-content !important; {% if active_page %}color: #ff6600 !important;{% endif %}\" 
                   onmouseover=\"this.style.color='#ff6600'\" 
                   onmouseout=\"this.style.color='#2c2c2c'; {% if active_page %}this.style.color='#ff6600';{% endif %}\"
                   {% if has_children %}onclick=\"handleDropdownClick(event, this.parentElement)\"{% endif %}>
                    {{ p.menu }}{% if has_children %} <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.7rem; transition: transform 0.2s ease; {% if active_page %}opacity: 1 !important;{% endif %}\">▼</span>{% endif %}
                </a>
                {% if has_children %}
                <ul class=\"dropdown-menu\" style=\"position: absolute !important; top: 100% !important; left: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; {% if show_children %}display: block !important;{% else %}display: none !important;{% endif %} z-index: 100001 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-top: 4px !important; flex-direction: column !important; opacity: 0; transform: translateY(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                    {% for child in p.children.visible %}
                        {# Skip portfolio items from navigation dropdown #}
                        {% if not (p.slug == 'portfolio' and child.template == 'portfolio-item') %}
                        {% set child_active = (child.active or child.activeChild) ? 'active' : '' %}
                        {% set child_has_children = child.children.visible.count > 0 %}
                        <li style=\"margin: 0 !important; display: block !important; height: auto !important; position: relative !important;\" 
                            onmouseenter=\"showChildDropdown(this)\" 
                            onmouseleave=\"hideChildDropdown(this)\"
                            data-has-children=\"{{ child_has_children ? 'true' : 'false' }}\">
                            <a href=\"{{ child.url }}\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.85rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; {% if child_active %}color: #ff6600 !important;{% endif %}\"
                               onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                               onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; {% if child_active %}this.style.color='#ff6600';{% endif %}\"
                               {% if child_has_children %}onclick=\"handleChildDropdownClick(event, this.parentElement)\"{% endif %}>
                                {{ child.menu }}{% if child_has_children %} <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.6rem; transition: transform 0.2s ease; {% if child_active %}opacity: 1 !important;{% endif %}\">▶</span>{% endif %}
                            </a>
                            {% if child_has_children %}
                            <ul class=\"child-dropdown-menu\" style=\"position: absolute !important; left: 100% !important; top: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; display: none !important; z-index: 100002 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-left: 4px !important; flex-direction: column !important; opacity: 0; transform: translateX(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                                {% for grandchild in child.children.visible %}
                                    {% set grandchild_active = (grandchild.active or grandchild.activeChild) ? 'active' : '' %}
                                    <li style=\"margin: 0 !important; display: block !important; height: auto !important;\">
                                        <a href=\"{{ grandchild.url }}\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.8rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; {% if grandchild_active %}color: #ff6600 !important;{% endif %}\"
                                           onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                           onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; {% if grandchild_active %}this.style.color='#ff6600';{% endif %}\">
                                            {{ grandchild.menu }}
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                            {% endif %}
                        </li>
                        {% endif %}
                    {% endfor %}
                </ul>
                {% endif %}
            </li>
        {% endfor %}
</ul>
</nav>

", "partials/navigation.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/partials/navigation.html.twig");
    }
}
