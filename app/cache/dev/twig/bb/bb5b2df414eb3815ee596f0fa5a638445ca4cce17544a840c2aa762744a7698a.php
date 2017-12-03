<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4e0cd05f1eee245d5e015ae8eb51496cf525ca028ff53a57b9e582b1194108c4 extends Twig_Template
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
        $__internal_e042c2120ae7093831324b7bc6e61ede1f81c25118f4647be4153e2e6e478e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e042c2120ae7093831324b7bc6e61ede1f81c25118f4647be4153e2e6e478e41->enter($__internal_e042c2120ae7093831324b7bc6e61ede1f81c25118f4647be4153e2e6e478e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e042c2120ae7093831324b7bc6e61ede1f81c25118f4647be4153e2e6e478e41->leave($__internal_e042c2120ae7093831324b7bc6e61ede1f81c25118f4647be4153e2e6e478e41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
