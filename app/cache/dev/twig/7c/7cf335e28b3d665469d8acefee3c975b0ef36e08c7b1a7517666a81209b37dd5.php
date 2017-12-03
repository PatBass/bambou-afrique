<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_cdf70b72dbf62ecbd2eb1b94b336c94ca1de0f0eec9dc887bc4a0ce747ede4a6 extends Twig_Template
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
        $__internal_4df5a59dbd27e91a2176b5c69fa105c3e5bb4ae2555e45b53c41851ec2c2bb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df5a59dbd27e91a2176b5c69fa105c3e5bb4ae2555e45b53c41851ec2c2bb9a->enter($__internal_4df5a59dbd27e91a2176b5c69fa105c3e5bb4ae2555e45b53c41851ec2c2bb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4df5a59dbd27e91a2176b5c69fa105c3e5bb4ae2555e45b53c41851ec2c2bb9a->leave($__internal_4df5a59dbd27e91a2176b5c69fa105c3e5bb4ae2555e45b53c41851ec2c2bb9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
