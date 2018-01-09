<?php

/* MainBundle:Main:contact.html.twig */
class __TwigTemplate_305b3d8d3db16a9d48c35e98b47ead26d7f836e55f78c35fb82d6d82b44112ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:contact.html.twig", 1);
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
        $__internal_3b7edf5aec7f702ef3d22f646a53d7e3806fe870f9021bcb0c4603be22f6fba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7edf5aec7f702ef3d22f646a53d7e3806fe870f9021bcb0c4603be22f6fba7->enter($__internal_3b7edf5aec7f702ef3d22f646a53d7e3806fe870f9021bcb0c4603be22f6fba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b7edf5aec7f702ef3d22f646a53d7e3806fe870f9021bcb0c4603be22f6fba7->leave($__internal_3b7edf5aec7f702ef3d22f646a53d7e3806fe870f9021bcb0c4603be22f6fba7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce8ae8979247541867bad97a7000587a3d39c0d03fb4e55197ee699bbed14016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8ae8979247541867bad97a7000587a3d39c0d03fb4e55197ee699bbed14016->enter($__internal_ce8ae8979247541867bad97a7000587a3d39c0d03fb4e55197ee699bbed14016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Casablanca";
        
        $__internal_ce8ae8979247541867bad97a7000587a3d39c0d03fb4e55197ee699bbed14016->leave($__internal_ce8ae8979247541867bad97a7000587a3d39c0d03fb4e55197ee699bbed14016_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9663e3b1b4b53826d8ebb96792874e6956b024ae2a60bf5215205209887eec30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9663e3b1b4b53826d8ebb96792874e6956b024ae2a60bf5215205209887eec30->enter($__internal_9663e3b1b4b53826d8ebb96792874e6956b024ae2a60bf5215205209887eec30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:contact.html.twig", 4)->display($context);
        // line 5
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    ";
        // line 10
        echo "    <div class=\"container\" style=\"padding-top: 100px;\">
        <div class=\"contact\">
            <div class=\"contact-in\">
                <h2>contact</h2>
                <div class=\" col-md-9 contact-left\">

                    <form >
                        <div>
                            <span>Nom</span>
                            <input name=\"userName\" type=\"text\" class=\"textbox\">
                        </div>
                        <div>
                            <span>E-Mail</span>
                            <input name=\"userEmail\" type=\"text\" class=\"textbox\">
                        </div>
                        <div>
                            <span>Sujet</span>
                            <textarea name=\"userMsg\"> </textarea>
                        </div>
                        <div>
                            <span><input type=\"submit\" value=\"Envoyer\"></span>
                        </div>
                    </form>
                </div>

                <div class=\" col-md-3 contact-right\">

                    <h5>Informations société</h5>
                    <p>16 bd alkhatib aliraqui bd Biranzarane,</p>
                    <p>ruelle la mosqué Biranzarane </p>
                    <p>Maarif - Casablanca</p>
                    <p>Maroc</p>
                    <p>Téléphone: 05229-81729 / 0662-760309</p>
                    <p>Email: <a href=\"mailto:info@mycompany.com\">info@bamboudafrique.com</a></p>
                    <p>Suivez-nous sur : <a href=\"https://www.facebook.com/bambou.dafrique\">Facebook</a></p>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"map\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.9323387392237!2d-7.6399516847973!3d33.58110598073679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2c190248119%3A0xf9aa3617fea97f47!2sRestaurant+Bambou+D+Afrique!5e0!3m2!1sfr!2s!4v1515434419494\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    ";
        // line 53
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:contact.html.twig", 53)->display($context);
        
        $__internal_9663e3b1b4b53826d8ebb96792874e6956b024ae2a60bf5215205209887eec30->leave($__internal_9663e3b1b4b53826d8ebb96792874e6956b024ae2a60bf5215205209887eec30_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 53,  63 => 10,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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
        <div class=\"contact\">
            <div class=\"contact-in\">
                <h2>contact</h2>
                <div class=\" col-md-9 contact-left\">

                    <form >
                        <div>
                            <span>Nom</span>
                            <input name=\"userName\" type=\"text\" class=\"textbox\">
                        </div>
                        <div>
                            <span>E-Mail</span>
                            <input name=\"userEmail\" type=\"text\" class=\"textbox\">
                        </div>
                        <div>
                            <span>Sujet</span>
                            <textarea name=\"userMsg\"> </textarea>
                        </div>
                        <div>
                            <span><input type=\"submit\" value=\"Envoyer\"></span>
                        </div>
                    </form>
                </div>

                <div class=\" col-md-3 contact-right\">

                    <h5>Informations société</h5>
                    <p>16 bd alkhatib aliraqui bd Biranzarane,</p>
                    <p>ruelle la mosqué Biranzarane </p>
                    <p>Maarif - Casablanca</p>
                    <p>Maroc</p>
                    <p>Téléphone: 05229-81729 / 0662-760309</p>
                    <p>Email: <a href=\"mailto:info@mycompany.com\">info@bamboudafrique.com</a></p>
                    <p>Suivez-nous sur : <a href=\"https://www.facebook.com/bambou.dafrique\">Facebook</a></p>
                </div>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"map\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.9323387392237!2d-7.6399516847973!3d33.58110598073679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2c190248119%3A0xf9aa3617fea97f47!2sRestaurant+Bambou+D+Afrique!5e0!3m2!1sfr!2s!4v1515434419494\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}
", "MainBundle:Main:contact.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/contact.html.twig");
    }
}
