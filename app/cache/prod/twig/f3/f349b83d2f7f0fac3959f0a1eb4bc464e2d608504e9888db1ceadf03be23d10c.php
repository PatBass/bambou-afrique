<?php

/* GregwarCaptchaBundle::captcha.html.twig */
class __TwigTemplate_22e070c10f8a17619ac9550f6bcf6ede8bf27d3651923a76bf261b620c13f9fa extends Twig_Template
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
        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
    }

    public function block_captcha_widget($context, array $blocks = array())
    {
        // line 2
        if (($context["is_human"] ?? null)) {
            // line 3
            echo "-
";
        } else {
            // line 5
            ob_start();
            // line 6
            echo "    <img id=\"";
            echo twig_escape_filter($this->env, ($context["image_id"] ?? null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["captcha_code"] ?? null), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, ($context["captcha_width"] ?? null), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, ($context["captcha_height"] ?? null), "html", null, true);
            echo "\" />
    ";
            // line 7
            if (($context["reload"] ?? null)) {
                // line 8
                echo "    <script type=\"text/javascript\">
        function reload_";
                // line 9
                echo twig_escape_filter($this->env, ($context["image_id"] ?? null), "html", null, true);
                echo "() {
            var img = document.getElementById('";
                // line 10
                echo twig_escape_filter($this->env, ($context["image_id"] ?? null), "html", null, true);
                echo "');
            img.src = '";
                // line 11
                echo twig_escape_filter($this->env, ($context["captcha_code"] ?? null), "html", null, true);
                echo "?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 14
                echo twig_escape_filter($this->env, ($context["image_id"] ?? null), "html", null, true);
                echo "();\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Renew", array(), "gregwar_captcha"), "html", null, true);
                echo "</a>
    ";
            }
            // line 16
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "GregwarCaptchaBundle::captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  64 => 14,  58 => 11,  54 => 10,  50 => 9,  47 => 8,  45 => 7,  34 => 6,  32 => 5,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GregwarCaptchaBundle::captcha.html.twig", "/Applications/MAMP/htdocs/odellya/vendor/gregwar/captcha-bundle/Resources/views/captcha.html.twig");
    }
}
