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

/* partials/footer.html.twig */
class __TwigTemplate_4c86781d8a02a57f748208d83dfdbeefc2f9207ce26ac5c39c846aa603cf5a16 extends \Twig\Template
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
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 2
        echo "<section id=\"footer\" class=\"section bg-footer-dark\">
    <section class=\"container ";
        // line 3
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
        <div class=\"columns\">
            <div class=\"column col-4 col-md-12\">
                <div class=\"footer-logo\">
                    ";
        // line 7
        $this->loadTemplate("partials/logo.html.twig", "partials/footer.html.twig", 7)->display($context);
        // line 8
        echo "                </div>
                <p class=\"footer-description\">
                    <strong>Expo Land</strong> - ведущий специалист по строительству выставочных стендов, наружной рекламе и дизайну интерьеров в Москве.
                </p>
                <div class=\"footer-social\">
                    <a href=\"https://vk.com/expo_land\" target=\"_blank\" rel=\"noopener\" class=\"social-link\">
                        <i class=\"fab fa-vk\"></i>
                    </a>
                    <a href=\"https://t.me/expo_land_official\" target=\"_blank\" rel=\"noopener\" class=\"social-link\">
                        <i class=\"fab fa-telegram\"></i>
                    </a>
                    <a href=\"https://youtube.com/ExpoLandOfficial\" target=\"_blank\" rel=\"noopener\" class=\"social-link\">
                        <i class=\"fab fa-youtube\"></i>
                    </a>
                </div>
            </div>
            
            <div class=\"column col-2 col-md-4 col-sm-6\">
                <h4 class=\"footer-title\">Услуги</h4>
                <ul class=\"footer-menu\">
                    <li><a href=\"/portfolio/vystavochnye-stendy\">Выставочные стенды</a></li>
                    <li><a href=\"/portfolio/naruzhnaya-reklama\">Наружная реклама</a></li>
                    <li><a href=\"/portfolio/dizajn-intererov\">Дизайн интерьеров</a></li>
                    <li><a href=\"/otpravit-zayavku\">Заказать проект</a></li>
                </ul>
            </div>
            
            <div class=\"column col-2 col-md-4 col-sm-6\">
                <h4 class=\"footer-title\">Компания</h4>
                <ul class=\"footer-menu\">
                    <li><a href=\"/o-nas\">О нас</a></li>
                    <li><a href=\"/partnery\">Партнёры</a></li>
                    <li><a href=\"/otzyvy\">Отзывы</a></li>
                    <li><a href=\"/sertifikaty\">Сертификаты</a></li>
                    <li><a href=\"/novosti\">Новости</a></li>
                </ul>
            </div>
            
            <div class=\"column col-4 col-md-12\">
                <h4 class=\"footer-title\">Контакты</h4>
                <div class=\"footer-contact\">
                    <p>
                        <i class=\"fas fa-map-marker-alt\"></i>
                        г. Москва, ул. Промышленная, д. 25, стр. 1
                    </p>
                    <p>
                        <i class=\"fas fa-phone\"></i>
                        <a href=\"tel:+74951234567\">+7 (495) 123-45-67</a>
                    </p>
                    <p>
                        <i class=\"fas fa-envelope\"></i>
                        <a href=\"mailto:info@expo-land.ru\">info@expo-land.ru</a>
                    </p>
                    <p>
                        <i class=\"fas fa-clock\"></i>
                        Пн-Пт: 09:00-18:00, Сб: 10:00-16:00
                    </p>
                </div>
            </div>
        </div>
        
        <hr class=\"footer-divider\">
        
        <div class=\"footer-bottom\">
            <div class=\"columns\">
                <div class=\"column col-6 col-md-12\">
                    <p>&copy; ";
        // line 74
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Expo Land. Все права защищены.</p>
                </div>
                <div class=\"column col-6 col-md-12 text-right\">
                    <a href=\"/privacy\" class=\"footer-link\">Политика конфиденциальности</a>
                    <span class=\"footer-separator\">|</span>
                    <a href=\"/terms\" class=\"footer-link\">Условия использования</a>
                </div>
            </div>
        </div>
    </section>
