<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_e69675c459df441fd0fa1dd6c61712820c78e7618c0446045ede39fbd34809c0 extends Twig_Template
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
        $__internal_17b56303524015face8f72fc298174205d5287500835cf818264fa82256211bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b56303524015face8f72fc298174205d5287500835cf818264fa82256211bf->enter($__internal_17b56303524015face8f72fc298174205d5287500835cf818264fa82256211bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_17b56303524015face8f72fc298174205d5287500835cf818264fa82256211bf->leave($__internal_17b56303524015face8f72fc298174205d5287500835cf818264fa82256211bf_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "UserBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
