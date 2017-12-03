<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_60df412d3bda2c7e98efab73b585cc5d1eafd753177b224583d5d1d46ce37453 extends Twig_Template
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
        $__internal_5ac5599d2f7be22c877ecb979ff3a099b68c699423e1a0eb652e1ef43d342fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac5599d2f7be22c877ecb979ff3a099b68c699423e1a0eb652e1ef43d342fe6->enter($__internal_5ac5599d2f7be22c877ecb979ff3a099b68c699423e1a0eb652e1ef43d342fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5ac5599d2f7be22c877ecb979ff3a099b68c699423e1a0eb652e1ef43d342fe6->leave($__internal_5ac5599d2f7be22c877ecb979ff3a099b68c699423e1a0eb652e1ef43d342fe6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
