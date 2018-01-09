<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_188e97c1c77f723cb8ebea7106844fd4a1b8764e80783119891bc4ff22858e22 extends Twig_Template
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
        $__internal_cf076d9a17b02aa7d1ace04e3bbb63462230ff4630bf80392866967ca69f77e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf076d9a17b02aa7d1ace04e3bbb63462230ff4630bf80392866967ca69f77e6->enter($__internal_cf076d9a17b02aa7d1ace04e3bbb63462230ff4630bf80392866967ca69f77e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_cf076d9a17b02aa7d1ace04e3bbb63462230ff4630bf80392866967ca69f77e6->leave($__internal_cf076d9a17b02aa7d1ace04e3bbb63462230ff4630bf80392866967ca69f77e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
