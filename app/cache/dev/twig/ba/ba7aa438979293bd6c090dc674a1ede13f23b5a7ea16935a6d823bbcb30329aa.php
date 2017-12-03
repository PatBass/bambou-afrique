<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1b35e7526e9dc89fae722871beba8a6e2546104c1a69de6fe9e5b3462238eff extends Twig_Template
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
        $__internal_1ea63f52f5db1c4411fb3408f2c38b8e84b9470f52532b64b5b857a60dbb459e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea63f52f5db1c4411fb3408f2c38b8e84b9470f52532b64b5b857a60dbb459e->enter($__internal_1ea63f52f5db1c4411fb3408f2c38b8e84b9470f52532b64b5b857a60dbb459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ea63f52f5db1c4411fb3408f2c38b8e84b9470f52532b64b5b857a60dbb459e->leave($__internal_1ea63f52f5db1c4411fb3408f2c38b8e84b9470f52532b64b5b857a60dbb459e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2e559985273130ad7c22684ba856c7f1c4c29a98afe16dd6e460a89a4e1f45c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e559985273130ad7c22684ba856c7f1c4c29a98afe16dd6e460a89a4e1f45c->enter($__internal_c2e559985273130ad7c22684ba856c7f1c4c29a98afe16dd6e460a89a4e1f45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c2e559985273130ad7c22684ba856c7f1c4c29a98afe16dd6e460a89a4e1f45c->leave($__internal_c2e559985273130ad7c22684ba856c7f1c4c29a98afe16dd6e460a89a4e1f45c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8c06738897c2298d46896914b4c0ef85b29e7b7ebb62724d4cb29fca12b0cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c06738897c2298d46896914b4c0ef85b29e7b7ebb62724d4cb29fca12b0cef->enter($__internal_c8c06738897c2298d46896914b4c0ef85b29e7b7ebb62724d4cb29fca12b0cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c8c06738897c2298d46896914b4c0ef85b29e7b7ebb62724d4cb29fca12b0cef->leave($__internal_c8c06738897c2298d46896914b4c0ef85b29e7b7ebb62724d4cb29fca12b0cef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_972776374ef7a2d5e5a98742ba84139ab4c79c241c58205cdd708f32b5a1ff83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972776374ef7a2d5e5a98742ba84139ab4c79c241c58205cdd708f32b5a1ff83->enter($__internal_972776374ef7a2d5e5a98742ba84139ab4c79c241c58205cdd708f32b5a1ff83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_972776374ef7a2d5e5a98742ba84139ab4c79c241c58205cdd708f32b5a1ff83->leave($__internal_972776374ef7a2d5e5a98742ba84139ab4c79c241c58205cdd708f32b5a1ff83_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
