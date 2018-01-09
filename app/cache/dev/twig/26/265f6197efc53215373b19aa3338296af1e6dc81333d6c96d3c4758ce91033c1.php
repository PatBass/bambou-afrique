<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_62a89c3cbb44e2b8b798ce7ca54aa7c822189ac3ce49fbc08ce8b59010e689c2 extends Twig_Template
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
        $__internal_b6f1cc0e46cdea6b6a5694ab4999b9f4dd5db21c21989d4ffbfcda3e5d2e12a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f1cc0e46cdea6b6a5694ab4999b9f4dd5db21c21989d4ffbfcda3e5d2e12a0->enter($__internal_b6f1cc0e46cdea6b6a5694ab4999b9f4dd5db21c21989d4ffbfcda3e5d2e12a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_b6f1cc0e46cdea6b6a5694ab4999b9f4dd5db21c21989d4ffbfcda3e5d2e12a0->leave($__internal_b6f1cc0e46cdea6b6a5694ab4999b9f4dd5db21c21989d4ffbfcda3e5d2e12a0_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
