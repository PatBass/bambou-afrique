<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b0a315a27aa77e6ad3188adde20e8b8290415938f86c407a2ea428e97c6c7030 extends Twig_Template
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
        $__internal_bf6423c8216d1be2e9667bb0903c509db169c74d1fa845da99915f1d95aa7556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6423c8216d1be2e9667bb0903c509db169c74d1fa845da99915f1d95aa7556->enter($__internal_bf6423c8216d1be2e9667bb0903c509db169c74d1fa845da99915f1d95aa7556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bf6423c8216d1be2e9667bb0903c509db169c74d1fa845da99915f1d95aa7556->leave($__internal_bf6423c8216d1be2e9667bb0903c509db169c74d1fa845da99915f1d95aa7556_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
