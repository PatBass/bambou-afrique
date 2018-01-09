<?php

/* MainBundle:Extra:identification.html.twig */
class __TwigTemplate_186883aed42ecdeed0610eb0abff3fcf19e13f264876578b4e10079a60beb351 extends Twig_Template
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
        $__internal_32199ebb9a61e29b67d8a4294941baf64ac478dd22151f588449d94c80fa0167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32199ebb9a61e29b67d8a4294941baf64ac478dd22151f588449d94c80fa0167->enter($__internal_32199ebb9a61e29b67d8a4294941baf64ac478dd22151f588449d94c80fa0167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Extra:identification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32199ebb9a61e29b67d8a4294941baf64ac478dd22151f588449d94c80fa0167->leave($__internal_32199ebb9a61e29b67d8a4294941baf64ac478dd22151f588449d94c80fa0167_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5505d79b8e3728408278daa9688150d742bf5bad4dd9a6accc259652372abf57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5505d79b8e3728408278daa9688150d742bf5bad4dd9a6accc259652372abf57->enter($__internal_5505d79b8e3728408278daa9688150d742bf5bad4dd9a6accc259652372abf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br><br><br><br>
    <div class=\"row\">
        <div class=\"col-xs-offset-1 col-xs-8\">
            <div class=\"col-sm-offset-2 col-sm-8\">
                ";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "notice"), "method")) {
            // line 8
            echo "                    <div class=\"alert alert-danger\">
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("placeholder" => "Pesa kombo na yo", "title" => "kombo", "class" => "form-control", "size" => "100")));
        echo "
                        <p class=\"help-block text-danger\" style=\"color: red;\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "</p>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("placeholder" => "Mot de passe", "title" => "Mot de passe", "class" => "form-control", "size" => "100px")));
        echo "
                        <p class=\"help-block text-danger\" style=\"color: red;\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</p>
                    </div>
                    <br>
                    <div class=\"form-group\">
                        <button class=\"btn btn-success\"  type=\"submit\">Na ké ko pona</button>

                    </div>
                </div>
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
            </form>

        </div>
    </div>
";
        
        $__internal_5505d79b8e3728408278daa9688150d742bf5bad4dd9a6accc259652372abf57->leave($__internal_5505d79b8e3728408278daa9688150d742bf5bad4dd9a6accc259652372abf57_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b652d126000fb1f5f8d4c420d1404a268f8816b25f511c13ca2adf1c01128cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b652d126000fb1f5f8d4c420d1404a268f8816b25f511c13ca2adf1c01128cb->enter($__internal_7b652d126000fb1f5f8d4c420d1404a268f8816b25f511c13ca2adf1c01128cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7b652d126000fb1f5f8d4c420d1404a268f8816b25f511c13ca2adf1c01128cb->leave($__internal_7b652d126000fb1f5f8d4c420d1404a268f8816b25f511c13ca2adf1c01128cb_prof);

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

", "MainBundle:Extra:identification.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Extra/identification.html.twig");
    }
}
