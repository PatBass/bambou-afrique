<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_88132a7301de15618c789ba723623c56adaa8cad0be65372476c68deb42ce4a4 extends Twig_Template
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
        $__internal_aee0d39959d0a71ca64aa5347e37c23e1eec722dbc3b3f27c4c21499cc062936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee0d39959d0a71ca64aa5347e37c23e1eec722dbc3b3f27c4c21499cc062936->enter($__internal_aee0d39959d0a71ca64aa5347e37c23e1eec722dbc3b3f27c4c21499cc062936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_aee0d39959d0a71ca64aa5347e37c23e1eec722dbc3b3f27c4c21499cc062936->leave($__internal_aee0d39959d0a71ca64aa5347e37c23e1eec722dbc3b3f27c4c21499cc062936_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
