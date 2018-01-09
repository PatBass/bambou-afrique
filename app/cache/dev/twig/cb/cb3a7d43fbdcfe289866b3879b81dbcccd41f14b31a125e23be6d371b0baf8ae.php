<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_39b09956fc10e02c628cb27ddf504d14e8fcd22d760141e514b274db894ad260 extends Twig_Template
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
        $__internal_f1aae4ee9923f0c01ca2d31c3e5395d08dafb3ac498bb51c6cd6843440837c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1aae4ee9923f0c01ca2d31c3e5395d08dafb3ac498bb51c6cd6843440837c5f->enter($__internal_f1aae4ee9923f0c01ca2d31c3e5395d08dafb3ac498bb51c6cd6843440837c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f1aae4ee9923f0c01ca2d31c3e5395d08dafb3ac498bb51c6cd6843440837c5f->leave($__internal_f1aae4ee9923f0c01ca2d31c3e5395d08dafb3ac498bb51c6cd6843440837c5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/bambou-afrique/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
