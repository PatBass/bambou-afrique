<?php

/* MainBundle:Main:translation.html.twig */
class __TwigTemplate_7f1439fa43a310a565bd3ab8d627bdee1d88015e836e1dfa83d3aef63b7b5127 extends Twig_Template
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
        $__internal_3b4251de46eafc990402ce93ce084884e3e05eca03c078c83adc02bb9ea8d353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4251de46eafc990402ce93ce084884e3e05eca03c078c83adc02bb9ea8d353->enter($__internal_3b4251de46eafc990402ce93ce084884e3e05eca03c078c83adc02bb9ea8d353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:translation.html.twig"));

        // line 1
        echo "<html>
    <body>
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello", array(), "messages"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "! ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "
    </body>
</html>";
        
        $__internal_3b4251de46eafc990402ce93ce084884e3e05eca03c078c83adc02bb9ea8d353->leave($__internal_3b4251de46eafc990402ce93ce084884e3e05eca03c078c83adc02bb9ea8d353_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <body>
        {{ 'Hello'|trans({}, 'messages') }} {{ name }}! {{ 'Search'|trans }}
    </body>
</html>", "MainBundle:Main:translation.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/translation.html.twig");
    }
}
