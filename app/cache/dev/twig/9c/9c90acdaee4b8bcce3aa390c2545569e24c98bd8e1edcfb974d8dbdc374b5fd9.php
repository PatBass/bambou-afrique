<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c51b72a3a1c5d93cde7099bfb8e64319ed2babdf03b55dd573868ff0a7479b96 extends Twig_Template
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
        $__internal_b5f8c3a4e782bd55e93f936de8d97daa19472758f55b254503cd097cde24fa7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f8c3a4e782bd55e93f936de8d97daa19472758f55b254503cd097cde24fa7e->enter($__internal_b5f8c3a4e782bd55e93f936de8d97daa19472758f55b254503cd097cde24fa7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b5f8c3a4e782bd55e93f936de8d97daa19472758f55b254503cd097cde24fa7e->leave($__internal_b5f8c3a4e782bd55e93f936de8d97daa19472758f55b254503cd097cde24fa7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
