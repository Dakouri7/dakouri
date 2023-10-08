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

/* partials/footer.html.twig */
class __TwigTemplate_0d988a6db950c9d94d5141fa9b00e376 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<!-- Footer  -->
<footer>
        <div class=\"wrapper__footer bg-theme-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- ADDRESS -->
                    <div class=\"col-md-4\">
                        <div class=\"widget__footer\">
                            <figure>
                                <img src=\"images/logo-blue.png\" alt=\"\" class=\"logo-footer\">
                            </figure>
                            <p>
                                Rethouse Real Estate is a premium Property template based on Bootstrap 4. Rethouse Real
                                Estate helped thousands of clients to find the right property for their needs.

                            </p>

                            <ul class=\"list-unstyled mb-0 mt-3\">
                                <li> <b> <i class=\"fa fa-map-marker\"></i></b><span>214 West Arnold St. New York, NY
                                        10002</span> </li>
                                <li> <b><i class=\"fa fa-phone-square\"></i></b><span>(123) 345-6789</span> </li>
                                <li> <b><i class=\"fa fa-phone-square\"></i></b><span>(+100) 123 456 7890</span> </li>
                                <li> <b><i class=\"fa fa-headphones\"></i></b><span>support@realvilla.demo</span> </li>
                                <li> <b><i class=\"fa fa-clock-o\"></i></b><span>Mon - Sun / 9:00AM - 8:00PM</span> </li>
                            </ul>
                        </div>

                    </div>
                    <!-- END ADDRESS -->

                    <!-- QUICK LINKS -->
                    <div class=\"col-md-4\">
                        <div class=\"widget__footer\">
                            <h4 class=\"footer-title\">Quick Links</h4>
                            <div class=\"link__category-two-column\">
                                <ul class=\"list-unstyled \">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Commercial</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">business</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">House</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Residential</a>
                                    </li>

                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Residential Tower</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Beverly Hills</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Los angeles</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">The beach</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Property Listing</a>
                                    </li>

                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Clasic</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Modern Home</a>
                                    </li>

                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Luxury</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Beach Pasadena</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END QUICK LINKS -->


                    <!-- NEWSLETTERS -->
                    <div class=\"col-md-4\">
                        <div class=\"widget__footer\">
                            <h4 class=\"footer-title\">follow us </h4>
                            <p class=\"mb-2\">
                                Follow us and stay in touch to get the latest news
                            </p>
                            <p>
                                <button class=\"btn btn-social btn-social-o facebook mr-1\">
                                    <i class=\"fa fa-facebook-f\"></i>
                                </button>
                                <button class=\"btn btn-social btn-social-o twitter mr-1\">
                                    <i class=\"fa fa-twitter\"></i>
                                </button>

                                <button class=\"btn btn-social btn-social-o linkedin mr-1\">
                                    <i class=\"fa fa-linkedin\"></i>
                                </button>
                                <button class=\"btn btn-social btn-social-o instagram mr-1\">
                                    <i class=\"fa fa-instagram\"></i>
                                </button>

                                <button class=\"btn btn-social btn-social-o youtube mr-1\">
                                    <i class=\"fa fa-youtube\"></i>
                                </button>
                            </p>
                            <br>
                            <h4 class=\"footer-title\">newsletter</h4>
                            <!-- Form Newsletter -->
                            <div class=\"widget__form-newsletter \">
                                <p>

                                    Don’t miss to subscribe to our news feeds, kindly fill the form below
                                </p>
                                <div class=\"mt-3\">
                                    <input type=\"text\" class=\"form-control mb-2\" placeholder=\"Your email address\">

                                    <button class=\"btn btn-primary btn-block text-capitalize\" type=\"button\">subscribe

                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END NEWSLETTER -->
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class=\"bg__footer-bottom-v1\">
            <div class=\"container\">
                <div class=\"row flex-column-reverse flex-md-row\">
                    <div class=\"col-md-6\">
                        <span>
                            © 2020 Rethouse Real Estate - Premium real estate & theme &amp; theme by
                            <a href=\"#\">retenvi.com</a>
                        </span>
                    </div>
                    <div class=\"col-md-6\">
                        <ul class=\"list-inline \">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    privacy
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    contact
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    about
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    faq
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer  -->
    </footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer  -->
