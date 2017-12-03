<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2956477c912d0579e5cf7bb47c509a8fdbd2bfa930c31f430c4e00ef44a86339 extends Twig_Template
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
        $__internal_93633a0378b89192d25fcf40a9e771719532330997f84b07131a63674e36b93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93633a0378b89192d25fcf40a9e771719532330997f84b07131a63674e36b93a->enter($__internal_93633a0378b89192d25fcf40a9e771719532330997f84b07131a63674e36b93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_93633a0378b89192d25fcf40a9e771719532330997f84b07131a63674e36b93a->leave($__internal_93633a0378b89192d25fcf40a9e771719532330997f84b07131a63674e36b93a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
