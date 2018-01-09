<?php

/* MainBundle:Main:event.html.twig */
class __TwigTemplate_3662baa91f0f26fb7ce7f84bf5d9ea2d220e60680ffbf349e74c530e3109df68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:event.html.twig", 1);
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
        $__internal_a6067dc130a221599ea0b3d9e9cd1bacb5029d0a2d63f045a21675319d08a445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6067dc130a221599ea0b3d9e9cd1bacb5029d0a2d63f045a21675319d08a445->enter($__internal_a6067dc130a221599ea0b3d9e9cd1bacb5029d0a2d63f045a21675319d08a445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6067dc130a221599ea0b3d9e9cd1bacb5029d0a2d63f045a21675319d08a445->leave($__internal_a6067dc130a221599ea0b3d9e9cd1bacb5029d0a2d63f045a21675319d08a445_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_094f51f07a37cf736962f1da45e465543cfaec11f4bea7e2603f3104a81f3052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094f51f07a37cf736962f1da45e465543cfaec11f4bea7e2603f3104a81f3052->enter($__internal_094f51f07a37cf736962f1da45e465543cfaec11f4bea7e2603f3104a81f3052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:event.html.twig", 3)->display(array_merge($context, array("active" => "event")));
        // line 4
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    <main>

        <section class=\"well well4\" style=\"background-color: white;border:none;\">

            <div class=\"container center991\">
                <h2 class=\"txt-pr\">
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        Quelques
                    </span>
                    vidéos
                </h2>
                <div class=\"row offs3\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"360\" height=\"360\" src=\"https://www.youtube.com/embed/93YnFMoHkjw\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    Le Pacte technologique
                                </h6>
                                <div class=\"wrap\">
                                    <p>
                                        Présentation du Pacte technologique par Roland Chrisbel
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"760\" height=\"360\" src=\"https://www.youtube.com/embed/ymZY5WfqU14\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    Le Congo en orbite
                                </h6>
                                <div class=\"wrap\">
                                    <p class=\"thumb_ins1\">
                                        La Fondation O'dellya met le Congo en orbite
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"360\" height=\"360\" src=\"https://www.youtube.com/embed/gwiPXKOhA58\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    Le Journal sur Télé Congo
                                </h6>
                                <div class=\"wrap\">
                                    <p>
                                        Présentation du Pacte technologique de la Fondation O'dellya
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"360\" height=\"360\" src=\"https://www.youtube.com/embed/kaTnS2nD-iA\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    La Fondation O'dellya
                                </h6>
                                <div class=\"wrap\">
                                    <p>
                                        Lancement de la Fondation O'dellya
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"360\" height=\"360\" src=\"https://www.youtube.com/embed/A0eWYakP15E\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    L'élection présidentielle de mars 2016
                                </h6>
                                <div class=\"wrap\">
                                    <p>
                                        Le Pacte technologique Présenté aux délégués des candidats à l'élection présidentielle Congo 2016
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"360\" height=\"360\" src=\"https://www.youtube.com/embed/nOv6tOvNOAA\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    Le Pacte technologique
                                </h6>
                                <div class=\"wrap\">
                                    <p>
                                        Présentation du pacte technologique dans l'émission \"L'Economie en marche\".
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"760\" height=\"360\" src=\"https://www.youtube.com/embed/ytKXKIm9nLU\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    La Fondation O'dellya
                                </h6>
                                <div class=\"wrap\">
                                    <p class=\"thumb_ins1\">
                                        Présentation de la Fondation O'dellya sur Africa 24
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class=\"well well2 bg1\" style=\"border: none;\">
            <div class=\"container\">
                <h2 class=\"txt-pr\">
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        Autres
                    </span>
                    Evènements
                </h2>
                <div class=\"row offs1\">
                    <div class=\"col-md-6 col-sm-12\">
                        <p>
                            <iframe src=\"/gallery/gallerie_brunch_dominical.html\" frameborder=\"0\" width=\"100%\" height=\"800\" scrolling=\"no\" ></iframe>
                        </p>
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        <p>
                            Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    ";
        // line 168
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:event.html.twig", 168)->display($context);
        
        $__internal_094f51f07a37cf736962f1da45e465543cfaec11f4bea7e2603f3104a81f3052->leave($__internal_094f51f07a37cf736962f1da45e465543cfaec11f4bea7e2603f3104a81f3052_prof);

    }

    // line 170
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_116cca0bb9dab363a6c38ebb1d3dddd3a11c471812541dfdf09fb3db10314da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116cca0bb9dab363a6c38ebb1d3dddd3a11c471812541dfdf09fb3db10314da3->enter($__internal_116cca0bb9dab363a6c38ebb1d3dddd3a11c471812541dfdf09fb3db10314da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 171
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/device.min.js"), "html", null, true);
        echo "\"></script>




";
        
        $__internal_116cca0bb9dab363a6c38ebb1d3dddd3a11c471812541dfdf09fb3db10314da3->leave($__internal_116cca0bb9dab363a6c38ebb1d3dddd3a11c471812541dfdf09fb3db10314da3_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 173,  223 => 171,  217 => 170,  210 => 168,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
    {% include('MainBundle:Common:header.html.twig') with {'active':'event'} %}
    <!--========================================================
                           CONTENT
 =========================================================-->

    <main>

        <section class=\"well well4\" style=\"background-color: white;border:none;\">

            <div class=\"container center991\">
                <h2 class=\"txt-pr\">
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        Quelques
                    </span>
                    vidéos
                </h2>
                <div class=\"row offs3\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"360\" height=\"360\" src=\"https://www.youtube.com/embed/93YnFMoHkjw\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    Le Pacte technologique
                                </h6>
                                <div class=\"wrap\">
                                    <p>
                                        Présentation du Pacte technologique par Roland Chrisbel
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"760\" height=\"360\" src=\"https://www.youtube.com/embed/ymZY5WfqU14\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    Le Congo en orbite
                                </h6>
                                <div class=\"wrap\">
                                    <p class=\"thumb_ins1\">
                                        La Fondation O'dellya met le Congo en orbite
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"360\" height=\"360\" src=\"https://www.youtube.com/embed/gwiPXKOhA58\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    Le Journal sur Télé Congo
                                </h6>
                                <div class=\"wrap\">
                                    <p>
                                        Présentation du Pacte technologique de la Fondation O'dellya
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"360\" height=\"360\" src=\"https://www.youtube.com/embed/kaTnS2nD-iA\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    La Fondation O'dellya
                                </h6>
                                <div class=\"wrap\">
                                    <p>
                                        Lancement de la Fondation O'dellya
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"360\" height=\"360\" src=\"https://www.youtube.com/embed/A0eWYakP15E\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    L'élection présidentielle de mars 2016
                                </h6>
                                <div class=\"wrap\">
                                    <p>
                                        Le Pacte technologique Présenté aux délégués des candidats à l'élection présidentielle Congo 2016
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"360\" height=\"360\" src=\"https://www.youtube.com/embed/nOv6tOvNOAA\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    Le Pacte technologique
                                </h6>
                                <div class=\"wrap\">
                                    <p>
                                        Présentation du pacte technologique dans l'émission \"L'Economie en marche\".
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <iframe width=\"760\" height=\"360\" src=\"https://www.youtube.com/embed/ytKXKIm9nLU\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"caption bg3 capt_hover1\">
                                <h6>
                                    La Fondation O'dellya
                                </h6>
                                <div class=\"wrap\">
                                    <p class=\"thumb_ins1\">
                                        Présentation de la Fondation O'dellya sur Africa 24
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class=\"well well2 bg1\" style=\"border: none;\">
            <div class=\"container\">
                <h2 class=\"txt-pr\">
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        Autres
                    </span>
                    Evènements
                </h2>
                <div class=\"row offs1\">
                    <div class=\"col-md-6 col-sm-12\">
                        <p>
                            <iframe src=\"/gallery/gallerie_brunch_dominical.html\" frameborder=\"0\" width=\"100%\" height=\"800\" scrolling=\"no\" ></iframe>
                        </p>
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        <p>
                            Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('bundles/main/js/jquery-migrate-1.2.1.min.js') }}\"></script>

    <script src=\"{{ asset('bundles/main/js/device.min.js') }}\"></script>




{% endblock %}




", "MainBundle:Main:event.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/event.html.twig");
    }
}
