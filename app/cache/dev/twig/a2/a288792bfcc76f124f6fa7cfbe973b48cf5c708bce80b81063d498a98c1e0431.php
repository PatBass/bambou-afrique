<?php

/* ::Layout/layout.html.twig */
class __TwigTemplate_00a10ae978189d6f9ec216b8ea556542314985311a0f4385265326917d369832 extends Twig_Template
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
        $__internal_24b9d04fd11db33e1dff227dc0df3b75266bc4db96827f4f18a41c00674b726c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b9d04fd11db33e1dff227dc0df3b75266bc4db96827f4f18a41c00674b726c->enter($__internal_24b9d04fd11db33e1dff227dc0df3b75266bc4db96827f4f18a41c00674b726c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Layout/layout.html.twig"));

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
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Oswald:400,300&amp;subset=latin\">

    <!-- Bootstrap Core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

    <!-- Bootstrap css files -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    ";
        // line 18
        echo "
    <!-- Bootstrap Font Awesome CDN -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1\" crossorigin=\"anonymous\">

    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/search.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/google-map.css"), "html", null, true);
        echo "\" type=\"text/css\">

    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/media.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/mixins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/normalize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/owl-carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/variables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/thumbnails.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/print.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/responsive-embed.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/tm_panel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    ";
        // line 45
        echo "


</head>
<body>
    ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "


    <!-- jQuery -->
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    ";
        // line 59
        echo "

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    ";
        // line 64
        echo "

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/tm-scripts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/rd-smoothscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/tmstickup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/superfish.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.rd-navbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.rd-google-map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/wow.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/TMSearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.rd-parallax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery-scrolltofixed-min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"[rel='tooltip']\").tooltip();

            \$('.thumbnail').hover(
                    function(){
                        \$(this).find('.caption').slideDown(250); //.fadeIn(250)
                    },
                    function(){
                        \$(this).find('.caption').slideUp(250); //.fadeOut(205)
                    }
            );
        });

    </script>

    <script>
        \$(document).ready(function(){
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>
    ";
        // line 109
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "</body>
</html>
";
        
        $__internal_24b9d04fd11db33e1dff227dc0df3b75266bc4db96827f4f18a41c00674b726c->leave($__internal_24b9d04fd11db33e1dff227dc0df3b75266bc4db96827f4f18a41c00674b726c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_44d70c6cd305130871d9f97a6dcfd433e97d446a416898e596b70ff688fc7062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d70c6cd305130871d9f97a6dcfd433e97d446a416898e596b70ff688fc7062->enter($__internal_44d70c6cd305130871d9f97a6dcfd433e97d446a416898e596b70ff688fc7062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fondation Odellya";
        
        $__internal_44d70c6cd305130871d9f97a6dcfd433e97d446a416898e596b70ff688fc7062->leave($__internal_44d70c6cd305130871d9f97a6dcfd433e97d446a416898e596b70ff688fc7062_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d6f3080e55ddb8b6b6549be99f9268d08020cdf0903cf4048b0f83740e609a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6f3080e55ddb8b6b6549be99f9268d08020cdf0903cf4048b0f83740e609a2->enter($__internal_9d6f3080e55ddb8b6b6549be99f9268d08020cdf0903cf4048b0f83740e609a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9d6f3080e55ddb8b6b6549be99f9268d08020cdf0903cf4048b0f83740e609a2->leave($__internal_9d6f3080e55ddb8b6b6549be99f9268d08020cdf0903cf4048b0f83740e609a2_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_64e58051b28eb51537a8bfc1268f6a8d19b82bd67d8974da9412cc69d8d6047d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e58051b28eb51537a8bfc1268f6a8d19b82bd67d8974da9412cc69d8d6047d->enter($__internal_64e58051b28eb51537a8bfc1268f6a8d19b82bd67d8974da9412cc69d8d6047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64e58051b28eb51537a8bfc1268f6a8d19b82bd67d8974da9412cc69d8d6047d->leave($__internal_64e58051b28eb51537a8bfc1268f6a8d19b82bd67d8974da9412cc69d8d6047d_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63f749c2a6d02be54c02ae554d2d226657634dfd9a064881db631b0197bf3d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f749c2a6d02be54c02ae554d2d226657634dfd9a064881db631b0197bf3d50->enter($__internal_63f749c2a6d02be54c02ae554d2d226657634dfd9a064881db631b0197bf3d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_63f749c2a6d02be54c02ae554d2d226657634dfd9a064881db631b0197bf3d50->leave($__internal_63f749c2a6d02be54c02ae554d2d226657634dfd9a064881db631b0197bf3d50_prof);

    }

    public function getTemplateName()
    {
        return "::Layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 109,  288 => 50,  277 => 7,  265 => 5,  256 => 110,  254 => 109,  228 => 86,  224 => 85,  220 => 84,  216 => 83,  212 => 82,  208 => 81,  204 => 80,  200 => 79,  196 => 78,  192 => 77,  188 => 76,  184 => 75,  180 => 74,  176 => 73,  172 => 72,  168 => 71,  164 => 70,  160 => 69,  156 => 68,  150 => 64,  144 => 59,  138 => 55,  132 => 51,  130 => 50,  123 => 45,  117 => 39,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  70 => 25,  66 => 24,  62 => 23,  55 => 18,  51 => 16,  39 => 8,  37 => 7,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Fondation Odellya{% endblock %}</title>

    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Oswald:400,300&amp;subset=latin\">

    <!-- Bootstrap Core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

    <!-- Bootstrap css files -->
    <link href=\"{{ asset('bundles/main/css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    {#<link href=\"{{ asset('bundles/main/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">#}

    <!-- Bootstrap Font Awesome CDN -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1\" crossorigin=\"anonymous\">

    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/main/css/style.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/main/css/search.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/main/css/google-map.css') }}\" type=\"text/css\">

    <link href=\"{{ asset('bundles/main/css/jquery.fancybox.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('bundles/main/css/media.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('bundles/main/css/mixins.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('bundles/main/css/normalize.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('bundles/main/css/owl-carousel.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('bundles/main/css/variables.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('bundles/main/css/thumbnails.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('bundles/main/css/print.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('bundles/main/css/responsive-embed.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('bundles/main/css/tm_panel.css') }}\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Custom Fonts -->
    <link href=\"{{ asset('bundles/main/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    {# {% stylesheets 'bundles/main/css/*' filter=\"cssrewrite\" combine=true %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
    {% endstylesheets %} #}



</head>
<body>
    {% block body %}{% endblock %}



    <!-- jQuery -->
    <script src=\"{{ asset('bundles/main/js/jquery.js') }}\"></script>

    <!-- Bootstrap Core JavaScript -->
    {#<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>#}


    <!-- Include all compiled plugins (below), or include individual files as needed -->

    {#<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>#}


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"{{ asset('bundles/main/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/tm-scripts.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/rd-smoothscroll.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/tooltip.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/modal.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/popover.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/collapse.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/tab.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/jquery.ui.totop.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/jquery.cookie.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/jquery.easing.1.3.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/tmstickup.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/superfish.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/jquery.rd-navbar.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/jquery.rd-google-map.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/wow.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/TMSearch.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/jquery.rd-parallax.js') }}\"></script>
    <script src=\"{{ asset('bundles/main/js/jquery-scrolltofixed-min.js') }}\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"[rel='tooltip']\").tooltip();

            \$('.thumbnail').hover(
                    function(){
                        \$(this).find('.caption').slideDown(250); //.fadeIn(250)
                    },
                    function(){
                        \$(this).find('.caption').slideUp(250); //.fadeOut(205)
                    }
            );
        });

    </script>

    <script>
        \$(document).ready(function(){
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>
    {% block javascripts %}{% endblock %}
</body>
</html>
", "::Layout/layout.html.twig", "/Applications/MAMP/htdocs/odellya/app/Resources/views/Layout/layout.html.twig");
    }
}
