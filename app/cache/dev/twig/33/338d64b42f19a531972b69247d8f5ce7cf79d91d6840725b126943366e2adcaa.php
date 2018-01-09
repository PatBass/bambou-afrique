<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e44266dbe19eb468a806e5647b262887575c96144c6e9125ceef2f2587e5f73a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3100fc74c2108ed9e2d8f91e58a0df80cc655d6907ca51255db8f4fc8ea9c71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3100fc74c2108ed9e2d8f91e58a0df80cc655d6907ca51255db8f4fc8ea9c71d->enter($__internal_3100fc74c2108ed9e2d8f91e58a0df80cc655d6907ca51255db8f4fc8ea9c71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3100fc74c2108ed9e2d8f91e58a0df80cc655d6907ca51255db8f4fc8ea9c71d->leave($__internal_3100fc74c2108ed9e2d8f91e58a0df80cc655d6907ca51255db8f4fc8ea9c71d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da518f59433af3b0d602a88798e14968d303536e9382f84b358c727816bdfb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da518f59433af3b0d602a88798e14968d303536e9382f84b358c727816bdfb4e->enter($__internal_da518f59433af3b0d602a88798e14968d303536e9382f84b358c727816bdfb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_da518f59433af3b0d602a88798e14968d303536e9382f84b358c727816bdfb4e->leave($__internal_da518f59433af3b0d602a88798e14968d303536e9382f84b358c727816bdfb4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ad2899b2c6cafd5e50982d45860b230d1fba5063fe0f98faae9d07231a12018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad2899b2c6cafd5e50982d45860b230d1fba5063fe0f98faae9d07231a12018->enter($__internal_5ad2899b2c6cafd5e50982d45860b230d1fba5063fe0f98faae9d07231a12018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5ad2899b2c6cafd5e50982d45860b230d1fba5063fe0f98faae9d07231a12018->leave($__internal_5ad2899b2c6cafd5e50982d45860b230d1fba5063fe0f98faae9d07231a12018_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
