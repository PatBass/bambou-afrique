<?php

/* GregwarCaptchaBundle::captcha.html.twig */
class __TwigTemplate_c4e2966faa9582c53d71d0a992865b6c1e205ceef2ed37cb7f0e193b01629916 extends Twig_Template
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
        $__internal_4fe0c58b87cb7bd2b177d18d145c38c91ab91fe8a29c375c6b4be4a407f5456b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe0c58b87cb7bd2b177d18d145c38c91ab91fe8a29c375c6b4be4a407f5456b->enter($__internal_4fe0c58b87cb7bd2b177d18d145c38c91ab91fe8a29c375c6b4be4a407f5456b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GregwarCaptchaBundle::captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_4fe0c58b87cb7bd2b177d18d145c38c91ab91fe8a29c375c6b4be4a407f5456b->leave($__internal_4fe0c58b87cb7bd2b177d18d145c38c91ab91fe8a29c375c6b4be4a407f5456b_prof);

    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        $__internal_c43929ddcfcf7f24d506d0bd9738c00e7f8a90fed8ff3b9db9fdfab28dc96dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43929ddcfcf7f24d506d0bd9738c00e7f8a90fed8ff3b9db9fdfab28dc96dc8->enter($__internal_c43929ddcfcf7f24d506d0bd9738c00e7f8a90fed8ff3b9db9fdfab28dc96dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "captcha_widget"));

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
        
        $__internal_c43929ddcfcf7f24d506d0bd9738c00e7f8a90fed8ff3b9db9fdfab28dc96dc8->leave($__internal_c43929ddcfcf7f24d506d0bd9738c00e7f8a90fed8ff3b9db9fdfab28dc96dc8_prof);

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
