<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3353da5f7d22de34064c4782cd773f96d04fcb48ddaecaa57ff0b9a7e4585df3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_22cc133a0dac9d61e738ad1ce63f4167cc940f671e76a5d4a3b3d33e4b5819df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cc133a0dac9d61e738ad1ce63f4167cc940f671e76a5d4a3b3d33e4b5819df->enter($__internal_22cc133a0dac9d61e738ad1ce63f4167cc940f671e76a5d4a3b3d33e4b5819df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22cc133a0dac9d61e738ad1ce63f4167cc940f671e76a5d4a3b3d33e4b5819df->leave($__internal_22cc133a0dac9d61e738ad1ce63f4167cc940f671e76a5d4a3b3d33e4b5819df_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac007a9ebe2eed2b61f4ccfbb38fbfdb13fc775d9d59971e59caf614f5e36c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac007a9ebe2eed2b61f4ccfbb38fbfdb13fc775d9d59971e59caf614f5e36c69->enter($__internal_ac007a9ebe2eed2b61f4ccfbb38fbfdb13fc775d9d59971e59caf614f5e36c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac007a9ebe2eed2b61f4ccfbb38fbfdb13fc775d9d59971e59caf614f5e36c69->leave($__internal_ac007a9ebe2eed2b61f4ccfbb38fbfdb13fc775d9d59971e59caf614f5e36c69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9dd4e1146ac1405a431c9242cb783176c6902ea890fee6c32511e5239bc1e210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd4e1146ac1405a431c9242cb783176c6902ea890fee6c32511e5239bc1e210->enter($__internal_9dd4e1146ac1405a431c9242cb783176c6902ea890fee6c32511e5239bc1e210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9dd4e1146ac1405a431c9242cb783176c6902ea890fee6c32511e5239bc1e210->leave($__internal_9dd4e1146ac1405a431c9242cb783176c6902ea890fee6c32511e5239bc1e210_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f741c56c08d600499129244ab3437bfce66dadda662237c51441763dccaa7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f741c56c08d600499129244ab3437bfce66dadda662237c51441763dccaa7c4->enter($__internal_1f741c56c08d600499129244ab3437bfce66dadda662237c51441763dccaa7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f741c56c08d600499129244ab3437bfce66dadda662237c51441763dccaa7c4->leave($__internal_1f741c56c08d600499129244ab3437bfce66dadda662237c51441763dccaa7c4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
