<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a0e0af35778c6d7f9f451919fc50f39a019ef4365ed299fd28b9af44d1b5687a extends Twig_Template
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
        $__internal_0b8a51e53f88a9c4b866c733028137b9ce95eed07e58d01709a1223f5c5790b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8a51e53f88a9c4b866c733028137b9ce95eed07e58d01709a1223f5c5790b2->enter($__internal_0b8a51e53f88a9c4b866c733028137b9ce95eed07e58d01709a1223f5c5790b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0b8a51e53f88a9c4b866c733028137b9ce95eed07e58d01709a1223f5c5790b2->leave($__internal_0b8a51e53f88a9c4b866c733028137b9ce95eed07e58d01709a1223f5c5790b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
