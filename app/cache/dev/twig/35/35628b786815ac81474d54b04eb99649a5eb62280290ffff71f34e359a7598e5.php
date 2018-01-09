<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d1e7807dcda4f87dea6a6cd9c8a6a4c0bd34f5a34bde8a0705dbd61432cda9d8 extends Twig_Template
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
        $__internal_b83a07c1c2b891175a8ed45db4636cf7d1f31aab93aa6ea10aefccafceabc323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83a07c1c2b891175a8ed45db4636cf7d1f31aab93aa6ea10aefccafceabc323->enter($__internal_b83a07c1c2b891175a8ed45db4636cf7d1f31aab93aa6ea10aefccafceabc323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b83a07c1c2b891175a8ed45db4636cf7d1f31aab93aa6ea10aefccafceabc323->leave($__internal_b83a07c1c2b891175a8ed45db4636cf7d1f31aab93aa6ea10aefccafceabc323_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
