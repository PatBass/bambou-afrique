<?php

/* MainBundle:Common:header.html.twig */
class __TwigTemplate_fb9d9ec4dcc334a26ec425af72f24621b59b116f8d47a4045bcb57fa18e99390 extends Twig_Template
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
        $__internal_466870a7df038bb9ca945c5553edf39de2bac715031332d9fa4e8ccef17c3ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466870a7df038bb9ca945c5553edf39de2bac715031332d9fa4e8ccef17c3ea2->enter($__internal_466870a7df038bb9ca945c5553edf39de2bac715031332d9fa4e8ccef17c3ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Common:header.html.twig"));

        // line 1
        echo "<div class=\"page\">
    <!--========================================================
                              HEADER
    =========================================================-->
    <!--header-->
    <div class=\"header\">
        <div class=\"container\">
            <div class=\"logo\">
                <h1 style=\"font-family: normal;\"><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index1");
        echo "\">Bambou d'Afrique</a></h1>
            </div>
            <div class=\"header-top\">
                <div class=\"header-top-in\">
                    <ul class=\"header-grid\">
                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account");
        echo "\">Mon Compte   </a> <label>/</label></li>
                        <li ><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">  Se connecter </a> </li>
                        <li ><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        echo "\">  S'inscrire </a> </li>
                    </ul>
                    <!-- <div class=\"act\">
                        <a href=\"#\" class=\"done\">Donec actortor </a>
                    </div> -->
                    <div class=\"clearfix\"> </div>
                </div>
                <ul class=\"grid-header\"><!--
\t\t\t\t\t<li><a href=\"account.html\">My Account</a> <label>/</label></li> -->
                    <li><a href=\"#\">Mon panier</a> <label>/</label></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("checkout");
        echo "\">  Passer la commande </a> </li>
                </ul>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"header-bottom\">
                <div class=\"top-nav\">
                    <span class=\"menu\"> </span>
                    <ul>
                        <li class=\"active\" ><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index1");
        echo "\" >Accueil  </a><label>- </label> </li>
                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("speciality", array("category" => "liste"));
        echo "\">Specialités</a><label>- </label></li>
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("galery");
        echo "\" > Galerie</a><label>- </label></li>
                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\" > A propos</a><label>- </label></li>
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                    </ul>

                </div>
                <div class=\"search\">
                    <form>
                        <input type=\"text\" value=\"Search store here ...\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = '';}\" >
                        <input type=\"submit\" value=\"\">
                    </form>
                </div>
                <div class=\"clearfix\"> </div>
            </div>";
        
        $__internal_466870a7df038bb9ca945c5553edf39de2bac715031332d9fa4e8ccef17c3ea2->leave($__internal_466870a7df038bb9ca945c5553edf39de2bac715031332d9fa4e8ccef17c3ea2_prof);

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
        return array (  88 => 38,  84 => 37,  80 => 36,  76 => 35,  72 => 34,  61 => 26,  48 => 16,  44 => 15,  40 => 14,  32 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page\">
    <!--========================================================
                              HEADER
    =========================================================-->
    <!--header-->
    <div class=\"header\">
        <div class=\"container\">
            <div class=\"logo\">
                <h1 style=\"font-family: normal;\"><a href=\"{{ path('index1') }}\">Bambou d'Afrique</a></h1>
            </div>
            <div class=\"header-top\">
                <div class=\"header-top-in\">
                    <ul class=\"header-grid\">
                        <li><a href=\"{{ path('account') }}\">Mon Compte   </a> <label>/</label></li>
                        <li ><a href=\"{{ path('login') }}\">  Se connecter </a> </li>
                        <li ><a href=\"{{ path('registration') }}\">  S'inscrire </a> </li>
                    </ul>
                    <!-- <div class=\"act\">
                        <a href=\"#\" class=\"done\">Donec actortor </a>
                    </div> -->
                    <div class=\"clearfix\"> </div>
                </div>
                <ul class=\"grid-header\"><!--
\t\t\t\t\t<li><a href=\"account.html\">My Account</a> <label>/</label></li> -->
                    <li><a href=\"#\">Mon panier</a> <label>/</label></li>
                    <li><a href=\"{{ path('checkout') }}\">  Passer la commande </a> </li>
                </ul>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"header-bottom\">
                <div class=\"top-nav\">
                    <span class=\"menu\"> </span>
                    <ul>
                        <li class=\"active\" ><a href=\"{{ path('index1') }}\" >Accueil  </a><label>- </label> </li>
                        <li><a href=\"{{ path('speciality', {'category' : 'liste'}) }}\">Specialités</a><label>- </label></li>
                        <li><a href=\"{{ path('galery') }}\" > Galerie</a><label>- </label></li>
                        <li><a href=\"{{ path('about') }}\" > A propos</a><label>- </label></li>
                        <li><a href=\"{{ path('contact') }}\">Contact</a></li>
                    </ul>

                </div>
                <div class=\"search\">
                    <form>
                        <input type=\"text\" value=\"Search store here ...\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = '';}\" >
                        <input type=\"submit\" value=\"\">
                    </form>
                </div>
                <div class=\"clearfix\"> </div>
            </div>", "MainBundle:Common:header.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Common/header.html.twig");
    }
}
