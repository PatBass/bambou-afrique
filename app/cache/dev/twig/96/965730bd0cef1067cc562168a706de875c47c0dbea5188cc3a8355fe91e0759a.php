<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_72600e72c8f03a19ea12159d72ecc8247eee2116ce8b07cc38b20791bce25abe extends Twig_Template
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
        $__internal_9ff0567d9fc1d669344786ae2e04b66dae3fbcdfcc5a0a8db4f2260df70ecf43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff0567d9fc1d669344786ae2e04b66dae3fbcdfcc5a0a8db4f2260df70ecf43->enter($__internal_9ff0567d9fc1d669344786ae2e04b66dae3fbcdfcc5a0a8db4f2260df70ecf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9ff0567d9fc1d669344786ae2e04b66dae3fbcdfcc5a0a8db4f2260df70ecf43->leave($__internal_9ff0567d9fc1d669344786ae2e04b66dae3fbcdfcc5a0a8db4f2260df70ecf43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
