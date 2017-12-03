<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_365038c84c5d8e22a4108335e0b4d5eb160eb63a396177f9188fd33e794d9030 extends Twig_Template
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
        $__internal_f11cff445a2401641788d89aafad7ee7f6b8cc0d07bfe4d32ab24e2061fe6d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11cff445a2401641788d89aafad7ee7f6b8cc0d07bfe4d32ab24e2061fe6d90->enter($__internal_f11cff445a2401641788d89aafad7ee7f6b8cc0d07bfe4d32ab24e2061fe6d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_f11cff445a2401641788d89aafad7ee7f6b8cc0d07bfe4d32ab24e2061fe6d90->leave($__internal_f11cff445a2401641788d89aafad7ee7f6b8cc0d07bfe4d32ab24e2061fe6d90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
