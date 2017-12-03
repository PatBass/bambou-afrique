<?php

/* MainBundle:Main:contact.html.twig */
class __TwigTemplate_5dca26d2e9aa755273618ad1fd7b7c7ffb2245c93bc2c158ffceb7fec01dd5c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:contact.html.twig", 1);
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
        $__internal_a65ae4cd682af97566a051ac735e1cea3ef6df6848fd27201c047e6df1727fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65ae4cd682af97566a051ac735e1cea3ef6df6848fd27201c047e6df1727fb1->enter($__internal_a65ae4cd682af97566a051ac735e1cea3ef6df6848fd27201c047e6df1727fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a65ae4cd682af97566a051ac735e1cea3ef6df6848fd27201c047e6df1727fb1->leave($__internal_a65ae4cd682af97566a051ac735e1cea3ef6df6848fd27201c047e6df1727fb1_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b46f7df17f13ffb2b8807843a68d9af0c960be27f121ea9acfb4f9641267a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b46f7df17f13ffb2b8807843a68d9af0c960be27f121ea9acfb4f9641267a92->enter($__internal_4b46f7df17f13ffb2b8807843a68d9af0c960be27f121ea9acfb4f9641267a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <!-- Custom CSS -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/contact-form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        
        $__internal_4b46f7df17f13ffb2b8807843a68d9af0c960be27f121ea9acfb4f9641267a92->leave($__internal_4b46f7df17f13ffb2b8807843a68d9af0c960be27f121ea9acfb4f9641267a92_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_67fefaf771c1f10d3086072b00026c5f111092f52e96c368cb139c6ea535613d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fefaf771c1f10d3086072b00026c5f111092f52e96c368cb139c6ea535613d->enter($__internal_67fefaf771c1f10d3086072b00026c5f111092f52e96c368cb139c6ea535613d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:contact.html.twig", 7)->display(array_merge($context, array("active" => "contact")));
        // line 8
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    <main>

        <section>
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
            </li> -->
                </ul>
            </div>
        </section>

        <section class=\"well well4\" style=\"border: none;\">
            <div class=\"container\">

                <h2 class=\"txt-pr\">
                    Formulaire
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        de contact
                    </span>
                </h2>
                <div class=\"row\">
                    <div class=\"well\">

                        <p>
                            <span class=\"label label-warning\">N.B</span>
                            La Fondation n'est pas qu'un simple collectif des passionnés des NTIC, c'est un mouvement qui se donne pour objectif de convaincre les dirigeants congolais de numériser les institutions et administrations publiques du Congo par l'adoption du Pacte technologique. Cela étant, celui ou celle qui souhaite adhérer doit pouvoir répondre à la question de son apport quant à l'atteinte de de cet objectif, et de là découlera automatiquement son rôle et son occupation comme membre actif de la Fondation.
                        </p>
                    </div>
                </div>
                ";
        // line 185
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 185, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "contact-form", "action" => "contactAction", "method" => "POST", "id" => "contact-form")));
        echo "
                    <div class=\"contact-form-loader\"></div>
                    <fieldset>
                        <label class=\"name\">
                            ";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 189, $this->getSourceContext()); })()), "name", array()), 'widget', array("attr" => array("data-constraints" => "@Required @JustLetters", "placeholder" => "Name:")));
        echo "
                            <span class=\"error-message\">";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 190, $this->getSourceContext()); })()), "name", array()), 'errors');
        echo "</span>
                        </label>

                        <label class=\"phone\">
                            ";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 194, $this->getSourceContext()); })()), "phone", array()), 'widget', array("attr" => array("data-constraints" => "@Required @JustLetters", "placeholder" => "Phone:")));
        echo "
                            <span class=\"error-message\">";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 195, $this->getSourceContext()); })()), "phone", array()), 'errors');
        echo "</span>
                        </label>

                        <label class=\"email\">
                            ";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 199, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("data-constraints" => "@Required @Email", "placeholder" => "Email:")));
        echo "
                            <span class=\"error-message\">";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 200, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "</span>
                        </label>

                        <label class=\"message\">
                            ";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 204, $this->getSourceContext()); })()), "message", array()), 'widget', array("attr" => array("data-constraints" => "@Required @Length(min=20,max=999999)", "placeholder" => "Message")));
        echo "
                            <span class=\"error-message\">";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 205, $this->getSourceContext()); })()), "message", array()), 'errors');
        echo "</span>
                        </label>

                        <label class=\"recaptcha\">
                            <div class=\"g-recaptcha\" data-sitekey=\"6LdICQcUAAAAAMKjB3Cet82jKHwb_4S-ms8Wz-iE\"></div>
                        </label>

                        <div class=\"btn-wr text-primary\">
                            <button class=\"btn btn-primary\"  type=\"submit\">Envoyer</button>
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
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 226, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 227
            echo "                                        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 233, $this->getSourceContext()); })()), 'rest');
        echo "
                ";
        // line 234
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 234, $this->getSourceContext()); })()), 'form_end');
        echo "


            </div>
        </section>



    </main>
    ";
        // line 243
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:contact.html.twig", 243)->display($context);
        
        $__internal_67fefaf771c1f10d3086072b00026c5f111092f52e96c368cb139c6ea535613d->leave($__internal_67fefaf771c1f10d3086072b00026c5f111092f52e96c368cb139c6ea535613d_prof);

    }

    // line 245
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7abb3e20aa4dd7b8ab91788a0bc275addd9cc4aeb324b934de03f5c7b0cff8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7abb3e20aa4dd7b8ab91788a0bc275addd9cc4aeb324b934de03f5c7b0cff8c->enter($__internal_f7abb3e20aa4dd7b8ab91788a0bc275addd9cc4aeb324b934de03f5c7b0cff8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 246
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCJeCYd7WriRsWWMvsS7ygyndMCBWnGvKc\"
            type=\"text/javascript\"></script>


";
        
        $__internal_f7abb3e20aa4dd7b8ab91788a0bc275addd9cc4aeb324b934de03f5c7b0cff8c->leave($__internal_f7abb3e20aa4dd7b8ab91788a0bc275addd9cc4aeb324b934de03f5c7b0cff8c_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 246,  377 => 245,  370 => 243,  358 => 234,  354 => 233,  348 => 229,  339 => 227,  335 => 226,  311 => 205,  307 => 204,  300 => 200,  296 => 199,  289 => 195,  285 => 194,  278 => 190,  274 => 189,  267 => 185,  211 => 134,  177 => 105,  143 => 76,  109 => 47,  75 => 18,  63 => 8,  60 => 7,  54 => 6,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}
{% block stylesheets %}
    <!-- Custom CSS -->
    <link href=\"{{ asset('bundles/main/css/contact-form.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}
{% block body %}
    {% include('MainBundle:Common:header.html.twig') with {'active':'contact'} %}
    <!--========================================================
                           CONTENT
 =========================================================-->

    <main>

        <section>
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
            </li> -->
                </ul>
            </div>
        </section>

        <section class=\"well well4\" style=\"border: none;\">
            <div class=\"container\">

                <h2 class=\"txt-pr\">
                    Formulaire
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        de contact
                    </span>
                </h2>
                <div class=\"row\">
                    <div class=\"well\">

                        <p>
                            <span class=\"label label-warning\">N.B</span>
                            La Fondation n'est pas qu'un simple collectif des passionnés des NTIC, c'est un mouvement qui se donne pour objectif de convaincre les dirigeants congolais de numériser les institutions et administrations publiques du Congo par l'adoption du Pacte technologique. Cela étant, celui ou celle qui souhaite adhérer doit pouvoir répondre à la question de son apport quant à l'atteinte de de cet objectif, et de là découlera automatiquement son rôle et son occupation comme membre actif de la Fondation.
                        </p>
                    </div>
                </div>
                {{ form_start(form, {'attr': {'class': 'contact-form', 'action':'contactAction', 'method':'POST', 'id':'contact-form'}}) }}
                    <div class=\"contact-form-loader\"></div>
                    <fieldset>
                        <label class=\"name\">
                            {{ form_widget(form.name, {'attr': {'data-constraints': '@Required @JustLetters', 'placeholder':'Name:'}}) }}
                            <span class=\"error-message\">{{ form_errors(form.name) }}</span>
                        </label>

                        <label class=\"phone\">
                            {{ form_widget(form.phone, {'attr': {'data-constraints': '@Required @JustLetters', 'placeholder':'Phone:'}}) }}
                            <span class=\"error-message\">{{ form_errors(form.phone) }}</span>
                        </label>

                        <label class=\"email\">
                            {{ form_widget(form.email, {'attr': {'data-constraints': '@Required @Email', 'placeholder':'Email:'}}) }}
                            <span class=\"error-message\">{{ form_errors(form.email) }}</span>
                        </label>

                        <label class=\"message\">
                            {{ form_widget(form.message, {'attr': {'data-constraints': '@Required @Length(min=20,max=999999)', 'placeholder':'Message'}}) }}
                            <span class=\"error-message\">{{ form_errors(form.message) }}</span>
                        </label>

                        <label class=\"recaptcha\">
                            <div class=\"g-recaptcha\" data-sitekey=\"6LdICQcUAAAAAMKjB3Cet82jKHwb_4S-ms8Wz-iE\"></div>
                        </label>

                        <div class=\"btn-wr text-primary\">
                            <button class=\"btn btn-primary\"  type=\"submit\">Envoyer</button>
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
                                    {% for message in app.session.flashbag.get('notice') %}
                                        {{ message }}
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ form_rest(form) }}
                {{ form_end(form) }}


            </div>
        </section>



    </main>
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}
{% block javascripts %}

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCJeCYd7WriRsWWMvsS7ygyndMCBWnGvKc\"
            type=\"text/javascript\"></script>


{% endblock %}




", "MainBundle:Main:contact.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Main/contact.html.twig");
    }
}
