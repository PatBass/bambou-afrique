<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_792b21df963c69c49b3d8423d6e961d44334924ae0ae151857f63984a4ed5b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_30be2fdafb625b67d2c6eaef50bef34e10ecb380880e84f59bf1e9ebe9c08a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30be2fdafb625b67d2c6eaef50bef34e10ecb380880e84f59bf1e9ebe9c08a44->enter($__internal_30be2fdafb625b67d2c6eaef50bef34e10ecb380880e84f59bf1e9ebe9c08a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30be2fdafb625b67d2c6eaef50bef34e10ecb380880e84f59bf1e9ebe9c08a44->leave($__internal_30be2fdafb625b67d2c6eaef50bef34e10ecb380880e84f59bf1e9ebe9c08a44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09584c8bcdf92dbbbd98d5e74360d5f525c02a892668919469b417994ad32b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09584c8bcdf92dbbbd98d5e74360d5f525c02a892668919469b417994ad32b68->enter($__internal_09584c8bcdf92dbbbd98d5e74360d5f525c02a892668919469b417994ad32b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_09584c8bcdf92dbbbd98d5e74360d5f525c02a892668919469b417994ad32b68->leave($__internal_09584c8bcdf92dbbbd98d5e74360d5f525c02a892668919469b417994ad32b68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
