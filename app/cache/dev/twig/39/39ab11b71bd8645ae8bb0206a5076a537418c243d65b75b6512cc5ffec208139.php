<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3c2c2f52b9ec366cc2ef554483d797b7356720ed0278e537472af18c0efcdb43 extends Twig_Template
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
        $__internal_6b4ae3738ac9e19d8e443c78f22cacbbc62936e6a93aa72500b935a911f6afbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4ae3738ac9e19d8e443c78f22cacbbc62936e6a93aa72500b935a911f6afbb->enter($__internal_6b4ae3738ac9e19d8e443c78f22cacbbc62936e6a93aa72500b935a911f6afbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6b4ae3738ac9e19d8e443c78f22cacbbc62936e6a93aa72500b935a911f6afbb->leave($__internal_6b4ae3738ac9e19d8e443c78f22cacbbc62936e6a93aa72500b935a911f6afbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