</section>

<style>
#footer {
    background: #2c2c2c;
    color: #ffffff;
    padding: 3rem 0 1rem;
    margin-top: 3rem;
}

.footer-logo {
    margin-bottom: 1rem;
}

.footer-logo svg path,
.footer-logo img {
    fill: #ffffff;
    filter: brightness(0) invert(1);
}

.footer-description {
    margin-bottom: 1.5rem;
    line-height: 1.6;
    color: #cccccc;
}

.footer-social {
    margin-bottom: 1rem;
}

.social-link {
    display: inline-block;
    margin-right: 1rem;
    color: #cccccc;
    font-size: 1.2rem;
    transition: color 0.3s ease;
}

.social-link:hover {
    color: #ff6600;
}

.footer-title {
    color: #ffffff;
    margin-bottom: 1rem;
    font-weight: 600;
    font-size: 1.1rem;
}

.footer-menu {
    list-style: none;
    margin: 0;
    padding: 0;
}

.footer-menu li {
    margin-bottom: 0.5rem;
}

.footer-menu a {
    color: #cccccc;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-menu a:hover {
    color: #ff6600;
}

.footer-contact p {
    margin-bottom: 0.5rem;
    color: #cccccc;
}

.footer-contact i {
    margin-right: 0.5rem;
    color: #ff6600;
    width: 16px;
}

.footer-contact a {
    color: #cccccc;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-contact a:hover {
    color: #ff6600;
}

.footer-divider {
    border: 0;
    height: 1px;
    background: #444444;
    margin: 2rem 0 1rem;
}

.footer-bottom {
    color: #999999;
    font-size: 0.9rem;
}

.footer-link {
    color: #999999;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-link:hover {
    color: #ff6600;
}

.footer-separator {
    margin: 0 0.5rem;
    color: #666666;
}

