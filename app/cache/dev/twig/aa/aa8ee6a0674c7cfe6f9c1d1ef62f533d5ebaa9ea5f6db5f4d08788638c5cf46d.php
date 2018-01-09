<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3b5808bdf163deb78fec19db29b65ea5ce1b5a6823c5c545afdada35c9fcc9c2 extends Twig_Template
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
        $__internal_0bd66da6b7f5d3e83e746ca982779dcdf2ae98448e0513ad850b5d64bd5992da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd66da6b7f5d3e83e746ca982779dcdf2ae98448e0513ad850b5d64bd5992da->enter($__internal_0bd66da6b7f5d3e83e746ca982779dcdf2ae98448e0513ad850b5d64bd5992da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0bd66da6b7f5d3e83e746ca982779dcdf2ae98448e0513ad850b5d64bd5992da->leave($__internal_0bd66da6b7f5d3e83e746ca982779dcdf2ae98448e0513ad850b5d64bd5992da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
