<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5f564c4196e2320ca6c589f40536f1dad64b006e240019a102fa3f36edcad958 extends Twig_Template
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
        $__internal_210271c4f4d2ab1ef7aafdaa429f2b7896e0bffbbc5bc0639d0dc1c61ad6bd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210271c4f4d2ab1ef7aafdaa429f2b7896e0bffbbc5bc0639d0dc1c61ad6bd3e->enter($__internal_210271c4f4d2ab1ef7aafdaa429f2b7896e0bffbbc5bc0639d0dc1c61ad6bd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_210271c4f4d2ab1ef7aafdaa429f2b7896e0bffbbc5bc0639d0dc1c61ad6bd3e->leave($__internal_210271c4f4d2ab1ef7aafdaa429f2b7896e0bffbbc5bc0639d0dc1c61ad6bd3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
