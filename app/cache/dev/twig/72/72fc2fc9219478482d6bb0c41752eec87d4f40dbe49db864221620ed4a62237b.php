<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_c095aee012777a2a5161e01ef54113dd1a4e99f0a1b2240361cc8c16eede6304 extends Twig_Template
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
        $__internal_d1db8b2c6a28d6832876fd7f34d1c093d9d604c8e72c2174a43dcef517f7995c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1db8b2c6a28d6832876fd7f34d1c093d9d604c8e72c2174a43dcef517f7995c->enter($__internal_d1db8b2c6a28d6832876fd7f34d1c093d9d604c8e72c2174a43dcef517f7995c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d1db8b2c6a28d6832876fd7f34d1c093d9d604c8e72c2174a43dcef517f7995c->leave($__internal_d1db8b2c6a28d6832876fd7f34d1c093d9d604c8e72c2174a43dcef517f7995c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
