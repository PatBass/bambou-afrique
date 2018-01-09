<?php

/* GregwarCaptchaBundle::captcha.html.twig */
class __TwigTemplate_7cb1e17be594ac240f3b44e61e9a0362d1ed3d93e695e995d077a55920f29d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'captcha_widget' => array($this, 'block_captcha_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_385c9fc495b0593d6d70c73fbdfab9bb336db5a68158ba5837c4835777d58714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385c9fc495b0593d6d70c73fbdfab9bb336db5a68158ba5837c4835777d58714->enter($__internal_385c9fc495b0593d6d70c73fbdfab9bb336db5a68158ba5837c4835777d58714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_385c9fc495b0593d6d70c73fbdfab9bb336db5a68158ba5837c4835777d58714->leave($__internal_385c9fc495b0593d6d70c73fbdfab9bb336db5a68158ba5837c4835777d58714_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_da62cd10501248aa7b33294df2b0090ecbd7c6dcf6bd47a2ab4d3ec2fb7852d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da62cd10501248aa7b33294df2b0090ecbd7c6dcf6bd47a2ab4d3ec2fb7852d4->enter($__internal_da62cd10501248aa7b33294df2b0090ecbd7c6dcf6bd47a2ab4d3ec2fb7852d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        if (($context["is_human"] ?? $this->getContext($context, "is_human"))) {
            // line 3
            echo "-
";
        } else {
            // line 5
            ob_start();
            // line 6
            echo "    <img id=\"";
            echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["captcha_code"] ?? $this->getContext($context, "captcha_code")), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, ($context["captcha_width"] ?? $this->getContext($context, "captcha_width")), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, ($context["captcha_height"] ?? $this->getContext($context, "captcha_height")), "html", null, true);
            echo "\" />
    ";
            // line 7
            if (($context["reload"] ?? $this->getContext($context, "reload"))) {
                // line 8
                echo "    <script type=\"text/javascript\">
        function reload_";
                // line 9
                echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
                echo "() {
            var img = document.getElementById('";
                // line 10
                echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
                echo "');
            img.src = '";
                // line 11
                echo twig_escape_filter($this->env, ($context["captcha_code"] ?? $this->getContext($context, "captcha_code")), "html", null, true);
                echo "?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 14
                echo twig_escape_filter($this->env, ($context["image_id"] ?? $this->getContext($context, "image_id")), "html", null, true);
                echo "();\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Renew", array(), "gregwar_captcha"), "html", null, true);
                echo "</a>
    ";
            }
            // line 16
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_da62cd10501248aa7b33294df2b0090ecbd7c6dcf6bd47a2ab4d3ec2fb7852d4->leave($__internal_da62cd10501248aa7b33294df2b0090ecbd7c6dcf6bd47a2ab4d3ec2fb7852d4_prof);

    }

    public function getTemplateName()
    {
        return "GregwarCaptchaBundle::captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  73 => 14,  67 => 11,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  43 => 6,  41 => 5,  37 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block captcha_widget %}
{% if is_human %}
-
{% else %}
{% spaceless %}
    <img id=\"{{ image_id }}\" src=\"{{ captcha_code }}\" alt=\"\" title=\"captcha\" width=\"{{ captcha_width }}\" height=\"{{ captcha_height }}\" />
    {% if reload %}
    <script type=\"text/javascript\">
        function reload_{{ image_id }}() {
            var img = document.getElementById('{{ image_id }}');
            img.src = '{{ captcha_code }}?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_{{ image_id }}();\">{{ 'Renew'|trans({}, 'gregwar_captcha') }}</a>
    {% endif %}
    {{ form_widget(form) }}
{% endspaceless %}
{% endif %}
{% endblock %}
", "GregwarCaptchaBundle::captcha.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/gregwar/captcha-bundle/Resources/views/captcha.html.twig");
    }
}
