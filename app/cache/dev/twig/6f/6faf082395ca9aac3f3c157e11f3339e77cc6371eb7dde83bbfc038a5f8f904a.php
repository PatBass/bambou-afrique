<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_8fc510cb928ffada851f01bf4e922f2313a9775c82b9bc52ca983cd90ea2f644 extends Twig_Template
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
        $__internal_76fe7358c688c6fb015edd3ffeb78c42c5d31f4d5b7f0d8d410f51b8474de648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fe7358c688c6fb015edd3ffeb78c42c5d31f4d5b7f0d8d410f51b8474de648->enter($__internal_76fe7358c688c6fb015edd3ffeb78c42c5d31f4d5b7f0d8d410f51b8474de648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_76fe7358c688c6fb015edd3ffeb78c42c5d31f4d5b7f0d8d410f51b8474de648->leave($__internal_76fe7358c688c6fb015edd3ffeb78c42c5d31f4d5b7f0d8d410f51b8474de648_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
