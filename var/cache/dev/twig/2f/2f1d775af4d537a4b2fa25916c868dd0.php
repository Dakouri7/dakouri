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

/* login/login.html.twig */
class __TwigTemplate_53524d68645d17258001593cc6c06b32 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<header>
        
        <!-- BREADCRUMB -->
        <div class=\"bg-theme-overlay\">
            <section class=\"section__breadcrumb \">
                <div class=\"container\">
                    <div class=\"row d-flex justify-content-center\">
                        <div class=\"col-md-8 text-center\">
                            <h2 class=\"text-capitalize text-white\">login</h2>
                            <ul class=\"list-inline \">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"text-white\">
                                        home
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"text-white\">
                                        page
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"text-white\">
                                        login
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END BREADCRUMB -->
    </header>
<!-- LISTING LIST -->
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- Form Login -->
                    <div class=\"card mx-auto\" style=\"max-width: 380px;\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title mb-4\">Sign in</h4>
                            <form action=\"#\">
                                <a href=\"#\" class=\"btn btn-facebook btn-block mb-2 text-white\"> <i
                                        class=\"fa fa-facebook\"></i> &nbsp; Sign
                                    in
                                    with
                                    Facebook</a>
                                <a href=\"#\" class=\"btn btn-primary btn-block mb-4\"> <i class=\"fa fa-google\"></i> &nbsp;
                                    Sign in with
                                    Google</a>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Username\" type=\"text\">
                                </div> <!-- form-group// -->
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Password\" type=\"password\">
                                </div> <!-- form-group// -->

                                <div class=\"form-group\">
                                    <a href=\"#\" class=\"float-right\">Forgot password?</a>
                                    <label class=\"float-left custom-control custom-checkbox\"> <input type=\"checkbox\"
                                            class=\"custom-control-input\" checked=\"\">
                                        <span class=\"custom-control-label\"> Remember </span>
                                    </label>
                                </div> <!-- form-group form-check .// -->
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block\"> Login </button>
                                </div> <!-- form-group// -->
                            </form>
                        </div> <!-- card-body.// -->
                    </div> <!-- card .// -->

                    <p class=\"text-center mt-4\">Don't have account? <a href=\"#\">Sign up</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END LISTING LIST -->



    <!-- CALL TO ACTION -->
    <section class=\"cta-v1 py-5\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-9\">
                    <h2 class=\"text-uppercase text-white\">Looking To Sell Or Rent Your Property?</h2>
                    <p class=\"text-capitalize text-white\">We Will Assist You In The Best And Comfortable Property
                        Services
                        For You
                    </p>

                </div>
                <div class=\"col-lg-3\">
                    <a href=\"#\" class=\"btn btn-light text-uppercase \">request a quote
                        <i class=\"fa fa-angle-right ml-3 arrow-btn \"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<header>
        
        <!-- BREADCRUMB -->
        <div class=\"bg-theme-overlay\">
            <section class=\"section__breadcrumb \">
                <div class=\"container\">
                    <div class=\"row d-flex justify-content-center\">
                        <div class=\"col-md-8 text-center\">
                            <h2 class=\"text-capitalize text-white\">login</h2>
                            <ul class=\"list-inline \">
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"text-white\">
                                        home
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"text-white\">
                                        page
                                    </a>
                                </li>
                                <li class=\"list-inline-item\">
                                    <a href=\"#\" class=\"text-white\">
                                        login
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END BREADCRUMB -->
    </header>
<!-- LISTING LIST -->
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <!-- Form Login -->
                    <div class=\"card mx-auto\" style=\"max-width: 380px;\">
                        <div class=\"card-body\">
                            <h4 class=\"card-title mb-4\">Sign in</h4>
                            <form action=\"#\">
                                <a href=\"#\" class=\"btn btn-facebook btn-block mb-2 text-white\"> <i
                                        class=\"fa fa-facebook\"></i> &nbsp; Sign
                                    in
                                    with
                                    Facebook</a>
                                <a href=\"#\" class=\"btn btn-primary btn-block mb-4\"> <i class=\"fa fa-google\"></i> &nbsp;
                                    Sign in with
                                    Google</a>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Username\" type=\"text\">
                                </div> <!-- form-group// -->
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Password\" type=\"password\">
                                </div> <!-- form-group// -->

                                <div class=\"form-group\">
                                    <a href=\"#\" class=\"float-right\">Forgot password?</a>
                                    <label class=\"float-left custom-control custom-checkbox\"> <input type=\"checkbox\"
                                            class=\"custom-control-input\" checked=\"\">
                                        <span class=\"custom-control-label\"> Remember </span>
                                    </label>
                                </div> <!-- form-group form-check .// -->
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block\"> Login </button>
                                </div> <!-- form-group// -->
                            </form>
                        </div> <!-- card-body.// -->
                    </div> <!-- card .// -->

                    <p class=\"text-center mt-4\">Don't have account? <a href=\"#\">Sign up</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END LISTING LIST -->



    <!-- CALL TO ACTION -->
    <section class=\"cta-v1 py-5\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-9\">
                    <h2 class=\"text-uppercase text-white\">Looking To Sell Or Rent Your Property?</h2>
                    <p class=\"text-capitalize text-white\">We Will Assist You In The Best And Comfortable Property
                        Services
                        For You
                    </p>

                </div>
                <div class=\"col-lg-3\">
                    <a href=\"#\" class=\"btn btn-light text-uppercase \">request a quote
                        <i class=\"fa fa-angle-right ml-3 arrow-btn \"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION -->
{% endblock %}
", "login/login.html.twig", "C:\\immobiliers\\immobiliers\\templates\\login\\login.html.twig");
    }
}
