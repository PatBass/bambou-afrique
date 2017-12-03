<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e6481f647e6f14d3835bc02a1030e840eda30ec8c44fca4f497e9b344cbce92f extends Twig_Template
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
        $__internal_eb35833dba31bdd97d9137b893313ae22222a01534b6f82675f0a350d7f93f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb35833dba31bdd97d9137b893313ae22222a01534b6f82675f0a350d7f93f78->enter($__internal_eb35833dba31bdd97d9137b893313ae22222a01534b6f82675f0a350d7f93f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_eb35833dba31bdd97d9137b893313ae22222a01534b6f82675f0a350d7f93f78->leave($__internal_eb35833dba31bdd97d9137b893313ae22222a01534b6f82675f0a350d7f93f78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
