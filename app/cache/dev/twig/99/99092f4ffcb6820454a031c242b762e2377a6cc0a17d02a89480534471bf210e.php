<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bcde40af6e607f5a62bf29250291a20f8fb867e27afc8d0148acb6f4056507fb extends Twig_Template
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
        $__internal_33c008d63c85b1eb6aeaf3ab3c33d1479f10612fbdd7e12dcb2caaafc8e1babe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c008d63c85b1eb6aeaf3ab3c33d1479f10612fbdd7e12dcb2caaafc8e1babe->enter($__internal_33c008d63c85b1eb6aeaf3ab3c33d1479f10612fbdd7e12dcb2caaafc8e1babe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_33c008d63c85b1eb6aeaf3ab3c33d1479f10612fbdd7e12dcb2caaafc8e1babe->leave($__internal_33c008d63c85b1eb6aeaf3ab3c33d1479f10612fbdd7e12dcb2caaafc8e1babe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
