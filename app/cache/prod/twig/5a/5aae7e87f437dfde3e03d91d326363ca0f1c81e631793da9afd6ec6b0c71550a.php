<?php

/* MainBundle:Common:header.html.twig */
class __TwigTemplate_98594c0cd3158e608fa22f8751a01e88ab18954adc4b8a3f2c6199f0d6023e65 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/logo (1).png"), "cropResize", array(0 => 220, 1 => 220), "method"), "html", null, true);
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
        if ((($context["active"] ?? null) == "home")) {
            echo " class=\"active\" ";
        }
        echo ">
                                <a href=\"./\">ACCUEIL</a>
                            </li>
                            <li ";
        // line 32
        if ((($context["active"] ?? null) == "equipe")) {
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
        if ((($context["active"] ?? null) == "event")) {
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
        if ((($context["active"] ?? null) == "application")) {
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
        if ((($context["active"] ?? null) == "contact")) {
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
        return array (  101 => 51,  95 => 50,  89 => 47,  83 => 46,  77 => 43,  71 => 42,  68 => 41,  60 => 32,  52 => 29,  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MainBundle:Common:header.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Common/header.html.twig");
    }
}
