<?php

/* GregwarCaptchaBundle::captcha.html.twig */
class __TwigTemplate_e0bc1aebd722e9067288bc20518b10b0483184982938b338e8d5a7fe62672072 extends Twig_Template
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
        $__internal_41eb8755ef4eb836864c6108302f847f9992fa1694071a05f78eb52d6b5ca6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41eb8755ef4eb836864c6108302f847f9992fa1694071a05f78eb52d6b5ca6a1->enter($__internal_41eb8755ef4eb836864c6108302f847f9992fa1694071a05f78eb52d6b5ca6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_41eb8755ef4eb836864c6108302f847f9992fa1694071a05f78eb52d6b5ca6a1->leave($__internal_41eb8755ef4eb836864c6108302f847f9992fa1694071a05f78eb52d6b5ca6a1_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_c4c910ac1944c6c2b5bb227b458ea8f5c640235896496d6fa50f0f60848a73d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c910ac1944c6c2b5bb227b458ea8f5c640235896496d6fa50f0f60848a73d8->enter($__internal_c4c910ac1944c6c2b5bb227b458ea8f5c640235896496d6fa50f0f60848a73d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        if ((isset($context["is_human"]) || array_key_exists("is_human", $context) ? $context["is_human"] : (function () { throw new Twig_Error_Runtime('Variable "is_human" does not exist.', 2, $this->getSourceContext()); })())) {
            // line 3
            echo "-
";
        } else {
            // line 5
            ob_start();
            // line 6
            echo "    <img id=\"";
            echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new Twig_Error_Runtime('Variable "image_id" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_code"]) || array_key_exists("captcha_code", $context) ? $context["captcha_code"] : (function () { throw new Twig_Error_Runtime('Variable "captcha_code" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_width"]) || array_key_exists("captcha_width", $context) ? $context["captcha_width"] : (function () { throw new Twig_Error_Runtime('Variable "captcha_width" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_height"]) || array_key_exists("captcha_height", $context) ? $context["captcha_height"] : (function () { throw new Twig_Error_Runtime('Variable "captcha_height" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
    ";
            // line 7
            if ((isset($context["reload"]) || array_key_exists("reload", $context) ? $context["reload"] : (function () { throw new Twig_Error_Runtime('Variable "reload" does not exist.', 7, $this->getSourceContext()); })())) {
                // line 8
                echo "    <script type=\"text/javascript\">
        function reload_";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new Twig_Error_Runtime('Variable "image_id" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
                echo "() {
            var img = document.getElementById('";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new Twig_Error_Runtime('Variable "image_id" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
                echo "');
            img.src = '";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["captcha_code"]) || array_key_exists("captcha_code", $context) ? $context["captcha_code"] : (function () { throw new Twig_Error_Runtime('Variable "captcha_code" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
                echo "?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new Twig_Error_Runtime('Variable "image_id" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
                echo "();\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Renew", array(), "gregwar_captcha"), "html", null, true);
                echo "</a>
    ";
            }
            // line 16
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'widget');
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_c4c910ac1944c6c2b5bb227b458ea8f5c640235896496d6fa50f0f60848a73d8->leave($__internal_c4c910ac1944c6c2b5bb227b458ea8f5c640235896496d6fa50f0f60848a73d8_prof);

    }

    public function getTemplateName()
    {
        return "GregwarCaptchaBundle::captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  73 => 14,  67 => 11,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  43 => 6,  41 => 5,  37 => 3,  35 => 2,  23 => 1,);
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
", "GregwarCaptchaBundle::captcha.html.twig", "/Applications/MAMP/htdocs/odellya/vendor/gregwar/captcha-bundle/Resources/views/captcha.html.twig");
    }
}
