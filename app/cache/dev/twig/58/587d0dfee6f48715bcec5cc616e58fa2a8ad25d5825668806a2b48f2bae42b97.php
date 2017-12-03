<?php

/* MainBundle:Common:background.html.twig */
class __TwigTemplate_bce71110c79376846ae72d28c71912f6f5e49faa3d28610238a166df07239149 extends Twig_Template
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
        $__internal_550de8bd978836f82a334e9349d27a0f534f7b9dc8adfe1c96d023363a49d29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550de8bd978836f82a334e9349d27a0f534f7b9dc8adfe1c96d023363a49d29f->enter($__internal_550de8bd978836f82a334e9349d27a0f534f7b9dc8adfe1c96d023363a49d29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Common:background.html.twig"));

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
        
        $__internal_550de8bd978836f82a334e9349d27a0f534f7b9dc8adfe1c96d023363a49d29f->leave($__internal_550de8bd978836f82a334e9349d27a0f534f7b9dc8adfe1c96d023363a49d29f_prof);

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
</div>", "MainBundle:Common:background.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Common/background.html.twig");
    }
}
