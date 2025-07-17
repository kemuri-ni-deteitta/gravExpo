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

/* certificates.html.twig */
class __TwigTemplate_5ef69ab639885b78bdf11f8d1f39ebfb08509e59a5d7928dc27b3baf483d8e78 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
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
        // line 3
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "certificates.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titlebar($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if ($this->getAttribute(($context["grav"] ?? null), "admin", [])) {
            // line 7
            echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('admin_route')->getCallable(), ["/pages"]), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>
            <button class=\"button success\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\" style=\"background: #77559D !important; color: white !important;\"><i class=\"fa fa-check\"></i> ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        echo "    ";
        if ( !$this->getAttribute(($context["grav"] ?? null), "admin", [])) {
            // line 17
            echo "        <div class=\"content-wrapper\">
            <div class=\"container ";
            // line 18
            echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
            echo "\">
                <!-- Page Content -->
                <div class=\"page-content\">
                    ";
            // line 21
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
                </div>

                <!-- Certificates Section -->
                ";
            // line 25
            if ($this->getAttribute(($context["header"] ?? null), "certificates", [])) {
                // line 26
                echo "                <section class=\"certificates-section\">
                    <div class=\"certificates-grid\">
                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "certificates", []));
                foreach ($context['_seq'] as $context["_key"] => $context["certificate"]) {
                    // line 29
                    echo "                        <div class=\"certificate-item\">
                            <div class=\"certificate-card\">
                                                ";
                    // line 31
                    if ($this->getAttribute($context["certificate"], "image_name", [])) {
                        // line 32
                        echo "                <div class=\"certificate-image\">
                    ";
                        // line 33
                        $context["cert_image"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["certificate"], "image_name", []), [], "array");
                        // line 34
                        echo "                    
                    ";
                        // line 35
                        if (($context["cert_image"] ?? null)) {
                            // line 36
                            echo "                        <img src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["cert_image"] ?? null), "url", []), "html", null, true);
                            echo "\" 
                             alt=\"";
                            // line 37
                            (($this->getAttribute($context["certificate"], "title", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["certificate"], "title", []), "html", null, true))) : (print ("Сертификат")));
                            echo "\"
                             onclick=\"openCertificateModal('";
                            // line 38
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["cert_image"] ?? null), "url", []), "html", null, true);
                            echo "', '";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["certificate"], "title", []), "html_attr");
                            echo "')\"
                             loading=\"lazy\">
                    ";
                        } else {
                            // line 41
                            echo "                        <div class=\"no-image\">
                            <p>Изображение не найдено: ";
                            // line 42
                            echo twig_escape_filter($this->env, $this->getAttribute($context["certificate"], "image_name", []), "html", null, true);
                            echo "</p>
                        </div>
                    ";
                        }
                        // line 45
                        echo "                </div>
                ";
                    }
                    // line 47
                    echo "                                
                                <div class=\"certificate-content\">
                                    ";
                    // line 49
                    if ($this->getAttribute($context["certificate"], "title", [])) {
                        // line 50
                        echo "                                    <h3 class=\"certificate-title\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["certificate"], "title", []), "html", null, true);
                        echo "</h3>
                                    ";
                    }
                    // line 52
                    echo "                                    
                                    ";
                    // line 53
                    if ($this->getAttribute($context["certificate"], "description", [])) {
                        // line 54
                        echo "                                    <p class=\"certificate-description\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["certificate"], "description", []), "html", null, true);
                        echo "</p>
                                    ";
                    }
                    // line 56
                    echo "                                </div>
                            </div>
                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                    </div>
                    
                    ";
                // line 62
                if ((twig_length_filter($this->env, $this->getAttribute(($context["header"] ?? null), "certificates", [])) == 0)) {
                    // line 63
                    echo "                    <div class=\"no-certificates\">
                        <p>Сертификаты будут добавлены в ближайшее время.</p>
                    </div>
                    ";
                }
                // line 67
                echo "                </section>
                
                <!-- Certificate Modal -->
                <div id=\"certificateModal\" class=\"certificate-modal\" onclick=\"closeCertificateModal()\">
                    <div class=\"modal-content\" onclick=\"event.stopPropagation()\">
                        <span class=\"modal-close\" onclick=\"closeCertificateModal()\">&times;</span>
                        <img id=\"modalImage\" src=\"\" alt=\"\">
                        <div id=\"modalCaption\" class=\"modal-caption\"></div>
                    </div>
                </div>
                ";
            }
            // line 78
            echo "            </div>
        </div>
    ";
        }
        // line 81
        echo "
    <style>
    /* Certificates Grid Styles */
    .certificates-section {
        margin-top: 2rem;
    }

    .certificates-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }

    .certificate-item {
        display: flex;
        flex-direction: column;
    }

    .certificate-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .certificate-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .certificate-image {
        position: relative;
        overflow: hidden;
        background: #f8f9fa;
        flex: 1;
        min-height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .certificate-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
        cursor: pointer;
        padding: 1rem;
    }

    .certificate-image:hover img {
        transform: scale(1.05);
    }

    .certificate-content {
        padding: 1.5rem;
        background: #ffffff;
    }

    .certificate-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c2c2c;
        margin: 0 0 0.5rem 0;
        line-height: 1.4;
    }

    .certificate-description {
        color: #666;
        font-size: 0.9rem;
        line-height: 1.5;
        margin: 0;
    }

    .no-certificates {
        text-align: center;
        padding: 3rem 1rem;
        color: #666;
    }

    .no-image {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 200px;
        background: #f8f9fa;
        border: 2px dashed #dee2e6;
        border-radius: 8px;
        color: #6c757d;
        font-style: italic;
    }

    .no-image p {
        margin: 0;
        padding: 1rem;
        text-align: center;
    }

    /* Certificate Modal Styles */
    .certificate-modal {
        display: none;
        position: fixed;
        z-index: 10000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        animation: fadeIn 0.3s ease;
    }

    .modal-content {
        position: relative;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 800px;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
    }

    .modal-content img {
        width: 100%;
        height: auto;
        max-height: 80vh;
        object-fit: contain;
        border-radius: 8px;
    }

    .modal-close {
        position: absolute;
        top: -40px;
        right: 0;
        color: #fff;
        font-size: 2rem;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .modal-close:hover {
        color: #ff6600;
    }

    .modal-caption {
        margin-top: 1rem;
        color: #fff;
        font-size: 1.1rem;
        font-weight: 500;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .certificates-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .certificate-image {
            min-height: 200px;
        }
        
        .certificate-content {
            padding: 1rem;
        }
        
        .modal-content {
            width: 95%;
            padding: 0 1rem;
        }
        
        .modal-close {
            top: -35px;
            font-size: 1.5rem;
        }
    }
    </style>

    <script>
    // Certificate Modal Functions
    function openCertificateModal(imageSrc, title) {
        const modal = document.getElementById('certificateModal');
        const modalImg = document.getElementById('modalImage');
        const caption = document.getElementById('modalCaption');
        
        modal.style.display = 'block';
        modalImg.src = imageSrc;
        modalImg.alt = title;
        caption.textContent = title;
        
        // Prevent body scroll when modal is open
        document.body.style.overflow = 'hidden';
    }

    function closeCertificateModal() {
        const modal = document.getElementById('certificateModal');
        modal.style.display = 'none';
        
        // Restore body scroll
        document.body.style.overflow = 'auto';
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeCertificateModal();
        }
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "certificates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 81,  205 => 78,  192 => 67,  186 => 63,  184 => 62,  180 => 60,  171 => 56,  165 => 54,  163 => 53,  160 => 52,  154 => 50,  152 => 49,  148 => 47,  144 => 45,  138 => 42,  135 => 41,  127 => 38,  123 => 37,  118 => 36,  116 => 35,  113 => 34,  111 => 33,  108 => 32,  106 => 31,  102 => 29,  98 => 28,  94 => 26,  92 => 25,  85 => 21,  79 => 18,  76 => 17,  73 => 16,  70 => 15,  63 => 11,  58 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  38 => 1,  36 => 3,  30 => 1,);
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

{% set grid_size = theme_var('grid-size') %}

{% block titlebar %}
    {% if grav.admin %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ admin_route('/pages') }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|t }}</a>
            <button class=\"button success\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\" style=\"background: #77559D !important; color: white !important;\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|t }}</button>
        </div>
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ page.title }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    {% if not grav.admin %}
        <div class=\"content-wrapper\">
            <div class=\"container {{ grid_size }}\">
                <!-- Page Content -->
                <div class=\"page-content\">
                    {{ page.content|raw }}
                </div>

                <!-- Certificates Section -->
                {% if header.certificates %}
                <section class=\"certificates-section\">
                    <div class=\"certificates-grid\">
                        {% for certificate in header.certificates %}
                        <div class=\"certificate-item\">
                            <div class=\"certificate-card\">
                                                {% if certificate.image_name %}
                <div class=\"certificate-image\">
                    {% set cert_image = page.media[certificate.image_name] %}
                    
                    {% if cert_image %}
                        <img src=\"{{ cert_image.url }}\" 
                             alt=\"{{ certificate.title ?: 'Сертификат' }}\"
                             onclick=\"openCertificateModal('{{ cert_image.url }}', '{{ certificate.title|e('html_attr') }}')\"
                             loading=\"lazy\">
                    {% else %}
                        <div class=\"no-image\">
                            <p>Изображение не найдено: {{ certificate.image_name }}</p>
                        </div>
                    {% endif %}
                </div>
                {% endif %}
                                
                                <div class=\"certificate-content\">
                                    {% if certificate.title %}
                                    <h3 class=\"certificate-title\">{{ certificate.title }}</h3>
                                    {% endif %}
                                    
                                    {% if certificate.description %}
                                    <p class=\"certificate-description\">{{ certificate.description }}</p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                    
                    {% if header.certificates|length == 0 %}
                    <div class=\"no-certificates\">
                        <p>Сертификаты будут добавлены в ближайшее время.</p>
                    </div>
                    {% endif %}
                </section>
                
                <!-- Certificate Modal -->
                <div id=\"certificateModal\" class=\"certificate-modal\" onclick=\"closeCertificateModal()\">
                    <div class=\"modal-content\" onclick=\"event.stopPropagation()\">
                        <span class=\"modal-close\" onclick=\"closeCertificateModal()\">&times;</span>
                        <img id=\"modalImage\" src=\"\" alt=\"\">
                        <div id=\"modalCaption\" class=\"modal-caption\"></div>
                    </div>
                </div>
                {% endif %}
            </div>
        </div>
    {% endif %}

    <style>
    /* Certificates Grid Styles */
    .certificates-section {
        margin-top: 2rem;
    }

    .certificates-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }

    .certificate-item {
        display: flex;
        flex-direction: column;
    }

    .certificate-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .certificate-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .certificate-image {
        position: relative;
        overflow: hidden;
        background: #f8f9fa;
        flex: 1;
        min-height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .certificate-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
        cursor: pointer;
        padding: 1rem;
    }

    .certificate-image:hover img {
        transform: scale(1.05);
    }

    .certificate-content {
        padding: 1.5rem;
        background: #ffffff;
    }

    .certificate-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c2c2c;
        margin: 0 0 0.5rem 0;
        line-height: 1.4;
    }

    .certificate-description {
        color: #666;
        font-size: 0.9rem;
        line-height: 1.5;
        margin: 0;
    }

    .no-certificates {
        text-align: center;
        padding: 3rem 1rem;
        color: #666;
    }

    .no-image {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 200px;
        background: #f8f9fa;
        border: 2px dashed #dee2e6;
        border-radius: 8px;
        color: #6c757d;
        font-style: italic;
    }

    .no-image p {
        margin: 0;
        padding: 1rem;
        text-align: center;
    }

    /* Certificate Modal Styles */
    .certificate-modal {
        display: none;
        position: fixed;
        z-index: 10000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        animation: fadeIn 0.3s ease;
    }

    .modal-content {
        position: relative;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 800px;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
    }

    .modal-content img {
        width: 100%;
        height: auto;
        max-height: 80vh;
        object-fit: contain;
        border-radius: 8px;
    }

    .modal-close {
        position: absolute;
        top: -40px;
        right: 0;
        color: #fff;
        font-size: 2rem;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .modal-close:hover {
        color: #ff6600;
    }

    .modal-caption {
        margin-top: 1rem;
        color: #fff;
        font-size: 1.1rem;
        font-weight: 500;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .certificates-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .certificate-image {
            min-height: 200px;
        }
        
        .certificate-content {
            padding: 1rem;
        }
        
        .modal-content {
            width: 95%;
            padding: 0 1rem;
        }
        
        .modal-close {
            top: -35px;
            font-size: 1.5rem;
        }
    }
    </style>

    <script>
    // Certificate Modal Functions
    function openCertificateModal(imageSrc, title) {
        const modal = document.getElementById('certificateModal');
        const modalImg = document.getElementById('modalImage');
        const caption = document.getElementById('modalCaption');
        
        modal.style.display = 'block';
        modalImg.src = imageSrc;
        modalImg.alt = title;
        caption.textContent = title;
        
        // Prevent body scroll when modal is open
        document.body.style.overflow = 'hidden';
    }

    function closeCertificateModal() {
        const modal = document.getElementById('certificateModal');
        modal.style.display = 'none';
        
        // Restore body scroll
        document.body.style.overflow = 'auto';
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeCertificateModal();
        }
    });
    </script>
{% endblock %} ", "certificates.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/certificates.html.twig");
    }
}
