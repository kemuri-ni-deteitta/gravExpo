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
        echo "<style>
/* ===== CONTACT INFORMATION SECTION STYLING ===== */

/* Main container for contact information */
.contact-info-section {
    margin: 2rem 0;                    /* ⚙️ SPACING: Distance from other elements (top/bottom) */
    padding: 1.5rem;                   /* ⚙️ SPACING: Internal padding inside the box */
    background: #f8f9fa;               /* 🎨 COLOR: Light gray background of the entire section */
    border-radius: 8px;                /* ⚙️ SHAPE: Rounded corners of the box */
    border-left: 4px solid #007cba;    /* 🎨 COLOR: Blue left border (change #007cba to any color) */
}

/* Main heading \"Контактная информация\" */
.contact-info-section h2 {
    color: #333;                       /* 🎨 COLOR: Dark gray color of main heading */
    margin-bottom: 1.5rem;             /* ⚙️ SPACING: Space below the main heading */
    font-size: 1.5rem;                 /* 📏 SIZE: Size of main heading text */
    font-weight: 600;                  /* 📏 WEIGHT: Boldness of main heading (400=normal, 600=semi-bold, 700=bold) */
}

/* Container for each contact item (phones, emails, address) */
.contact-item {
    margin-bottom: 1.5rem;             /* ⚙️ SPACING: Space between contact sections */
}

/* Address text styling */
.contact-item p {
    font-size: 1rem;                   /* 📏 SIZE: Size of address text */
    margin: 0;                         /* ⚙️ SPACING: Remove default margins */
}

/* Section headings (Адрес, Телефоны, Электронная почта) */
.contact-item h3 {
    color: #ff6600;                    /* 🎨 COLOR: Orange color of section headings (change #ff6600 to any color) */
    font-size: 1.2rem;                 /* 📏 SIZE: Size of section headings */
    font-weight: 600;                  /* 📏 WEIGHT: Boldness of section headings */
    margin-bottom: 0.5rem;             /* ⚙️ SPACING: Space below section headings */
    border-bottom: 2px solid #ff6600;  /* 🎨 COLOR: Orange underline under headings (change #ff6600 to match heading color) */
    padding-bottom: 0.25rem;           /* ⚙️ SPACING: Space between heading text and underline */
    display: inline-block;             /* 📐 LAYOUT: Makes the heading only as wide as the text */
}

/* List containers for phones and emails */
.phone-list, .email-list {
    list-style: none;                  /* 📐 LAYOUT: Removes bullet points from lists */
    padding: 0;                        /* ⚙️ SPACING: Removes default list padding */
    margin: 0;                         /* ⚙️ SPACING: Removes default list margins */
}

/* Individual phone/email list items */
.phone-list li, .email-list li {
    padding: 0.5rem 0;                 /* ⚙️ SPACING: Vertical padding for each phone/email item */
    border-bottom: 1px solid #e9ecef;  /* 🎨 COLOR: Light gray line between items (change #e9ecef to any color) */
    font-size: 1rem;                   /* 📏 SIZE: Size of phone numbers and email addresses */
}

/* Remove border from last item in lists */
.phone-list li:last-child, .email-list li:last-child {
    border-bottom: none;               /* 📐 LAYOUT: Removes bottom border from last item */
}

/* Description text for phones and emails (the text after \"-\") */
.phone-description, .email-description {
    font-weight: bold;                 /* 📏 WEIGHT: Makes descriptions bold (change to 'normal' for regular weight) */
    color: #000;                       /* 🎨 COLOR: Black color for descriptions (change #000 to any color) */
    font-style: normal;                /* 📏 STYLE: Normal font style (not italic) */
    font-size: 1rem;                   /* 📏 SIZE: Size of description text */
}

/* Phone numbers styling (the actual numbers, not descriptions) */
.phone-list li strong {
    font-size: 1rem;                   /* 📏 SIZE: Size of phone numbers (same as descriptions) */
}

/* Email links styling */
.contact-item a {
    color: #000;                       /* 🎨 COLOR: Black color for email links (change #000 to any color) */
    text-decoration: none;             /* 📐 LAYOUT: Removes default underline from links */
    font-size: 1rem;                   /* 📏 SIZE: Size of email addresses (same as descriptions) */
}

