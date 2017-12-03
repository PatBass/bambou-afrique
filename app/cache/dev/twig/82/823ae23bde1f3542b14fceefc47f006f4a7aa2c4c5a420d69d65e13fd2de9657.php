<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a90b363bf0c4faadedc2d29e648fa548c4e0b6ab05cd0cdab12e6e8db35e123b extends Twig_Template
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
        $__internal_ff9f05b6ee9a0e373fd4ee6b0ed285aae4223b218969e58e8634d116e52abbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9f05b6ee9a0e373fd4ee6b0ed285aae4223b218969e58e8634d116e52abbbd->enter($__internal_ff9f05b6ee9a0e373fd4ee6b0ed285aae4223b218969e58e8634d116e52abbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_ff9f05b6ee9a0e373fd4ee6b0ed285aae4223b218969e58e8634d116e52abbbd->leave($__internal_ff9f05b6ee9a0e373fd4ee6b0ed285aae4223b218969e58e8634d116e52abbbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
