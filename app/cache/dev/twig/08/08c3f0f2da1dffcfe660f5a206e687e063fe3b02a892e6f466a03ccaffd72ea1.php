<?php

/* ::Layout/layout.html.twig */
class __TwigTemplate_e14994f71f94c17f130f2ff88e50ae56dd3ad0b6e263fd84cf6f4c2ae7a652f8 extends Twig_Template
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
        $__internal_437b5fb8e88f3a26f2df15e3c42d222ff74d2b4576c9063ab35785a36935cee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437b5fb8e88f3a26f2df15e3c42d222ff74d2b4576c9063ab35785a36935cee3->enter($__internal_437b5fb8e88f3a26f2df15e3c42d222ff74d2b4576c9063ab35785a36935cee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Layout/layout.html.twig"));

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
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Pacifico' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Oswald:400,300&amp;subset=latin\">
    <link href=\"//fonts.googleapis.com/css?family=Squada+One\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    ";
        // line 53
        echo "


</head>
<body>
    ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "


    <!-- jQuery -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- bower:js -->

    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/modernizr/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/bower-foundation-datepicker/foundation-datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/momentjs/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery-placeholder/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/components-foundation/js/foundation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery-form/jquery.form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery.dotdotdot/src/js/jquery.dotdotdot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery.equalheights/jquery.equalheights.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/raphael/raphael.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/bootstrap/js/collapse.js"), "html", null, true);
        echo "\"></script>
    <!-- endbower -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery-maskedinput/dist/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery-simplecolorpicker/jquery.simplecolorpicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <!--<script src=\"";
        // line 85
        echo "\"></script>-->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/datepicker.fr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/redactor/redactor.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/all.js"), "html", null, true);
        echo "\"></script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/tm-scripts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/rd-smoothscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.ui.totop.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/tmstickup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/superfish.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.rd-navbar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.rd-google-map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/wow.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/TMSearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery.rd-parallax.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery-scrolltofixed-min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>

    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.wmuSlider.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(\"span.menu\").click(function(){
            \$(\".top-nav ul\").slideToggle(500, function(){
            });
        });
    </script>
    <script>
        \$('.example1').wmuSlider({
            pagination : false
        });
    </script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
            });
        });
    </script>

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

    <script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
            });
        });
    </script>

    <script>
        \$(\"span.menu\").click(function(){
            \$(\".top-nav ul\").slideToggle(500, function(){
            });
        });
    </script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            \$().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>

    ";
        // line 196
        $this->displayBlock('javascripts', $context, $blocks);
        // line 197
        echo "</body>
