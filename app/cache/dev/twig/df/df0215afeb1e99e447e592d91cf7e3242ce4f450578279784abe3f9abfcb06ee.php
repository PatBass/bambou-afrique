<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f3464c84a6bd5f455506e45e1f666e3a7cf9ecf32caf86dc152c2cd976a7d341 extends Twig_Template
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
        $__internal_b58f2a6b5d5bb8c2131d1a77fd560dc8fb602ab4192f55e9df910d6677409dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58f2a6b5d5bb8c2131d1a77fd560dc8fb602ab4192f55e9df910d6677409dd0->enter($__internal_b58f2a6b5d5bb8c2131d1a77fd560dc8fb602ab4192f55e9df910d6677409dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b58f2a6b5d5bb8c2131d1a77fd560dc8fb602ab4192f55e9df910d6677409dd0->leave($__internal_b58f2a6b5d5bb8c2131d1a77fd560dc8fb602ab4192f55e9df910d6677409dd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
