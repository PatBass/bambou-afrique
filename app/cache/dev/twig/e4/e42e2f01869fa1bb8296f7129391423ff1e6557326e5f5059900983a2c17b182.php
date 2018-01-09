<?php

/* MainBundle:Main:account.html.twig */
class __TwigTemplate_7166dfe7f6f891335ee851e8c26083ab0f5c40848cf94337e6e1d5c610e6c5ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:account.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_337db58e8b07528e4fd068fd5d3778b603e731acad52090b19c45a8d6ec6bc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337db58e8b07528e4fd068fd5d3778b603e731acad52090b19c45a8d6ec6bc67->enter($__internal_337db58e8b07528e4fd068fd5d3778b603e731acad52090b19c45a8d6ec6bc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337db58e8b07528e4fd068fd5d3778b603e731acad52090b19c45a8d6ec6bc67->leave($__internal_337db58e8b07528e4fd068fd5d3778b603e731acad52090b19c45a8d6ec6bc67_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca1813ab5428c98ebebdc95255506c805ca3c1d43bc40c5da587995a83daf035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1813ab5428c98ebebdc95255506c805ca3c1d43bc40c5da587995a83daf035->enter($__internal_ca1813ab5428c98ebebdc95255506c805ca3c1d43bc40c5da587995a83daf035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:account.html.twig", 3)->display($context);
        // line 4
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    ";
        // line 8
        $this->loadTemplate("MainBundle:Common:banner.html.twig", "MainBundle:Main:account.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"search\">
        <form>
            <input type=\"text\" value=\"Search store here ...\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = '';}\" >
            <input type=\"submit\" value=\"\">
        </form>
    </div>
    <div class=\"clearfix\"> </div>

    <!---->
    <div class=\"container\">
        <div class=\"account\">
            <h2>Account</h2>
            <form>
                <div>
                    <span>First Name</span>
                    <input type=\"text\">
                </div>
                <div>
                    <span class=\"name-in\">Last Name</span>
                    <input type=\"text\">
                </div>
                <div>
                    <span class=\"mail\">Email</span>
                    <input type=\"text\">
                </div>
                <div>
                    <span class=\"word\">Password</span>
                    <input type=\"password\">
                </div>
                <input type=\"submit\" value=\"Login\">
            </form>
        </div>

    </div>

";
        
        $__internal_ca1813ab5428c98ebebdc95255506c805ca3c1d43bc40c5da587995a83daf035->leave($__internal_ca1813ab5428c98ebebdc95255506c805ca3c1d43bc40c5da587995a83daf035_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  49 => 8,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
{% block body %}
    {% include('MainBundle:Common:header.html.twig') %}
    <!--========================================================
                           CONTENT
 =========================================================-->

    {% include('MainBundle:Common:banner.html.twig') %}

    <div class=\"search\">
        <form>
            <input type=\"text\" value=\"Search store here ...\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = '';}\" >
            <input type=\"submit\" value=\"\">
        </form>
    </div>
    <div class=\"clearfix\"> </div>

    <!---->
    <div class=\"container\">
        <div class=\"account\">
            <h2>Account</h2>
            <form>
                <div>
                    <span>First Name</span>
                    <input type=\"text\">
                </div>
                <div>
                    <span class=\"name-in\">Last Name</span>
                    <input type=\"text\">
                </div>
                <div>
                    <span class=\"mail\">Email</span>
                    <input type=\"text\">
                </div>
                <div>
                    <span class=\"word\">Password</span>
                    <input type=\"password\">
                </div>
                <input type=\"submit\" value=\"Login\">
            </form>
        </div>

    </div>

{% endblock %}
", "MainBundle:Main:account.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Main/account.html.twig");
    }
}
