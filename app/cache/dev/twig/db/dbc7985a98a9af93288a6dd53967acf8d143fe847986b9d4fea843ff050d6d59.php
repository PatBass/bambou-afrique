<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_94c26e770c57ec3b7babee6e8b3cf005c8c5f1714f978b58a061df74a0557433 extends Twig_Template
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
        $__internal_b33ab52ef486171de7e26ce063bcba347e54c379d9a37336be5d2b1b4110f3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33ab52ef486171de7e26ce063bcba347e54c379d9a37336be5d2b1b4110f3a8->enter($__internal_b33ab52ef486171de7e26ce063bcba347e54c379d9a37336be5d2b1b4110f3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b33ab52ef486171de7e26ce063bcba347e54c379d9a37336be5d2b1b4110f3a8->leave($__internal_b33ab52ef486171de7e26ce063bcba347e54c379d9a37336be5d2b1b4110f3a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
