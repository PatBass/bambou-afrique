<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9ec21ac1538709647884a3fe36fd5a5407b31be9a38e29282e1688dd93485d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_2639a40268822eecba55e46668f4f8d7a3fc463755ab4869501c608be472c02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2639a40268822eecba55e46668f4f8d7a3fc463755ab4869501c608be472c02d->enter($__internal_2639a40268822eecba55e46668f4f8d7a3fc463755ab4869501c608be472c02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2639a40268822eecba55e46668f4f8d7a3fc463755ab4869501c608be472c02d->leave($__internal_2639a40268822eecba55e46668f4f8d7a3fc463755ab4869501c608be472c02d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37bcdc5c501e898c47b27d33eddfe947b135e63a28d12cb0bc31b1365d2fd483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bcdc5c501e898c47b27d33eddfe947b135e63a28d12cb0bc31b1365d2fd483->enter($__internal_37bcdc5c501e898c47b27d33eddfe947b135e63a28d12cb0bc31b1365d2fd483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_37bcdc5c501e898c47b27d33eddfe947b135e63a28d12cb0bc31b1365d2fd483->leave($__internal_37bcdc5c501e898c47b27d33eddfe947b135e63a28d12cb0bc31b1365d2fd483_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
