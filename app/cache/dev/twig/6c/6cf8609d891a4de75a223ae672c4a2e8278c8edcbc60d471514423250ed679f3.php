<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9f8980f58354d56112cdfdbea836381bf23b59c718001f36ccd2e16a2f99bbe8 extends Twig_Template
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
        $__internal_dfa8391cc7fa5d42c107001c6fca272a1583d6cace4b9978dc3f1798f87ae9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa8391cc7fa5d42c107001c6fca272a1583d6cace4b9978dc3f1798f87ae9d6->enter($__internal_dfa8391cc7fa5d42c107001c6fca272a1583d6cace4b9978dc3f1798f87ae9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dfa8391cc7fa5d42c107001c6fca272a1583d6cace4b9978dc3f1798f87ae9d6->leave($__internal_dfa8391cc7fa5d42c107001c6fca272a1583d6cace4b9978dc3f1798f87ae9d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
