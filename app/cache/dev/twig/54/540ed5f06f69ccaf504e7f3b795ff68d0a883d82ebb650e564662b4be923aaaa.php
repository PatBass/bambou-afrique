<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f98c76a40b7bf58ee7cb270c36cfc15681ea34ffd435fdf8f5ea8bf86de3afa1 extends Twig_Template
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
        $__internal_53f80b1f5f5e48dc6209591b21843ee45cc4f8aeb41a198070cbf369e2e2262d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f80b1f5f5e48dc6209591b21843ee45cc4f8aeb41a198070cbf369e2e2262d->enter($__internal_53f80b1f5f5e48dc6209591b21843ee45cc4f8aeb41a198070cbf369e2e2262d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_53f80b1f5f5e48dc6209591b21843ee45cc4f8aeb41a198070cbf369e2e2262d->leave($__internal_53f80b1f5f5e48dc6209591b21843ee45cc4f8aeb41a198070cbf369e2e2262d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
