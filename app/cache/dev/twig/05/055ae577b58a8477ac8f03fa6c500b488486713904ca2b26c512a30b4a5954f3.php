<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1d8ac05a72f6d044df414d40cd2820c49d68083a31afaaf99ed540306b238b50 extends Twig_Template
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
        $__internal_94151a1c7cbe77be9d172d404f56cca3d0950d7456891a5299a0cbea81d80a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94151a1c7cbe77be9d172d404f56cca3d0950d7456891a5299a0cbea81d80a7c->enter($__internal_94151a1c7cbe77be9d172d404f56cca3d0950d7456891a5299a0cbea81d80a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94151a1c7cbe77be9d172d404f56cca3d0950d7456891a5299a0cbea81d80a7c->leave($__internal_94151a1c7cbe77be9d172d404f56cca3d0950d7456891a5299a0cbea81d80a7c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9699dec627e2035fc1d6247f988fd0539228006be1d20d78cca1b1d3791b1d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9699dec627e2035fc1d6247f988fd0539228006be1d20d78cca1b1d3791b1d21->enter($__internal_9699dec627e2035fc1d6247f988fd0539228006be1d20d78cca1b1d3791b1d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9699dec627e2035fc1d6247f988fd0539228006be1d20d78cca1b1d3791b1d21->leave($__internal_9699dec627e2035fc1d6247f988fd0539228006be1d20d78cca1b1d3791b1d21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f753701b6dcb06c8637e50ded4ac31c82f86e163a39154164cebb991dd5a5674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f753701b6dcb06c8637e50ded4ac31c82f86e163a39154164cebb991dd5a5674->enter($__internal_f753701b6dcb06c8637e50ded4ac31c82f86e163a39154164cebb991dd5a5674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f753701b6dcb06c8637e50ded4ac31c82f86e163a39154164cebb991dd5a5674->leave($__internal_f753701b6dcb06c8637e50ded4ac31c82f86e163a39154164cebb991dd5a5674_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_698aee2181287cb46357315072478b72135a6ad714a1b760454f2b2006d17277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698aee2181287cb46357315072478b72135a6ad714a1b760454f2b2006d17277->enter($__internal_698aee2181287cb46357315072478b72135a6ad714a1b760454f2b2006d17277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_698aee2181287cb46357315072478b72135a6ad714a1b760454f2b2006d17277->leave($__internal_698aee2181287cb46357315072478b72135a6ad714a1b760454f2b2006d17277_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
