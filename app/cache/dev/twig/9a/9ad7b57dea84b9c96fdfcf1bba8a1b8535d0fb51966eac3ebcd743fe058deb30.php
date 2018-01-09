<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0aa41b94fcdf4ea60e5626f2ec2b6112a3660574550a2fc7bd942caed6fb02c8 extends Twig_Template
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
        $__internal_16a4124a158d6f7f7eecab116573484ba604c26ae16e87b13282ede38cc266a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a4124a158d6f7f7eecab116573484ba604c26ae16e87b13282ede38cc266a3->enter($__internal_16a4124a158d6f7f7eecab116573484ba604c26ae16e87b13282ede38cc266a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16a4124a158d6f7f7eecab116573484ba604c26ae16e87b13282ede38cc266a3->leave($__internal_16a4124a158d6f7f7eecab116573484ba604c26ae16e87b13282ede38cc266a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14a02d86c9a4a8db5dff41e14c798f02a2776b235751e2158aa9775a86398b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a02d86c9a4a8db5dff41e14c798f02a2776b235751e2158aa9775a86398b9d->enter($__internal_14a02d86c9a4a8db5dff41e14c798f02a2776b235751e2158aa9775a86398b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_14a02d86c9a4a8db5dff41e14c798f02a2776b235751e2158aa9775a86398b9d->leave($__internal_14a02d86c9a4a8db5dff41e14c798f02a2776b235751e2158aa9775a86398b9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a67e07cbc4ed703a9cc17d3e1db2ce0116a7587d1db2b5ca4bd71a5c834f2cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67e07cbc4ed703a9cc17d3e1db2ce0116a7587d1db2b5ca4bd71a5c834f2cd8->enter($__internal_a67e07cbc4ed703a9cc17d3e1db2ce0116a7587d1db2b5ca4bd71a5c834f2cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a67e07cbc4ed703a9cc17d3e1db2ce0116a7587d1db2b5ca4bd71a5c834f2cd8->leave($__internal_a67e07cbc4ed703a9cc17d3e1db2ce0116a7587d1db2b5ca4bd71a5c834f2cd8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47ac84e24f3cb02b01114053f0115aa12703d9354a569ed00b9f2368d8270cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ac84e24f3cb02b01114053f0115aa12703d9354a569ed00b9f2368d8270cd9->enter($__internal_47ac84e24f3cb02b01114053f0115aa12703d9354a569ed00b9f2368d8270cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_47ac84e24f3cb02b01114053f0115aa12703d9354a569ed00b9f2368d8270cd9->leave($__internal_47ac84e24f3cb02b01114053f0115aa12703d9354a569ed00b9f2368d8270cd9_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
