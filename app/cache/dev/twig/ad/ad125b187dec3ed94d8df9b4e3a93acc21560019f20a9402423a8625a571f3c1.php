<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ab515f01903ef4ecf655bfbac409f5576dec08c6e6934d76ecfb7fec4bcf1713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_757ee6e1f3dadf94f7786a1db644d3430bedc8d4a960f5c3353b251c027ab542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757ee6e1f3dadf94f7786a1db644d3430bedc8d4a960f5c3353b251c027ab542->enter($__internal_757ee6e1f3dadf94f7786a1db644d3430bedc8d4a960f5c3353b251c027ab542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_757ee6e1f3dadf94f7786a1db644d3430bedc8d4a960f5c3353b251c027ab542->leave($__internal_757ee6e1f3dadf94f7786a1db644d3430bedc8d4a960f5c3353b251c027ab542_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7521c7b9904a3b534225f7212690f384965958aa05593c10f19582094cbb372e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7521c7b9904a3b534225f7212690f384965958aa05593c10f19582094cbb372e->enter($__internal_7521c7b9904a3b534225f7212690f384965958aa05593c10f19582094cbb372e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_7521c7b9904a3b534225f7212690f384965958aa05593c10f19582094cbb372e->leave($__internal_7521c7b9904a3b534225f7212690f384965958aa05593c10f19582094cbb372e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a40a54f62c9a131282cb1d042870fff8b50c5565e797e78bacaa97a79b3377b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40a54f62c9a131282cb1d042870fff8b50c5565e797e78bacaa97a79b3377b7->enter($__internal_a40a54f62c9a131282cb1d042870fff8b50c5565e797e78bacaa97a79b3377b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a40a54f62c9a131282cb1d042870fff8b50c5565e797e78bacaa97a79b3377b7->leave($__internal_a40a54f62c9a131282cb1d042870fff8b50c5565e797e78bacaa97a79b3377b7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8e791868b70038538f7ccce8dbffab2006eb933ac51fe52328a353d50047fc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e791868b70038538f7ccce8dbffab2006eb933ac51fe52328a353d50047fc8a->enter($__internal_8e791868b70038538f7ccce8dbffab2006eb933ac51fe52328a353d50047fc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8e791868b70038538f7ccce8dbffab2006eb933ac51fe52328a353d50047fc8a->leave($__internal_8e791868b70038538f7ccce8dbffab2006eb933ac51fe52328a353d50047fc8a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
