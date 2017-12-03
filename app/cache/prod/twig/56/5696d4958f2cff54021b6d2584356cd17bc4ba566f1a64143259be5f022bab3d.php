<?php

/* MainBundle:Main:application.html.twig */
class __TwigTemplate_dca7c5f7d260a21f7327f1894b50cb7da7394b75c185c30c769e2e8476ae47da extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Custom CSS -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/contact-form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
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
                    Adhésion
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        en ligne
                    </span>
                </h2>
                <br><br>
                <div class=\"row\">
                    <div class=\"alert alert-warning\">

                        <p>
                            <span class=\"label label-warning\">N.B</span>&nbsp;
                            Conformément à la loi « Informatique et Libertés », la confidentialité des informations et leur utilisation exclusive pour l'association sont garanties.
                        </p>
                    </div>
                </div>
                ";
        // line 186
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "contact-form", "action" => "adhesion", "method" => "POST", "id" => "contact-form")));
        echo "
                    <div class=\"contact-form-loader\"></div>
                    <fieldset>
                        <div class=\"form-group\">
                            <div class=\"col-xs-1\">
                                ";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "applied", array()), 'widget', array("attr" => array("data-constraints" => "@Required @JustLetters")));
        echo "
                            </div>
                            <div class=\"col-xs-11\">
                                Je souhaite adhérer à la Fondation O'dellya, organisation à but non lucratif qui a pour mission de proposer au gouvernement congolais de numériser les institutions de l'Etat par l'adoption du \"Pacte technologique\".
                            </div>
                            <span class=\"error-message\">";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "applied", array()), 'errors');
        echo "</span>

                        </div>
                        <br><br><br><br><br>
                        <div class=\"form-group\">
                            <div class=\"col-sm-3\">
                                Titre de civilité :
                            </div>
                            <div class=\"col-sm-9\">
                                ";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'widget', array("attr" => array("placeholder" => "Titre de civilité :")));
        echo "
                                <span class=\"error-message\">";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    ";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'widget', array("attr" => array("data-constraints" => "@Required @JustLetters", "placeholder" => "Nom et prénom :", "class" => "form-control")));
        echo "
                                    <span class=\"error-message\">";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'errors');
        echo "</span>
                                </div>
                                <div class=\"col-xs-6\">
                                    ";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("data-constraints" => "@Required @Email", "placeholder" => "Adresse Email :", "class" => "form-control")));
        echo "
                                    <span class=\"error-message\">";
        // line 218
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'errors');
        echo "</span>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    ";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'widget', array("attr" => array("placeholder" => "Téléphone :", "class" => "form-control")));
        echo "
                                    <span class=\"error-message\">";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "phone", array()), 'errors');
        echo "</span>
                                </div>
                                <div class=\"col-xs-6\">
                                    ";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "occupation", array()), 'widget', array("attr" => array("placeholder" => "Profession :", "class" => "form-control")));
        echo "
                                    <span class=\"error-message\">";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "occupation", array()), 'errors');
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
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'widget', array("attr" => array("placeholder" => "Votre photo :")));
        echo "
                                <span class=\"error-message\">";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'errors');
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
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "image", array()), 'widget', array("attr" => array("placeholder" => "Votre photo :")));
        echo "
                                <span class=\"error-message\">";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "image", array()), 'errors');
        echo "</span>
                            </div>
                        </div>
                        <br><br><br><br>
                        <div class=\"form-group\"> Message :<br><br>
                            ";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", array()), 'widget', array("attr" => array("data-constraints" => "@Required @Length(min=20,max=999999)", "placeholder" => "Veuillez insérer ici votre message, suggestions et/ou question(s). Noter qu'il est important de préciser ce que sera votre apport afin que nous puissons déterminer ce que sera votre rôle en sein de la fondation.")));
        echo "
                            <span class=\"error-message\">";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "message", array()), 'errors');
        echo "</span>
                        </div>


                        <label class=\"recaptcha\">
                            <div class=\"g-recaptcha\" data-sitekey=\"6LdICQcUAAAAAMKjB3Cet82jKHwb_4S-ms8Wz-iE\"></div>
                        </label>

                        <div class=\"btn-wr text-primary\">
                            <button class=\"btn btn-primary\"  type=\"submit\">J'adhère</button>
                        </div>
                    </fieldset>
                    <div class=\"modal fade response-message\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                                        &times;
                                    </button>
                                    <h4 class=\"modal-title\">Modal title</h4>
                                </div>
                                <div class=\"modal-body\">
                                    ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 281
            echo "                                        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                ";
        // line 288
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


            </div>
        </section>



    </main>
    ";
        // line 297
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:application.html.twig", 297)->display($context);
    }

    // line 299
    public function block_javascripts($context, array $blocks = array())
    {
        // line 300
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCJeCYd7WriRsWWMvsS7ygyndMCBWnGvKc\"
            type=\"text/javascript\">

    </script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#mainbundle_application_title label\").prepend('<span>&nbsp;&nbsp;</span>');

            \$(\"#mainbundle_application_image label\").remove();

        });
    </script>
";
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
        return array (  446 => 300,  443 => 299,  439 => 297,  427 => 288,  423 => 287,  417 => 283,  408 => 281,  404 => 280,  379 => 258,  375 => 257,  367 => 252,  363 => 251,  351 => 242,  347 => 241,  334 => 231,  330 => 230,  324 => 227,  320 => 226,  309 => 218,  305 => 217,  299 => 214,  295 => 213,  285 => 206,  281 => 205,  269 => 196,  261 => 191,  253 => 186,  196 => 134,  162 => 105,  128 => 76,  94 => 47,  60 => 18,  48 => 8,  45 => 7,  42 => 6,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MainBundle:Main:application.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Main/application.html.twig");
    }
}
