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

/* partials/menu.html.twig */
class __TwigTemplate_f592f42c62c178b8f7b1b22ce275d18d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu.html.twig"));

        // line 1
        echo " <!-- END NAVBAR TOP -->
    <nav class=\"navbar navbar-hover navbar-expand-lg navbar-soft\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"images/logo-blue-stiky.png\" alt=\"\" class=\"img-fluid\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main_nav99\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"main_nav99\">
                <ul class=\"navbar-nav  mx-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/immobilier\">Accueil</a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"> Patrimoines </a>
                        <ul class=\"dropdown-menu animate fade-up\">

                            <li><a class=\"dropdown-item icon-arrow\" href=\"#\">Liste </a>
                                <ul class=\"submenu dropdown-menu  animate fade-up\">
                                    <li><a class='dropdown-item' href='listing-style-v1.html'>Propités</a></li>
                                </ul>
                            </li>
                            <li><a class=\"dropdown-item icon-arrow\" href=\"#\"> Property single detail </a>
                                <ul class=\"submenu dropdown-menu  animate fade-up\">
                                    <li><a class='dropdown-item' href='single-detail-v1.html'>Style 1</a></li>
                                    <li><a class='dropdown-item' href='single-detail-v2.html'>Style 2</a></li>
                                    <li><a class='dropdown-item' href='single-detail-v3.html'>Style 3</a></li>
                                    <li><a class='dropdown-item' href='single-detail-v4.html'>Style 4</a></li>
                                    <li><a class='dropdown-item' href='single-detail-v5.html'>Style 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item \"><a class=\"nav-link\" href=\"/agence\">Agence</a></li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link active dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"> Blog</a>
                        <ul class=\"dropdown-menu dropdown-menu-left animate fade-up\">
                            <li><a class='dropdown-item' href='blog.html'> Blog </a>
                            </li>
                            <li><a class='dropdown-item' href='blog-single.html'> Blog Single </a></li>

                        </ul>
                    </li>

                    <li class=\"nav-item\"><a class='nav-link' href='contact.html'> contactez nous </a></li>
                </ul>


                <!-- Search bar.// -->
                <ul class=\"navbar-nav\">
                    <li>
                        <a href=\"#\" class=\"btn btn-primary text-capitalize\">
                            <i class=\"fa fa-plus-circle mr-1\"></i> add listing</a>
                    </li>
                </ul>
                <!-- Search content bar.// -->
                <div class=\"top-search navigation-shadow\">
                    <div class=\"container\">
                        <div class=\"input-group \">
                            <form action=\"#\">

                                <div class=\"row no-gutters mt-3\">
                                    <div class=\"col\">
                                        <input class=\"form-control border-secondary border-right-0 rounded-0\"
                                            type=\"search\" value=\"\" placeholder=\"Search \" id=\"example-search-input4\">
                                    </div>
                                    <div class=\"col-auto\">
                                        <a class=\"btn btn-outline-secondary border-left-0 rounded-0 rounded-right\"
                                            href=\"search-result.html\">
                                            <i class=\"fa fa-search\"></i>
                                        </a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Search content bar.// -->
            </div> <!-- navbar-collapse.// -->
        </div>
    </nav>
    <!-- CAROUSEL -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- END NAVBAR TOP -->
    <nav class=\"navbar navbar-hover navbar-expand-lg navbar-soft\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"images/logo-blue-stiky.png\" alt=\"\" class=\"img-fluid\">
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main_nav99\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"main_nav99\">
                <ul class=\"navbar-nav  mx-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/immobilier\">Accueil</a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"> Patrimoines </a>
                        <ul class=\"dropdown-menu animate fade-up\">

                            <li><a class=\"dropdown-item icon-arrow\" href=\"#\">Liste </a>
                                <ul class=\"submenu dropdown-menu  animate fade-up\">
                                    <li><a class='dropdown-item' href='listing-style-v1.html'>Propités</a></li>
                                </ul>
                            </li>
                            <li><a class=\"dropdown-item icon-arrow\" href=\"#\"> Property single detail </a>
                                <ul class=\"submenu dropdown-menu  animate fade-up\">
                                    <li><a class='dropdown-item' href='single-detail-v1.html'>Style 1</a></li>
                                    <li><a class='dropdown-item' href='single-detail-v2.html'>Style 2</a></li>
                                    <li><a class='dropdown-item' href='single-detail-v3.html'>Style 3</a></li>
                                    <li><a class='dropdown-item' href='single-detail-v4.html'>Style 4</a></li>
                                    <li><a class='dropdown-item' href='single-detail-v5.html'>Style 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item \"><a class=\"nav-link\" href=\"/agence\">Agence</a></li>

                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link active dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"> Blog</a>
                        <ul class=\"dropdown-menu dropdown-menu-left animate fade-up\">
                            <li><a class='dropdown-item' href='blog.html'> Blog </a>
                            </li>
                            <li><a class='dropdown-item' href='blog-single.html'> Blog Single </a></li>

                        </ul>
                    </li>

                    <li class=\"nav-item\"><a class='nav-link' href='contact.html'> contactez nous </a></li>
                </ul>


                <!-- Search bar.// -->
                <ul class=\"navbar-nav\">
                    <li>
                        <a href=\"#\" class=\"btn btn-primary text-capitalize\">
                            <i class=\"fa fa-plus-circle mr-1\"></i> add listing</a>
                    </li>
                </ul>
                <!-- Search content bar.// -->
                <div class=\"top-search navigation-shadow\">
                    <div class=\"container\">
                        <div class=\"input-group \">
                            <form action=\"#\">

                                <div class=\"row no-gutters mt-3\">
                                    <div class=\"col\">
                                        <input class=\"form-control border-secondary border-right-0 rounded-0\"
                                            type=\"search\" value=\"\" placeholder=\"Search \" id=\"example-search-input4\">
                                    </div>
                                    <div class=\"col-auto\">
                                        <a class=\"btn btn-outline-secondary border-left-0 rounded-0 rounded-right\"
                                            href=\"search-result.html\">
                                            <i class=\"fa fa-search\"></i>
                                        </a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Search content bar.// -->
            </div> <!-- navbar-collapse.// -->
        </div>
    </nav>
    <!-- CAROUSEL -->", "partials/menu.html.twig", "C:\\immobiliers\\immobiliers\\templates\\partials\\menu.html.twig");
    }
}
