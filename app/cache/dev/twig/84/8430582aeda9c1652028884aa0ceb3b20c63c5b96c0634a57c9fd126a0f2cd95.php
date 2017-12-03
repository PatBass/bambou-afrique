<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_229f36a85d79961509ff88514723cfe84b77d8f566cccb1bba6fcae7b1ee1cb1 extends Twig_Template
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
        $__internal_b83d800ee2c8e7f7c17b3f38f3c4b67a2f5a94a22abd56f7baf154a3fbe49e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83d800ee2c8e7f7c17b3f38f3c4b67a2f5a94a22abd56f7baf154a3fbe49e0e->enter($__internal_b83d800ee2c8e7f7c17b3f38f3c4b67a2f5a94a22abd56f7baf154a3fbe49e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b83d800ee2c8e7f7c17b3f38f3c4b67a2f5a94a22abd56f7baf154a3fbe49e0e->leave($__internal_b83d800ee2c8e7f7c17b3f38f3c4b67a2f5a94a22abd56f7baf154a3fbe49e0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
