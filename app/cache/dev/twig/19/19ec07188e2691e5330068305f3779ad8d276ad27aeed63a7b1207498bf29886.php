<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60f9694817990106118e648136671e8d7b0b28f634ce64383ee2682badfd4187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8001c078b3834142be5e2c55aebaa499d90b9491b0489358b4ddd219c967c0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8001c078b3834142be5e2c55aebaa499d90b9491b0489358b4ddd219c967c0f1->enter($__internal_8001c078b3834142be5e2c55aebaa499d90b9491b0489358b4ddd219c967c0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8001c078b3834142be5e2c55aebaa499d90b9491b0489358b4ddd219c967c0f1->leave($__internal_8001c078b3834142be5e2c55aebaa499d90b9491b0489358b4ddd219c967c0f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ff0702fce5644e47893624ea48d0b70547e544890538aa05f64e31b7f90ad65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff0702fce5644e47893624ea48d0b70547e544890538aa05f64e31b7f90ad65->enter($__internal_9ff0702fce5644e47893624ea48d0b70547e544890538aa05f64e31b7f90ad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ff0702fce5644e47893624ea48d0b70547e544890538aa05f64e31b7f90ad65->leave($__internal_9ff0702fce5644e47893624ea48d0b70547e544890538aa05f64e31b7f90ad65_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad177df74766c59f6d1f909f648c8dfc1c07b33158db584946bb1eca3100a88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad177df74766c59f6d1f909f648c8dfc1c07b33158db584946bb1eca3100a88e->enter($__internal_ad177df74766c59f6d1f909f648c8dfc1c07b33158db584946bb1eca3100a88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad177df74766c59f6d1f909f648c8dfc1c07b33158db584946bb1eca3100a88e->leave($__internal_ad177df74766c59f6d1f909f648c8dfc1c07b33158db584946bb1eca3100a88e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_297882916daf3b9d24dab9cfecd1df59488c33526a1f9dca28641bff19b3b0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297882916daf3b9d24dab9cfecd1df59488c33526a1f9dca28641bff19b3b0ee->enter($__internal_297882916daf3b9d24dab9cfecd1df59488c33526a1f9dca28641bff19b3b0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_297882916daf3b9d24dab9cfecd1df59488c33526a1f9dca28641bff19b3b0ee->leave($__internal_297882916daf3b9d24dab9cfecd1df59488c33526a1f9dca28641bff19b3b0ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
