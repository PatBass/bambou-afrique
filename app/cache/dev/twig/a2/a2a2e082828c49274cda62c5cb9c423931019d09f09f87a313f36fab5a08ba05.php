<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_4641c9408cb6e2ec1ec069d46562b3770568672efdea6bf06e0f4d8520b158ad extends Twig_Template
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
        $__internal_5c6f6b81322d7ec5df96d7b4cd4642153ec56e9aa982c67af41a8a3b10f448bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6f6b81322d7ec5df96d7b4cd4642153ec56e9aa982c67af41a8a3b10f448bd->enter($__internal_5c6f6b81322d7ec5df96d7b4cd4642153ec56e9aa982c67af41a8a3b10f448bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5c6f6b81322d7ec5df96d7b4cd4642153ec56e9aa982c67af41a8a3b10f448bd->leave($__internal_5c6f6b81322d7ec5df96d7b4cd4642153ec56e9aa982c67af41a8a3b10f448bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
