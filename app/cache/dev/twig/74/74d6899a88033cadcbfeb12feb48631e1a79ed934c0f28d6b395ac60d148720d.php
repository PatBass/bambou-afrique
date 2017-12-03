<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b3213da823418bb8cb911ef165e5ed77ccd2f19eb1e4722b70831ae3f127b85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77c8844335ee681fc82ba3de015ecb9b3c644c3cbd4af60bfd852bd852a01d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c8844335ee681fc82ba3de015ecb9b3c644c3cbd4af60bfd852bd852a01d2e->enter($__internal_77c8844335ee681fc82ba3de015ecb9b3c644c3cbd4af60bfd852bd852a01d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_77c8844335ee681fc82ba3de015ecb9b3c644c3cbd4af60bfd852bd852a01d2e->leave($__internal_77c8844335ee681fc82ba3de015ecb9b3c644c3cbd4af60bfd852bd852a01d2e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff3fd8158dc5bd5a004e9c9a0bac3938cc6b6a125d93c1081717de7c2a2b3606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3fd8158dc5bd5a004e9c9a0bac3938cc6b6a125d93c1081717de7c2a2b3606->enter($__internal_ff3fd8158dc5bd5a004e9c9a0bac3938cc6b6a125d93c1081717de7c2a2b3606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ff3fd8158dc5bd5a004e9c9a0bac3938cc6b6a125d93c1081717de7c2a2b3606->leave($__internal_ff3fd8158dc5bd5a004e9c9a0bac3938cc6b6a125d93c1081717de7c2a2b3606_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
