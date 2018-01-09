<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5e1605ee9a2fac9fb9e8c3c235c7f77f6d5f85e4ac71736171c3cc5a7fffc7dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_de82f181a8d6845ab54ffe9e6850b45295f98e5ac8acba516a8f109accdd274d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de82f181a8d6845ab54ffe9e6850b45295f98e5ac8acba516a8f109accdd274d->enter($__internal_de82f181a8d6845ab54ffe9e6850b45295f98e5ac8acba516a8f109accdd274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de82f181a8d6845ab54ffe9e6850b45295f98e5ac8acba516a8f109accdd274d->leave($__internal_de82f181a8d6845ab54ffe9e6850b45295f98e5ac8acba516a8f109accdd274d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fd167f45ae72c06deea7e576755462054026ae595f75289bac55fe4ee35d8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd167f45ae72c06deea7e576755462054026ae595f75289bac55fe4ee35d8fb->enter($__internal_2fd167f45ae72c06deea7e576755462054026ae595f75289bac55fe4ee35d8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2fd167f45ae72c06deea7e576755462054026ae595f75289bac55fe4ee35d8fb->leave($__internal_2fd167f45ae72c06deea7e576755462054026ae595f75289bac55fe4ee35d8fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
