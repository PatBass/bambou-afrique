<?php

/* MainBundle:Main:home.html.twig */
class __TwigTemplate_3e8360c61292b23d329bed742e1a1fdd8b1edb67ee269ac0a2a8f9d02f0fb34e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container-fluid\" id=\"container\">

        <div id=\"\" class=\"row\">

            <div id=\"main-iframe-container\" class=\"col-md-12\">
                <iframe id=\"main-iframe\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("carousel/carousel.html"), "html", null, true);
        echo "\" frameborder=\"0\"  scrolling=\"no\" ></iframe>
            </div>
            <div class=\"col-md-12\" id=\"bb\">
                <div class=\"row\">
                    <div id=\"google_translate_element\" class=\"col-xs-offset-10 col-xs-2\" style=\"position: fixed;\">
                        <div class=\"pull-right\">
                            <div id=\"mySideNav\" class=\"sidenav\">
                                <a class=\"closebtn\" href=\"javascript:void(0)\" onclick=\"closeNav()\">&times;</a>
                                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Mot du président</a>
                                <a href=\"http://localhost:8888/odellya/web/app_dev.php/index#equipe\">Notre équipe</a>
                                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event");
        echo "\">Evènements</a>
                                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application");
        echo "\">Adhésion</a>
                                <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a>
                            </div>
                            <span style=\"font-size:30px;cursor:pointer;color: #21c2f8;\" onclick=\"openNav()\">Menu &#9776;</span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-offset-1 col-md-5\" id=\"presentation\">
                        <div class=\"row\">

                            <div style=\"text-align: center;\" class=\"col-md-12\">
                                <div class=\"row\">
                                    <h3  style=\"font-family: 'Oswald';\">Le Pacte technologique</h3>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <iframe src=\"https://www.youtube.com/embed/uD1osFIPqts\" frameborder=\"0\" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                        <p id=\"text-project\" style=\"font-family: 'Oswald';\">
                                            <strong style=\"font-size: 0.7em;\">Présentation du Pacte technologique de la Fondation O'dellya</strong><br>
                                            <span style=\"font-size: 0.6em;font-family: century_gothic;color: #000000;\">La Fondation O’dellya est une Fondation congolaise constituée autour de la vision d’une refondation de l’Etat par l’outil technologique autour d’un projet « le Pacte technologique ».</span>
                                        </p>
                                        <br><br>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-sm-12\" id=\"image\">
                                        <p id=\"newsletter-paragraph\">Inscrivez-vous à notre newsletter afin d'être au fait de notre actualité</p>
                                    </div>
                                </div>
                                <div class=\"row\">

                                    <div class=\"col-xs-12\">
                                        <form class=\"navbar-form inline-form validate row\" action=\"//odellya.us13.list-manage.com/subscribe/post?u=b8e655416f3554f5a4d457131&amp;id=6bfe57276b\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" target=\"_blank\" novalidate>
                                            <div class=\"form-group col-xs-12\" id=\"mc_embed_signup_scroll\">
                                                <div class=\"row\">
                                                    <div class=\"col-xs-12\">
                                                        <input style=\"padding:2px 2px;height: 3em;\" id=\"email\" type=\"email\" class=\"input-sm form-control email\" placeholder=\"Tapez votre adresse email ici\" title=\"Tapez votre adresse email ici\"  value=\"\" name=\"EMAIL\"  id=\"mce-EMAIL\"  />
                                                        <button type=\"submit\" class=\"btn btn-primary btn-xs button\" name=\"subscribe\" id=\"mc-embedded-subscribe\" >S'inscrire</button>
                                                    </div>
                                                    <div style=\"position: absolute; left: -5000px;\" aria-hidden=\"true\">
                                                        <input type=\"text\" name=\"b_b8e655416f3554f5a4d457131_6bfe57276b\" tabindex=\"-1\" value=\"\" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\" style=\"text-align: center;\">

                            <p style=\"text-align: center;\">
                                <a href=\"https://www.facebook.com/Odellya.org/?fref=ts\"><div class=\"social-popout\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook-48circle.png"), "html", null, true);
        echo "\" /></div></a>

                                <a href=\"https://twitter.com/hashtag/odellya\"><div class=\"social-popout\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter-48circle.png"), "html", null, true);
        echo "\" /></div></a>

                                <a href=\"https://www.youtube.com/watch?v=ytKXKIm9nLU\"><div class=\"social-popout\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/youtube-icon.png"), "html", null, true);
        echo "\" /></div></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-offset-7\"></div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <span class=\"copyright\"></span>
                </div>
                <div class=\"si-sticky si-sticky-right hidden-sm hidden-xs\">
                    <a href=\"https://www.facebook.com/Odellya.org/?fref=ts\" target=\"_blank\" class=\"social-icon si-colored si-facebook\" data-animate=\"bounceInRight\">
                        <div class=\"social-slide\" style=\"position: relative;top:-10px;left:-10px;\"></div>
                    </a>
                    <a href=\"https://twitter.com/hashtag/odellya\" target=\"_blank\" class=\"social-icon si-colored si-twitter\" data-animate=\"bounceInRight\" data-delay=\"100\">
                        <div class=\"social-slide2\" style=\"position: relative;top:-10px;left:-10px;\"></div>
                    </a>

                </div>



            </div>
        </div>
    </div>
";
    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        // line 110
        echo "    <script type=\"text/javascript\">
        function openNav() {
            document.getElementById('mySideNav').style.width = \"250px\";
        }

        function closeNav() {
            document.getElementById('mySideNav').style.width = \"0\";
        }
    </script>

";
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
        return array (  168 => 110,  165 => 109,  132 => 80,  127 => 78,  122 => 76,  63 => 20,  59 => 19,  55 => 18,  50 => 16,  39 => 8,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MainBundle:Main:home.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Main/home.html.twig");
    }
}
