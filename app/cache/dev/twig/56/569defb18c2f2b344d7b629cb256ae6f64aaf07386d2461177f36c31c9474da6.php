<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_237622c6e79b28d7ee7a845fbfef5c2dfae7d6c19a842b0e4c07aa158f05617b extends Twig_Template
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
        $__internal_4beb90e6990b354b6f3e5db591d060c876d3e125736afef206239c79881dac24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4beb90e6990b354b6f3e5db591d060c876d3e125736afef206239c79881dac24->enter($__internal_4beb90e6990b354b6f3e5db591d060c876d3e125736afef206239c79881dac24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_4beb90e6990b354b6f3e5db591d060c876d3e125736afef206239c79881dac24->leave($__internal_4beb90e6990b354b6f3e5db591d060c876d3e125736afef206239c79881dac24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
