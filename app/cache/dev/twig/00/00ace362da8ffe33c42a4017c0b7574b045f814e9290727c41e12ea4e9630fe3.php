<?php

/* MainBundle:Main:translation.html.twig */
class __TwigTemplate_9857d39653f3d8777dc40db6c81d3a40bb4f1fb4bee24efde19de0b186149de8 extends Twig_Template
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
        $__internal_5792b674098752619c85a2ede6dfd41a2a0471918c7156f71e21f032464fd9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5792b674098752619c85a2ede6dfd41a2a0471918c7156f71e21f032464fd9c5->enter($__internal_5792b674098752619c85a2ede6dfd41a2a0471918c7156f71e21f032464fd9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:translation.html.twig"));

        // line 1
        echo "<html>
    <body>
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello", array(), "messages"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "! ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "
    </body>
</html>";
        
        $__internal_5792b674098752619c85a2ede6dfd41a2a0471918c7156f71e21f032464fd9c5->leave($__internal_5792b674098752619c85a2ede6dfd41a2a0471918c7156f71e21f032464fd9c5_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        {{ 'Hello'|trans({}, 'messages') }} {{ name }}! {{ 'Search'|trans }}
    </body>
</html>", "MainBundle:Main:translation.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Main/translation.html.twig");
    }
}