/* Email addresses styling (the actual email addresses, not descriptions) */
.email-list li a strong {
    font-size: 1rem;                   /* 📏 SIZE: Size of email addresses (same as descriptions) */
}

/* Email links on hover (when mouse is over them) */
.contact-item a:hover {
    text-decoration: underline;        /* 📐 LAYOUT: Shows underline when hovering over email links */
}

/* Address text styling (the actual address, not the heading) */
.contact-item p strong {
    font-size: 1rem;                   /* 📏 SIZE: Size of address text (same as descriptions) */
}

/* ===== QUICK REFERENCE FOR CHANGES ===== */
/*
🎨 COLOR CHANGES:
- Main heading color: .contact-info-section h2 { color: #YOUR_COLOR; }
- Section headings: .contact-item h3 { color: #YOUR_COLOR; }
- Section underlines: .contact-item h3 { border-bottom: 2px solid #YOUR_COLOR; }
- Left border: .contact-info-section { border-left: 4px solid #YOUR_COLOR; }
- Descriptions: .phone-description, .email-description { color: #YOUR_COLOR; }
- Email links: .contact-item a { color: #YOUR_COLOR; }
- Background: .contact-info-section { background: #YOUR_COLOR; }
- Separator lines: .phone-list li, .email-list li { border-bottom: 1px solid #YOUR_COLOR; }

📏 SIZE CHANGES:
- Main heading: .contact-info-section h2 { font-size: YOUR_SIZE; }
- Section headings: .contact-item h3 { font-size: YOUR_SIZE; }
- All text: .phone-list li, .email-list li, .contact-item p, .phone-description, .email-description { font-size: YOUR_SIZE; }

⚙️ SPACING CHANGES:
- Section spacing: .contact-item { margin-bottom: YOUR_SIZE; }
- Item spacing: .phone-list li, .email-list li { padding: YOUR_SIZE; }
- Container padding: .contact-info-section { padding: YOUR_SIZE; }
*/
</style>
    ";
        // line 123
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    
    ";
        // line 125
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "phones", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "emails", []))) {
            // line 126
            echo "    <div class=\"contact-info-section\">
        <h2>Контактная информация</h2>
        
        ";
            // line 129
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) {
                // line 130
                echo "        <div class=\"contact-item\">
            <h3>Адрес</h3>
            <p><strong>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []), "html", null, true);
                echo "</strong></p>
        </div>
        ";
            }
            // line 135
            echo "        
        ";
            // line 136
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "phones", [])) {
                // line 137
                echo "        <div class=\"contact-item\">
            <h3>Телефоны</h3>
            <ul class=\"phone-list\">
                ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "phones", []));
                foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                    // line 141
                    echo "                <li>
                    <strong>";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", []), "html", null, true);
                    echo "</strong>
                    ";
                    // line 143
                    if ($this->getAttribute($context["phone"], "description", [])) {
                        // line 144
                        echo "                    <span class=\"phone-description\"> - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "description", []), "html", null, true);
                        echo "</span>
                    ";
                    }
                    // line 146
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "            </ul>
        </div>
        ";
            }
            // line 151
            echo "        
        ";
            // line 152
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "emails", [])) {
                // line 153
                echo "        <div class=\"contact-item\">
            <h3>Электронная почта</h3>
            <ul class=\"email-list\">
                ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "emails", []));
                foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
                    // line 157
                    echo "                <li>
                    <a href=\"mailto:";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "email", []), "html", null, true);
                    echo "\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "email", []), "html", null, true);
                    echo "</strong></a>
                    ";
                    // line 159
                    if ($this->getAttribute($context["email"], "description", [])) {
                        // line 160
                        echo "                    <span class=\"email-description\"> - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "description", []), "html", null, true);
                        echo "</span>
                    ";
                    }
                    // line 162
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "            </ul>
        </div>
        ";
            }
            // line 167
            echo "    </div>
    ";
        }
        // line 169
        echo "    
    ";
        // line 171
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", [])) {
            // line 172
            echo "    <div class=\"map-section\">
        <h2>Как нас найти</h2>
        <div id=\"yandex-map\" style=\"position:relative;overflow:hidden;width:100%;height:400px;background:#f5f5f5;border:1px solid #ddd;display:flex;align-items:center;justify-content:center;\">
            <div style=\"text-align:center;color:#666;\">
                <div style=\"font-size:48px;margin-bottom:10px;\">🗺️</div>
                <div style=\"font-size:18px;margin-bottom:5px;\"><strong>Загрузка карты...</strong></div>
                <div style=\"font-size:14px;\">";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []), "html", null, true);
            echo "</div>
            </div>
        </div>
        
        <script type=\"text/javascript\">
            // Use coordinates from admin panel for precise map location
            var address = \"";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "address", []), "html", null, true);
            echo "\";
            var coordinates = \"";
            // line 185
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
            // line 225
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
        return array (  345 => 225,  302 => 185,  298 => 184,  289 => 178,  281 => 172,  278 => 171,  275 => 169,  271 => 167,  266 => 164,  259 => 162,  253 => 160,  251 => 159,  245 => 158,  242 => 157,  238 => 156,  233 => 153,  231 => 152,  228 => 151,  223 => 148,  216 => 146,  210 => 144,  208 => 143,  204 => 142,  201 => 141,  197 => 140,  192 => 137,  190 => 136,  187 => 135,  181 => 132,  177 => 130,  175 => 129,  170 => 126,  168 => 125,  163 => 123,  42 => 4,  39 => 3,  29 => 1,);
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
<style>
/* ===== CONTACT INFORMATION SECTION STYLING ===== */

