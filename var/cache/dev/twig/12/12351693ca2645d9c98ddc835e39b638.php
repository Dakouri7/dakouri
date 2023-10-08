<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_983d984dfe8635fb6392b6f4bcf42996 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Rethouse - Real Estate HTML Template\">
    <meta name=\"keywords\" content=\"Real Estate, Property, Directory Listing, Marketing, Agency\" />
    <meta name=\"author\" content=\"mardianto - retenvi.com\">
    <title>Rethouse - Real Estate HTML Template</title>

    <!-- Facebook and Twitter integration -->
    <meta property=\"og:title\" content=\"\" />
    <meta property=\"og:image\" content=\"\" />
    <meta property=\"og:url\" content=\"\" />
    <meta property=\"og:site_name\" content=\"\" />
    <meta property=\"og:description\" content=\"\" />
    <meta name=\"twitter:title\" content=\"\" />
    <meta name=\"twitter:image\" content=\"\" />
    <meta name=\"twitter:url\" content=\"\" />
    <meta name=\"twitter:card\" content=\"\" />

    <link rel=\"manifest\" href=\"site.webmanifest\">
    <!-- favicon.ico in the root directory -->
    <link rel=\"apple-touch-icon\" href=\"icon.png\">
    <meta name=\"theme-color\" content=\"#3454d1\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    </head>
    <body>
        <!-- NAVBAR TOP -->
    <div class=\"topbar d-none d-sm-block\">
        <div class=\"container \">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-5\">
                    <div class=\"topbar-left\">
                        <div class=\"topbar-text\">
                            Monday, March 22, 2020
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-7\">
                    <div class=\"list-unstyled topbar-right\">
                        <ul class=\"topbar-link\">
                            <li><a href=\"#\" title=\"\">Career</a></li>
                            <li><a href=\"#\" title=\"\">Contact Us</a></li>
                            <li><a href=\"/login\" title=\"\">Login / Register</a></li>
                        </ul>
                        <ul class=\"topbar-sosmed\">
                            <li>
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAVBAR TOP -->
    ";
        // line 80
        $this->loadTemplate("partials/menu.html.twig", "base.html.twig", 80)->display($context);
        // line 81
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "    <!-- END CALL TO ACTION -->
    <!-- Footer  -->
    ";
        // line 84
        $this->loadTemplate("partials/footer.html.twig", "base.html.twig", 84)->display($context);
        // line 85
        echo "       
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Immobilier Yaqooa!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 31
        echo "         <link href=\"css/stylesbd04.css?8918068d71def746395d\" rel=\"stylesheet\">

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "
           <!-- SCROLL TO TOP -->
            <a href=\"javascript:\" id=\"return-to-top\"><i class=\"fa fa-chevron-up\"></i></a>
           <!-- END SCROLL TO TOP -->
           <script src=\"js/index.bundlebd04.js?8918068d71def746395d\"></script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 81,  202 => 36,  192 => 35,  180 => 31,  170 => 30,  151 => 5,  138 => 85,  136 => 84,  132 => 82,  129 => 81,  127 => 80,  88 => 43,  86 => 35,  83 => 34,  81 => 30,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Immobilier Yaqooa!{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Rethouse - Real Estate HTML Template\">
    <meta name=\"keywords\" content=\"Real Estate, Property, Directory Listing, Marketing, Agency\" />
    <meta name=\"author\" content=\"mardianto - retenvi.com\">
    <title>Rethouse - Real Estate HTML Template</title>

    <!-- Facebook and Twitter integration -->
    <meta property=\"og:title\" content=\"\" />
    <meta property=\"og:image\" content=\"\" />
    <meta property=\"og:url\" content=\"\" />
    <meta property=\"og:site_name\" content=\"\" />
    <meta property=\"og:description\" content=\"\" />
    <meta name=\"twitter:title\" content=\"\" />
    <meta name=\"twitter:image\" content=\"\" />
    <meta name=\"twitter:url\" content=\"\" />
    <meta name=\"twitter:card\" content=\"\" />

    <link rel=\"manifest\" href=\"site.webmanifest\">
    <!-- favicon.ico in the root directory -->
    <link rel=\"apple-touch-icon\" href=\"icon.png\">
    <meta name=\"theme-color\" content=\"#3454d1\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {% block stylesheets %}
         <link href=\"css/stylesbd04.css?8918068d71def746395d\" rel=\"stylesheet\">

        {% endblock %}

        {% block javascripts %}

           <!-- SCROLL TO TOP -->
            <a href=\"javascript:\" id=\"return-to-top\"><i class=\"fa fa-chevron-up\"></i></a>
           <!-- END SCROLL TO TOP -->
           <script src=\"js/index.bundlebd04.js?8918068d71def746395d\"></script>

        {% endblock %}
    </head>
    <body>
        <!-- NAVBAR TOP -->
    <div class=\"topbar d-none d-sm-block\">
        <div class=\"container \">
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-5\">
                    <div class=\"topbar-left\">
                        <div class=\"topbar-text\">
                            Monday, March 22, 2020
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-7\">
                    <div class=\"list-unstyled topbar-right\">
                        <ul class=\"topbar-link\">
                            <li><a href=\"#\" title=\"\">Career</a></li>
                            <li><a href=\"#\" title=\"\">Contact Us</a></li>
                            <li><a href=\"/login\" title=\"\">Login / Register</a></li>
                        </ul>
                        <ul class=\"topbar-sosmed\">
                            <li>
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAVBAR TOP -->
    {% include(\"partials/menu.html.twig\")%}
    {% block body %}{% endblock %}
    <!-- END CALL TO ACTION -->
    <!-- Footer  -->
    {% include(\"partials/footer.html.twig\") %}
       
    </body>
</html>
", "base.html.twig", "C:\\immobiliers\\immobiliers\\templates\\base.html.twig");
    }
}
