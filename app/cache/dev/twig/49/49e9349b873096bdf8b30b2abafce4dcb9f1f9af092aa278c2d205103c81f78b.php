<?php

/* MainBundle:Main:galery.html.twig */
class __TwigTemplate_ff0ae50cd3d75db7fa9a4a7620812b1813ab22840c3f389045e0746de3f19b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:galery.html.twig", 1);
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
        $__internal_c287f7bb65e232453bd09d449e467de8663b49c20bc3eaef25943908f31f7f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c287f7bb65e232453bd09d449e467de8663b49c20bc3eaef25943908f31f7f54->enter($__internal_c287f7bb65e232453bd09d449e467de8663b49c20bc3eaef25943908f31f7f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:galery.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c287f7bb65e232453bd09d449e467de8663b49c20bc3eaef25943908f31f7f54->leave($__internal_c287f7bb65e232453bd09d449e467de8663b49c20bc3eaef25943908f31f7f54_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbb6ef1ee1384edd99e16becb6943a06e1990f3063bb96b83fff05c0a2c2b404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb6ef1ee1384edd99e16becb6943a06e1990f3063bb96b83fff05c0a2c2b404->enter($__internal_dbb6ef1ee1384edd99e16becb6943a06e1990f3063bb96b83fff05c0a2c2b404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Casablanca";
        
        $__internal_dbb6ef1ee1384edd99e16becb6943a06e1990f3063bb96b83fff05c0a2c2b404->leave($__internal_dbb6ef1ee1384edd99e16becb6943a06e1990f3063bb96b83fff05c0a2c2b404_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29731df67e09637488b6a48f2285a844dabd07f6ac7f255f108de80724a60ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29731df67e09637488b6a48f2285a844dabd07f6ac7f255f108de80724a60ec0->enter($__internal_29731df67e09637488b6a48f2285a844dabd07f6ac7f255f108de80724a60ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:galery.html.twig", 4)->display($context);
        // line 5
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    ";
        // line 10
        echo "    <div class=\"container\" style=\"padding-top: 100px;\">

    </div>
    ";
        // line 13
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:galery.html.twig", 13)->display($context);
        
        $__internal_29731df67e09637488b6a48f2285a844dabd07f6ac7f255f108de80724a60ec0->leave($__internal_29731df67e09637488b6a48f2285a844dabd07f6ac7f255f108de80724a60ec0_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:galery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  63 => 10,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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

    </div>
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}
", "MainBundle:Main:galery.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/galery.html.twig");
    }
}
