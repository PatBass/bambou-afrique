<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ae9a3dd05a40dec96036caf0387c326f9ddf3f92120959219ba8bcca1d2bb8f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_cff7fcc107907adbd0df2497788932aaee793825104f027da24b378b79c3aec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff7fcc107907adbd0df2497788932aaee793825104f027da24b378b79c3aec3->enter($__internal_cff7fcc107907adbd0df2497788932aaee793825104f027da24b378b79c3aec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cff7fcc107907adbd0df2497788932aaee793825104f027da24b378b79c3aec3->leave($__internal_cff7fcc107907adbd0df2497788932aaee793825104f027da24b378b79c3aec3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_786a773639374045a4541e00cca9f9903fc25a776dea1a610ffab88ae5501dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786a773639374045a4541e00cca9f9903fc25a776dea1a610ffab88ae5501dd2->enter($__internal_786a773639374045a4541e00cca9f9903fc25a776dea1a610ffab88ae5501dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_786a773639374045a4541e00cca9f9903fc25a776dea1a610ffab88ae5501dd2->leave($__internal_786a773639374045a4541e00cca9f9903fc25a776dea1a610ffab88ae5501dd2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
