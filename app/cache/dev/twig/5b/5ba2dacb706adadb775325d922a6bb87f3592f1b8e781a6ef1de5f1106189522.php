<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_84c299020c53dc8c50f779927f09bc7285a6fdb1231209bd52f71de94a7a5289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_be000ed414750ab0b0b1fc536c3e29e140a0a8777efbd5afe033596976820385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be000ed414750ab0b0b1fc536c3e29e140a0a8777efbd5afe033596976820385->enter($__internal_be000ed414750ab0b0b1fc536c3e29e140a0a8777efbd5afe033596976820385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be000ed414750ab0b0b1fc536c3e29e140a0a8777efbd5afe033596976820385->leave($__internal_be000ed414750ab0b0b1fc536c3e29e140a0a8777efbd5afe033596976820385_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f268ba684fe9501d5a305f00d82adaa787095caa2dd955bbfa38e1c8f65718d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f268ba684fe9501d5a305f00d82adaa787095caa2dd955bbfa38e1c8f65718d4->enter($__internal_f268ba684fe9501d5a305f00d82adaa787095caa2dd955bbfa38e1c8f65718d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f268ba684fe9501d5a305f00d82adaa787095caa2dd955bbfa38e1c8f65718d4->leave($__internal_f268ba684fe9501d5a305f00d82adaa787095caa2dd955bbfa38e1c8f65718d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
