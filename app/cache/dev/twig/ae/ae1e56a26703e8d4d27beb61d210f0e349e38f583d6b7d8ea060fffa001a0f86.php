<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_bc3119dfd940750ea6be0255b73735691777af1947d503fda32caf48dd934111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_021115cea5e149fdb524999ffd8401c1fdce6a72d4622cbc3939700e442a8f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021115cea5e149fdb524999ffd8401c1fdce6a72d4622cbc3939700e442a8f99->enter($__internal_021115cea5e149fdb524999ffd8401c1fdce6a72d4622cbc3939700e442a8f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021115cea5e149fdb524999ffd8401c1fdce6a72d4622cbc3939700e442a8f99->leave($__internal_021115cea5e149fdb524999ffd8401c1fdce6a72d4622cbc3939700e442a8f99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed1877c62fc82ba5fceab03d1ddb32cc46293343cd0f5cf083620d32234e8dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1877c62fc82ba5fceab03d1ddb32cc46293343cd0f5cf083620d32234e8dfe->enter($__internal_ed1877c62fc82ba5fceab03d1ddb32cc46293343cd0f5cf083620d32234e8dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ed1877c62fc82ba5fceab03d1ddb32cc46293343cd0f5cf083620d32234e8dfe->leave($__internal_ed1877c62fc82ba5fceab03d1ddb32cc46293343cd0f5cf083620d32234e8dfe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
