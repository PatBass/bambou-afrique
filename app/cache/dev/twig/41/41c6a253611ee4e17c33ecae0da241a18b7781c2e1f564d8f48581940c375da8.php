<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_f94873854e8be146089a73625d9e231c0022f4fb6962dc6e09fc2348611b3869 extends Twig_Template
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
        $__internal_ddb54747ce12eca81896421a62366d059dc578bf98ab9ad3decdec0931955f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb54747ce12eca81896421a62366d059dc578bf98ab9ad3decdec0931955f33->enter($__internal_ddb54747ce12eca81896421a62366d059dc578bf98ab9ad3decdec0931955f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ddb54747ce12eca81896421a62366d059dc578bf98ab9ad3decdec0931955f33->leave($__internal_ddb54747ce12eca81896421a62366d059dc578bf98ab9ad3decdec0931955f33_prof);

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
