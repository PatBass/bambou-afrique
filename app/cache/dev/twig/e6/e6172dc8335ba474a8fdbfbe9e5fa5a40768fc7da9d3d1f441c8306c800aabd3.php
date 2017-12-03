<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_84132e8ebfbd11c3993db610570bc1c9a00d0b85e27864c4177fa6be9d54325f extends Twig_Template
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
        $__internal_f995bc66ff9b0800678f22c89063ca0e2eaa4202f3571fc4ca3f417927f92f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f995bc66ff9b0800678f22c89063ca0e2eaa4202f3571fc4ca3f417927f92f37->enter($__internal_f995bc66ff9b0800678f22c89063ca0e2eaa4202f3571fc4ca3f417927f92f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f995bc66ff9b0800678f22c89063ca0e2eaa4202f3571fc4ca3f417927f92f37->leave($__internal_f995bc66ff9b0800678f22c89063ca0e2eaa4202f3571fc4ca3f417927f92f37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
