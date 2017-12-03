<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3e511beecb17091e179791297d0b438dd2483000c40a69f2dc6279d4945142b3 extends Twig_Template
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
        $__internal_2f1934a098d36542399fbdb8c60c7cc1c1ed54b7466613049e2ba61b4d0cf52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1934a098d36542399fbdb8c60c7cc1c1ed54b7466613049e2ba61b4d0cf52a->enter($__internal_2f1934a098d36542399fbdb8c60c7cc1c1ed54b7466613049e2ba61b4d0cf52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f1934a098d36542399fbdb8c60c7cc1c1ed54b7466613049e2ba61b4d0cf52a->leave($__internal_2f1934a098d36542399fbdb8c60c7cc1c1ed54b7466613049e2ba61b4d0cf52a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
