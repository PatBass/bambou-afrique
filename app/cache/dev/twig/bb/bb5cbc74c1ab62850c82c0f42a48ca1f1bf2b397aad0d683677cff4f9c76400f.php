<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a4d2c36334a4a7bd201c26711fca280739ff00312f86c39e7ba30b3bec1d49c8 extends Twig_Template
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
        $__internal_b790fc5eab43c3f48c6563470afdbe449bf08f16582eb2be9c85fba3ee231c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b790fc5eab43c3f48c6563470afdbe449bf08f16582eb2be9c85fba3ee231c63->enter($__internal_b790fc5eab43c3f48c6563470afdbe449bf08f16582eb2be9c85fba3ee231c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b790fc5eab43c3f48c6563470afdbe449bf08f16582eb2be9c85fba3ee231c63->leave($__internal_b790fc5eab43c3f48c6563470afdbe449bf08f16582eb2be9c85fba3ee231c63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
