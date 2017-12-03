<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9cb17de04812610e7984d572a3b6eeec35487bab1033620e7bd94bb6b4c7e526 extends Twig_Template
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
        $__internal_c85a5fa80ccecc240f75d2b686f0b28ffaf7bc3fdd67e2db8471e6e5adff21d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85a5fa80ccecc240f75d2b686f0b28ffaf7bc3fdd67e2db8471e6e5adff21d8->enter($__internal_c85a5fa80ccecc240f75d2b686f0b28ffaf7bc3fdd67e2db8471e6e5adff21d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c85a5fa80ccecc240f75d2b686f0b28ffaf7bc3fdd67e2db8471e6e5adff21d8->leave($__internal_c85a5fa80ccecc240f75d2b686f0b28ffaf7bc3fdd67e2db8471e6e5adff21d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
