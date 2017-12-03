<?php

/* MainBundle:Main:contact_form.html.twig */
class __TwigTemplate_1ccfb380829f4743721f714e6edb53daaad31afe3f7d820586ccc5b5b1731cf3 extends Twig_Template
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
        $__internal_fc30f022c5aff4a450a933ef2f6fbd874f72bd442da0a374d3085200a2775075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc30f022c5aff4a450a933ef2f6fbd874f72bd442da0a374d3085200a2775075->enter($__internal_fc30f022c5aff4a450a933ef2f6fbd874f72bd442da0a374d3085200a2775075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:contact_form.html.twig"));

        // line 1
        echo "<div class=\"row\">
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'errors');
        echo "
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), 'widget', array("attr" => array("placeholder" => "Your Name", "title" => "Your Name", "class" => "form-control")));
        echo "
            <p class=\"help-block text-danger\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), 'errors');
        echo "</p>
        </div>
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("placeholder" => "Your Email", "title" => "Your Email", "class" => "form-control")));
        echo "
            <p class=\"help-block text-danger\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "</p>
        </div>
        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "phone", array()), 'widget', array("attr" => array("placeholder" => "Your Phone", "title" => "Your Phone", "class" => "form-control")));
        echo "
            <p class=\"help-block text-danger\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "phone", array()), 'errors');
        echo "</p>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "message", array()), 'widget', array("attr" => array("placeholder" => "Your Message", "title" => "Your Message", "class" => "form-control")));
        echo "
            <p class=\"help-block text-danger\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "message", array()), 'errors');
        echo "</p>
        </div>
    </div>
</div>";
        
        $__internal_fc30f022c5aff4a450a933ef2f6fbd874f72bd442da0a374d3085200a2775075->leave($__internal_fc30f022c5aff4a450a933ef2f6fbd874f72bd442da0a374d3085200a2775075_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:contact_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  63 => 19,  55 => 14,  51 => 13,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    {{ form_errors(form) }}
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_widget(form.name,  {'attr': {'placeholder':'Your Name', 'title':'Your Name', 'class':'form-control'}}) }}
            <p class=\"help-block text-danger\">{{ form_errors(form.name) }}</p>
        </div>
        <div class=\"form-group\">
            {{ form_widget(form.email,  {'attr': {'placeholder':'Your Email', 'title':'Your Email', 'class':'form-control'}}) }}
            <p class=\"help-block text-danger\">{{ form_errors(form.email) }}</p>
        </div>
        <div class=\"form-group\">
            {{ form_widget(form.phone,  {'attr': {'placeholder':'Your Phone', 'title':'Your Phone', 'class':'form-control'}}) }}
            <p class=\"help-block text-danger\">{{ form_errors(form.phone) }}</p>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_widget(form.message,  {'attr': {'placeholder':'Your Message', 'title':'Your Message', 'class':'form-control'}}) }}
            <p class=\"help-block text-danger\">{{ form_errors(form.message) }}</p>
        </div>
    </div>
</div>", "MainBundle:Main:contact_form.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Main/contact_form.html.twig");
    }
}
