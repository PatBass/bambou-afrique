<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_48a19152dcc57967ac3d220d71d2f29734e0c1eb5e351e78353aaad28ad3de1e extends Twig_Template
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
        $__internal_0518b055dc2d950e05e3b2c7ea4eff071cecdf30b9f2ba9911b0fbaf5d21d272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0518b055dc2d950e05e3b2c7ea4eff071cecdf30b9f2ba9911b0fbaf5d21d272->enter($__internal_0518b055dc2d950e05e3b2c7ea4eff071cecdf30b9f2ba9911b0fbaf5d21d272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0518b055dc2d950e05e3b2c7ea4eff071cecdf30b9f2ba9911b0fbaf5d21d272->leave($__internal_0518b055dc2d950e05e3b2c7ea4eff071cecdf30b9f2ba9911b0fbaf5d21d272_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
