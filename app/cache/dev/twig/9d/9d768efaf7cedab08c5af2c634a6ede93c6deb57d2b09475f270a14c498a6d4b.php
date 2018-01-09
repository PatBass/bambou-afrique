<?php

/* MainBundle:Main:liste.html.twig */
class __TwigTemplate_86fae455e9da723951cc372d3ea3d3bcf32cdf034d7a014a5976d1588407dbad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:liste.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5221b1dc8346bde23284e4fdd8a6d5ef90b78839bedfc468a9aea9660d09a656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5221b1dc8346bde23284e4fdd8a6d5ef90b78839bedfc468a9aea9660d09a656->enter($__internal_5221b1dc8346bde23284e4fdd8a6d5ef90b78839bedfc468a9aea9660d09a656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5221b1dc8346bde23284e4fdd8a6d5ef90b78839bedfc468a9aea9660d09a656->leave($__internal_5221b1dc8346bde23284e4fdd8a6d5ef90b78839bedfc468a9aea9660d09a656_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ac846187f973dc01cc9fa9684b8a9a4e91e63e2272842b852a38b5acd42cd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac846187f973dc01cc9fa9684b8a9a4e91e63e2272842b852a38b5acd42cd62->enter($__internal_3ac846187f973dc01cc9fa9684b8a9a4e91e63e2272842b852a38b5acd42cd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Casablanca";
        
        $__internal_3ac846187f973dc01cc9fa9684b8a9a4e91e63e2272842b852a38b5acd42cd62->leave($__internal_3ac846187f973dc01cc9fa9684b8a9a4e91e63e2272842b852a38b5acd42cd62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c549821a0335d4a50f82f68c42e3d54d231174825712733a8cc026516afda85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c549821a0335d4a50f82f68c42e3d54d231174825712733a8cc026516afda85c->enter($__internal_c549821a0335d4a50f82f68c42e3d54d231174825712733a8cc026516afda85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:liste.html.twig", 4)->display($context);
        // line 5
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    ";
        // line 10
        echo "    <div class=\"container\" style=\"padding-top: 100px;\">
        <div class=\"specials\">
            <h2>Specialités</h2>
            <div class=\"special-top\">
                <div class=\"col-md-3 special-in\">
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("speciality", array("category" => "africaine"));
        echo "\" >
                        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gal5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </a>
                    <h5><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("speciality", array("category" => "africaine"));
        echo "\">Africaine</a></h5>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"specials1.html\" >
                        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/grillades_mixtes.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </a>
                    <h5><a href=\"specials1.html\">Internationale</a></h5>
                    <p>Coffee</p>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"specials1.html\" ><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gal6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"specials1.html\">Art africain</a></h5>
                    <p>Chili Con Carne</p>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"specials1.html\" ><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/viande_pruneaux.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"specials1.html\">Marocaine</a></h5>
                    <p>Cappuccino</p>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"special-top\">
                <div class=\"col-md-3 special-in\">
                    <a href=\"single.html\" ><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/chawarma_poulet.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"single.html\">Sandwiches</a></h5>
                    <p>Coffee</p>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"single.html\" ><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/salade_mixte.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"single.html\">Salades</a></h5>
                    <p>Egg</p>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"single.html\" ><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/creme_caramel.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"single.html\">Desserts</a></h5>
                    <p>Food</p>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"single.html\" ><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/jus_mangue.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"single.html\">Jus et boissons</a></h5>
                    <p>Tom Kha Gai</p>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"special-bottom\">
                <div class=\"col-md-6 bottom-special\">
                    <h5><a href=\"single.html\">ALIQUAM CONGUE FERMENTU</a></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <a href=\"single.html\" class=\"details\">Details</a>
                </div>
                <div class=\"col-md-6 bottom-special-1\">
                    <h5><a href=\"single.html\">ALIQUAM CONGUE FERMENTU</a></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <a href=\"single.html\" class=\"details\">Details</a>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
    ";
        // line 89
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:liste.html.twig", 89)->display($context);
        
        $__internal_c549821a0335d4a50f82f68c42e3d54d231174825712733a8cc026516afda85c->leave($__internal_c549821a0335d4a50f82f68c42e3d54d231174825712733a8cc026516afda85c_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 89,  148 => 66,  138 => 59,  128 => 52,  118 => 45,  105 => 35,  95 => 28,  86 => 22,  79 => 18,  74 => 16,  70 => 15,  63 => 10,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}
{% block title %}{{ parent() }} - Casablanca{% endblock %}
{% block body %}
    {% include('MainBundle:Common:header.html.twig') %}
    <!--========================================================
                           CONTENT
 =========================================================-->

    {#{% include('MainBundle:Common:banner.html.twig') %}#}
    <div class=\"container\" style=\"padding-top: 100px;\">
        <div class=\"specials\">
            <h2>Specialités</h2>
            <div class=\"special-top\">
                <div class=\"col-md-3 special-in\">
                    <a href=\"{{ path('speciality', {'category' : 'africaine'}) }}\" >
                        <img src=\"{{ asset('bundles/main/images/gal5.jpg') }}\" class=\"img-responsive\" alt=\"\">
                    </a>
                    <h5><a href=\"{{ path('speciality', {'category' : 'africaine'}) }}\">Africaine</a></h5>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"specials1.html\" >
                        <img src=\"{{ asset('bundles/main/images/grillades_mixtes.jpg') }}\" class=\"img-responsive\" alt=\"\">
                    </a>
                    <h5><a href=\"specials1.html\">Internationale</a></h5>
                    <p>Coffee</p>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"specials1.html\" ><img src=\"{{ asset('bundles/main/images/gal6.jpg') }}\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"specials1.html\">Art africain</a></h5>
                    <p>Chili Con Carne</p>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"specials1.html\" ><img src=\"{{ asset('bundles/main/images/viande_pruneaux.jpg') }}\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"specials1.html\">Marocaine</a></h5>
                    <p>Cappuccino</p>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"special-top\">
                <div class=\"col-md-3 special-in\">
                    <a href=\"single.html\" ><img src=\"{{ asset('bundles/main/images/chawarma_poulet.jpg') }}\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"single.html\">Sandwiches</a></h5>
                    <p>Coffee</p>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"single.html\" ><img src=\"{{ asset('bundles/main/images/salade_mixte.jpg') }}\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"single.html\">Salades</a></h5>
                    <p>Egg</p>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"single.html\" ><img src=\"{{ asset('bundles/main/images/creme_caramel.jpg') }}\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"single.html\">Desserts</a></h5>
                    <p>Food</p>
                </div>
                <div class=\"col-md-3 special-in\">
                    <a href=\"single.html\" ><img src=\"{{ asset('bundles/main/images/jus_mangue.jpg') }}\" class=\"img-responsive\" alt=\"\">

                    </a>
                    <h5><a href=\"single.html\">Jus et boissons</a></h5>
                    <p>Tom Kha Gai</p>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <div class=\"special-bottom\">
                <div class=\"col-md-6 bottom-special\">
                    <h5><a href=\"single.html\">ALIQUAM CONGUE FERMENTU</a></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <a href=\"single.html\" class=\"details\">Details</a>
                </div>
                <div class=\"col-md-6 bottom-special-1\">
                    <h5><a href=\"single.html\">ALIQUAM CONGUE FERMENTU</a></h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <a href=\"single.html\" class=\"details\">Details</a>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
    </div>
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}
", "MainBundle:Main:liste.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/liste.html.twig");
    }
}
