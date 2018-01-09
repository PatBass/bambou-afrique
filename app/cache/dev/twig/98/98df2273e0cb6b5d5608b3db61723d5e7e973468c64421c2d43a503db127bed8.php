<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c15e4e12c910ad6f28f1abae50a14740293adfa4f543a8ecf7cdce657532f17b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8747399f184f934f7b55b5417453dc9f0520e359d83bfdfc1e7fc4e5caa0821e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8747399f184f934f7b55b5417453dc9f0520e359d83bfdfc1e7fc4e5caa0821e->enter($__internal_8747399f184f934f7b55b5417453dc9f0520e359d83bfdfc1e7fc4e5caa0821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8747399f184f934f7b55b5417453dc9f0520e359d83bfdfc1e7fc4e5caa0821e->leave($__internal_8747399f184f934f7b55b5417453dc9f0520e359d83bfdfc1e7fc4e5caa0821e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec7d3d031f3acddad7982408cabea110a228ecaf531396be6d0e87da1ea5b4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7d3d031f3acddad7982408cabea110a228ecaf531396be6d0e87da1ea5b4af->enter($__internal_ec7d3d031f3acddad7982408cabea110a228ecaf531396be6d0e87da1ea5b4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec7d3d031f3acddad7982408cabea110a228ecaf531396be6d0e87da1ea5b4af->leave($__internal_ec7d3d031f3acddad7982408cabea110a228ecaf531396be6d0e87da1ea5b4af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7117afda17310e02a02164e9c5ab70e04d2db927b065386610c71b003b86de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7117afda17310e02a02164e9c5ab70e04d2db927b065386610c71b003b86de8->enter($__internal_c7117afda17310e02a02164e9c5ab70e04d2db927b065386610c71b003b86de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c7117afda17310e02a02164e9c5ab70e04d2db927b065386610c71b003b86de8->leave($__internal_c7117afda17310e02a02164e9c5ab70e04d2db927b065386610c71b003b86de8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_744dda3ac018e248c095595c815e3d759fae4638d08fdff9bdf56060f2156291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744dda3ac018e248c095595c815e3d759fae4638d08fdff9bdf56060f2156291->enter($__internal_744dda3ac018e248c095595c815e3d759fae4638d08fdff9bdf56060f2156291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_744dda3ac018e248c095595c815e3d759fae4638d08fdff9bdf56060f2156291->leave($__internal_744dda3ac018e248c095595c815e3d759fae4638d08fdff9bdf56060f2156291_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
