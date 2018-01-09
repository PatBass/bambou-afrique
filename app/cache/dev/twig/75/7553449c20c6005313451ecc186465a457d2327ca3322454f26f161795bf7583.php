<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_85235bc2ba43ec826d7145a8002b859dc5f1b5de1a393079c7489e661f8b5b73 extends Twig_Template
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
        $__internal_1ab5c65d0e9d773ad738168ff6889a287d1dbeaa394f23d16007d90c1bc7f947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab5c65d0e9d773ad738168ff6889a287d1dbeaa394f23d16007d90c1bc7f947->enter($__internal_1ab5c65d0e9d773ad738168ff6889a287d1dbeaa394f23d16007d90c1bc7f947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1ab5c65d0e9d773ad738168ff6889a287d1dbeaa394f23d16007d90c1bc7f947->leave($__internal_1ab5c65d0e9d773ad738168ff6889a287d1dbeaa394f23d16007d90c1bc7f947_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
