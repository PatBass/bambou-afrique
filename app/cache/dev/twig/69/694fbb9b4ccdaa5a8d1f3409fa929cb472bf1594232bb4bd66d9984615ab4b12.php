<?php

/* MainBundle:Main:application.html.twig */
class __TwigTemplate_fb0d93da8e5963d4da8fc25158199a3d4ea6fd07c23bb2ff792889c772aa18a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:application.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff8e1e91104df10555d4fc55f2139709c3f4914da3632f3312ba37f63a9c5460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8e1e91104df10555d4fc55f2139709c3f4914da3632f3312ba37f63a9c5460->enter($__internal_ff8e1e91104df10555d4fc55f2139709c3f4914da3632f3312ba37f63a9c5460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:application.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8e1e91104df10555d4fc55f2139709c3f4914da3632f3312ba37f63a9c5460->leave($__internal_ff8e1e91104df10555d4fc55f2139709c3f4914da3632f3312ba37f63a9c5460_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6dc61c0555c84e90a28672b367f695021edb3ffcef0f53b7775b800f8df29741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc61c0555c84e90a28672b367f695021edb3ffcef0f53b7775b800f8df29741->enter($__internal_6dc61c0555c84e90a28672b367f695021edb3ffcef0f53b7775b800f8df29741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- Custom CSS -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/contact-form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_6dc61c0555c84e90a28672b367f695021edb3ffcef0f53b7775b800f8df29741->leave($__internal_6dc61c0555c84e90a28672b367f695021edb3ffcef0f53b7775b800f8df29741_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d995c3874d08c06e819923a714382d679e628af1697779f0a4333d117e35c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d995c3874d08c06e819923a714382d679e628af1697779f0a4333d117e35c22->enter($__internal_0d995c3874d08c06e819923a714382d679e628af1697779f0a4333d117e35c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:application.html.twig", 7)->display(array_merge($context, array("active" => "application")));
        // line 8
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    <main>

        <!--<section>
            <div class=\"map map_height1\">
                <div id=\"google-map\" class=\"map_model\" data-zoom=\"11\"></div>
                <ul class=\"map_locations\">
                    <li data-x=\"2.201627\" data-y=\"48.866667\" data-basic=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gmap_marker.png"), "html", null, true);
        echo "\" data-active=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gmap_marker_active.png"), "html", null, true);
        echo "\">
                        <div class=\"location\">
                            <h3 class=\"txt-clr1\">
                                FONDATION
                                <small>
                                    O'DELLYA
                                </small>
                            </h3>
                            <address>
                                <dl>
                                    <dt>Téléphone: </dt>
                                    <dd class=\"phone\"><a href=\"callto:#\"> +33 7 81 01 72 30</a></dd>
                                </dl>
                                <dl>
                                    <dt>Adresse: </dt>
                                    <dd> 12 Boulevard Aristide Briand Suresnes  France</dd>
                                </dl>
                                <dl>
                                    <dt>Heures: </dt>
                                    <dd> 7h-18h en semaine ; &nbsp;&nbsp;  toute la journée, les weekends</dd>
                                </dl>
                                <dl>
                                    <dt> E-mail: </dt>
                                    <dd><a href=\"mailto:#\">contact@odellya.org</a></dd>
                                </dl>
                            </address>

                        </div>
                    </li>
                    <!-- <li data-x=\"-74.100000\" data-y=\"40.643180\" data-basic=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gmap_marker2.png"), "html", null, true);
        echo "\" data-active=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gmap_marker2_active.png"), "html", null, true);
        echo "\">
                <div class=\"location\">
                    <h3 class=\"txt-clr1\">
                        flooring
                        <small>
                            RETAILER
                        </small>
                    </h3>
                    <address>
                        <dl>
                            <dt>Free phone: </dt>
                            <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                        </dl>
                        <dl>
                            <dt>Address: </dt>
                            <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                        </dl>
                        <dl>
                            <dt>Hours: </dt>
                            <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                        </dl>
                        <dl>
                            <dt> E-mail: </dt>
                            <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                        </dl>
                    </address>

                </div>
            </li>
            <li data-x=\"-73.8854068\" data-y=\"40.693180\" data-basic=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gmap_marker3.png"), "html", null, true);
        echo "\" data-active=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gmap_marker3_active.png"), "html", null, true);
        echo "\">
                <div class=\"location\">
                    <h3 class=\"txt-clr1\">
                        flooring
                        <small>
                            RETAILER
                        </small>
                    </h3>
                    <address>
                        <dl>
                            <dt>Free phone: </dt>
                            <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                        </dl>
                        <dl>
                            <dt>Address: </dt>
                            <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                        </dl>
                        <dl>
                            <dt>Hours: </dt>
                            <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                        </dl>
                        <dl>
                            <dt> E-mail: </dt>
                            <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                        </dl>
                    </address>

                </div>
            </li>
            <li data-x=\"-73.7874068\" data-y=\"40.613180\" data-basic=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gmap_marker4.png"), "html", null, true);
        echo "\" data-active=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gmap_marker4_active.png"), "html", null, true);
        echo "\">
                <div class=\"location\">
                    <h3 class=\"txt-clr1\">
                        flooring
                        <small>
                            RETAILER
                        </small>
                    </h3>
                    <address>
                        <dl>
                            <dt>Free phone: </dt>
                            <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                        </dl>
                        <dl>
                            <dt>Address: </dt>
                            <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                        </dl>
                        <dl>
                            <dt>Hours: </dt>
                            <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                        </dl>
                        <dl>
                            <dt> E-mail: </dt>
                            <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                        </dl>
                    </address>

                </div>
            </li>
            <li data-x=\"-74.200000\" data-y=\"40.683180\" data-basic=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gmap_marker5.png"), "html", null, true);
        echo "\" data-active=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gmap_marker5_active.png"), "html", null, true);
        echo "\">
                <div class=\"location\">
                    <h3 class=\"txt-clr1\">
                        flooring
                        <small>
                            RETAILER
                        </small>
                    </h3>
                    <address>
                        <dl>
                            <dt>Free phone: </dt>
                            <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                        </dl>
                        <dl>
                            <dt>Address: </dt>
                            <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                        </dl>
                        <dl>
                            <dt>Hours: </dt>
                            <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                        </dl>
                        <dl>
                            <dt> E-mail: </dt>
                            <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                        </dl>
                    </address>

                </div>
            </li>
                </ul>
            </div>
        </section>-->

        <section class=\"well well4\" style=\"border: none;\">
            <div class=\"container\">

                <h2 class=\"txt-pr\">
                    Adhesion
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        en ligne
                    </span>
                </h2>
                <br><br>
                <div class=\"row\">
                    <div class=\"col-xs-offset-2 col-xs-9\">
                        ";
        // line 179
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "notice"), "method")) {
            // line 180
            echo "                            <div class=\"alert alert-success\">
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 183
                echo "                                    <div class=\"row\">
                                        <div class=\"col-xs-3\">
                                            <img src=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/thumb-up.png"), "cropResize", array(0 => 60, 1 => 60), "method"), "html", null, true);
                echo "\">
                                        </div>
                                        <div class=\"col-xs-9\">
                                            ";
                // line 188
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "                            </div>
                        ";
        }
        // line 194
        echo "                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"alert alert-info\">
                        <p>
                            <span class=\"label label-warning\">N.B</span>&nbsp;
                            Conformément à la loi « Informatique et Libertés », la confidentialité des informations et leur utilisation exclusive pour l'association sont garanties.
                        </p>
                        <p>
                            Il est à noter que la Fondation n'est pas qu'un simple collectif des passionnés des NTIC, c'est un mouvement qui se donne pour objectif de convaincre les dirigeants congolais de numériser les institutions et administrations publiques du Congo par l'adoption du Pacte technologique. Cela étant, celui ou celle qui souhaite adhérer doit pouvoir répondre à la question de son apport quant à l'atteinte de de cet objectif, et de là découlera automatiquement son rôle et son occupation comme membre actif de la Fondation.
                        </p>
                    </div>
                </div>
                ";
        // line 207
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "contact-form", "action" => "adhesion", "method" => "POST", "id" => "contact-form")));
        echo "
                    <div class=\"contact-form-loader\"></div>
                    <fieldset>
                        <div class=\"form-group\">
                            <div class=\"col-xs-1\">
                                ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "applied", array()), 'widget', array("attr" => array("data-constraints" => "@Required @JustLetters")));
        echo "
                            </div>
                            <div class=\"col-xs-11\">
                                Je souhaite adhérer à la Fondation O'dellya, organisation à but non lucratif qui a pour mission de proposer au gouvernement congolais de numériser les institutions de l'Etat par l'adoption du \"Pacte technologique\".
                            </div>
                            <span class=\"error-message\">";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "applied", array()), 'errors');
        echo "</span>

                        </div>
                        <br><br><br><br><br>
                        <div class=\"form-group\">
                            <div class=\"col-sm-3\">
                                Titre de civilité :
                            </div>
                            <div class=\"col-sm-7\">
                                ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("placeholder" => "Titre de civilité :")));
        echo "
                                <span class=\"error-message\">";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("data-constraints" => "@Required @JustLetters", "placeholder" => "Nom et prénom :", "class" => "form-control")));
        echo "
                                    <span class=\"error-message\">";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "</span>
                                </div>
                                <div class=\"col-xs-6\">
                                    ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("data-constraints" => "@Required @Email", "placeholder" => "Adresse Email :", "class" => "form-control")));
        echo "
                                    <span class=\"error-message\">";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("placeholder" => "Téléphone :", "class" => "form-control")));
        echo "
                                    <span class=\"error-message\">";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "</span>
                                </div>
                                <div class=\"col-xs-6\">
                                    ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "occupation", array()), 'widget', array("attr" => array("placeholder" => "Profession :", "class" => "form-control")));
        echo "
                                    <span class=\"error-message\">";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "occupation", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class=\"form-group\">
                            <div class=\"col-xs-2\">
                                Pays de résidence :
                            </div>
                            <div class=\"col-xs-10\">
                                ";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'widget', array("attr" => array("placeholder" => "Votre photo :")));
        echo "
                                <span class=\"error-message\">";
        // line 263
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class=\"form-group\">
                            <div class=\"col-xs-2\">
                                Ajouter une photo :
                            </div>
                            <div class=\"col-xs-10\">
                                ";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("placeholder" => "Votre photo :")));
        echo "
                                <span class=\"error-message\">";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class=\"form-group\"> Message :<br><br>
                            ";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'widget', array("attr" => array("data-constraints" => "@Required @Length(min=20,max=999999)", "class" => "form-control", "placeholder" => "Veuillez insérer ici votre message, suggestions et/ou question(s). Noter qu'il est important de préciser ce que sera votre apport afin que nous puissons déterminer ce que sera votre rôle en sein de la fondation.")));
        echo "
                            <span class=\"error-message\">";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", array()), 'errors');
        echo "</span>
                        </div>


                        <div class=\"recaptcha form-group\">
                            <div class=\"g-recaptcha\" data-sitekey=\"6LeF9Q4UAAAAAIqGy3uP7DLxQ_L0z4TOSuYz0ikl\"></div>
                        </div>


                        <div class=\"btn-wr text-primary\">
                            <button class=\"btn btn-primary\"  type=\"submit\">J'adhère</button>
                        </div>
                    </fieldset>

                    ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                ";
        // line 294
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
        </section>



    </main>
    ";
        // line 303
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:application.html.twig", 303)->display($context);
        
        $__internal_0d995c3874d08c06e819923a714382d679e628af1697779f0a4333d117e35c22->leave($__internal_0d995c3874d08c06e819923a714382d679e628af1697779f0a4333d117e35c22_prof);

    }

    // line 305
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1faac6fe20be56c6b7649b3e759261c4fd47e2fc668387a30ddbdf94cf8e4326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1faac6fe20be56c6b7649b3e759261c4fd47e2fc668387a30ddbdf94cf8e4326->enter($__internal_1faac6fe20be56c6b7649b3e759261c4fd47e2fc668387a30ddbdf94cf8e4326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 306
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCJeCYd7WriRsWWMvsS7ygyndMCBWnGvKc\"
            type=\"text/javascript\">

    </script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#mainbundle_application_title label\").prepend('<span>&nbsp;&nbsp;</span>');

            \$(\"#mainbundle_application_image label\").remove();

        });
    </script>
