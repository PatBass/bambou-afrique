<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_304ba61bdb7cdf4811cdc8b18e4dfb2888f2c6b226ad4d9be3270f38f15c4e7e extends Twig_Template
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
        $__internal_d1844b0acdd041a1402b311ae178a13aedf38b2adae54c945088e3350a164b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1844b0acdd041a1402b311ae178a13aedf38b2adae54c945088e3350a164b10->enter($__internal_d1844b0acdd041a1402b311ae178a13aedf38b2adae54c945088e3350a164b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1844b0acdd041a1402b311ae178a13aedf38b2adae54c945088e3350a164b10->leave($__internal_d1844b0acdd041a1402b311ae178a13aedf38b2adae54c945088e3350a164b10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25589b3cadd753507a7846c94651d5dc3577a6ff0107665714df33f089026fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25589b3cadd753507a7846c94651d5dc3577a6ff0107665714df33f089026fbb->enter($__internal_25589b3cadd753507a7846c94651d5dc3577a6ff0107665714df33f089026fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_25589b3cadd753507a7846c94651d5dc3577a6ff0107665714df33f089026fbb->leave($__internal_25589b3cadd753507a7846c94651d5dc3577a6ff0107665714df33f089026fbb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da78774ff24d01d0080e9a61467f1ee402e1e33ce2254cc828c8d0742cba09a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da78774ff24d01d0080e9a61467f1ee402e1e33ce2254cc828c8d0742cba09a8->enter($__internal_da78774ff24d01d0080e9a61467f1ee402e1e33ce2254cc828c8d0742cba09a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
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
        
        $__internal_da78774ff24d01d0080e9a61467f1ee402e1e33ce2254cc828c8d0742cba09a8->leave($__internal_da78774ff24d01d0080e9a61467f1ee402e1e33ce2254cc828c8d0742cba09a8_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
