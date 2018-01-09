<?php

/* MainBundle:Main:single.html.twig */
class __TwigTemplate_cb724dbb5bb7bb6aa422e7183da8c1c704fbf15a610b8b20cb9448f6505c480d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:single.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ebe0d1e6f910f5090963781610582238fed4abd412de1a8a7978a70dbc5d092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebe0d1e6f910f5090963781610582238fed4abd412de1a8a7978a70dbc5d092->enter($__internal_1ebe0d1e6f910f5090963781610582238fed4abd412de1a8a7978a70dbc5d092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ebe0d1e6f910f5090963781610582238fed4abd412de1a8a7978a70dbc5d092->leave($__internal_1ebe0d1e6f910f5090963781610582238fed4abd412de1a8a7978a70dbc5d092_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1c33f0b6d5156348340536ba9399666615d4511101e193ca426ae787a0d6b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c33f0b6d5156348340536ba9399666615d4511101e193ca426ae787a0d6b45->enter($__internal_e1c33f0b6d5156348340536ba9399666615d4511101e193ca426ae787a0d6b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Casablanca";
        
        $__internal_e1c33f0b6d5156348340536ba9399666615d4511101e193ca426ae787a0d6b45->leave($__internal_e1c33f0b6d5156348340536ba9399666615d4511101e193ca426ae787a0d6b45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90e8223b3af4e401b9dd2204921a08b93094b3d532ffb5e647a276b5777b062b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e8223b3af4e401b9dd2204921a08b93094b3d532ffb5e647a276b5777b062b->enter($__internal_90e8223b3af4e401b9dd2204921a08b93094b3d532ffb5e647a276b5777b062b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:single.html.twig", 4)->display($context);
        // line 5
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    ";
        // line 10
        echo "    <div class=\"container\" style=\"padding-top: 100px;\">
        <div class=\"single\">
            <div class=\"col-md-9  single-top\">
                <div class=\"text-in\">
                    <div class=\"single-men\">
                        <img class=\"img-responsive\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/gal5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        <br>
                        <div class=\"sub-in\">
                            <input type=\"submit\" value=\"Commander\">
                        </div>
                        <h5>Lorem Ipsum is simply dummy text</h5>
                        <p>Quisque euismod velit luctus tellus dignissim, sed aliquam tellus porttitor. Suspendisse feugiat, orci sed iaculis tristique, est neque tempus sem, ut iaculis mi augue sed enim. Nunc nec consectetur mi. Aenean nisl augue, laoreet vel justo nec, auctor congue metus. Vestibulum aliquet, eros non iaculis lobortis, velit lectus imperdiet turpis, id blandit nisi mauris nec turpis.
                            Quisque euismod velit luctus tellus dignissim, sed aliquam tellus porttitor. Suspendisse feugiat, orci sed iaculis tristique, est neque tempus sem, ut iaculis mi augue sed enim. Nunc nec consectetur mi. Aenean nisl augue, laoreet vel justo nec, auctor congue metus. Vestibulum aliquet, eros non iaculis lobortis, velit lectus imperdiet turpis, id blandit nisi mauris nec turpis.</p>
                    </div>
                    <!-- <ul class=\"comment-list\">
                                              <h5 class=\"post-author_head\">Written by <a href=\"#\" title=\"Posts by admin\" rel=\"author\">admin</a></h5>
                                               <li><img src=\"images/avatar.png\" class=\"img-responsive\" alt=\"\">
                                                 <div class=\"desc\">
                                                  <p>View all posts by: <a href=\"#\" title=\"Posts by admin\" rel=\"author\">admin</a></p>
                                                 </div>
                                                 <div class=\"clearfix\"></div>
                                               </li>
                                           </ul> -->
                    <br><br>
                    <hr>
                    <div class=\"comments-area\">
                        <h3>Ajouter un Commentaire</h3>
                        <form>
                            <p>
                                <label>Nom</label>

                                <input type=\"text\" value=\"\">
                            </p>
                            <p>
                                <label>Email</label>

                                <input type=\"text\" value=\"\">
                            </p>
                            <p>
                                <label>Website</label>
                                <input type=\"text\" value=\"\">
                            </p>
                            <p>
                                <label>Message</label>

                                <textarea></textarea>
                            </p>
                            <div class=\"sub-in\">
                                <input type=\"submit\" value=\"Ajouer\">
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <div class=\"col-md-3 single-bottom\">
                <div class=\"store-right\">
                    <h6> Categories</h6>
                    <ul class=\"store-men\">
                        <li><a href=\"#\"><span> </span>Contrary to popular </a></li>
                        <li><a href=\"#\"><span> </span>simply random text</a></li>
                        <li><a href=\"#\"><span> </span> Lorem Ipsum passage </a></li>
                        <li><a href=\"#\"><span> </span>undoubtable source </a></li>
                        <li><a href=\"#\"><span> </span>Finibus Bonorum et</a></li>
                        <li class=\"last\"><a href=\"#\"><span> </span>word in classical literature </a></li>
                    </ul>
                </div>
                <div class=\"store-right\">
                    <h6>Top rated products</h6>
                    <div class=\"product\">
                        <img class=\"img-responsive fashion\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/st1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                        <div class=\"grid-product\">
                            <a href=\"#\" class=\"elit\">consectetuer adipiscing elit</a>
                            <span class=\"price price-in\"><small>15.00 DH</small> 10.00 DH</span>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"product\">
                        <img class=\"img-responsive fashion\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/st2.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                        <div class=\"grid-product\">
                            <a href=\"#\" class=\"elit\">consectetuer adipiscing elit</a>
                            <span class=\"price price-in\"><small>15.00 DH</small> 10.00 DH</span>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"product\">
                        <img class=\"img-responsive fashion\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/st3.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                        <div class=\"grid-product\">
                            <a href=\"#\" class=\"elit\">consectetuer adipiscing elit</a>
                            <span class=\"price price-in\"><small>150.0 DH0</small> 10.00 DH</span>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"product\">
                        <img class=\"img-responsive fashion\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/st4.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                        <div class=\"grid-product\">
                            <a href=\"#\" class=\"elit\">consectetuer adipiscing elit</a>
                            <span class=\"price price-in\"><small>15.00 DH</small> 10.00 DH</span>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
    ";
        // line 117
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:single.html.twig", 117)->display($context);
        
        $__internal_90e8223b3af4e401b9dd2204921a08b93094b3d532ffb5e647a276b5777b062b->leave($__internal_90e8223b3af4e401b9dd2204921a08b93094b3d532ffb5e647a276b5777b062b_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 117,  172 => 105,  161 => 97,  150 => 89,  139 => 81,  70 => 15,  63 => 10,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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
{% block title %}{{ parent() }} - Casablanca{% endblock %}
{% block body %}
    {% include('MainBundle:Common:header.html.twig') %}
    <!--========================================================
                           CONTENT
 =========================================================-->

    {#{% include('MainBundle:Common:banner.html.twig') %}#}
    <div class=\"container\" style=\"padding-top: 100px;\">
        <div class=\"single\">
            <div class=\"col-md-9  single-top\">
                <div class=\"text-in\">
                    <div class=\"single-men\">
                        <img class=\"img-responsive\" src=\"{{ asset('bundles/main/images/gal5.jpg') }}\" alt=\"\" />
                        <br>
                        <div class=\"sub-in\">
                            <input type=\"submit\" value=\"Commander\">
                        </div>
                        <h5>Lorem Ipsum is simply dummy text</h5>
                        <p>Quisque euismod velit luctus tellus dignissim, sed aliquam tellus porttitor. Suspendisse feugiat, orci sed iaculis tristique, est neque tempus sem, ut iaculis mi augue sed enim. Nunc nec consectetur mi. Aenean nisl augue, laoreet vel justo nec, auctor congue metus. Vestibulum aliquet, eros non iaculis lobortis, velit lectus imperdiet turpis, id blandit nisi mauris nec turpis.
                            Quisque euismod velit luctus tellus dignissim, sed aliquam tellus porttitor. Suspendisse feugiat, orci sed iaculis tristique, est neque tempus sem, ut iaculis mi augue sed enim. Nunc nec consectetur mi. Aenean nisl augue, laoreet vel justo nec, auctor congue metus. Vestibulum aliquet, eros non iaculis lobortis, velit lectus imperdiet turpis, id blandit nisi mauris nec turpis.</p>
                    </div>
                    <!-- <ul class=\"comment-list\">
                                              <h5 class=\"post-author_head\">Written by <a href=\"#\" title=\"Posts by admin\" rel=\"author\">admin</a></h5>
                                               <li><img src=\"images/avatar.png\" class=\"img-responsive\" alt=\"\">
                                                 <div class=\"desc\">
                                                  <p>View all posts by: <a href=\"#\" title=\"Posts by admin\" rel=\"author\">admin</a></p>
                                                 </div>
                                                 <div class=\"clearfix\"></div>
                                               </li>
                                           </ul> -->
                    <br><br>
                    <hr>
                    <div class=\"comments-area\">
                        <h3>Ajouter un Commentaire</h3>
                        <form>
                            <p>
                                <label>Nom</label>

                                <input type=\"text\" value=\"\">
                            </p>
                            <p>
                                <label>Email</label>

                                <input type=\"text\" value=\"\">
                            </p>
                            <p>
                                <label>Website</label>
                                <input type=\"text\" value=\"\">
                            </p>
                            <p>
                                <label>Message</label>

                                <textarea></textarea>
                            </p>
                            <div class=\"sub-in\">
                                <input type=\"submit\" value=\"Ajouer\">
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <div class=\"col-md-3 single-bottom\">
                <div class=\"store-right\">
                    <h6> Categories</h6>
                    <ul class=\"store-men\">
                        <li><a href=\"#\"><span> </span>Contrary to popular </a></li>
                        <li><a href=\"#\"><span> </span>simply random text</a></li>
                        <li><a href=\"#\"><span> </span> Lorem Ipsum passage </a></li>
                        <li><a href=\"#\"><span> </span>undoubtable source </a></li>
                        <li><a href=\"#\"><span> </span>Finibus Bonorum et</a></li>
                        <li class=\"last\"><a href=\"#\"><span> </span>word in classical literature </a></li>
                    </ul>
                </div>
                <div class=\"store-right\">
                    <h6>Top rated products</h6>
                    <div class=\"product\">
                        <img class=\"img-responsive fashion\" src=\"{{ asset('bundles/main/images/st1.jpg') }}\" alt=\"\"/>
                        <div class=\"grid-product\">
                            <a href=\"#\" class=\"elit\">consectetuer adipiscing elit</a>
                            <span class=\"price price-in\"><small>15.00 DH</small> 10.00 DH</span>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"product\">
                        <img class=\"img-responsive fashion\" src=\"{{ asset('bundles/main/images/st2.jpg') }}\" alt=\"\"/>
                        <div class=\"grid-product\">
                            <a href=\"#\" class=\"elit\">consectetuer adipiscing elit</a>
                            <span class=\"price price-in\"><small>15.00 DH</small> 10.00 DH</span>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"product\">
                        <img class=\"img-responsive fashion\" src=\"{{ asset('bundles/main/images/st3.jpg') }}\" alt=\"\"/>
                        <div class=\"grid-product\">
                            <a href=\"#\" class=\"elit\">consectetuer adipiscing elit</a>
                            <span class=\"price price-in\"><small>150.0 DH0</small> 10.00 DH</span>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <div class=\"product\">
                        <img class=\"img-responsive fashion\" src=\"{{ asset('bundles/main/images/st4.jpg') }}\" alt=\"\"/>
                        <div class=\"grid-product\">
                            <a href=\"#\" class=\"elit\">consectetuer adipiscing elit</a>
                            <span class=\"price price-in\"><small>15.00 DH</small> 10.00 DH</span>
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"> </div>
        </div>
    </div>
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}
", "MainBundle:Main:single.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/single.html.twig");
    }
}
