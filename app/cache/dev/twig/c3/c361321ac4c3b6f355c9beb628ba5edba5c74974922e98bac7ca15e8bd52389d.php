<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0e9c75d5a1b55098281d1a5e8a1cdc01fd64e64ff3f890481ec65cf98b74f341 extends Twig_Template
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
        $__internal_ddb2c21015d679fece08bd155e6b940a911113691cd3b86762614eb285a00999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb2c21015d679fece08bd155e6b940a911113691cd3b86762614eb285a00999->enter($__internal_ddb2c21015d679fece08bd155e6b940a911113691cd3b86762614eb285a00999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ddb2c21015d679fece08bd155e6b940a911113691cd3b86762614eb285a00999->leave($__internal_ddb2c21015d679fece08bd155e6b940a911113691cd3b86762614eb285a00999_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