@media (max-width: 768px) {
    .text-right {
        text-align: left !important;
    }
    
    .footer-bottom .column:last-child {
        margin-top: 1rem;
    }
}
</style>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 74,  44 => 8,  42 => 7,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_size = theme_var('grid-size') %}
<section id=\"footer\" class=\"section bg-footer-dark\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-4 col-md-12\">
                <div class=\"footer-logo\">
                    {% include 'partials/logo.html.twig' %}
                </div>
                <p class=\"footer-description\">
                    <strong>Expo Land</strong> - ведущий специалист по строительству выставочных стендов, наружной рекламе и дизайну интерьеров в Москве.
                </p>
                <div class=\"footer-social\">
                    <a href=\"https://vk.com/expo_land\" target=\"_blank\" rel=\"noopener\" class=\"social-link\">
                        <i class=\"fab fa-vk\"></i>
                    </a>
                    <a href=\"https://t.me/expo_land_official\" target=\"_blank\" rel=\"noopener\" class=\"social-link\">
                        <i class=\"fab fa-telegram\"></i>
                    </a>
                    <a href=\"https://youtube.com/ExpoLandOfficial\" target=\"_blank\" rel=\"noopener\" class=\"social-link\">
                        <i class=\"fab fa-youtube\"></i>
                    </a>
                </div>
            </div>
            
            <div class=\"column col-2 col-md-4 col-sm-6\">
                <h4 class=\"footer-title\">Услуги</h4>
                <ul class=\"footer-menu\">
                    <li><a href=\"/portfolio/vystavochnye-stendy\">Выставочные стенды</a></li>
                    <li><a href=\"/portfolio/naruzhnaya-reklama\">Наружная реклама</a></li>
                    <li><a href=\"/portfolio/dizajn-intererov\">Дизайн интерьеров</a></li>
                    <li><a href=\"/otpravit-zayavku\">Заказать проект</a></li>
                </ul>
            </div>
            
            <div class=\"column col-2 col-md-4 col-sm-6\">
                <h4 class=\"footer-title\">Компания</h4>
                <ul class=\"footer-menu\">
                    <li><a href=\"/o-nas\">О нас</a></li>
                    <li><a href=\"/partnery\">Партнёры</a></li>
                    <li><a href=\"/otzyvy\">Отзывы</a></li>
                    <li><a href=\"/sertifikaty\">Сертификаты</a></li>
                    <li><a href=\"/novosti\">Новости</a></li>
                </ul>
            </div>
            
            <div class=\"column col-4 col-md-12\">
                <h4 class=\"footer-title\">Контакты</h4>
                <div class=\"footer-contact\">
                    <p>
                        <i class=\"fas fa-map-marker-alt\"></i>
                        г. Москва, ул. Промышленная, д. 25, стр. 1
                    </p>
                    <p>
                        <i class=\"fas fa-phone\"></i>
                        <a href=\"tel:+74951234567\">+7 (495) 123-45-67</a>
                    </p>
                    <p>
                        <i class=\"fas fa-envelope\"></i>
                        <a href=\"mailto:info@expo-land.ru\">info@expo-land.ru</a>
                    </p>
                    <p>
                        <i class=\"fas fa-clock\"></i>
                        Пн-Пт: 09:00-18:00, Сб: 10:00-16:00
                    </p>
                </div>
            </div>
        </div>
        
        <hr class=\"footer-divider\">
        
        <div class=\"footer-bottom\">
            <div class=\"columns\">
                <div class=\"column col-6 col-md-12\">
                    <p>&copy; {{ \"now\"|date(\"Y\") }} Expo Land. Все права защищены.</p>
                </div>
                <div class=\"column col-6 col-md-12 text-right\">
                    <a href=\"/privacy\" class=\"footer-link\">Политика конфиденциальности</a>
                    <span class=\"footer-separator\">|</span>
                    <a href=\"/terms\" class=\"footer-link\">Условия использования</a>
                </div>
            </div>
        </div>
    </section>
</section>

<style>
#footer {
    background: #2c2c2c;
    color: #ffffff;
    padding: 3rem 0 1rem;
    margin-top: 3rem;
}

.footer-logo {
    margin-bottom: 1rem;
}

.footer-logo svg path,
.footer-logo img {
    fill: #ffffff;
    filter: brightness(0) invert(1);
}

.footer-description {
    margin-bottom: 1.5rem;
    line-height: 1.6;
    color: #cccccc;
}

.footer-social {
    margin-bottom: 1rem;
}

.social-link {
    display: inline-block;
    margin-right: 1rem;
    color: #cccccc;
    font-size: 1.2rem;
    transition: color 0.3s ease;
}

.social-link:hover {
    color: #ff6600;
}

.footer-title {
    color: #ffffff;
    margin-bottom: 1rem;
    font-weight: 600;
    font-size: 1.1rem;
}

.footer-menu {
    list-style: none;
    margin: 0;
    padding: 0;
}

.footer-menu li {
    margin-bottom: 0.5rem;
}

.footer-menu a {
    color: #cccccc;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-menu a:hover {
    color: #ff6600;
}

.footer-contact p {
    margin-bottom: 0.5rem;
    color: #cccccc;
}

.footer-contact i {
    margin-right: 0.5rem;
    color: #ff6600;
    width: 16px;
}

.footer-contact a {
    color: #cccccc;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-contact a:hover {
    color: #ff6600;
}

.footer-divider {
    border: 0;
    height: 1px;
    background: #444444;
    margin: 2rem 0 1rem;
}

.footer-bottom {
    color: #999999;
    font-size: 0.9rem;
}

.footer-link {
    color: #999999;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-link:hover {
    color: #ff6600;
}

.footer-separator {
    margin: 0 0.5rem;
    color: #666666;
}

@media (max-width: 768px) {
    .text-right {
        text-align: left !important;
    }
    
    .footer-bottom .column:last-child {
        margin-top: 1rem;
    }
}
</style>
", "partials/footer.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/partials/footer.html.twig");
    }
}