</html>
";
        
        $__internal_437b5fb8e88f3a26f2df15e3c42d222ff74d2b4576c9063ab35785a36935cee3->leave($__internal_437b5fb8e88f3a26f2df15e3c42d222ff74d2b4576c9063ab35785a36935cee3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aab2a581459f49d06429122334e4afde0c9f562c1a9e7f5e0da7422bf39c43bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab2a581459f49d06429122334e4afde0c9f562c1a9e7f5e0da7422bf39c43bd->enter($__internal_aab2a581459f49d06429122334e4afde0c9f562c1a9e7f5e0da7422bf39c43bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bambou d'Afrique";
        
        $__internal_aab2a581459f49d06429122334e4afde0c9f562c1a9e7f5e0da7422bf39c43bd->leave($__internal_aab2a581459f49d06429122334e4afde0c9f562c1a9e7f5e0da7422bf39c43bd_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_049b0b07641f1930701f86adb8532e189cf383f213ce43f3252705bf3b3174b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049b0b07641f1930701f86adb8532e189cf383f213ce43f3252705bf3b3174b1->enter($__internal_049b0b07641f1930701f86adb8532e189cf383f213ce43f3252705bf3b3174b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_049b0b07641f1930701f86adb8532e189cf383f213ce43f3252705bf3b3174b1->leave($__internal_049b0b07641f1930701f86adb8532e189cf383f213ce43f3252705bf3b3174b1_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_9859af6dfa299a5a963dd6508cd14f7afbbabcef904f4d694c8a9732e4bdfd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9859af6dfa299a5a963dd6508cd14f7afbbabcef904f4d694c8a9732e4bdfd50->enter($__internal_9859af6dfa299a5a963dd6508cd14f7afbbabcef904f4d694c8a9732e4bdfd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9859af6dfa299a5a963dd6508cd14f7afbbabcef904f4d694c8a9732e4bdfd50->leave($__internal_9859af6dfa299a5a963dd6508cd14f7afbbabcef904f4d694c8a9732e4bdfd50_prof);

    }

    // line 196
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a590607c191b0fea76bcf8df139357f1eb13ef194c5f3cec765ed6abf0b51ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a590607c191b0fea76bcf8df139357f1eb13ef194c5f3cec765ed6abf0b51ffe->enter($__internal_a590607c191b0fea76bcf8df139357f1eb13ef194c5f3cec765ed6abf0b51ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a590607c191b0fea76bcf8df139357f1eb13ef194c5f3cec765ed6abf0b51ffe->leave($__internal_a590607c191b0fea76bcf8df139357f1eb13ef194c5f3cec765ed6abf0b51ffe_prof);

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
        return array (  467 => 196,  456 => 58,  445 => 7,  433 => 5,  424 => 197,  422 => 196,  386 => 163,  382 => 162,  336 => 119,  329 => 115,  325 => 114,  321 => 113,  317 => 112,  313 => 111,  309 => 110,  305 => 109,  301 => 108,  297 => 107,  293 => 106,  289 => 105,  285 => 104,  281 => 103,  277 => 102,  273 => 101,  269 => 100,  265 => 99,  261 => 98,  257 => 97,  253 => 96,  249 => 95,  241 => 90,  237 => 89,  233 => 88,  229 => 87,  225 => 86,  222 => 85,  218 => 84,  214 => 83,  210 => 82,  205 => 80,  201 => 79,  197 => 78,  193 => 77,  189 => 76,  185 => 75,  181 => 74,  177 => 73,  173 => 72,  169 => 71,  165 => 70,  161 => 69,  157 => 68,  153 => 67,  146 => 63,  140 => 59,  138 => 58,  131 => 53,  117 => 39,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  70 => 25,  66 => 24,  62 => 23,  55 => 18,  51 => 16,  39 => 8,  37 => 7,  32 => 5,  26 => 1,);
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
    <title>{% block title %}Bambou d'Afrique{% endblock %}</title>

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
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Pacifico' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Oswald:400,300&amp;subset=latin\">
    <link href=\"//fonts.googleapis.com/css?family=Squada+One\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    {# {% stylesheets 'bundles/main/css/*' filter=\"cssrewrite\" combine=true %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
    {% endstylesheets %} #}



</head>
<body>
    {% block body %}{% endblock %}



    <!-- jQuery -->
    <script src=\"{{ asset('bundles/main/js/jquery.js') }}\"></script>

    <!-- bower:js -->

    <script src=\"{{ asset('components/modernizr/modernizr.js') }}\"></script>
    <script src=\"{{ asset('components/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('components/bower-foundation-datepicker/foundation-datepicker.min.js') }}\"></script>
    <script src=\"{{ asset('components/fastclick/lib/fastclick.js') }}\"></script>
    <script src=\"{{ asset('components/momentjs/moment.js') }}\"></script>
    <script src=\"{{ asset('components/jquery-placeholder/jquery.placeholder.js') }}\"></script>
    <script src=\"{{ asset('components/components-foundation/js/foundation.js') }}\"></script>
    <script src=\"{{ asset('components/jquery-form/jquery.form.js') }}\"></script>
    <script src=\"{{ asset('components/jquery.dotdotdot/src/js/jquery.dotdotdot.js') }}\"></script>
    <script src=\"{{ asset('components/jquery.cookie/jquery.cookie.js') }}\"></script>
    <script src=\"{{ asset('components/jquery.equalheights/jquery.equalheights.js') }}\"></script>
    <script src=\"{{ asset('components/raphael/raphael.js') }}\"></script>
    <script src=\"{{ asset('components/morrisjs/morris.js') }}\"></script>
    <script src=\"{{ asset('components/bootstrap/js/collapse.js') }}\"></script>
    <!-- endbower -->
    <script src=\"{{ asset('components/jquery-maskedinput/dist/jquery.maskedinput.min.js') }}\"></script>
    <script src=\"{{ asset('components/jquery-simplecolorpicker/jquery.simplecolorpicker.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <!--<script src=\"{#{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}#}\"></script>-->
    <script src=\"{{ asset('lib/jquery-ui.js') }}\"></script>
    <script src=\"{{ asset('lib/datepicker.fr.js') }}\"></script>
    <script src=\"{{ asset('lib/redactor/redactor.min.js') }}\"></script>
    <script src=\"{{ asset('lib/chosen/chosen.jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/all.js') }}\"></script>


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
    <script type=\"text/javascript\" src=\"{{ asset('js/move-top.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/easing.js') }}\"></script>

    <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <script src=\"{{ asset('js/jquery.wmuSlider.js') }}\"></script>
    <script>
        \$(\"span.menu\").click(function(){
            \$(\".top-nav ul\").slideToggle(500, function(){
            });
        });
    </script>
    <script>
        \$('.example1').wmuSlider({
            pagination : false
        });
    </script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
            });
        });
    </script>

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

    <script type=\"text/javascript\" src=\"{{ asset('js/move-top.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/easing.js') }}\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$(\".scroll\").click(function(event){
                event.preventDefault();
                \$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
            });
        });
    </script>

    <script>
        \$(\"span.menu\").click(function(){
            \$(\".top-nav ul\").slideToggle(500, function(){
            });
        });
    </script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            \$().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>

    {% block javascripts %}{% endblock %}
</body>
</html>
", "::Layout/layout.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/app/Resources/views/Layout/layout.html.twig");
    }
}
