<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_828d49ca9d087e6c2c74efaf2be0178c0812645d604774aa23f77b03278cbb6b extends Twig_Template
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
        $__internal_c048d6fceff4866b9fe3e8bae60f3640abb480de7809566c1ccad3da58940fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c048d6fceff4866b9fe3e8bae60f3640abb480de7809566c1ccad3da58940fbe->enter($__internal_c048d6fceff4866b9fe3e8bae60f3640abb480de7809566c1ccad3da58940fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c048d6fceff4866b9fe3e8bae60f3640abb480de7809566c1ccad3da58940fbe->leave($__internal_c048d6fceff4866b9fe3e8bae60f3640abb480de7809566c1ccad3da58940fbe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e46c81d5ae4fc4705e1e5c55f2a15a498a8ae089c6ca7223853c2b862477bc11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46c81d5ae4fc4705e1e5c55f2a15a498a8ae089c6ca7223853c2b862477bc11->enter($__internal_e46c81d5ae4fc4705e1e5c55f2a15a498a8ae089c6ca7223853c2b862477bc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e46c81d5ae4fc4705e1e5c55f2a15a498a8ae089c6ca7223853c2b862477bc11->leave($__internal_e46c81d5ae4fc4705e1e5c55f2a15a498a8ae089c6ca7223853c2b862477bc11_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
