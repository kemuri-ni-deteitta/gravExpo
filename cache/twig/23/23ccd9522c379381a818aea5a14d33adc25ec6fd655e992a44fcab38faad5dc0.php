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
            echo "            <li style=\"margin: 0 0.8rem !important; position: relative !important; display: flex !important; align-items: center !important; height: 60px !important; white-space: nowrap !important; flex-shrink: 0 !important;\" 
                onmouseenter=\"showDropdown(this)\" 
                onmouseleave=\"hideDropdown(this)\"
                data-has-children=\"";
            // line 18
            echo ((($context["has_children"] ?? null)) ? ("true") : ("false"));
            echo "\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            echo "\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.3rem 0.6rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 0.9rem !important; transition: all 0.2s ease !important; border-radius: 2px !important; height: 28px !important; white-space: nowrap !important; min-width: fit-content !important; ";
            if (($context["active_page"] ?? null)) {
                echo "color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;";
            }
            echo "\" 
                   onmouseover=\"this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)'\" 
                   onmouseout=\"this.style.color='#2c2c2c'; this.style.background='transparent'; ";
            // line 21
            if (($context["active_page"] ?? null)) {
                echo "this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';";
            }
            echo "\"
                   ";
            // line 22
            if (($context["has_children"] ?? null)) {
                echo "onclick=\"handleDropdownClick(event, this.parentElement)\"";
            }
            echo ">
                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
            if (($context["has_children"] ?? null)) {
                echo " <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.7rem; transition: transform 0.2s ease; ";
                if (($context["active_page"] ?? null)) {
                    echo "opacity: 1 !important;";
                }
                echo "\">▼</span>";
            }
            // line 24
            echo "                </a>
                ";
            // line 25
            if (($context["has_children"] ?? null)) {
                // line 26
                echo "                <ul class=\"dropdown-menu\" style=\"position: absolute !important; top: 100% !important; left: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; ";
                if (($context["show_children"] ?? null)) {
                    echo "display: block !important;";
                } else {
                    echo "display: none !important;";
                }
                echo " z-index: 100001 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-top: 4px !important; flex-direction: column !important; opacity: 0; transform: translateY(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                    ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 28
                    echo "                        ";
                    $context["child_active"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                    // line 29
                    echo "                        ";
                    $context["child_has_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []), "count", []) > 0);
                    // line 30
                    echo "                        <li style=\"margin: 0 !important; display: block !important; height: auto !important; position: relative !important;\" 
                            onmouseenter=\"showChildDropdown(this)\" 
                            onmouseleave=\"hideChildDropdown(this)\"
                            data-has-children=\"";
                    // line 33
                    echo ((($context["child_has_children"] ?? null)) ? ("true") : ("false"));
                    echo "\">
                            <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
                    echo "\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.85rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; ";
                    if (($context["child_active"] ?? null)) {
                        echo "color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;";
                    }
                    echo "\"
                               onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                               onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; ";
                    // line 36
                    if (($context["child_active"] ?? null)) {
                        echo "this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';";
                    }
                    echo "\"
                               ";
                    // line 37
                    if (($context["child_has_children"] ?? null)) {
                        echo "onclick=\"handleChildDropdownClick(event, this.parentElement)\"";
                    }
                    echo ">
                                ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "menu", []), "html", null, true);
                    if (($context["child_has_children"] ?? null)) {
                        echo " <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.6rem; transition: transform 0.2s ease; ";
                        if (($context["child_active"] ?? null)) {
                            echo "opacity: 1 !important;";
                        }
                        echo "\">▶</span>";
                    }
                    // line 39
                    echo "                            </a>
                            ";
                    // line 40
                    if (($context["child_has_children"] ?? null)) {
                        // line 41
                        echo "                            <ul class=\"child-dropdown-menu\" style=\"position: absolute !important; left: 100% !important; top: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; display: none !important; z-index: 100002 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-left: 4px !important; flex-direction: column !important; opacity: 0; transform: translateX(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                                ";
                        // line 42
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "children", []), "visible", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["grandchild"]) {
                            // line 43
                            echo "                                    ";
                            $context["grandchild_active"] = ((($this->getAttribute($context["grandchild"], "active", []) || $this->getAttribute($context["grandchild"], "activeChild", []))) ? ("active") : (""));
                            // line 44
                            echo "                                    <li style=\"margin: 0 !important; display: block !important; height: auto !important;\">
                                        <a href=\"";
                            // line 45
                            echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "url", []), "html", null, true);
                            echo "\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.8rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; ";
                            if (($context["grandchild_active"] ?? null)) {
                                echo "color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;";
                            }
                            echo "\"
                                           onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                           onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; ";
                            // line 47
                            if (($context["grandchild_active"] ?? null)) {
                                echo "this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';";
                            }
                            echo "\">
                                            ";
                            // line 48
                            echo twig_escape_filter($this->env, $this->getAttribute($context["grandchild"], "menu", []), "html", null, true);
                            echo "
                                        </a>
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grandchild'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "                            </ul>
                            ";
                    }
                    // line 54
                    echo "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "                </ul>
                ";
            }
            // line 58
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </ul>
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
        return array (  228 => 60,  221 => 58,  217 => 56,  210 => 54,  206 => 52,  196 => 48,  190 => 47,  181 => 45,  178 => 44,  175 => 43,  171 => 42,  168 => 41,  166 => 40,  163 => 39,  154 => 38,  148 => 37,  142 => 36,  133 => 34,  129 => 33,  124 => 30,  121 => 29,  118 => 28,  114 => 27,  105 => 26,  103 => 25,  100 => 24,  91 => 23,  85 => 22,  79 => 21,  70 => 19,  66 => 18,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  48 => 11,  44 => 9,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  32 => 2,  30 => 1,);
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
            <li style=\"margin: 0 0.8rem !important; position: relative !important; display: flex !important; align-items: center !important; height: 60px !important; white-space: nowrap !important; flex-shrink: 0 !important;\" 
                onmouseenter=\"showDropdown(this)\" 
                onmouseleave=\"hideDropdown(this)\"
                data-has-children=\"{{ has_children ? 'true' : 'false' }}\">
                <a href=\"{{ p.url }}\" style=\"display: flex !important; align-items: center !important; justify-content: center !important; padding: 0.3rem 0.6rem !important; text-decoration: none !important; color: #2c2c2c !important; font-weight: 500 !important; font-size: 0.9rem !important; transition: all 0.2s ease !important; border-radius: 2px !important; height: 28px !important; white-space: nowrap !important; min-width: fit-content !important; {% if active_page %}color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;{% endif %}\" 
                   onmouseover=\"this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)'\" 
                   onmouseout=\"this.style.color='#2c2c2c'; this.style.background='transparent'; {% if active_page %}this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';{% endif %}\"
                   {% if has_children %}onclick=\"handleDropdownClick(event, this.parentElement)\"{% endif %}>
                    {{ p.menu }}{% if has_children %} <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.7rem; transition: transform 0.2s ease; {% if active_page %}opacity: 1 !important;{% endif %}\">▼</span>{% endif %}
                </a>
                {% if has_children %}
                <ul class=\"dropdown-menu\" style=\"position: absolute !important; top: 100% !important; left: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; {% if show_children %}display: block !important;{% else %}display: none !important;{% endif %} z-index: 100001 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-top: 4px !important; flex-direction: column !important; opacity: 0; transform: translateY(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                    {% for child in p.children.visible %}
                        {% set child_active = (child.active or child.activeChild) ? 'active' : '' %}
                        {% set child_has_children = child.children.visible.count > 0 %}
                        <li style=\"margin: 0 !important; display: block !important; height: auto !important; position: relative !important;\" 
                            onmouseenter=\"showChildDropdown(this)\" 
                            onmouseleave=\"hideChildDropdown(this)\"
                            data-has-children=\"{{ child_has_children ? 'true' : 'false' }}\">
                            <a href=\"{{ child.url }}\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.85rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; {% if child_active %}color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;{% endif %}\"
                               onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                               onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; {% if child_active %}this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';{% endif %}\"
                               {% if child_has_children %}onclick=\"handleChildDropdownClick(event, this.parentElement)\"{% endif %}>
                                {{ child.menu }}{% if child_has_children %} <span class=\"dropdown-arrow\" style=\"margin-left: 5px; font-size: 0.6rem; transition: transform 0.2s ease; {% if child_active %}opacity: 1 !important;{% endif %}\">▶</span>{% endif %}
                            </a>
                            {% if child_has_children %}
                            <ul class=\"child-dropdown-menu\" style=\"position: absolute !important; left: 100% !important; top: 0 !important; background: #ffffff !important; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important; border-radius: 6px !important; min-width: 200px !important; padding: 0.5rem 0 !important; display: none !important; z-index: 100002 !important; border: 1px solid rgba(0, 0, 0, 0.1) !important; margin-left: 4px !important; flex-direction: column !important; opacity: 0; transform: translateX(-10px); transition: opacity 0.2s ease, transform 0.2s ease;\">
                                {% for grandchild in child.children.visible %}
                                    {% set grandchild_active = (grandchild.active or grandchild.activeChild) ? 'active' : '' %}
                                    <li style=\"margin: 0 !important; display: block !important; height: auto !important;\">
                                        <a href=\"{{ grandchild.url }}\" style=\"padding: 0.6rem 1rem !important; color: #2c2c2c !important; font-weight: 400 !important; font-size: 0.8rem !important; display: block !important; text-decoration: none !important; transition: all 0.2s ease !important; border-radius: 0 !important; height: auto !important; white-space: nowrap !important; {% if grandchild_active %}color: #ff6600 !important; background: rgba(255, 102, 0, 0.08) !important;{% endif %}\"
                                           onmouseover=\"this.style.background='#f8f9fa'; this.style.color='#ff6600'\" 
                                           onmouseout=\"this.style.background='transparent'; this.style.color='#2c2c2c'; {% if grandchild_active %}this.style.color='#ff6600'; this.style.background='rgba(255, 102, 0, 0.08)';{% endif %}\">
                                            {{ grandchild.menu }}
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                            {% endif %}
                        </li>
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
