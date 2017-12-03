<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8fbe2353b09a33565a6de8478aa73cd35bf7df169bc89bc684895423db634459 extends Twig_Template
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
        $__internal_3ea89a3be131b2de14b41d33e17f0ebb27e8a1f35ddf9a4756577b8ac20bc819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea89a3be131b2de14b41d33e17f0ebb27e8a1f35ddf9a4756577b8ac20bc819->enter($__internal_3ea89a3be131b2de14b41d33e17f0ebb27e8a1f35ddf9a4756577b8ac20bc819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3ea89a3be131b2de14b41d33e17f0ebb27e8a1f35ddf9a4756577b8ac20bc819->leave($__internal_3ea89a3be131b2de14b41d33e17f0ebb27e8a1f35ddf9a4756577b8ac20bc819_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
