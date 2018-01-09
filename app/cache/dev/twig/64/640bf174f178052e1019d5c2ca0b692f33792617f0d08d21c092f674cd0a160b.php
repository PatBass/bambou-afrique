<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_33660886c31f6ce93d6e0204d018b8bb1b5b22c867bf1adcdfbfad047837d33f extends Twig_Template
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
        $__internal_de113770f9410a5c6fe9751ebd8b72d9e451f19c4e11e601d27cc49b7d220f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de113770f9410a5c6fe9751ebd8b72d9e451f19c4e11e601d27cc49b7d220f58->enter($__internal_de113770f9410a5c6fe9751ebd8b72d9e451f19c4e11e601d27cc49b7d220f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_de113770f9410a5c6fe9751ebd8b72d9e451f19c4e11e601d27cc49b7d220f58->leave($__internal_de113770f9410a5c6fe9751ebd8b72d9e451f19c4e11e601d27cc49b7d220f58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
