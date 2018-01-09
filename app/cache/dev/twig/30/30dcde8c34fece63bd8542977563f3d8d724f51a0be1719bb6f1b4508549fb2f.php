<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_985cd17ea05e988751c9393996b7c969552bccb3dbbe51824da0fb2090624b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_99427cdd65636985885a7c8f343f0a692e15a6f3c7fb09820115d4ee1c4fc72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99427cdd65636985885a7c8f343f0a692e15a6f3c7fb09820115d4ee1c4fc72b->enter($__internal_99427cdd65636985885a7c8f343f0a692e15a6f3c7fb09820115d4ee1c4fc72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99427cdd65636985885a7c8f343f0a692e15a6f3c7fb09820115d4ee1c4fc72b->leave($__internal_99427cdd65636985885a7c8f343f0a692e15a6f3c7fb09820115d4ee1c4fc72b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a93f2f96f5ae2a8f3740e173d4897b0ffd36f7b01810d3d0a8532a6eb075313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a93f2f96f5ae2a8f3740e173d4897b0ffd36f7b01810d3d0a8532a6eb075313->enter($__internal_7a93f2f96f5ae2a8f3740e173d4897b0ffd36f7b01810d3d0a8532a6eb075313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_7a93f2f96f5ae2a8f3740e173d4897b0ffd36f7b01810d3d0a8532a6eb075313->leave($__internal_7a93f2f96f5ae2a8f3740e173d4897b0ffd36f7b01810d3d0a8532a6eb075313_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
