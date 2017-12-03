<?php

/* MainBundle:Extra:identification.html.twig */
class __TwigTemplate_1a4249b466ec7ed2c36dbe06028d2e86e5513b47761ec80663d03a5865d52b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Extra:identification.html.twig", 1);
        $this->blocks = array(
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
        $__internal_131aed10d995136fa4b710954bacfa0c5eb80b8f61e81d259198777cc5c3a2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131aed10d995136fa4b710954bacfa0c5eb80b8f61e81d259198777cc5c3a2c4->enter($__internal_131aed10d995136fa4b710954bacfa0c5eb80b8f61e81d259198777cc5c3a2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Extra:identification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_131aed10d995136fa4b710954bacfa0c5eb80b8f61e81d259198777cc5c3a2c4->leave($__internal_131aed10d995136fa4b710954bacfa0c5eb80b8f61e81d259198777cc5c3a2c4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e93cd496608b6fefe19a463707a6a3f023277d4510a33dbfa0729f6edaac297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e93cd496608b6fefe19a463707a6a3f023277d4510a33dbfa0729f6edaac297->enter($__internal_3e93cd496608b6fefe19a463707a6a3f023277d4510a33dbfa0729f6edaac297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br><br><br><br>
    <div class=\"row\">
        <div class=\"col-xs-offset-1 col-xs-8\">
            <div class=\"col-sm-offset-2 col-sm-8\">
                ";
        // line 7
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "has", array(0 => "notice"), "method")) {
            // line 8
            echo "                    <div class=\"alert alert-danger\">
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "                            ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                    </div>
                ";
        }
        // line 15
        echo "            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class=\"row\">
        <div class=\"col-sm-offset-3 col-sm-8\">

            <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nakevote");
        echo "\" method=\"post\">
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'errors');
        echo "
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "prenom", array()), 'widget', array("attr" => array("placeholder" => "Pesa kombo na yo", "title" => "kombo", "class" => "form-control", "size" => "100")));
        echo "
                        <p class=\"help-block text-danger\" style=\"color: red;\">";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "prenom", array()), 'errors');
        echo "</p>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "password", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe", "title" => "Mot de passe", "class" => "form-control", "size" => "100px")));
        echo "
                        <p class=\"help-block text-danger\" style=\"color: red;\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "password", array()), 'errors');
        echo "</p>
                    </div>
                    <br>
                    <div class=\"form-group\">
                        <button class=\"btn btn-success\"  type=\"submit\">Na ké ko pona</button>

                    </div>
                </div>
                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'rest');
        echo "
            </form>

        </div>
    </div>
";
        
        $__internal_3e93cd496608b6fefe19a463707a6a3f023277d4510a33dbfa0729f6edaac297->leave($__internal_3e93cd496608b6fefe19a463707a6a3f023277d4510a33dbfa0729f6edaac297_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41fe4f49aa7ffe4986599f60062eaa4b9e8dbdfe0d9be26ddbf098e272c945fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41fe4f49aa7ffe4986599f60062eaa4b9e8dbdfe0d9be26ddbf098e272c945fd->enter($__internal_41fe4f49aa7ffe4986599f60062eaa4b9e8dbdfe0d9be26ddbf098e272c945fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_41fe4f49aa7ffe4986599f60062eaa4b9e8dbdfe0d9be26ddbf098e272c945fd->leave($__internal_41fe4f49aa7ffe4986599f60062eaa4b9e8dbdfe0d9be26ddbf098e272c945fd_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Extra:identification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  136 => 47,  133 => 46,  127 => 45,  114 => 39,  103 => 31,  99 => 30,  93 => 27,  89 => 26,  83 => 23,  79 => 22,  70 => 15,  66 => 13,  57 => 11,  53 => 10,  49 => 8,  47 => 7,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}
{% block body %}
    <br><br><br><br>
    <div class=\"row\">
        <div class=\"col-xs-offset-1 col-xs-8\">
            <div class=\"col-sm-offset-2 col-sm-8\">
                {% if app.session.flashbag.has('notice') %}
                    <div class=\"alert alert-danger\">
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        {% for message in app.session.flashbag.get('notice') %}
                            {{ message }}
                        {% endfor %}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class=\"row\">
        <div class=\"col-sm-offset-3 col-sm-8\">

            <form action=\"{{ path('nakevote') }}\" method=\"post\">
                {{ form_errors(form) }}
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        {{ form_widget(form.prenom,  {'attr': {'placeholder':'Pesa kombo na yo', 'title':'kombo', 'class':'form-control', 'size':'100'}}) }}
                        <p class=\"help-block text-danger\" style=\"color: red;\">{{ form_errors(form.prenom) }}</p>
                    </div>
                    <div class=\"form-group\">
                        {{ form_widget(form.password,  {'attr': {'placeholder':'Mot de passe', 'title':'Mot de passe', 'class':'form-control', 'size':'100px'}}) }}
                        <p class=\"help-block text-danger\" style=\"color: red;\">{{ form_errors(form.password) }}</p>
                    </div>
                    <br>
                    <div class=\"form-group\">
                        <button class=\"btn btn-success\"  type=\"submit\">Na ké ko pona</button>

                    </div>
                </div>
                {{form_rest(form)}}
            </form>

        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('js/jquery.js') }}\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>
{% endblock %}

", "MainBundle:Extra:identification.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Extra/identification.html.twig");
    }
}
