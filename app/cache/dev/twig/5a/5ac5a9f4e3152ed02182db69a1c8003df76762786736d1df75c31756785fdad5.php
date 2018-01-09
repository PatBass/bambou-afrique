<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ba1a4854f5993951757633ff2c2dd9ac7f7e8a56f2d1c21d2dca6be59f58900f extends Twig_Template
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
        $__internal_4565800100e6c08218fd41b4c48b6c2b1585d6d3513f8924e699a8a2ea863323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4565800100e6c08218fd41b4c48b6c2b1585d6d3513f8924e699a8a2ea863323->enter($__internal_4565800100e6c08218fd41b4c48b6c2b1585d6d3513f8924e699a8a2ea863323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_4565800100e6c08218fd41b4c48b6c2b1585d6d3513f8924e699a8a2ea863323->leave($__internal_4565800100e6c08218fd41b4c48b6c2b1585d6d3513f8924e699a8a2ea863323_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
