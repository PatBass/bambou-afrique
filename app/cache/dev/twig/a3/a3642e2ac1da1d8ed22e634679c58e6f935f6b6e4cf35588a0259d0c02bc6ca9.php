<?php

/* MainBundle:Common:banner.html.twig */
class __TwigTemplate_956662f2632e6cbf8ad7489398e01ae9f0b3ee718210b278b2a0c774b8f30ca2 extends Twig_Template
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
        $__internal_9744c4894a839ce6094a57194643af5659b502ea1e32917ee2abe2be53ba4e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9744c4894a839ce6094a57194643af5659b502ea1e32917ee2abe2be53ba4e0b->enter($__internal_9744c4894a839ce6094a57194643af5659b502ea1e32917ee2abe2be53ba4e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Common:banner.html.twig"));

        // line 1
        echo "<div class=\"banner\">
    <div class=\"banner-in\">

        <div class=\"wmuSlider example1\">
            <div class=\"wmuSliderWrapper\">

            </div>
        </div>

    </div>
</div>";
        
        $__internal_9744c4894a839ce6094a57194643af5659b502ea1e32917ee2abe2be53ba4e0b->leave($__internal_9744c4894a839ce6094a57194643af5659b502ea1e32917ee2abe2be53ba4e0b_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Common:banner.html.twig";
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
        return new Twig_Source("<div class=\"banner\">
    <div class=\"banner-in\">

        <div class=\"wmuSlider example1\">
            <div class=\"wmuSliderWrapper\">

            </div>
        </div>

    </div>
</div>", "MainBundle:Common:banner.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Common/banner.html.twig");
    }
}
