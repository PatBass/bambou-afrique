<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_37fdbeed2d31e68c353f5d909b7be936d290126f3cf3a6da50e532d7075f4010 extends Twig_Template
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
        $__internal_297e40b677feb7f6c8bdfc102d78f377143317be5c02ca15dc2238e7c1a9e2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297e40b677feb7f6c8bdfc102d78f377143317be5c02ca15dc2238e7c1a9e2da->enter($__internal_297e40b677feb7f6c8bdfc102d78f377143317be5c02ca15dc2238e7c1a9e2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_297e40b677feb7f6c8bdfc102d78f377143317be5c02ca15dc2238e7c1a9e2da->leave($__internal_297e40b677feb7f6c8bdfc102d78f377143317be5c02ca15dc2238e7c1a9e2da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
