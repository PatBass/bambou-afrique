<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8328ff429948c56c8d5d6b9bc043874e383c27966349d1ea8df6e0ac61cabc36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_6cca0a4e67eb889dcb4dceeedd46e31f539bf660b6b2f8b2f967dd9a0534ad5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cca0a4e67eb889dcb4dceeedd46e31f539bf660b6b2f8b2f967dd9a0534ad5d->enter($__internal_6cca0a4e67eb889dcb4dceeedd46e31f539bf660b6b2f8b2f967dd9a0534ad5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cca0a4e67eb889dcb4dceeedd46e31f539bf660b6b2f8b2f967dd9a0534ad5d->leave($__internal_6cca0a4e67eb889dcb4dceeedd46e31f539bf660b6b2f8b2f967dd9a0534ad5d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fba06e82d335570312d396016c8a371867e2fbe8b565fd38a909c578e821d79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba06e82d335570312d396016c8a371867e2fbe8b565fd38a909c578e821d79d->enter($__internal_fba06e82d335570312d396016c8a371867e2fbe8b565fd38a909c578e821d79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fba06e82d335570312d396016c8a371867e2fbe8b565fd38a909c578e821d79d->leave($__internal_fba06e82d335570312d396016c8a371867e2fbe8b565fd38a909c578e821d79d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5282e81fe3a25b4efa4dfd988c42e105dec0021ddc51aae339980df9d5764a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5282e81fe3a25b4efa4dfd988c42e105dec0021ddc51aae339980df9d5764a92->enter($__internal_5282e81fe3a25b4efa4dfd988c42e105dec0021ddc51aae339980df9d5764a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5282e81fe3a25b4efa4dfd988c42e105dec0021ddc51aae339980df9d5764a92->leave($__internal_5282e81fe3a25b4efa4dfd988c42e105dec0021ddc51aae339980df9d5764a92_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d0925d07ea45a9973e7ce12b626a784b4d52c4ae5111af80dd8247990ec25c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0925d07ea45a9973e7ce12b626a784b4d52c4ae5111af80dd8247990ec25c6->enter($__internal_2d0925d07ea45a9973e7ce12b626a784b4d52c4ae5111af80dd8247990ec25c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2d0925d07ea45a9973e7ce12b626a784b4d52c4ae5111af80dd8247990ec25c6->leave($__internal_2d0925d07ea45a9973e7ce12b626a784b4d52c4ae5111af80dd8247990ec25c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
