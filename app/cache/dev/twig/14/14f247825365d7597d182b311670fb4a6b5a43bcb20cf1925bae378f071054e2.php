<?php

/* MainBundle:Common:background.html.twig */
class __TwigTemplate_ae1a06eb7427f779c12ee4a0117c760e71cdb9d3268337ac107f18976b4521d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_677068cb9c84ca17afc618d47d5a660da8b99f7f2c2dc88d822128d2f1527d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677068cb9c84ca17afc618d47d5a660da8b99f7f2c2dc88d822128d2f1527d7f->enter($__internal_677068cb9c84ca17afc618d47d5a660da8b99f7f2c2dc88d822128d2f1527d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Common:background.html.twig"));

        // line 1
        echo "<div class=\"row sections-background-images\" style=\"\">
    <p>
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/yplushy_pregnancy2.jpg"), "html", null, true);
        echo "\" width=\"102%\">
    </p>
    <p>
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/yplushy_newborn2.jpg"), "html", null, true);
        echo "\" width=\"102%\">
    </p>
    <p>
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/yplushy_pregnancy.jpg"), "html", null, true);
        echo "\" width=\"102%\">
    </p>


    <p>
        ";
        // line 14
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Common:background.html.twig", 14)->display($context);
        // line 15
        echo "    </p>
</div>";
        
        $__internal_677068cb9c84ca17afc618d47d5a660da8b99f7f2c2dc88d822128d2f1527d7f->leave($__internal_677068cb9c84ca17afc618d47d5a660da8b99f7f2c2dc88d822128d2f1527d7f_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Common:background.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  46 => 14,  38 => 9,  32 => 6,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row sections-background-images\" style=\"\">
    <p>
        <img src=\"{{ asset('images/yplushy_pregnancy2.jpg') }}\" width=\"102%\">
    </p>
    <p>
        <img src=\"{{ asset('images/yplushy_newborn2.jpg') }}\" width=\"102%\">
    </p>
    <p>
        <img src=\"{{ asset('images/yplushy_pregnancy.jpg') }}\" width=\"102%\">
    </p>


    <p>
        {% include('MainBundle:Common:footer.html.twig') %}
    </p>
</div>", "MainBundle:Common:background.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Common/background.html.twig");
    }
}
