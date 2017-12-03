<?php

/* MainBundle:Common:header.html.twig */
class __TwigTemplate_134533271a605937c9c355b94938abc65c19725b45effc4456e7388be6f1b365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_462d379a61e83ceb5118486f3a49ecb4cf1eed2015dee63dfe23a04ac5b27166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462d379a61e83ceb5118486f3a49ecb4cf1eed2015dee63dfe23a04ac5b27166->enter($__internal_462d379a61e83ceb5118486f3a49ecb4cf1eed2015dee63dfe23a04ac5b27166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Common:header.html.twig"));

        // line 1
        echo "<div class=\"page\">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
        <div class=\"container top-sect\">
            <div class=\"navbar-header\" style=\"top:-52px;\">
                <h1 class=\"navbar-brand\" >
                    <a data-type='rd-navbar-brand'  href=\"./\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/logo (1).png"), "cropResize", array(0 => 220, 1 => 220), "method"), "html", null, true);
        echo "\"></a>
                </h1>
                <a class=\"search-form_toggle\" href=\"#\"></a>
            </div>

            <div class=\"help-box text-right\">
                <p>Contact</p>
                <a href=\"#\">+33 7 81 01 72 30</a>
                <small><span>12 Boulevard Aristide Briand </span>Suresnes &nbsp;France</small>
            </div>

        </div>


        <div id=\"stuck_container\" class=\"stuck_container\">
            <div class=\"container\">
                <nav class=\"navbar navbar-default navbar-static-top pull-left\">

                    <div class=\"\" id=\"header\">
                        <ul class=\"nav navbar-nav sf-menu\" data-type=\"navbar\">
                            <li ";
        // line 29
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 29, $this->getSourceContext()); })()) == "home")) {
            echo " class=\"active\" ";
        }
        echo ">
                                <a href=\"./\">ACCUEIL</a>
                            </li>
                            <li ";
        // line 32
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 32, $this->getSourceContext()); })()) == "equipe")) {
            echo " class=\"active\"";
        }
        echo ">
                                <a href=\"http://localhost:8888/odellya/web/app_dev.php/index#equipe\">L'EQUIPE</a>
                            </li>
                            ";
        // line 41
        echo "
                            <li ";
        // line 42
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 42, $this->getSourceContext()); })()) == "event")) {
            echo "class=\"active\"";
        }
        echo ">
                                <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event");
        echo "\">EVENEMENTS</a>
                            </li>

                            <li ";
        // line 46
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 46, $this->getSourceContext()); })()) == "application")) {
            echo "class=\"active\"";
        }
        echo ">
                                <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application");
        echo "\">ADHESION</a>
                            </li>

                            <li ";
        // line 50
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 50, $this->getSourceContext()); })()) == "contact")) {
            echo "class=\"active\"";
        }
        echo ">
                                <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">CONTACTS</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <form class=\"search-form\" action=\"search.php\" method=\"GET\" accept-charset=\"utf-8\">
                    <label class=\"search-form_label\">
                        <input class=\"search-form_input\" type=\"text\" name=\"s\" autocomplete=\"off\" placeholder=\"\"/>
                        <span class=\"search-form_liveout\"></span>
                    </label>
                    <button class=\"search-form_submit fa-search\" type=\"submit\"></button>
                </form>

            </div>

        </div>
    </header>";
        
        $__internal_462d379a61e83ceb5118486f3a49ecb4cf1eed2015dee63dfe23a04ac5b27166->leave($__internal_462d379a61e83ceb5118486f3a49ecb4cf1eed2015dee63dfe23a04ac5b27166_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Common:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 51,  98 => 50,  92 => 47,  86 => 46,  80 => 43,  74 => 42,  71 => 41,  63 => 32,  55 => 29,  32 => 9,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page\">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
        <div class=\"container top-sect\">
            <div class=\"navbar-header\" style=\"top:-52px;\">
                <h1 class=\"navbar-brand\" >
                    <a data-type='rd-navbar-brand'  href=\"./\"><img src=\"{{ image('bundles/main/images/logo (1).png').cropResize(220,220) }}\"></a>
                </h1>
                <a class=\"search-form_toggle\" href=\"#\"></a>
            </div>

            <div class=\"help-box text-right\">
                <p>Contact</p>
                <a href=\"#\">+33 7 81 01 72 30</a>
                <small><span>12 Boulevard Aristide Briand </span>Suresnes &nbsp;France</small>
            </div>

        </div>


        <div id=\"stuck_container\" class=\"stuck_container\">
            <div class=\"container\">
                <nav class=\"navbar navbar-default navbar-static-top pull-left\">

                    <div class=\"\" id=\"header\">
                        <ul class=\"nav navbar-nav sf-menu\" data-type=\"navbar\">
                            <li {% if active == 'home' %} class=\"active\" {% endif %}>
                                <a href=\"./\">ACCUEIL</a>
                            </li>
                            <li {% if active == 'equipe' %} class=\"active\"{% endif %}>
                                <a href=\"http://localhost:8888/odellya/web/app_dev.php/index#equipe\">L'EQUIPE</a>
                            </li>
                            {#
                            <li class=\"dropdown\">
                                <a href=\"http://localhost:8888/odellya/web/app_dev.php/index#mot\">MOT DU PRESIDENT<span class=\"\"></span></a>

                            </li>
                            #}

                            <li {% if active == 'event' %}class=\"active\"{% endif %}>
                                <a href=\"{{ path('event') }}\">EVENEMENTS</a>
                            </li>

                            <li {% if active == 'application' %}class=\"active\"{% endif %}>
                                <a href=\"{{ path('application') }}\">ADHESION</a>
                            </li>

                            <li {% if active == 'contact' %}class=\"active\"{% endif %}>
                                <a href=\"{{ path('contact') }}\">CONTACTS</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <form class=\"search-form\" action=\"search.php\" method=\"GET\" accept-charset=\"utf-8\">
                    <label class=\"search-form_label\">
                        <input class=\"search-form_input\" type=\"text\" name=\"s\" autocomplete=\"off\" placeholder=\"\"/>
                        <span class=\"search-form_liveout\"></span>
                    </label>
                    <button class=\"search-form_submit fa-search\" type=\"submit\"></button>
                </form>

            </div>

        </div>
    </header>", "MainBundle:Common:header.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Common/header.html.twig");
    }
}
