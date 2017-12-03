<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_3569bd043709fc79c247c537ff60a573bcc4faa9456796f3e62c352260c170b6 extends Twig_Template
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
        $__internal_95fe6b1040c1e24cdf0c4570e6992566deddd14cd12d096e7b33d0c8e7fb74b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fe6b1040c1e24cdf0c4570e6992566deddd14cd12d096e7b33d0c8e7fb74b8->enter($__internal_95fe6b1040c1e24cdf0c4570e6992566deddd14cd12d096e7b33d0c8e7fb74b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_95fe6b1040c1e24cdf0c4570e6992566deddd14cd12d096e7b33d0c8e7fb74b8->leave($__internal_95fe6b1040c1e24cdf0c4570e6992566deddd14cd12d096e7b33d0c8e7fb74b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
