<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_7d4c06f36f8bf51462016c29532510ead42f04db31a602d5390a03f9a082319c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_4cac63e9bce06c537b3a6c7494dc6567654e53e7f01cef4a83ecf446a5c03769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cac63e9bce06c537b3a6c7494dc6567654e53e7f01cef4a83ecf446a5c03769->enter($__internal_4cac63e9bce06c537b3a6c7494dc6567654e53e7f01cef4a83ecf446a5c03769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cac63e9bce06c537b3a6c7494dc6567654e53e7f01cef4a83ecf446a5c03769->leave($__internal_4cac63e9bce06c537b3a6c7494dc6567654e53e7f01cef4a83ecf446a5c03769_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6855554db2b2bd022873922df33c3a205147eaafe38187ddc5b8bf71a0e3b298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6855554db2b2bd022873922df33c3a205147eaafe38187ddc5b8bf71a0e3b298->enter($__internal_6855554db2b2bd022873922df33c3a205147eaafe38187ddc5b8bf71a0e3b298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6855554db2b2bd022873922df33c3a205147eaafe38187ddc5b8bf71a0e3b298->leave($__internal_6855554db2b2bd022873922df33c3a205147eaafe38187ddc5b8bf71a0e3b298_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
