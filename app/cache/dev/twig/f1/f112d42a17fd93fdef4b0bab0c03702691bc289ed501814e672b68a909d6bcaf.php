<?php

/* MainBundle:Main:index-1.html.twig */
class __TwigTemplate_ef139d30545a9e4642a378abb0f5111fb9a33f491daa3bde4a7b4dd586fcbcd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:index-1.html.twig", 1);
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
        $__internal_1070637c45c71a4823150c084c579ccb0a2b52743f20febcb71cb736353d7d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1070637c45c71a4823150c084c579ccb0a2b52743f20febcb71cb736353d7d4c->enter($__internal_1070637c45c71a4823150c084c579ccb0a2b52743f20febcb71cb736353d7d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:index-1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1070637c45c71a4823150c084c579ccb0a2b52743f20febcb71cb736353d7d4c->leave($__internal_1070637c45c71a4823150c084c579ccb0a2b52743f20febcb71cb736353d7d4c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_48456812ce0523e9a4a5fb5d6132eb7c7f44cefc88541323cc05c5160ce4a699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48456812ce0523e9a4a5fb5d6132eb7c7f44cefc88541323cc05c5160ce4a699->enter($__internal_48456812ce0523e9a4a5fb5d6132eb7c7f44cefc88541323cc05c5160ce4a699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Casablanca";
        
        $__internal_48456812ce0523e9a4a5fb5d6132eb7c7f44cefc88541323cc05c5160ce4a699->leave($__internal_48456812ce0523e9a4a5fb5d6132eb7c7f44cefc88541323cc05c5160ce4a699_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97fd0f214e248dd258e623222743ff2630514365648f223a359a5ed1df307103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fd0f214e248dd258e623222743ff2630514365648f223a359a5ed1df307103->enter($__internal_97fd0f214e248dd258e623222743ff2630514365648f223a359a5ed1df307103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:index-1.html.twig", 4)->display($context);
        // line 5
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

\t";
        // line 9
        $this->loadTemplate("MainBundle:Common:banner.html.twig", "MainBundle:Main:index-1.html.twig", 9)->display($context);
        // line 10
        echo "
\t<div class=\"container\" style=\"padding-top: 100px;\">
\t\t\t<div class=\"specials\" style=\"padding-top: 0;\">
\t\t\t\t<div class=\"special-bottom\">

\t\t\t\t\t<div class=\"col-md-6 bottom-special\" style=\"background-image: url(";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gal29.jpg"), "html", null, true);
        echo ");\">
\t\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("speciality", array("category" => "africaine"));
        echo "\" class=\"details\">Africaine</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 bottom-special-1\" style=\"background-image: url(";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gal29.jpg"), "html", null, true);
        echo ");\">
\t\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("speciality", array("category" => "international"));
        echo "\" class=\"details\">International</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>


\t\t\t\t<div class=\"special-bottom\">
\t\t\t\t\t<div class=\"col-md-6 bottom-special-3\" style=\"background-image: url(";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gal29.jpg"), "html", null, true);
        echo ");\">
\t\t\t\t\t\t<a href=\"";
        // line 28
        echo "\" class=\"details\">AFRICAINE</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 bottom-special-2\" style=\"background-image: url(";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gal29.jpg"), "html", null, true);
        echo ");\">
\t\t\t\t\t\t<a href=\"";
        // line 31
        echo "\" class=\"details\">INTERNATIONALE</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>

\t<!---->
    ";
        // line 41
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:index-1.html.twig", 41)->display($context);
        
        $__internal_97fd0f214e248dd258e623222743ff2630514365648f223a359a5ed1df307103->leave($__internal_97fd0f214e248dd258e623222743ff2630514365648f223a359a5ed1df307103_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:index-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  108 => 31,  104 => 30,  100 => 28,  96 => 27,  86 => 20,  82 => 19,  76 => 16,  72 => 15,  65 => 10,  63 => 9,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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

\t{% include('MainBundle:Common:banner.html.twig') %}

\t<div class=\"container\" style=\"padding-top: 100px;\">
\t\t\t<div class=\"specials\" style=\"padding-top: 0;\">
\t\t\t\t<div class=\"special-bottom\">

\t\t\t\t\t<div class=\"col-md-6 bottom-special\" style=\"background-image: url({{ asset('bundles/main/images/gal29.jpg') }});\">
\t\t\t\t\t\t<a href=\"{{ path('speciality', {'category' : 'africaine'}) }}\" class=\"details\">Africaine</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 bottom-special-1\" style=\"background-image: url({{ asset('bundles/main/images/gal29.jpg') }});\">
\t\t\t\t\t\t<a href=\"{{ path('speciality', {'category' : 'international'}) }}\" class=\"details\">International</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>


\t\t\t\t<div class=\"special-bottom\">
\t\t\t\t\t<div class=\"col-md-6 bottom-special-3\" style=\"background-image: url({{ asset('bundles/main/images/gal29.jpg') }});\">
\t\t\t\t\t\t<a href=\"{#{{ path('speciality', {'item' :}) }}#}\" class=\"details\">AFRICAINE</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 bottom-special-2\" style=\"background-image: url({{ asset('bundles/main/images/gal29.jpg') }});\">
\t\t\t\t\t\t<a href=\"{#{{ path('speciality', {'item' :}) }}#}\" class=\"details\">INTERNATIONALE</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>

\t<!---->
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}




", "MainBundle:Main:index-1.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/index-1.html.twig");
    }
}
