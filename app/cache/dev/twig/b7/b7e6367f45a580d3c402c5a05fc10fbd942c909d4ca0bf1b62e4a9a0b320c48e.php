<?php

/* MainBundle:Main:africaine.html.twig */
class __TwigTemplate_0c107bcb85416b55d9d7116c7be5ff1a99ce4ba3b4434409b9a71ecd75382ff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:africaine.html.twig", 1);
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
        $__internal_d6ed93ae3f5bd2fb6354ca11d5aff392860bf1b732fb271de704b34ff8fe4b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ed93ae3f5bd2fb6354ca11d5aff392860bf1b732fb271de704b34ff8fe4b4d->enter($__internal_d6ed93ae3f5bd2fb6354ca11d5aff392860bf1b732fb271de704b34ff8fe4b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:africaine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ed93ae3f5bd2fb6354ca11d5aff392860bf1b732fb271de704b34ff8fe4b4d->leave($__internal_d6ed93ae3f5bd2fb6354ca11d5aff392860bf1b732fb271de704b34ff8fe4b4d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_408b2d21fa90e77c0c454125b2afe8e804646d75c2fbe12b18751f7cf0b34051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408b2d21fa90e77c0c454125b2afe8e804646d75c2fbe12b18751f7cf0b34051->enter($__internal_408b2d21fa90e77c0c454125b2afe8e804646d75c2fbe12b18751f7cf0b34051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Casablanca";
        
        $__internal_408b2d21fa90e77c0c454125b2afe8e804646d75c2fbe12b18751f7cf0b34051->leave($__internal_408b2d21fa90e77c0c454125b2afe8e804646d75c2fbe12b18751f7cf0b34051_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e63e087669fa406d540c139814110cb5b20543b6e423d51f8b46355e0c1d7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e63e087669fa406d540c139814110cb5b20543b6e423d51f8b46355e0c1d7af->enter($__internal_7e63e087669fa406d540c139814110cb5b20543b6e423d51f8b46355e0c1d7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:africaine.html.twig", 4)->display($context);
        // line 5
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    ";
        // line 10
        echo "
    <div class=\"container\" style=\"padding-top: 100px;\">
        <div class=\"content-grid\">
            <div class=\"col-md-4 grid-food\">
                <div class=\"popular\">
                    <h3>Specialités</h3>
                    <p>Lorem ipsum dolor site amet vivamus laoreet desp</p>
                    <ul class=\"popular-in\">
                        <li><a href=\"single.html\"><i> </i>Cuisine ivoirienne </a></li>
                        <li><a href=\"single.html\"><i> </i>Cuisine sénégalaise </a></li>
                        <li><a href=\"single.html\"><i> </i>Boissons</a></li>
                        <li><a href=\"single.html\"><i> </i>Cuisine mixte</a></li>
                    </ul>
                </div>
                <div class=\"popular phone\">
                    <h3>Info contact</h3>
                    <p>Vivamus vel eros nulla sed pellentesque sem</p>
                    <ul class=\"number\">
                        <li><span><i> </i>(000) 888 88888</span> </li>
                        <li><a href=\"mailto:info@sitename.com\"><i class=\"mail\"> </i>info@bamboudafrique.com </a></li>
                    </ul>
                </div>
                <div class=\"popular\">
                    <h3>Commander en ligne</h3>
                    <p>Cosectrurer admpsuing tempor nulla incidi esuismod</p>
                    <form>
                        <input type=\"text\" value=\"your email id here\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value = 'your email id here';}\">
                        <input type=\"submit\" value=\"Envoyer\" >
                    </form>
                </div>
            </div>
        </div>
        <!---->
        <div class=\"col-md-8 food-grid\">
            <div class=\"cup\">
                <div class=\"col-md-4 cup-in\">
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gal6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                    <p>Tchiebou poulet</p>
                    <span class=\"dollar\">69 DH</span>
                    <div class=\"details-in\">
                        <a href=\"#\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"col-md-4 cup-in\">
                    <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gal5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                    <p>Sole</p>
                    <span class=\"dollar\">100 DH</span>
                    <div class=\"details-in\">
                        <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"col-md-4 cup-in\">
                    <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/saka_saka.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                    <p>Sauce aubergine </p>
                    <span class=\"dollar\">75 DH</span>
                    <div class=\"details-in\">
                        <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>

                <div class=\"col-md-4 cup-in\">
                    <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/sauce_graine.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                    <p>Sauce graines</p>
                    <span class=\"dollar\">105 DH</span>
                    <div class=\"details-in\">
                        <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"col-md-4 cup-in\">
                    <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gal26.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                    <p>Carpes braisés</p>
                    <span class=\"dollar\">89 DH</span>
                    <div class=\"details-in\">
                        <a href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"col-md-4 cup-in\">
                    <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/poulet_braise.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                    <p>1/2 Poulet braisé</p>
                    <span class=\"dollar\">55 DH</span>
                    <div class=\"details-in\">
                        <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <!---->
            <div class=\"browse\">
                <p class=\"vit\">Mollis vitae oigu edlobit <span>vulipur felis ...</span></p>
                <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\" class=\"more\">Voir plus</a>
                <div class=\"clearfix\"> </div>
                <div class=\"arrow\">
                    <a href=\"#\"><img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/arrow.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </div>
            </div>
            <!---->
            <div class=\"content-sit\">
                <div class=\"col-md-6 amet\">
                    <h3>Astuce du jour</h3>
                    <p>tortillas </p>
                    <div class=\"egg\">
                        <a href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("single");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/pic.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                    </div>
                    <p class=\"para-in\">Rem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incidi. </p>
                </div>
                <div class=\"col-md-6 amet-in\">
                    <h3>Evénements</h3>
                    <p>Dates à entregister </p>
                    <div class=\"amet-grid\">
                        <div class=\"now\"><span>Nov</span>2017</div>
                        <p class=\"sed\"><span>Lorem ipsum dolor sit amet </span> <span>consecteturLorem ipsum dolor sit</span> <span>amet, consectetur adipisicing</span></p>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"amet-grid\">
                        <div class=\"now\"><span>Dec</span>2017</div>
                        <p class=\"sed\"><span>Lorem ipsum dolor sit amet </span> <span>consecteturLorem ipsum dolor sit</span> <span>amet, consectetur adipisicing</span></p>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"amet-grid\">
                        <div class=\"now\"><span>Oct</span>2017</div>
                        <p class=\"sed\"><span>Lorem ipsum dolor sit amet </span> <span>consecteturLorem ipsum dolor sit</span> <span>amet, consectetur adipisicing</span></p>
                        <div class=\"clearfix\"> </div>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>

    <!---->
    ";
        // line 147
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:africaine.html.twig", 147)->display($context);
        
        $__internal_7e63e087669fa406d540c139814110cb5b20543b6e423d51f8b46355e0c1d7af->leave($__internal_7e63e087669fa406d540c139814110cb5b20543b6e423d51f8b46355e0c1d7af_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:africaine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 147,  223 => 117,  211 => 108,  205 => 105,  193 => 96,  184 => 92,  176 => 87,  167 => 83,  159 => 78,  150 => 74,  141 => 68,  132 => 64,  124 => 59,  115 => 55,  101 => 46,  63 => 10,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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
        <div class=\"content-grid\">
            <div class=\"col-md-4 grid-food\">
                <div class=\"popular\">
                    <h3>Specialités</h3>
                    <p>Lorem ipsum dolor site amet vivamus laoreet desp</p>
                    <ul class=\"popular-in\">
                        <li><a href=\"single.html\"><i> </i>Cuisine ivoirienne </a></li>
                        <li><a href=\"single.html\"><i> </i>Cuisine sénégalaise </a></li>
                        <li><a href=\"single.html\"><i> </i>Boissons</a></li>
                        <li><a href=\"single.html\"><i> </i>Cuisine mixte</a></li>
                    </ul>
                </div>
                <div class=\"popular phone\">
                    <h3>Info contact</h3>
                    <p>Vivamus vel eros nulla sed pellentesque sem</p>
                    <ul class=\"number\">
                        <li><span><i> </i>(000) 888 88888</span> </li>
                        <li><a href=\"mailto:info@sitename.com\"><i class=\"mail\"> </i>info@bamboudafrique.com </a></li>
                    </ul>
                </div>
                <div class=\"popular\">
                    <h3>Commander en ligne</h3>
                    <p>Cosectrurer admpsuing tempor nulla incidi esuismod</p>
                    <form>
                        <input type=\"text\" value=\"your email id here\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value = 'your email id here';}\">
                        <input type=\"submit\" value=\"Envoyer\" >
                    </form>
                </div>
            </div>
        </div>
        <!---->
        <div class=\"col-md-8 food-grid\">
            <div class=\"cup\">
                <div class=\"col-md-4 cup-in\">
                    <a href=\"{{ path('single') }}\"><img src=\"{{ asset('bundles/main/images/gal6.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                    <p>Tchiebou poulet</p>
                    <span class=\"dollar\">69 DH</span>
                    <div class=\"details-in\">
                        <a href=\"#\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"col-md-4 cup-in\">
                    <a href=\"{{ path('single') }}\"><img src=\"{{ asset('bundles/main/images/gal5.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                    <p>Sole</p>
                    <span class=\"dollar\">100 DH</span>
                    <div class=\"details-in\">
                        <a href=\"{{ path('single') }}\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"col-md-4 cup-in\">
                    <a href=\"{{ path('single') }}\"><img src=\"{{ asset('bundles/main/images/saka_saka.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                    <p>Sauce aubergine </p>
                    <span class=\"dollar\">75 DH</span>
                    <div class=\"details-in\">
                        <a href=\"{{ path('single') }}\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>

                <div class=\"col-md-4 cup-in\">
                    <a href=\"{{ path('single') }}\"><img src=\"{{ asset('bundles/main/images/sauce_graine.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                    <p>Sauce graines</p>
                    <span class=\"dollar\">105 DH</span>
                    <div class=\"details-in\">
                        <a href=\"{{ path('single') }}\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"col-md-4 cup-in\">
                    <a href=\"{{ path('single') }}\"><img src=\"{{ asset('bundles/main/images/gal26.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                    <p>Carpes braisés</p>
                    <span class=\"dollar\">89 DH</span>
                    <div class=\"details-in\">
                        <a href=\"{{ path('single') }}\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"col-md-4 cup-in\">
                    <a href=\"{{ path('single') }}\"><img src=\"{{ asset('bundles/main/images/poulet_braise.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                    <p>1/2 Poulet braisé</p>
                    <span class=\"dollar\">55 DH</span>
                    <div class=\"details-in\">
                        <a href=\"{{ path('single') }}\" class=\"details\">Details</a>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <!---->
            <div class=\"browse\">
                <p class=\"vit\">Mollis vitae oigu edlobit <span>vulipur felis ...</span></p>
                <a href=\"{{ path('single') }}\" class=\"more\">Voir plus</a>
                <div class=\"clearfix\"> </div>
                <div class=\"arrow\">
                    <a href=\"#\"><img src=\"{{ asset('bundles/main/images/arrow.png') }}\" alt=\"\"></a>
                </div>
            </div>
            <!---->
            <div class=\"content-sit\">
                <div class=\"col-md-6 amet\">
                    <h3>Astuce du jour</h3>
                    <p>tortillas </p>
                    <div class=\"egg\">
                        <a href=\"{{ path('single') }}\"><img src=\"{{ asset('bundles/main/images/pic.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                    </div>
                    <p class=\"para-in\">Rem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incidi. </p>
                </div>
                <div class=\"col-md-6 amet-in\">
                    <h3>Evénements</h3>
                    <p>Dates à entregister </p>
                    <div class=\"amet-grid\">
                        <div class=\"now\"><span>Nov</span>2017</div>
                        <p class=\"sed\"><span>Lorem ipsum dolor sit amet </span> <span>consecteturLorem ipsum dolor sit</span> <span>amet, consectetur adipisicing</span></p>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"amet-grid\">
                        <div class=\"now\"><span>Dec</span>2017</div>
                        <p class=\"sed\"><span>Lorem ipsum dolor sit amet </span> <span>consecteturLorem ipsum dolor sit</span> <span>amet, consectetur adipisicing</span></p>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"amet-grid\">
                        <div class=\"now\"><span>Oct</span>2017</div>
                        <p class=\"sed\"><span>Lorem ipsum dolor sit amet </span> <span>consecteturLorem ipsum dolor sit</span> <span>amet, consectetur adipisicing</span></p>
                        <div class=\"clearfix\"> </div>
                    </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>

    <!---->
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}




", "MainBundle:Main:africaine.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/africaine.html.twig");
    }
}
