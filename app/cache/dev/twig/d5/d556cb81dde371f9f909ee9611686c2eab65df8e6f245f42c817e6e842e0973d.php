<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0d3ae433bacfbc414037806a7cff61d20d809aeafc0338f726d9d69333391c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3120c0798c8b1ea6e5390e0dce22302c998f86e418992302829d83d9d92a7dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3120c0798c8b1ea6e5390e0dce22302c998f86e418992302829d83d9d92a7dbf->enter($__internal_3120c0798c8b1ea6e5390e0dce22302c998f86e418992302829d83d9d92a7dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3120c0798c8b1ea6e5390e0dce22302c998f86e418992302829d83d9d92a7dbf->leave($__internal_3120c0798c8b1ea6e5390e0dce22302c998f86e418992302829d83d9d92a7dbf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd9d9a3ed8d51535fa451a6d740fe6a679b27c91f080b96e8dc9da448856ffb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9d9a3ed8d51535fa451a6d740fe6a679b27c91f080b96e8dc9da448856ffb0->enter($__internal_cd9d9a3ed8d51535fa451a6d740fe6a679b27c91f080b96e8dc9da448856ffb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cd9d9a3ed8d51535fa451a6d740fe6a679b27c91f080b96e8dc9da448856ffb0->leave($__internal_cd9d9a3ed8d51535fa451a6d740fe6a679b27c91f080b96e8dc9da448856ffb0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc2379366ac5f1fbcb45f5b4bb3c09ddd591958fc30f30662a30f736db1d9c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2379366ac5f1fbcb45f5b4bb3c09ddd591958fc30f30662a30f736db1d9c9f->enter($__internal_dc2379366ac5f1fbcb45f5b4bb3c09ddd591958fc30f30662a30f736db1d9c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc2379366ac5f1fbcb45f5b4bb3c09ddd591958fc30f30662a30f736db1d9c9f->leave($__internal_dc2379366ac5f1fbcb45f5b4bb3c09ddd591958fc30f30662a30f736db1d9c9f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5971b0d179d38dd10b1fab3b3a068b3149ee17220f13305cbcdc20cd12a63dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5971b0d179d38dd10b1fab3b3a068b3149ee17220f13305cbcdc20cd12a63dda->enter($__internal_5971b0d179d38dd10b1fab3b3a068b3149ee17220f13305cbcdc20cd12a63dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5971b0d179d38dd10b1fab3b3a068b3149ee17220f13305cbcdc20cd12a63dda->leave($__internal_5971b0d179d38dd10b1fab3b3a068b3149ee17220f13305cbcdc20cd12a63dda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
