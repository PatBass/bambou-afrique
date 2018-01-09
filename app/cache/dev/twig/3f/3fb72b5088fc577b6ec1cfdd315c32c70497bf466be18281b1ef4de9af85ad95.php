<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d2f6216ba3b27ac7dcd102e73e776643d824886f3d0766706e0c95f0acc1a8f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6e503489e026977bcdade3e09b0ce394a56e16cb918abfd6a66dbbe725d769b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e503489e026977bcdade3e09b0ce394a56e16cb918abfd6a66dbbe725d769b4->enter($__internal_6e503489e026977bcdade3e09b0ce394a56e16cb918abfd6a66dbbe725d769b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e503489e026977bcdade3e09b0ce394a56e16cb918abfd6a66dbbe725d769b4->leave($__internal_6e503489e026977bcdade3e09b0ce394a56e16cb918abfd6a66dbbe725d769b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4995754406a528ee1bbeee6ab6136c82ff1b618a878242329ef2f50e230729ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4995754406a528ee1bbeee6ab6136c82ff1b618a878242329ef2f50e230729ab->enter($__internal_4995754406a528ee1bbeee6ab6136c82ff1b618a878242329ef2f50e230729ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4995754406a528ee1bbeee6ab6136c82ff1b618a878242329ef2f50e230729ab->leave($__internal_4995754406a528ee1bbeee6ab6136c82ff1b618a878242329ef2f50e230729ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
