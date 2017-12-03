<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_fdec91af397f589ef2994be51029b3d257dfe6dbc9ed3fcd468d5aef054b373b extends Twig_Template
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
        $__internal_e2dfe5ad97dad51f92005149490b07328c52f2fb08d504380ca920968b04e393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2dfe5ad97dad51f92005149490b07328c52f2fb08d504380ca920968b04e393->enter($__internal_e2dfe5ad97dad51f92005149490b07328c52f2fb08d504380ca920968b04e393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_e2dfe5ad97dad51f92005149490b07328c52f2fb08d504380ca920968b04e393->leave($__internal_e2dfe5ad97dad51f92005149490b07328c52f2fb08d504380ca920968b04e393_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d53436146188ce79a067b952e9bf1d1e4bc1e0e44d4881502a33698a69c2cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d53436146188ce79a067b952e9bf1d1e4bc1e0e44d4881502a33698a69c2cf3->enter($__internal_5d53436146188ce79a067b952e9bf1d1e4bc1e0e44d4881502a33698a69c2cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_5d53436146188ce79a067b952e9bf1d1e4bc1e0e44d4881502a33698a69c2cf3->leave($__internal_5d53436146188ce79a067b952e9bf1d1e4bc1e0e44d4881502a33698a69c2cf3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2abd4512318c8376e933a6397c11fc37e6955cbd2bfe3edc1abf22f8a2b3461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2abd4512318c8376e933a6397c11fc37e6955cbd2bfe3edc1abf22f8a2b3461->enter($__internal_b2abd4512318c8376e933a6397c11fc37e6955cbd2bfe3edc1abf22f8a2b3461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_b2abd4512318c8376e933a6397c11fc37e6955cbd2bfe3edc1abf22f8a2b3461->leave($__internal_b2abd4512318c8376e933a6397c11fc37e6955cbd2bfe3edc1abf22f8a2b3461_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fc4de0390bf74f0049cb35a04b7380c0107fafb86b039b90c6d3411799c3711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc4de0390bf74f0049cb35a04b7380c0107fafb86b039b90c6d3411799c3711->enter($__internal_3fc4de0390bf74f0049cb35a04b7380c0107fafb86b039b90c6d3411799c3711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_3fc4de0390bf74f0049cb35a04b7380c0107fafb86b039b90c6d3411799c3711->leave($__internal_3fc4de0390bf74f0049cb35a04b7380c0107fafb86b039b90c6d3411799c3711_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca61a3a07a59c013561fea236e41fc13e918d5fe11957e7aa414f0d11ab101ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca61a3a07a59c013561fea236e41fc13e918d5fe11957e7aa414f0d11ab101ba->enter($__internal_ca61a3a07a59c013561fea236e41fc13e918d5fe11957e7aa414f0d11ab101ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ca61a3a07a59c013561fea236e41fc13e918d5fe11957e7aa414f0d11ab101ba->leave($__internal_ca61a3a07a59c013561fea236e41fc13e918d5fe11957e7aa414f0d11ab101ba_prof);

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
", "CoreSphereConsoleBundle::base.html.twig", "/Applications/MAMP/htdocs/odellya/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
