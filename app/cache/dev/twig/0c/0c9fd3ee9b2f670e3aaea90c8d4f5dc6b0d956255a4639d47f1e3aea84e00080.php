<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c88cd40c3f188fbdefbcd01c953949a9ac74dfe0bd0f77d9402f0fa782a92a5e extends Twig_Template
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
        $__internal_b5edd882f1ad0d4bcb6edf3b567d2e5e85c733a380806d86a8878ec766b1a566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5edd882f1ad0d4bcb6edf3b567d2e5e85c733a380806d86a8878ec766b1a566->enter($__internal_b5edd882f1ad0d4bcb6edf3b567d2e5e85c733a380806d86a8878ec766b1a566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b5edd882f1ad0d4bcb6edf3b567d2e5e85c733a380806d86a8878ec766b1a566->leave($__internal_b5edd882f1ad0d4bcb6edf3b567d2e5e85c733a380806d86a8878ec766b1a566_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/odellya/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
