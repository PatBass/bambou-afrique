<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bc093fe855b98617dec6ad74a7fab52c5cf557ad79156e5b8638d7514964f345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e09dcdeb10c7b103998a48404c471d4bf887ccd64d67ddf3731db8984e39c8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09dcdeb10c7b103998a48404c471d4bf887ccd64d67ddf3731db8984e39c8b0->enter($__internal_e09dcdeb10c7b103998a48404c471d4bf887ccd64d67ddf3731db8984e39c8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e09dcdeb10c7b103998a48404c471d4bf887ccd64d67ddf3731db8984e39c8b0->leave($__internal_e09dcdeb10c7b103998a48404c471d4bf887ccd64d67ddf3731db8984e39c8b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