/* Main container for contact information */
.contact-info-section {
    margin: 2rem 0;                    /* ⚙️ SPACING: Distance from other elements (top/bottom) */
    padding: 1.5rem;                   /* ⚙️ SPACING: Internal padding inside the box */
    background: #f8f9fa;               /* 🎨 COLOR: Light gray background of the entire section */
    border-radius: 8px;                /* ⚙️ SHAPE: Rounded corners of the box */
    border-left: 4px solid #007cba;    /* 🎨 COLOR: Blue left border (change #007cba to any color) */
}

/* Main heading \"Контактная информация\" */
.contact-info-section h2 {
    color: #333;                       /* 🎨 COLOR: Dark gray color of main heading */
    margin-bottom: 1.5rem;             /* ⚙️ SPACING: Space below the main heading */
    font-size: 1.5rem;                 /* 📏 SIZE: Size of main heading text */
    font-weight: 600;                  /* 📏 WEIGHT: Boldness of main heading (400=normal, 600=semi-bold, 700=bold) */
}

/* Container for each contact item (phones, emails, address) */
.contact-item {
    margin-bottom: 1.5rem;             /* ⚙️ SPACING: Space between contact sections */
}

/* Address text styling */
.contact-item p {
    font-size: 1rem;                   /* 📏 SIZE: Size of address text */
    margin: 0;                         /* ⚙️ SPACING: Remove default margins */
}

/* Section headings (Адрес, Телефоны, Электронная почта) */
.contact-item h3 {
    color: #ff6600;                    /* 🎨 COLOR: Orange color of section headings (change #ff6600 to any color) */
    font-size: 1.2rem;                 /* 📏 SIZE: Size of section headings */
    font-weight: 600;                  /* 📏 WEIGHT: Boldness of section headings */
    margin-bottom: 0.5rem;             /* ⚙️ SPACING: Space below section headings */
    border-bottom: 2px solid #ff6600;  /* 🎨 COLOR: Orange underline under headings (change #ff6600 to match heading color) */
    padding-bottom: 0.25rem;           /* ⚙️ SPACING: Space between heading text and underline */
    display: inline-block;             /* 📐 LAYOUT: Makes the heading only as wide as the text */
}

/* List containers for phones and emails */
.phone-list, .email-list {
    list-style: none;                  /* 📐 LAYOUT: Removes bullet points from lists */
    padding: 0;                        /* ⚙️ SPACING: Removes default list padding */
    margin: 0;                         /* ⚙️ SPACING: Removes default list margins */
}