<footer>
        <div class=\"wrapper__footer bg-theme-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- ADDRESS -->
                    <div class=\"col-md-4\">
                        <div class=\"widget__footer\">
                            <figure>
                                <img src=\"images/logo-blue.png\" alt=\"\" class=\"logo-footer\">
                            </figure>
                            <p>
                                Rethouse Real Estate is a premium Property template based on Bootstrap 4. Rethouse Real
                                Estate helped thousands of clients to find the right property for their needs.

                            </p>

                            <ul class=\"list-unstyled mb-0 mt-3\">
                                <li> <b> <i class=\"fa fa-map-marker\"></i></b><span>214 West Arnold St. New York, NY
                                        10002</span> </li>
                                <li> <b><i class=\"fa fa-phone-square\"></i></b><span>(123) 345-6789</span> </li>
                                <li> <b><i class=\"fa fa-phone-square\"></i></b><span>(+100) 123 456 7890</span> </li>
                                <li> <b><i class=\"fa fa-headphones\"></i></b><span>support@realvilla.demo</span> </li>
                                <li> <b><i class=\"fa fa-clock-o\"></i></b><span>Mon - Sun / 9:00AM - 8:00PM</span> </li>
                            </ul>
                        </div>

                    </div>
                    <!-- END ADDRESS -->

                    <!-- QUICK LINKS -->
                    <div class=\"col-md-4\">
                        <div class=\"widget__footer\">
                            <h4 class=\"footer-title\">Quick Links</h4>
                            <div class=\"link__category-two-column\">
                                <ul class=\"list-unstyled \">
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Commercial</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">business</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">House</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Residential</a>
                                    </li>

                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Residential Tower</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Beverly Hills</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Los angeles</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">The beach</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Property Listing</a>
                                    </li>

                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Clasic</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Modern Home</a>
                                    </li>

                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Luxury</a>
                                    </li>
                                    <li class=\"list-inline-item\">
                                        <a href=\"#\">Beach Pasadena</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END QUICK LINKS -->


                    <!-- NEWSLETTERS -->
                    <div class=\"col-md-4\">
                        <div class=\"widget__footer\">
                            <h4 class=\"footer-title\">follow us </h4>
                            <p class=\"mb-2\">
                                Follow us and stay in touch to get the latest news
                            </p>
                            <p>
                                <button class=\"btn btn-social btn-social-o facebook mr-1\">
                                    <i class=\"fa fa-facebook-f\"></i>
                                </button>
                                <button class=\"btn btn-social btn-social-o twitter mr-1\">
                                    <i class=\"fa fa-twitter\"></i>
                                </button>

                                <button class=\"btn btn-social btn-social-o linkedin mr-1\">
                                    <i class=\"fa fa-linkedin\"></i>
                                </button>
                                <button class=\"btn btn-social btn-social-o instagram mr-1\">
                                    <i class=\"fa fa-instagram\"></i>
                                </button>

                                <button class=\"btn btn-social btn-social-o youtube mr-1\">
                                    <i class=\"fa fa-youtube\"></i>
                                </button>
                            </p>
                            <br>
                            <h4 class=\"footer-title\">newsletter</h4>
                            <!-- Form Newsletter -->
                            <div class=\"widget__form-newsletter \">
                                <p>

                                    Don’t miss to subscribe to our news feeds, kindly fill the form below
                                </p>
                                <div class=\"mt-3\">
                                    <input type=\"text\" class=\"form-control mb-2\" placeholder=\"Your email address\">

                                    <button class=\"btn btn-primary btn-block text-capitalize\" type=\"button\">subscribe

                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END NEWSLETTER -->
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class=\"bg__footer-bottom-v1\">
            <div class=\"container\">
                <div class=\"row flex-column-reverse flex-md-row\">
                    <div class=\"col-md-6\">
                        <span>
                            © 2020 Rethouse Real Estate - Premium real estate & theme &amp; theme by
                            <a href=\"#\">retenvi.com</a>
                        </span>
                    </div>
                    <div class=\"col-md-6\">
                        <ul class=\"list-inline \">
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    privacy
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    contact
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    about
                                </a>
                            </li>
                            <li class=\"list-inline-item\">
                                <a href=\"#\">
                                    faq
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer  -->
    </footer>", "partials/footer.html.twig", "C:\\immobiliers\\immobiliers\\templates\\partials\\footer.html.twig");
    }
}
