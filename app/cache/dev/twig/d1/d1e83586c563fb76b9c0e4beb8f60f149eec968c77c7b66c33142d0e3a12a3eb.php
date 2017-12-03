<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_eb0aeaabc62364a20b42582144bbbe3ac72ac20d1dade3efbfe225042b111e85 extends Twig_Template
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
        $__internal_268b301ec7e93808ab14d9099bc7f01be77e1b8d691ef3c34fe82d5227287735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268b301ec7e93808ab14d9099bc7f01be77e1b8d691ef3c34fe82d5227287735->enter($__internal_268b301ec7e93808ab14d9099bc7f01be77e1b8d691ef3c34fe82d5227287735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_268b301ec7e93808ab14d9099bc7f01be77e1b8d691ef3c34fe82d5227287735->leave($__internal_268b301ec7e93808ab14d9099bc7f01be77e1b8d691ef3c34fe82d5227287735_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
