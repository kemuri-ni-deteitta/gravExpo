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

/* contacts.html.twig */
class __TwigTemplate_7a0ba8d9df11bcaa155dc05f3b8b9b7049afb2cec7c50049eb3f877388921e49 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contacts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    
    ";
        // line 6
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "phones", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "email", []))) {
            // line 7
            echo "    <div class=\"contact-info-section\">
        <h2>Контактная информация</h2>
        
        ";
            // line 10
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) {
                // line 11
                echo "        <div class=\"contact-item\">
            <h3>Адрес</h3>
            <p><strong>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []), "html", null, true);
                echo "</strong></p>
        </div>
        ";
            }
            // line 16
            echo "        
        ";
            // line 17
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "phones", [])) {
                // line 18
                echo "        <div class=\"contact-item\">
            <h3>Телефоны</h3>
            <ul class=\"phone-list\">
                ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "phones", []));
                foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                    // line 22
                    echo "                <li>
                    <strong>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", []), "html", null, true);
                    echo "</strong>
                    ";
                    // line 24
                    if ($this->getAttribute($context["phone"], "description", [])) {
                        // line 25
                        echo "                    <span class=\"phone-description\"> - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "description", []), "html", null, true);
                        echo "</span>
                    ";
                    }
                    // line 27
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            </ul>
        </div>
        ";
            }
            // line 32
            echo "        
        ";
            // line 33
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "email", [])) {
                // line 34
                echo "        <div class=\"contact-item\">
            <h3>Электронная почта</h3>
            <p><a href=\"mailto:";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "email", []), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "email", []), "html", null, true);
                echo "</strong></a></p>
        </div>
        ";
            }
            // line 39
            echo "    </div>
    ";
        }
        // line 41
        echo "    
    ";
        // line 43
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) {
            // line 44
            echo "    <div class=\"map-section\">
        <h2>Как нас найти</h2>
        <div id=\"yandex-map\" style=\"position:relative;overflow:hidden;width:100%;height:400px;background:#f5f5f5;border:1px solid #ddd;display:flex;align-items:center;justify-content:center;\">
            <div style=\"text-align:center;color:#666;\">
                <div style=\"font-size:48px;margin-bottom:10px;\">🗺️</div>
                <div style=\"font-size:18px;margin-bottom:5px;\"><strong>Загрузка карты...</strong></div>
                <div style=\"font-size:14px;\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []), "html", null, true);
            echo "</div>
            </div>
        </div>
        
        <script type=\"text/javascript\">
            // Use coordinates from admin panel for precise map location
            var address = \"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []), "html", null, true);
            echo "\";
            var coordinates = \"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "coordinates", []), "html", null, true);
            echo "\";
            var mapContainer = document.getElementById('yandex-map');
            
            // Parse coordinates - format should be \"latitude,longitude\" for Yandex Maps
            var coords = coordinates.split(',');
            var latitude = coords[0].trim();
            var longitude = coords[1].trim();
            
            // Create a working Yandex Maps widget with coordinates from admin panel
            var iframe = document.createElement('iframe');
            iframe.src = 'https://yandex.ru/map-widget/v1/?ll=' + longitude + ',' + latitude + '&z=17&l=map&pt=' + longitude + ',' + latitude + ',pm2rdm&source=constructor';
            iframe.width = '100%';
            iframe.height = '400';
            iframe.frameBorder = '0';
            iframe.style.border = '0';
            iframe.allowFullscreen = true;
            
            // Clear loading content and add iframe
            mapContainer.innerHTML = '';
            mapContainer.style.background = 'none';
            mapContainer.style.border = 'none';
            mapContainer.appendChild(iframe);
            
            // Add a note about the address
            var addressNote = document.createElement('div');
            addressNote.style.cssText = 'margin-top:10px;padding:10px;background:#f0f8ff;border-left:3px solid #0066cc;font-size:12px;color:#666;';
            addressNote.innerHTML = '<strong>Адрес компании:</strong> ' + address + '<br><small>Карта показывает точное местоположение компании по координатам: ' + coordinates + '</small>';
            mapContainer.appendChild(addressNote);
            
            // Add direct link to Yandex Maps with coordinates
            var directLink = document.createElement('div');
            directLink.style.cssText = 'margin-top:10px;text-align:center;';
            var link = document.createElement('a');
            link.href = 'https://yandex.ru/maps/?ll=' + longitude + ',' + latitude + '&z=17&l=map&pt=' + longitude + ',' + latitude + ',pm2rdm&text=' + encodeURIComponent(address);
            link.target = '_blank';
            link.style.cssText = 'color:#0066cc;text-decoration:none;font-weight:bold;';
            link.textContent = '🔍 Открыть в Яндекс Картах';
            directLink.appendChild(link);
            mapContainer.appendChild(directLink);
        </script>
        <p class=\"map-note\"><em>Карта показывает адрес: ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []), "html", null, true);
            echo "</em></p>
    </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 97,  156 => 57,  152 => 56,  143 => 50,  135 => 44,  132 => 43,  129 => 41,  125 => 39,  117 => 36,  113 => 34,  111 => 33,  108 => 32,  103 => 29,  96 => 27,  90 => 25,  88 => 24,  84 => 23,  81 => 22,  77 => 21,  72 => 18,  70 => 17,  67 => 16,  61 => 13,  57 => 11,  55 => 10,  50 => 7,  48 => 6,  42 => 4,  39 => 3,  29 => 1,);
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
    {{ page.content|raw }}
    
    {% if page.header.phones or page.header.address or page.header.email %}
    <div class=\"contact-info-section\">
        <h2>Контактная информация</h2>
        
        {% if page.header.address %}
        <div class=\"contact-item\">
            <h3>Адрес</h3>
            <p><strong>{{ page.header.address }}</strong></p>
        </div>
        {% endif %}
        
        {% if page.header.phones %}
        <div class=\"contact-item\">
            <h3>Телефоны</h3>
            <ul class=\"phone-list\">
                {% for phone in page.header.phones %}
                <li>
                    <strong>{{ phone.number }}</strong>
                    {% if phone.description %}
                    <span class=\"phone-description\"> - {{ phone.description }}</span>
                    {% endif %}
                </li>
                {% endfor %}
            </ul>
        </div>
        {% endif %}
        
        {% if page.header.email %}
        <div class=\"contact-item\">
            <h3>Электронная почта</h3>
            <p><a href=\"mailto:{{ page.header.email }}\"><strong>{{ page.header.email }}</strong></a></p>
        </div>
        {% endif %}
    </div>
    {% endif %}
    
    {# Yandex Map section - using reliable widget approach #}
    {% if page.header.address %}
    <div class=\"map-section\">
        <h2>Как нас найти</h2>
        <div id=\"yandex-map\" style=\"position:relative;overflow:hidden;width:100%;height:400px;background:#f5f5f5;border:1px solid #ddd;display:flex;align-items:center;justify-content:center;\">
            <div style=\"text-align:center;color:#666;\">
                <div style=\"font-size:48px;margin-bottom:10px;\">🗺️</div>
                <div style=\"font-size:18px;margin-bottom:5px;\"><strong>Загрузка карты...</strong></div>
                <div style=\"font-size:14px;\">{{ page.header.address }}</div>
            </div>
        </div>
        
        <script type=\"text/javascript\">
            // Use coordinates from admin panel for precise map location
            var address = \"{{ page.header.address }}\";
            var coordinates = \"{{ page.header.coordinates }}\";
            var mapContainer = document.getElementById('yandex-map');
            
            // Parse coordinates - format should be \"latitude,longitude\" for Yandex Maps
            var coords = coordinates.split(',');
            var latitude = coords[0].trim();
            var longitude = coords[1].trim();
            
            // Create a working Yandex Maps widget with coordinates from admin panel
            var iframe = document.createElement('iframe');
            iframe.src = 'https://yandex.ru/map-widget/v1/?ll=' + longitude + ',' + latitude + '&z=17&l=map&pt=' + longitude + ',' + latitude + ',pm2rdm&source=constructor';
            iframe.width = '100%';
            iframe.height = '400';
            iframe.frameBorder = '0';
            iframe.style.border = '0';
            iframe.allowFullscreen = true;
            
            // Clear loading content and add iframe
            mapContainer.innerHTML = '';
            mapContainer.style.background = 'none';
            mapContainer.style.border = 'none';
            mapContainer.appendChild(iframe);
            
            // Add a note about the address
            var addressNote = document.createElement('div');
            addressNote.style.cssText = 'margin-top:10px;padding:10px;background:#f0f8ff;border-left:3px solid #0066cc;font-size:12px;color:#666;';
            addressNote.innerHTML = '<strong>Адрес компании:</strong> ' + address + '<br><small>Карта показывает точное местоположение компании по координатам: ' + coordinates + '</small>';
            mapContainer.appendChild(addressNote);
            
            // Add direct link to Yandex Maps with coordinates
            var directLink = document.createElement('div');
            directLink.style.cssText = 'margin-top:10px;text-align:center;';
            var link = document.createElement('a');
            link.href = 'https://yandex.ru/maps/?ll=' + longitude + ',' + latitude + '&z=17&l=map&pt=' + longitude + ',' + latitude + ',pm2rdm&text=' + encodeURIComponent(address);
            link.target = '_blank';
            link.style.cssText = 'color:#0066cc;text-decoration:none;font-weight:bold;';
            link.textContent = '🔍 Открыть в Яндекс Картах';
            directLink.appendChild(link);
            mapContainer.appendChild(directLink);
        </script>
        <p class=\"map-note\"><em>Карта показывает адрес: {{ page.header.address }}</em></p>
    </div>
    {% endif %}
{% endblock %} ", "contacts.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/contacts.html.twig");
    }
}
