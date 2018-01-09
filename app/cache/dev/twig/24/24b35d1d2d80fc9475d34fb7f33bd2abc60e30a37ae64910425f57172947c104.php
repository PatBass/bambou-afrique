<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dc81b4aaefc13ec52458c2f03fd26d8eb7afb84ca699100924bccc72b3d27f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_46fe5ce5f2c6dfbb8d3e4d7d4bf7379b176dfd4c40db02221fe19550e6557a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fe5ce5f2c6dfbb8d3e4d7d4bf7379b176dfd4c40db02221fe19550e6557a83->enter($__internal_46fe5ce5f2c6dfbb8d3e4d7d4bf7379b176dfd4c40db02221fe19550e6557a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46fe5ce5f2c6dfbb8d3e4d7d4bf7379b176dfd4c40db02221fe19550e6557a83->leave($__internal_46fe5ce5f2c6dfbb8d3e4d7d4bf7379b176dfd4c40db02221fe19550e6557a83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdeeff768c88a8943b9d9f0f45b3a4d7b71d043442721c579b2cb20f5a9bc56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdeeff768c88a8943b9d9f0f45b3a4d7b71d043442721c579b2cb20f5a9bc56d->enter($__internal_cdeeff768c88a8943b9d9f0f45b3a4d7b71d043442721c579b2cb20f5a9bc56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_cdeeff768c88a8943b9d9f0f45b3a4d7b71d043442721c579b2cb20f5a9bc56d->leave($__internal_cdeeff768c88a8943b9d9f0f45b3a4d7b71d043442721c579b2cb20f5a9bc56d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
