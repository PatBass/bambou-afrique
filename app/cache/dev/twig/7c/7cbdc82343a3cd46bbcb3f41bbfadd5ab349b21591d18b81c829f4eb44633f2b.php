<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_9daa66a5f24acf22b7d4ac00bac3c72f42b5127c74964beb3f4a326b53339ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e65ed240e37eef41c2261ff1c8e9046f76fd621c85d156e936f6f159fbb6f5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65ed240e37eef41c2261ff1c8e9046f76fd621c85d156e936f6f159fbb6f5d2->enter($__internal_e65ed240e37eef41c2261ff1c8e9046f76fd621c85d156e936f6f159fbb6f5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_e65ed240e37eef41c2261ff1c8e9046f76fd621c85d156e936f6f159fbb6f5d2->leave($__internal_e65ed240e37eef41c2261ff1c8e9046f76fd621c85d156e936f6f159fbb6f5d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e0febc8d8a38ad9aaa8c8ad601527d35f47f3b05694b1e45c52447c8c60f010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0febc8d8a38ad9aaa8c8ad601527d35f47f3b05694b1e45c52447c8c60f010->enter($__internal_8e0febc8d8a38ad9aaa8c8ad601527d35f47f3b05694b1e45c52447c8c60f010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_8e0febc8d8a38ad9aaa8c8ad601527d35f47f3b05694b1e45c52447c8c60f010->leave($__internal_8e0febc8d8a38ad9aaa8c8ad601527d35f47f3b05694b1e45c52447c8c60f010_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6004bfcfb9f2aecd3e182edbaaf7eb294b81ad4b0f2b370cf2af58461e4cb75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6004bfcfb9f2aecd3e182edbaaf7eb294b81ad4b0f2b370cf2af58461e4cb75->enter($__internal_e6004bfcfb9f2aecd3e182edbaaf7eb294b81ad4b0f2b370cf2af58461e4cb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_e6004bfcfb9f2aecd3e182edbaaf7eb294b81ad4b0f2b370cf2af58461e4cb75->leave($__internal_e6004bfcfb9f2aecd3e182edbaaf7eb294b81ad4b0f2b370cf2af58461e4cb75_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6371e3b23c001547626c76ac3185b867c9986a9b5fa364724f94d74178b7590d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6371e3b23c001547626c76ac3185b867c9986a9b5fa364724f94d74178b7590d->enter($__internal_6371e3b23c001547626c76ac3185b867c9986a9b5fa364724f94d74178b7590d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_6371e3b23c001547626c76ac3185b867c9986a9b5fa364724f94d74178b7590d->leave($__internal_6371e3b23c001547626c76ac3185b867c9986a9b5fa364724f94d74178b7590d_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81c25fed8a638b686fb887e849f58689eee5a04b39b8951d37cbaefe1e55e1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c25fed8a638b686fb887e849f58689eee5a04b39b8951d37cbaefe1e55e1dd->enter($__internal_81c25fed8a638b686fb887e849f58689eee5a04b39b8951d37cbaefe1e55e1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_81c25fed8a638b686fb887e849f58689eee5a04b39b8951d37cbaefe1e55e1dd->leave($__internal_81c25fed8a638b686fb887e849f58689eee5a04b39b8951d37cbaefe1e55e1dd_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
