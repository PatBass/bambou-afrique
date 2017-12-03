<?php

/* CoreSphereConsoleBundle:Console:result.json.twig */
class __TwigTemplate_b025983bdee6d2329e9276e6ba13dba7493c3d375317cb192af2fb7f6179845d extends Twig_Template
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
        $__internal_eb1e62b33c8da48f24d18cdd95a0cd06dc0efe41571822783af5baea98f5bede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1e62b33c8da48f24d18cdd95a0cd06dc0efe41571822783af5baea98f5bede->enter($__internal_eb1e62b33c8da48f24d18cdd95a0cd06dc0efe41571822783af5baea98f5bede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle:Console:result.json.twig"));

        // line 2
        echo "{\"results\" : [
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commands"]) || array_key_exists("commands", $context) ? $context["commands"] : (function () { throw new Twig_Error_Runtime('Variable "commands" does not exist.', 3, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
            // line 4
            echo "{
    \"command\" : ";
            // line 5
            echo json_encode(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["command"], "input", array())));
            echo ",
    \"output\" : ";
            // line 6
            echo json_encode(twig_get_attribute($this->env, $this->getSourceContext(), $context["command"], "output", array()));
            echo ",
    \"environment\": ";
            // line 7
            echo json_encode(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["command"], "environment", array())));
            echo ",
    \"error_code\": ";
            // line 8
            echo json_encode(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["command"], "error_code", array())));
            echo "
}";
            // line 9
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) ? ("") : (","));
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "] }
";
        
        $__internal_eb1e62b33c8da48f24d18cdd95a0cd06dc0efe41571822783af5baea98f5bede->leave($__internal_eb1e62b33c8da48f24d18cdd95a0cd06dc0efe41571822783af5baea98f5bede_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:result.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  42 => 4,  25 => 3,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% autoescape false %}
{\"results\" : [
{% for command in commands %}
{
    \"command\" : {{ command.input|escape|json_encode }},
    \"output\" : {{ command.output|json_encode }},
    \"environment\": {{ command.environment|escape|json_encode }},
    \"error_code\": {{ command.error_code|escape|json_encode }}
}{{ loop.last ? '' : ',' }}
{% endfor %}
] }
{% endautoescape %}
", "CoreSphereConsoleBundle:Console:result.json.twig", "/Applications/MAMP/htdocs/odellya/vendor/coresphere/console-bundle/Resources/views/Console/result.json.twig");
    }
}
