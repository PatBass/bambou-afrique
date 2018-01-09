<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_1536d76567d39b57089298a6f3db03646e2a5d49ac84c44de0598cb4a8cfadb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_d1f2c6a40bd105610b07f5db314488fbe908ac8b9f5288a386de534efd97fc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f2c6a40bd105610b07f5db314488fbe908ac8b9f5288a386de534efd97fc8e->enter($__internal_d1f2c6a40bd105610b07f5db314488fbe908ac8b9f5288a386de534efd97fc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1f2c6a40bd105610b07f5db314488fbe908ac8b9f5288a386de534efd97fc8e->leave($__internal_d1f2c6a40bd105610b07f5db314488fbe908ac8b9f5288a386de534efd97fc8e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c9e32937a94cd68b80d89874910f179128eb2cb7ccd48b58cf34f8d09a1e3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9e32937a94cd68b80d89874910f179128eb2cb7ccd48b58cf34f8d09a1e3b4->enter($__internal_7c9e32937a94cd68b80d89874910f179128eb2cb7ccd48b58cf34f8d09a1e3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7c9e32937a94cd68b80d89874910f179128eb2cb7ccd48b58cf34f8d09a1e3b4->leave($__internal_7c9e32937a94cd68b80d89874910f179128eb2cb7ccd48b58cf34f8d09a1e3b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
