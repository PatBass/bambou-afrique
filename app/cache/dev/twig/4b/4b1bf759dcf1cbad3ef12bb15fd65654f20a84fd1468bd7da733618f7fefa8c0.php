<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b675b8a21fa9a68dea841d57a5471ab5382f79b1ab9b22fc6653667d365497e8 extends Twig_Template
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
        $__internal_5a09dd0e7f987c4b0dba862f0a45aab45ee3e341923ce6970bffdef802a1e7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a09dd0e7f987c4b0dba862f0a45aab45ee3e341923ce6970bffdef802a1e7e9->enter($__internal_5a09dd0e7f987c4b0dba862f0a45aab45ee3e341923ce6970bffdef802a1e7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5a09dd0e7f987c4b0dba862f0a45aab45ee3e341923ce6970bffdef802a1e7e9->leave($__internal_5a09dd0e7f987c4b0dba862f0a45aab45ee3e341923ce6970bffdef802a1e7e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
