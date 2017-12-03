<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_7467947c1dd2128abae30e11c61c0997c655b4dceb25ae212c026c6bd88d9b67 extends Twig_Template
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
        $__internal_2421cee1cf7529891c8c1d928d1d6a6ed4e6df82ad0635634b1d54323c57d7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2421cee1cf7529891c8c1d928d1d6a6ed4e6df82ad0635634b1d54323c57d7a3->enter($__internal_2421cee1cf7529891c8c1d928d1d6a6ed4e6df82ad0635634b1d54323c57d7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2421cee1cf7529891c8c1d928d1d6a6ed4e6df82ad0635634b1d54323c57d7a3->leave($__internal_2421cee1cf7529891c8c1d928d1d6a6ed4e6df82ad0635634b1d54323c57d7a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
