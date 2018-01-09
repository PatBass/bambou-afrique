<?php

/* MainBundle:Main:about.html.twig */
class __TwigTemplate_9adb735b825fc9e7fe8240e0d79b3b012763b61bd6b52fe5b7fc18668f706ec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:about.html.twig", 1);
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
        $__internal_2a547ea8ee957cda60ac95def190aab44a5436b7c86c5005e43f95a1a589ed63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a547ea8ee957cda60ac95def190aab44a5436b7c86c5005e43f95a1a589ed63->enter($__internal_2a547ea8ee957cda60ac95def190aab44a5436b7c86c5005e43f95a1a589ed63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a547ea8ee957cda60ac95def190aab44a5436b7c86c5005e43f95a1a589ed63->leave($__internal_2a547ea8ee957cda60ac95def190aab44a5436b7c86c5005e43f95a1a589ed63_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1b0237a076ea97b6d7252d0da45ed5695d0be569bfeb53f756f6d3e12f25a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b0237a076ea97b6d7252d0da45ed5695d0be569bfeb53f756f6d3e12f25a68->enter($__internal_f1b0237a076ea97b6d7252d0da45ed5695d0be569bfeb53f756f6d3e12f25a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Casablanca";
        
        $__internal_f1b0237a076ea97b6d7252d0da45ed5695d0be569bfeb53f756f6d3e12f25a68->leave($__internal_f1b0237a076ea97b6d7252d0da45ed5695d0be569bfeb53f756f6d3e12f25a68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c236fafdeb073c967481cf0e0828ffb6cd56b6ca242333a7c87449baab4816b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c236fafdeb073c967481cf0e0828ffb6cd56b6ca242333a7c87449baab4816b->enter($__internal_0c236fafdeb073c967481cf0e0828ffb6cd56b6ca242333a7c87449baab4816b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:about.html.twig", 4)->display($context);
        // line 5
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    ";
        // line 10
        echo "    <div class=\"container\" style=\"padding-top: 100px;\">
        <article>
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/patron.jpg"), "html", null, true);
        echo "\" alt=\"M. Bennani\" width=\"40%\" height=\"auto\" style=\"float: left;border-radius: 50%;box-shadow: 8px 8px 12px #000;margin-right: 3%;\">
            <div>
                <h2 style=\"font-family: 'Pacifico', cursive;\">Nostalgie africaine</h2>
                <p>
                    Après 31 ans passés en Afrique subsaharienne, ma  nostalgie est restée liée à la gastronomie et à l’art africains de ces pays si chaleureux et si accueillants.
                </p>
                <h3 style=\"font-family: 'Pacifico', cursive;#D9D9D9;\">Le dépaysement en plein coeur de Casablanca</h3>
                <p>
                    Le restaurant Bambou d'Afrique a été inauguré en 2010, marquant le métissage des gastronomies africaine, libanaise, italienne, marocaine et autres, des cultures qui sont liées depuis cent ans en Afrique sub-saharienne.
                    Le cadre est purement africain et moderne, dans un dépaysement en plein coeur de Casablanca, entouré de chefs de cuisine sénégalais, ivoiriens et libanais, et le tout autour d'un son du Kora ou de l'oud oriental.

                    Le restaurant Bambou d’Afrique est embelli par les plus belles pièces d’art africain qui sont en vente.
                </p>
                <p>
                    Très bonne visite !
                </p>
                <p>
                    <a class=\"btn btn-primary btn-xs\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("speciality", array("category" => "liste"));
        echo "\">Découvrez nos spécialités</a>
                </p>
            </div>

        </article>
    </div>
    ";
        // line 35
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:about.html.twig", 35)->display($context);
        
        $__internal_0c236fafdeb073c967481cf0e0828ffb6cd56b6ca242333a7c87449baab4816b->leave($__internal_0c236fafdeb073c967481cf0e0828ffb6cd56b6ca242333a7c87449baab4816b_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  87 => 29,  67 => 12,  63 => 10,  57 => 5,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
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
        <article>
            <img src=\"{{ asset('bundles/main/images/patron.jpg') }}\" alt=\"M. Bennani\" width=\"40%\" height=\"auto\" style=\"float: left;border-radius: 50%;box-shadow: 8px 8px 12px #000;margin-right: 3%;\">
            <div>
                <h2 style=\"font-family: 'Pacifico', cursive;\">Nostalgie africaine</h2>
                <p>
                    Après 31 ans passés en Afrique subsaharienne, ma  nostalgie est restée liée à la gastronomie et à l’art africains de ces pays si chaleureux et si accueillants.
                </p>
                <h3 style=\"font-family: 'Pacifico', cursive;#D9D9D9;\">Le dépaysement en plein coeur de Casablanca</h3>
                <p>
                    Le restaurant Bambou d'Afrique a été inauguré en 2010, marquant le métissage des gastronomies africaine, libanaise, italienne, marocaine et autres, des cultures qui sont liées depuis cent ans en Afrique sub-saharienne.
                    Le cadre est purement africain et moderne, dans un dépaysement en plein coeur de Casablanca, entouré de chefs de cuisine sénégalais, ivoiriens et libanais, et le tout autour d'un son du Kora ou de l'oud oriental.

                    Le restaurant Bambou d’Afrique est embelli par les plus belles pièces d’art africain qui sont en vente.
                </p>
                <p>
                    Très bonne visite !
                </p>
                <p>
                    <a class=\"btn btn-primary btn-xs\" href=\"{{ path('speciality', {'category' : 'liste'}) }}\">Découvrez nos spécialités</a>
                </p>
            </div>

        </article>
    </div>
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}
", "MainBundle:Main:about.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/about.html.twig");
    }
}