/* Individual phone/email list items */
.phone-list li, .email-list li {
    padding: 0.5rem 0;                 /* ⚙️ SPACING: Vertical padding for each phone/email item */
    border-bottom: 1px solid #e9ecef;  /* 🎨 COLOR: Light gray line between items (change #e9ecef to any color) */
    font-size: 1rem;                   /* 📏 SIZE: Size of phone numbers and email addresses */
}

/* Remove border from last item in lists */
.phone-list li:last-child, .email-list li:last-child {
    border-bottom: none;               /* 📐 LAYOUT: Removes bottom border from last item */
}

/* Description text for phones and emails (the text after \"-\") */
.phone-description, .email-description {
    font-weight: bold;                 /* 📏 WEIGHT: Makes descriptions bold (change to 'normal' for regular weight) */
    color: #000;                       /* 🎨 COLOR: Black color for descriptions (change #000 to any color) */
    font-style: normal;                /* 📏 STYLE: Normal font style (not italic) */
    font-size: 1rem;                   /* 📏 SIZE: Size of description text */
}

/* Phone numbers styling (the actual numbers, not descriptions) */
.phone-list li strong {
    font-size: 1rem;                   /* 📏 SIZE: Size of phone numbers (same as descriptions) */
}

/* Email links styling */
.contact-item a {
    color: #000;                       /* 🎨 COLOR: Black color for email links (change #000 to any color) */
    text-decoration: none;             /* 📐 LAYOUT: Removes default underline from links */
    font-size: 1rem;                   /* 📏 SIZE: Size of email addresses (same as descriptions) */
}

/* Email addresses styling (the actual email addresses, not descriptions) */
.email-list li a strong {
    font-size: 1rem;                   /* 📏 SIZE: Size of email addresses (same as descriptions) */
}

/* Email links on hover (when mouse is over them) */
.contact-item a:hover {
    text-decoration: underline;        /* 📐 LAYOUT: Shows underline when hovering over email links */
}

/* Address text styling (the actual address, not the heading) */
.contact-item p strong {
    font-size: 1rem;                   /* 📏 SIZE: Size of address text (same as descriptions) */
}

/* ===== QUICK REFERENCE FOR CHANGES ===== */
/*
🎨 COLOR CHANGES:
- Main heading color: .contact-info-section h2 { color: #YOUR_COLOR; }
- Section headings: .contact-item h3 { color: #YOUR_COLOR; }
- Section underlines: .contact-item h3 { border-bottom: 2px solid #YOUR_COLOR; }
- Left border: .contact-info-section { border-left: 4px solid #YOUR_COLOR; }
- Descriptions: .phone-description, .email-description { color: #YOUR_COLOR; }
- Email links: .contact-item a { color: #YOUR_COLOR; }
- Background: .contact-info-section { background: #YOUR_COLOR; }
- Separator lines: .phone-list li, .email-list li { border-bottom: 1px solid #YOUR_COLOR; }

📏 SIZE CHANGES:
- Main heading: .contact-info-section h2 { font-size: YOUR_SIZE; }
- Section headings: .contact-item h3 { font-size: YOUR_SIZE; }
- All text: .phone-list li, .email-list li, .contact-item p, .phone-description, .email-description { font-size: YOUR_SIZE; }

⚙️ SPACING CHANGES:
- Section spacing: .contact-item { margin-bottom: YOUR_SIZE; }
- Item spacing: .phone-list li, .email-list li { padding: YOUR_SIZE; }
- Container padding: .contact-info-section { padding: YOUR_SIZE; }
*/
</style>
    {{ page.content|raw }}
    
    {% if page.header.phones or page.header.address or page.header.emails %}
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
        
        {% if page.header.emails %}
        <div class=\"contact-item\">
            <h3>Электронная почта</h3>
            <ul class=\"email-list\">
                {% for email in page.header.emails %}
                <li>
                    <a href=\"mailto:{{ email.email }}\"><strong>{{ email.email }}</strong></a>
                    {% if email.description %}
                    <span class=\"email-description\"> - {{ email.description }}</span>
                    {% endif %}
                </li>
                {% endfor %}
            </ul>
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
