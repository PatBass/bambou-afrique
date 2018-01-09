<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_961d136f05de8f5c002f57bf14a6451349bc85ba9248be36ed86b630ad7e2320 extends Twig_Template
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
        $__internal_c79364e9b2032a24ff4b7ae64571eefa55a957a62d1f776cd0c622c855c297bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79364e9b2032a24ff4b7ae64571eefa55a957a62d1f776cd0c622c855c297bc->enter($__internal_c79364e9b2032a24ff4b7ae64571eefa55a957a62d1f776cd0c622c855c297bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_c79364e9b2032a24ff4b7ae64571eefa55a957a62d1f776cd0c622c855c297bc->leave($__internal_c79364e9b2032a24ff4b7ae64571eefa55a957a62d1f776cd0c622c855c297bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
