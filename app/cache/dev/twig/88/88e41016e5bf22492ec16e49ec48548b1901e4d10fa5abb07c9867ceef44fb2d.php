<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cf12852af2bd0358fedad35ba033160924280917af7b0b28ffa7f364497029d4 extends Twig_Template
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
        $__internal_f9e9c0142eb8963cf1cdfbaabeb93b36f31ea63c6c110be0135d9c1bb172c16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e9c0142eb8963cf1cdfbaabeb93b36f31ea63c6c110be0135d9c1bb172c16c->enter($__internal_f9e9c0142eb8963cf1cdfbaabeb93b36f31ea63c6c110be0135d9c1bb172c16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f9e9c0142eb8963cf1cdfbaabeb93b36f31ea63c6c110be0135d9c1bb172c16c->leave($__internal_f9e9c0142eb8963cf1cdfbaabeb93b36f31ea63c6c110be0135d9c1bb172c16c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
