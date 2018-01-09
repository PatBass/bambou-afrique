<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d252b391ee30d3e458944b80f7def2e660713829e0acd49cd7c3b7b82b5a82bd extends Twig_Template
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
        $__internal_c0eee447b12efd6eebea066f80d197b7ae40c99e8147c5e6627c7ffb327b8e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0eee447b12efd6eebea066f80d197b7ae40c99e8147c5e6627c7ffb327b8e6b->enter($__internal_c0eee447b12efd6eebea066f80d197b7ae40c99e8147c5e6627c7ffb327b8e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c0eee447b12efd6eebea066f80d197b7ae40c99e8147c5e6627c7ffb327b8e6b->leave($__internal_c0eee447b12efd6eebea066f80d197b7ae40c99e8147c5e6627c7ffb327b8e6b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a17648dd75d14539c8d5848816b3808efd81d31653e63e5fa8dd3bb8660953b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17648dd75d14539c8d5848816b3808efd81d31653e63e5fa8dd3bb8660953b0->enter($__internal_a17648dd75d14539c8d5848816b3808efd81d31653e63e5fa8dd3bb8660953b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_a17648dd75d14539c8d5848816b3808efd81d31653e63e5fa8dd3bb8660953b0->leave($__internal_a17648dd75d14539c8d5848816b3808efd81d31653e63e5fa8dd3bb8660953b0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a174d26d2c91186cf821e7d27c6bc17c3364e048f2334d8eaf7643db05ed0b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a174d26d2c91186cf821e7d27c6bc17c3364e048f2334d8eaf7643db05ed0b63->enter($__internal_a174d26d2c91186cf821e7d27c6bc17c3364e048f2334d8eaf7643db05ed0b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a174d26d2c91186cf821e7d27c6bc17c3364e048f2334d8eaf7643db05ed0b63->leave($__internal_a174d26d2c91186cf821e7d27c6bc17c3364e048f2334d8eaf7643db05ed0b63_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3fee7b68aceb68e8b4808610b4b19d06e1b2d691528f3a9fb1d9011ccb395bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fee7b68aceb68e8b4808610b4b19d06e1b2d691528f3a9fb1d9011ccb395bca->enter($__internal_3fee7b68aceb68e8b4808610b4b19d06e1b2d691528f3a9fb1d9011ccb395bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3fee7b68aceb68e8b4808610b4b19d06e1b2d691528f3a9fb1d9011ccb395bca->leave($__internal_3fee7b68aceb68e8b4808610b4b19d06e1b2d691528f3a9fb1d9011ccb395bca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
