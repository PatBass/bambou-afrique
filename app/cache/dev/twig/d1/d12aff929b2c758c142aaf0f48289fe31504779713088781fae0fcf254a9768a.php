<?php

/* MainBundle:Main:home.html.twig */
class __TwigTemplate_3e6194876f357f944b5101b93cc62facae3d7d406bcf046ecb57464499e018bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79f96ef4d31621031da38cbaee7c46ff738df72c4989c3abc97f8c68c428d803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f96ef4d31621031da38cbaee7c46ff738df72c4989c3abc97f8c68c428d803->enter($__internal_79f96ef4d31621031da38cbaee7c46ff738df72c4989c3abc97f8c68c428d803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f96ef4d31621031da38cbaee7c46ff738df72c4989c3abc97f8c68c428d803->leave($__internal_79f96ef4d31621031da38cbaee7c46ff738df72c4989c3abc97f8c68c428d803_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_753c65638da6eb86b5afec139e2c0fdbd791eb557c34cd90f9365859f1fb8f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753c65638da6eb86b5afec139e2c0fdbd791eb557c34cd90f9365859f1fb8f4a->enter($__internal_753c65638da6eb86b5afec139e2c0fdbd791eb557c34cd90f9365859f1fb8f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container container-modified\" style=\"margin: 0; padding: 0;\">
        <div id=\"\" class=\"row\">

            <div id=\"\" class=\"col-md-12\" style=\"position: absolute;z-index: 1;text-align: center;background-size: cover;border: 2px solid #ffff00;\">
                <iframe src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/slide/slide.html"), "html", null, true);
        echo "\" frameborder=\"0\" width=\"1400px\" height=\"800px\" scrolling=\"no\" ></iframe>
            </div>

            <div class=\"container\" id=\"bb\" style=\"position: absolute; z-index: 255;background-color: rgba(0,0,0,0.5);width:1400px; height:800px;color:white;\" >
                <div class=\"row\"><br><br><br></div>
                <div class=\"row\">
                    <div class=\"col-md-offset-1 col-md-3 presentation\">
                        <div class=\"row\">
                            <div style=\"text-align: center;\" class=\"col-md-12\">
                                <h2  style=\"font-family: 'Oswald';\">Le Restaurant Bambou d'Afrique de Casablanca<span style=\"font-family: 'Pacifico', cursive;color: orangered;\">Bambou d'Afrique</span></h2>
                                <br>
                                <p style=\"font-family: 'Trebuchet MS';\">
                                    Le Bambou d'Afrique vous propose un cadre agréable et une diversité de plats de plusieurs pays d 'Afrique.
                                    Venez nombreux visiter ce cadre chaleureux situé dans le quartier Maârif, au coeur de Casablanca.
                                </p>

                                <br>
                                <div id=\"image\">
                                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/femme_afr2.png"), "html", null, true);
        echo "\" width=\"60%\" height=\"60%\" alt=\"femme_africaine\"  />
                                </div>
                                <br><br>
                                <div>
                                    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index1");
        echo "\" class=\"btn btn-primary\" style=\"color:white;\">Accédez au site  <i class=\"glyphicon glyphicon-arrow-right\"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\" col-md-3 presentation\" style=\"margin-left: 15px;\">
                        <div class=\"row\">
                            <div style=\"text-align: center;\" class=\"col-md-12\">
                                <h2  style=\"font-family: 'Oswald';\">Le Restaurant Bambou d'Afrique de xxxxxxx <span style=\"font-family: 'Pacifico', cursive;color: orangered;\">Bambou d'Afrique</span></h2>
                                <br>
                                <p style=\"font-family: 'Trebuchet MS';\">
                                    Le Bambou d'Afrique vous propose un cadre agréable et une diversité de plats de plusieurs pays d 'Afrique.
                                    Venez nombreux visiter ce cadre chaleureux situé dans le quartier Maârif, au coeur de Casablanca.
                                </p>

                                <br>
                                <div id=\"image\">
                                    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/femme_afr2.png"), "html", null, true);
        echo "\" width=\"60%\" height=\"60%\" alt=\"femme_africaine\"  />
                                </div>
                                <br><br>
                                <div>
                                    <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index1");
        echo "\" class=\"btn btn-primary\" style=\"color:white;\">Accédez au site  <i class=\"glyphicon glyphicon-arrow-right\"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 presentation\" style=\"margin-left: 15px;\">
                        <div class=\"row\">
                            <div style=\"text-align: center;\" class=\"col-md-12\">
                                <h2  style=\"font-family: 'Oswald';\">Le Restaurant Bambou d'Afrique de xxxxx <span style=\"font-family: 'Pacifico', cursive;color: orangered;\">Bambou d'Afrique</span></h2>
                                <br>
                                <p style=\"font-family: 'Trebuchet MS';\">
                                    Le Bambou d'Afrique vous propose un cadre agréable et une diversité de plats de plusieurs pays d 'Afrique.
                                    Venez nombreux visiter ce cadre chaleureux situé dans le quartier Maârif, au coeur de Casablanca.
                                </p>

                                <br>
                                <div id=\"image\">
                                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/femme_afr2.png"), "html", null, true);
        echo "\" width=\"60%\" height=\"60%\" alt=\"femme_africaine\"  />
                                </div>
                                <br><br>
                                <div>
                                    <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index1");
        echo "\" class=\"btn btn-primary\" style=\"color:white;\">Accédez au site  <i class=\"glyphicon glyphicon-arrow-right\"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_753c65638da6eb86b5afec139e2c0fdbd791eb557c34cd90f9365859f1fb8f4a->leave($__internal_753c65638da6eb86b5afec139e2c0fdbd791eb557c34cd90f9365859f1fb8f4a_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d70fbfc3266b0f56e30c4a5d24b5716a759fe02cfcbbd2e60581f8b37a9423ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70fbfc3266b0f56e30c4a5d24b5716a759fe02cfcbbd2e60581f8b37a9423ea->enter($__internal_d70fbfc3266b0f56e30c4a5d24b5716a759fe02cfcbbd2e60581f8b37a9423ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    <script type=\"text/javascript\">
        function openNav() {
            document.getElementById('mySideNav').style.width = \"250px\";
        }

        function closeNav() {
            document.getElementById('mySideNav').style.width = \"0\";
        }
    </script>

";
        
        $__internal_d70fbfc3266b0f56e30c4a5d24b5716a759fe02cfcbbd2e60581f8b37a9423ea->leave($__internal_d70fbfc3266b0f56e30c4a5d24b5716a759fe02cfcbbd2e60581f8b37a9423ea_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 85,  149 => 84,  131 => 73,  124 => 69,  103 => 51,  96 => 47,  75 => 29,  68 => 25,  47 => 7,  41 => 3,  35 => 2,  11 => 1,);
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
{% block body %}
    <div class=\"container container-modified\" style=\"margin: 0; padding: 0;\">
        <div id=\"\" class=\"row\">

            <div id=\"\" class=\"col-md-12\" style=\"position: absolute;z-index: 1;text-align: center;background-size: cover;border: 2px solid #ffff00;\">
                <iframe src=\"{{ asset('bundles/main/slide/slide.html') }}\" frameborder=\"0\" width=\"1400px\" height=\"800px\" scrolling=\"no\" ></iframe>
            </div>

            <div class=\"container\" id=\"bb\" style=\"position: absolute; z-index: 255;background-color: rgba(0,0,0,0.5);width:1400px; height:800px;color:white;\" >
                <div class=\"row\"><br><br><br></div>
                <div class=\"row\">
                    <div class=\"col-md-offset-1 col-md-3 presentation\">
                        <div class=\"row\">
                            <div style=\"text-align: center;\" class=\"col-md-12\">
                                <h2  style=\"font-family: 'Oswald';\">Le Restaurant Bambou d'Afrique de Casablanca<span style=\"font-family: 'Pacifico', cursive;color: orangered;\">Bambou d'Afrique</span></h2>
                                <br>
                                <p style=\"font-family: 'Trebuchet MS';\">
                                    Le Bambou d'Afrique vous propose un cadre agréable et une diversité de plats de plusieurs pays d 'Afrique.
                                    Venez nombreux visiter ce cadre chaleureux situé dans le quartier Maârif, au coeur de Casablanca.
                                </p>

                                <br>
                                <div id=\"image\">
                                    <img src=\"{{ asset('images/femme_afr2.png') }}\" width=\"60%\" height=\"60%\" alt=\"femme_africaine\"  />
                                </div>
                                <br><br>
                                <div>
                                    <a href=\"{{ path('index1') }}\" class=\"btn btn-primary\" style=\"color:white;\">Accédez au site  <i class=\"glyphicon glyphicon-arrow-right\"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\" col-md-3 presentation\" style=\"margin-left: 15px;\">
                        <div class=\"row\">
                            <div style=\"text-align: center;\" class=\"col-md-12\">
                                <h2  style=\"font-family: 'Oswald';\">Le Restaurant Bambou d'Afrique de xxxxxxx <span style=\"font-family: 'Pacifico', cursive;color: orangered;\">Bambou d'Afrique</span></h2>
                                <br>
                                <p style=\"font-family: 'Trebuchet MS';\">
                                    Le Bambou d'Afrique vous propose un cadre agréable et une diversité de plats de plusieurs pays d 'Afrique.
                                    Venez nombreux visiter ce cadre chaleureux situé dans le quartier Maârif, au coeur de Casablanca.
                                </p>

                                <br>
                                <div id=\"image\">
                                    <img src=\"{{ asset('images/femme_afr2.png') }}\" width=\"60%\" height=\"60%\" alt=\"femme_africaine\"  />
                                </div>
                                <br><br>
                                <div>
                                    <a href=\"{{ path('index1') }}\" class=\"btn btn-primary\" style=\"color:white;\">Accédez au site  <i class=\"glyphicon glyphicon-arrow-right\"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 presentation\" style=\"margin-left: 15px;\">
                        <div class=\"row\">
                            <div style=\"text-align: center;\" class=\"col-md-12\">
                                <h2  style=\"font-family: 'Oswald';\">Le Restaurant Bambou d'Afrique de xxxxx <span style=\"font-family: 'Pacifico', cursive;color: orangered;\">Bambou d'Afrique</span></h2>
                                <br>
                                <p style=\"font-family: 'Trebuchet MS';\">
                                    Le Bambou d'Afrique vous propose un cadre agréable et une diversité de plats de plusieurs pays d 'Afrique.
                                    Venez nombreux visiter ce cadre chaleureux situé dans le quartier Maârif, au coeur de Casablanca.
                                </p>

                                <br>
                                <div id=\"image\">
                                    <img src=\"{{ asset('images/femme_afr2.png') }}\" width=\"60%\" height=\"60%\" alt=\"femme_africaine\"  />
                                </div>
                                <br><br>
                                <div>
                                    <a href=\"{{ path('index1') }}\" class=\"btn btn-primary\" style=\"color:white;\">Accédez au site  <i class=\"glyphicon glyphicon-arrow-right\"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\">
        function openNav() {
            document.getElementById('mySideNav').style.width = \"250px\";
        }

        function closeNav() {
            document.getElementById('mySideNav').style.width = \"0\";
        }
    </script>

{% endblock %}", "MainBundle:Main:home.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/home.html.twig");
    }
}
