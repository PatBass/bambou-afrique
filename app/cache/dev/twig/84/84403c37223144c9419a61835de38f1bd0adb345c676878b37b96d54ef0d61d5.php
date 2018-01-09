<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b8e4e2dfbd49fb98260137cabbce9137574b210e3e1d4de44e4eee487ee35ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6885d788ee57d373a2b1afc2bbf62250dc7c8a45dfac08b598ed3a6a717e66bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6885d788ee57d373a2b1afc2bbf62250dc7c8a45dfac08b598ed3a6a717e66bc->enter($__internal_6885d788ee57d373a2b1afc2bbf62250dc7c8a45dfac08b598ed3a6a717e66bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6885d788ee57d373a2b1afc2bbf62250dc7c8a45dfac08b598ed3a6a717e66bc->leave($__internal_6885d788ee57d373a2b1afc2bbf62250dc7c8a45dfac08b598ed3a6a717e66bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d16ee0d7622948d4db935dc2e350376d4a0b6ef8811c878ca9c05ccce365cbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16ee0d7622948d4db935dc2e350376d4a0b6ef8811c878ca9c05ccce365cbf4->enter($__internal_d16ee0d7622948d4db935dc2e350376d4a0b6ef8811c878ca9c05ccce365cbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d16ee0d7622948d4db935dc2e350376d4a0b6ef8811c878ca9c05ccce365cbf4->leave($__internal_d16ee0d7622948d4db935dc2e350376d4a0b6ef8811c878ca9c05ccce365cbf4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