";
        
        $__internal_1faac6fe20be56c6b7649b3e759261c4fd47e2fc668387a30ddbdf94cf8e4326->leave($__internal_1faac6fe20be56c6b7649b3e759261c4fd47e2fc668387a30ddbdf94cf8e4326_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:application.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 306,  476 => 305,  469 => 303,  457 => 294,  453 => 293,  436 => 279,  432 => 278,  424 => 273,  420 => 272,  408 => 263,  404 => 262,  391 => 252,  387 => 251,  381 => 248,  377 => 247,  366 => 239,  362 => 238,  356 => 235,  352 => 234,  342 => 227,  338 => 226,  326 => 217,  318 => 212,  310 => 207,  295 => 194,  291 => 192,  281 => 188,  275 => 185,  271 => 183,  267 => 182,  263 => 180,  261 => 179,  211 => 134,  177 => 105,  143 => 76,  109 => 47,  75 => 18,  63 => 8,  60 => 7,  54 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}
{% block stylesheets %}
    <!-- Custom CSS -->
    <link href=\"{{ asset('bundles/main/css/contact-form.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}
{% block body %}
    {% include('MainBundle:Common:header.html.twig') with {'active':'application'} %}
    <!--========================================================
                           CONTENT
 =========================================================-->

    <main>

        <!--<section>
            <div class=\"map map_height1\">
                <div id=\"google-map\" class=\"map_model\" data-zoom=\"11\"></div>
                <ul class=\"map_locations\">
                    <li data-x=\"2.201627\" data-y=\"48.866667\" data-basic=\"{{ asset('bundles/main/images/gmap_marker.png') }}\" data-active=\"{{ asset('bundles/main/images/gmap_marker_active.png') }}\">
                        <div class=\"location\">
                            <h3 class=\"txt-clr1\">
                                FONDATION
                                <small>
                                    O'DELLYA
                                </small>
                            </h3>
                            <address>
                                <dl>
                                    <dt>Téléphone: </dt>
                                    <dd class=\"phone\"><a href=\"callto:#\"> +33 7 81 01 72 30</a></dd>
                                </dl>
                                <dl>
                                    <dt>Adresse: </dt>
                                    <dd> 12 Boulevard Aristide Briand Suresnes  France</dd>
                                </dl>
                                <dl>
                                    <dt>Heures: </dt>
                                    <dd> 7h-18h en semaine ; &nbsp;&nbsp;  toute la journée, les weekends</dd>
                                </dl>
                                <dl>
                                    <dt> E-mail: </dt>
                                    <dd><a href=\"mailto:#\">contact@odellya.org</a></dd>
                                </dl>
                            </address>

                        </div>
                    </li>
                    <!-- <li data-x=\"-74.100000\" data-y=\"40.643180\" data-basic=\"{{ asset('bundles/main/images/gmap_marker2.png') }}\" data-active=\"{{ asset('bundles/main/images/gmap_marker2_active.png') }}\">
                <div class=\"location\">
                    <h3 class=\"txt-clr1\">
                        flooring
                        <small>
                            RETAILER
                        </small>
                    </h3>
                    <address>
                        <dl>
                            <dt>Free phone: </dt>
                            <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                        </dl>
                        <dl>
                            <dt>Address: </dt>
                            <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                        </dl>
                        <dl>
                            <dt>Hours: </dt>
                            <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                        </dl>
                        <dl>
                            <dt> E-mail: </dt>
                            <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                        </dl>
                    </address>

                </div>
            </li>
            <li data-x=\"-73.8854068\" data-y=\"40.693180\" data-basic=\"{{ asset('bundles/main/images/gmap_marker3.png') }}\" data-active=\"{{ asset('bundles/main/images/gmap_marker3_active.png') }}\">
                <div class=\"location\">
                    <h3 class=\"txt-clr1\">
                        flooring
                        <small>
                            RETAILER
                        </small>
                    </h3>
                    <address>
                        <dl>
                            <dt>Free phone: </dt>
                            <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                        </dl>
                        <dl>
                            <dt>Address: </dt>
                            <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                        </dl>
                        <dl>
                            <dt>Hours: </dt>
                            <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                        </dl>
                        <dl>
                            <dt> E-mail: </dt>
                            <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                        </dl>
                    </address>

                </div>
            </li>
            <li data-x=\"-73.7874068\" data-y=\"40.613180\" data-basic=\"{{ asset('bundles/main/images/gmap_marker4.png') }}\" data-active=\"{{ asset('bundles/main/images/gmap_marker4_active.png') }}\">
                <div class=\"location\">
                    <h3 class=\"txt-clr1\">
                        flooring
                        <small>
                            RETAILER
                        </small>
                    </h3>
                    <address>
                        <dl>
                            <dt>Free phone: </dt>
                            <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                        </dl>
                        <dl>
                            <dt>Address: </dt>
                            <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                        </dl>
                        <dl>
                            <dt>Hours: </dt>
                            <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                        </dl>
                        <dl>
                            <dt> E-mail: </dt>
                            <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                        </dl>
                    </address>

                </div>
            </li>
            <li data-x=\"-74.200000\" data-y=\"40.683180\" data-basic=\"{{ asset('bundles/main/images/gmap_marker5.png') }}\" data-active=\"{{ asset('bundles/main/images/gmap_marker5_active.png') }}\">
                <div class=\"location\">
                    <h3 class=\"txt-clr1\">
                        flooring
                        <small>
                            RETAILER
                        </small>
                    </h3>
                    <address>
                        <dl>
                            <dt>Free phone: </dt>
                            <dd class=\"phone\"><a href=\"callto:#\"> 800-2345-6789</a></dd>
                        </dl>
                        <dl>
                            <dt>Address: </dt>
                            <dd> 4578 Marmora Road,Glasgow D04 89GR</dd>
                        </dl>
                        <dl>
                            <dt>Hours: </dt>
                            <dd> 6am-4pm PST M-Th; &nbsp;&nbsp;  6am-3pm PST Fri</dd>
                        </dl>
                        <dl>
                            <dt> E-mail: </dt>
                            <dd><a href=\"mailto:#\">info@demolink.org</a></dd>
                        </dl>
                    </address>

                </div>
            </li>
                </ul>
            </div>
        </section>-->

        <section class=\"well well4\" style=\"border: none;\">
            <div class=\"container\">

                <h2 class=\"txt-pr\">
                    Adhesion
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        en ligne
                    </span>
                </h2>
                <br><br>
                <div class=\"row\">
                    <div class=\"col-xs-offset-2 col-xs-9\">
                        {% if app.session.flashbag.has('notice') %}
                            <div class=\"alert alert-success\">
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                {% for message in app.session.flashbag.get('notice') %}
                                    <div class=\"row\">
                                        <div class=\"col-xs-3\">
                                            <img src=\"{{ image('bundles/main/images/thumb-up.png').cropResize(60,60) }}\">
                                        </div>
                                        <div class=\"col-xs-9\">
                                            {{ message }}
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"alert alert-info\">
                        <p>
                            <span class=\"label label-warning\">N.B</span>&nbsp;
                            Conformément à la loi « Informatique et Libertés », la confidentialité des informations et leur utilisation exclusive pour l'association sont garanties.
                        </p>
                        <p>
                            Il est à noter que la Fondation n'est pas qu'un simple collectif des passionnés des NTIC, c'est un mouvement qui se donne pour objectif de convaincre les dirigeants congolais de numériser les institutions et administrations publiques du Congo par l'adoption du Pacte technologique. Cela étant, celui ou celle qui souhaite adhérer doit pouvoir répondre à la question de son apport quant à l'atteinte de de cet objectif, et de là découlera automatiquement son rôle et son occupation comme membre actif de la Fondation.
                        </p>
                    </div>
                </div>
                {{ form_start(form, {'attr': {'class': 'contact-form', 'action':'adhesion', 'method':'POST', 'id':'contact-form'}}) }}
                    <div class=\"contact-form-loader\"></div>
                    <fieldset>
                        <div class=\"form-group\">
                            <div class=\"col-xs-1\">
                                {{ form_widget(form.applied, {'attr': {'data-constraints': '@Required @JustLetters'}}) }}
                            </div>
                            <div class=\"col-xs-11\">
                                Je souhaite adhérer à la Fondation O'dellya, organisation à but non lucratif qui a pour mission de proposer au gouvernement congolais de numériser les institutions de l'Etat par l'adoption du \"Pacte technologique\".
                            </div>
                            <span class=\"error-message\">{{ form_errors(form.applied) }}</span>

                        </div>
                        <br><br><br><br><br>
                        <div class=\"form-group\">
                            <div class=\"col-sm-3\">
                                Titre de civilité :
                            </div>
                            <div class=\"col-sm-7\">
                                {{ form_widget(form.title, {'attr': { 'placeholder':'Titre de civilité :'}}) }}
                                <span class=\"error-message\">{{ form_errors(form.title) }}</span>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    {{ form_widget(form.name, {'attr': {'data-constraints': '@Required @JustLetters', 'placeholder':'Nom et prénom :', 'class':'form-control'}}) }}
                                    <span class=\"error-message\">{{ form_errors(form.name) }}</span>
                                </div>
                                <div class=\"col-xs-6\">
                                    {{ form_widget(form.email, {'attr': {'data-constraints': '@Required @Email', 'placeholder':'Adresse Email :', 'class':'form-control'}}) }}
                                    <span class=\"error-message\">{{ form_errors(form.email) }}</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    {{ form_widget(form.phone, {'attr': { 'placeholder':'Téléphone :', 'class':'form-control'}}) }}
                                    <span class=\"error-message\">{{ form_errors(form.phone) }}</span>
                                </div>
                                <div class=\"col-xs-6\">
                                    {{ form_widget(form.occupation, {'attr': { 'placeholder':'Profession :', 'class':'form-control'}}) }}
                                    <span class=\"error-message\">{{ form_errors(form.occupation) }}</span>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <div class=\"form-group\">
                            <div class=\"col-xs-2\">
                                Pays de résidence :
                            </div>
                            <div class=\"col-xs-10\">
                                {{ form_widget(form.country, {'attr': { 'placeholder':'Votre photo :'}}) }}
                                <span class=\"error-message\">{{ form_errors(form.country) }}</span>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class=\"form-group\">
                            <div class=\"col-xs-2\">
                                Ajouter une photo :
                            </div>
                            <div class=\"col-xs-10\">
                                {{ form_widget(form.image, {'attr': { 'placeholder':'Votre photo :'}}) }}
                                <span class=\"error-message\">{{ form_errors(form.image) }}</span>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class=\"form-group\"> Message :<br><br>
                            {{ form_widget(form.message, {'attr': {'data-constraints': '@Required @Length(min=20,max=999999)','class':'form-control', 'placeholder':'Veuillez insérer ici votre message, suggestions et/ou question(s). Noter qu\\'il est important de préciser ce que sera votre apport afin que nous puissons déterminer ce que sera votre rôle en sein de la fondation.'}}) }}
                            <span class=\"error-message\">{{ form_errors(form.message) }}</span>
                        </div>


                        <div class=\"recaptcha form-group\">
                            <div class=\"g-recaptcha\" data-sitekey=\"6LeF9Q4UAAAAAIqGy3uP7DLxQ_L0z4TOSuYz0ikl\"></div>
                        </div>


                        <div class=\"btn-wr text-primary\">
                            <button class=\"btn btn-primary\"  type=\"submit\">J'adhère</button>
                        </div>
                    </fieldset>

                    {{ form_rest(form) }}
                {{ form_end(form) }}


            </div>
        </section>



    </main>
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}
{% block javascripts %}

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCJeCYd7WriRsWWMvsS7ygyndMCBWnGvKc\"
            type=\"text/javascript\">

    </script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#mainbundle_application_title label\").prepend('<span>&nbsp;&nbsp;</span>');

            \$(\"#mainbundle_application_image label\").remove();

        });
    </script>
{% endblock %}









", "MainBundle:Main:application.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/application.html.twig");
    }
}
