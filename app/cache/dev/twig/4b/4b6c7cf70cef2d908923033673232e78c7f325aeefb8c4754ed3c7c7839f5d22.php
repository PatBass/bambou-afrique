<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b628e3bb16fa1b094613c3e2ddfa1678701a1d3a3c91a602d114b66f82adb7f4 extends Twig_Template
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
        $__internal_278ff2d36951f68028646a5ece7ecfe0d42e0e994caf9a1673bc9f6c6bfd2e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278ff2d36951f68028646a5ece7ecfe0d42e0e994caf9a1673bc9f6c6bfd2e43->enter($__internal_278ff2d36951f68028646a5ece7ecfe0d42e0e994caf9a1673bc9f6c6bfd2e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_278ff2d36951f68028646a5ece7ecfe0d42e0e994caf9a1673bc9f6c6bfd2e43->leave($__internal_278ff2d36951f68028646a5ece7ecfe0d42e0e994caf9a1673bc9f6c6bfd2e43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
