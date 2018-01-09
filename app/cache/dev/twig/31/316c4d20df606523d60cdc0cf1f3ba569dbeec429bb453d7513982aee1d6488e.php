<?php

/* MainBundle:Main:contact_form.html.twig */
class __TwigTemplate_2eff541aeea5478fa42a13f390753a133881d0edd9c891232bae644c8ec9bf1b extends Twig_Template
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
        $__internal_0b666c90692c1a0b8c583cda6d7bb38ab0cd0413ec7710ae2af3af417ec6897c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b666c90692c1a0b8c583cda6d7bb38ab0cd0413ec7710ae2af3af417ec6897c->enter($__internal_0b666c90692c1a0b8c583cda6d7bb38ab0cd0413ec7710ae2af3af417ec6897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:contact_form.html.twig"));

        // line 1
        echo "<div class=\"row\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("placeholder" => "Your Name", "title" => "Your Name", "class" => "form-control")));
        echo "
            <p class=\"help-block text-danger\">";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "</p>
        </div>
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Your Email", "title" => "Your Email", "class" => "form-control")));
        echo "
            <p class=\"help-block text-danger\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</p>
        </div>
        <div class=\"form-group\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("placeholder" => "Your Phone", "title" => "Your Phone", "class" => "form-control")));
        echo "
            <p class=\"help-block text-danger\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "</p>
        </div>
    </div>
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'widget', array("attr" => array("placeholder" => "Your Message", "title" => "Your Message", "class" => "form-control")));
        echo "
            <p class=\"help-block text-danger\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'errors');
        echo "</p>
        </div>
    </div>
</div>";
        
        $__internal_0b666c90692c1a0b8c583cda6d7bb38ab0cd0413ec7710ae2af3af417ec6897c->leave($__internal_0b666c90692c1a0b8c583cda6d7bb38ab0cd0413ec7710ae2af3af417ec6897c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
</div>", "MainBundle:Main:contact_form.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/contact_form.html.twig");
    }
}
