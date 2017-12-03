<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0973a2b23c6ba612e06095fff644bc6d14d2ee7e56e99b30b602b5caf0a4cf52 extends Twig_Template
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
        $__internal_982fd44dd5c162dba15de8f91cc5a5d4dbbed79ac365c340aa4922cfd6e6b518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982fd44dd5c162dba15de8f91cc5a5d4dbbed79ac365c340aa4922cfd6e6b518->enter($__internal_982fd44dd5c162dba15de8f91cc5a5d4dbbed79ac365c340aa4922cfd6e6b518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_982fd44dd5c162dba15de8f91cc5a5d4dbbed79ac365c340aa4922cfd6e6b518->leave($__internal_982fd44dd5c162dba15de8f91cc5a5d4dbbed79ac365c340aa4922cfd6e6b518_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
