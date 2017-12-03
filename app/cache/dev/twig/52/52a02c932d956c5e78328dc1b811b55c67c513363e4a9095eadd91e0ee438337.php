<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_211fbf8271f11da5a549d2db4bde9a4990fb0aa367a64504264e8565192a69dc extends Twig_Template
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
        $__internal_6d149448dcadba047e9434f333200c99fa8fb5eaaeb1faa19906d4b510ec7491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d149448dcadba047e9434f333200c99fa8fb5eaaeb1faa19906d4b510ec7491->enter($__internal_6d149448dcadba047e9434f333200c99fa8fb5eaaeb1faa19906d4b510ec7491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6d149448dcadba047e9434f333200c99fa8fb5eaaeb1faa19906d4b510ec7491->leave($__internal_6d149448dcadba047e9434f333200c99fa8fb5eaaeb1faa19906d4b510ec7491_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
