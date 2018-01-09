<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ac860a8314adc742e14817ba0d969d1df5f107e36eb00a7037ed89915e21b417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dff516cefe6df45c6f663865329fa5a1acd584e5b6ed6b9a1eae92659e678d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff516cefe6df45c6f663865329fa5a1acd584e5b6ed6b9a1eae92659e678d71->enter($__internal_dff516cefe6df45c6f663865329fa5a1acd584e5b6ed6b9a1eae92659e678d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff516cefe6df45c6f663865329fa5a1acd584e5b6ed6b9a1eae92659e678d71->leave($__internal_dff516cefe6df45c6f663865329fa5a1acd584e5b6ed6b9a1eae92659e678d71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a96b06e5cbfb6e1fc1efcc05f95e093a6dd880006276225e9e6178f2f10d9924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96b06e5cbfb6e1fc1efcc05f95e093a6dd880006276225e9e6178f2f10d9924->enter($__internal_a96b06e5cbfb6e1fc1efcc05f95e093a6dd880006276225e9e6178f2f10d9924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a96b06e5cbfb6e1fc1efcc05f95e093a6dd880006276225e9e6178f2f10d9924->leave($__internal_a96b06e5cbfb6e1fc1efcc05f95e093a6dd880006276225e9e6178f2f10d9924_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
