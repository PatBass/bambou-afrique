<?php

/* MainBundle:Extra:tokevote.html.twig */
class __TwigTemplate_3e5d8222bfe26e5fcdd5459b788491de1f664755869ab56f54ad8ac234438c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Extra:tokevote.html.twig", 1);
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
        $__internal_444dbd71e21931a6419ad94ac0a741da06ae0d5a301bca7d28b1d850345dd1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444dbd71e21931a6419ad94ac0a741da06ae0d5a301bca7d28b1d850345dd1af->enter($__internal_444dbd71e21931a6419ad94ac0a741da06ae0d5a301bca7d28b1d850345dd1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Extra:tokevote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444dbd71e21931a6419ad94ac0a741da06ae0d5a301bca7d28b1d850345dd1af->leave($__internal_444dbd71e21931a6419ad94ac0a741da06ae0d5a301bca7d28b1d850345dd1af_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2361b7e58e336c7839d05ae0edbfac0bde8417f70484062753d706fda0f906a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2361b7e58e336c7839d05ae0edbfac0bde8417f70484062753d706fda0f906a2->enter($__internal_2361b7e58e336c7839d05ae0edbfac0bde8417f70484062753d706fda0f906a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br><br>
    <div style=\"color: #000;\">
        <div class=\"row\">
            <div class=\"col-sm-offset-1 col-sm-4\">
                Mboté na yo ndeko ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "votant"), "method"), "html", null, true);
        echo " !
            </div>
        </div>

        <br><br><br><br>
        <div class=\"row\">
            <div class=\"col-sm-offset-2 col-sm-9\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\" style=\"text-align: center;\">
                        <h3 class=\"panel-title\">Lelo eyindi ! To zo pona</h3>
                    </div>
                    <div class=\"panel-body\" style=\"text-align: left;color: black;\">
                        <form action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tokevote");
        echo "\" method=\"post\">
                            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                            <div class=\"col-sm-12\">
                                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "proposition", array()), 'widget', array("attr" => array("title" => "Pona oyo olingi")));
        echo "
                                <p class=\"help-block text-danger\" style=\"color: red;\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "proposition", array()), 'errors');
        echo "</p>

                                <br>
                                <div class=\"form-group\">
                                    <button class=\"btn btn-success\"  type=\"submit\">Tinda vote na yo</button>

                                </div>
                            </div>
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class=\"row\">
            <div class=\"col-sm-offset-2 col-sm-9\">
                <table class=\"table table-striped table-condensed\">
                    <caption>
                        <h4>Les résultats en temps réel</h4>
                    </caption>
                    <thead>
                    <tr>
                        <th>Propositions</th>
                        <th>Points</th>
                        <th>Votants</th>
                    </tr>
                    </thead>
                    <tbody style=\"text-align: left;\">
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listChoix"] ?? $this->getContext($context, "listChoix")));
        foreach ($context['_seq'] as $context["_key"] => $context["choix"]) {
            // line 54
            echo "                    <tr>
                        <td>
                            ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["choix"], "proposition", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["choix"], "count", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["votants"] ?? $this->getContext($context, "votants")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["votant"]) {
                // line 63
                echo "                                ";
                echo twig_escape_filter($this->env, $context["votant"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",&nbsp;";
                }
                // line 64
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['votant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choix'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

";
        
        $__internal_2361b7e58e336c7839d05ae0edbfac0bde8417f70484062753d706fda0f906a2->leave($__internal_2361b7e58e336c7839d05ae0edbfac0bde8417f70484062753d706fda0f906a2_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c7b6086aa752fdc475e6aeab84342a34ac07632acb3e7c1a9377865293071a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7b6086aa752fdc475e6aeab84342a34ac07632acb3e7c1a9377865293071a8->enter($__internal_2c7b6086aa752fdc475e6aeab84342a34ac07632acb3e7c1a9377865293071a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "
    <!-- jQuery -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#form_choix label\").prepend('<span>&nbsp;&nbsp;</span>');
            \$(\"#form_choix label\").after(\"<br /><br />\");
            \$(\"#form_choix label\").css('color','black');
        });
    </script>
";
        
        $__internal_2c7b6086aa752fdc475e6aeab84342a34ac07632acb3e7c1a9377865293071a8->leave($__internal_2c7b6086aa752fdc475e6aeab84342a34ac07632acb3e7c1a9377865293071a8_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Extra:tokevote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 81,  199 => 78,  195 => 76,  189 => 75,  176 => 68,  168 => 65,  154 => 64,  148 => 63,  131 => 62,  125 => 59,  119 => 56,  115 => 54,  111 => 53,  86 => 31,  75 => 23,  71 => 22,  66 => 20,  62 => 19,  47 => 7,  41 => 3,  35 => 2,  11 => 1,);
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
    <br><br>
    <div style=\"color: #000;\">
        <div class=\"row\">
            <div class=\"col-sm-offset-1 col-sm-4\">
                Mboté na yo ndeko {{ app.request.get('votant') }} !
            </div>
        </div>

        <br><br><br><br>
        <div class=\"row\">
            <div class=\"col-sm-offset-2 col-sm-9\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\" style=\"text-align: center;\">
                        <h3 class=\"panel-title\">Lelo eyindi ! To zo pona</h3>
                    </div>
                    <div class=\"panel-body\" style=\"text-align: left;color: black;\">
                        <form action=\"{{ path('tokevote') }}\" method=\"post\">
                            {{ form_errors(form) }}
                            <div class=\"col-sm-12\">
                                {{ form_widget(form.proposition,  {'attr': { 'title':'Pona oyo olingi'}}) }}
                                <p class=\"help-block text-danger\" style=\"color: red;\">{{ form_errors(form.proposition) }}</p>

                                <br>
                                <div class=\"form-group\">
                                    <button class=\"btn btn-success\"  type=\"submit\">Tinda vote na yo</button>

                                </div>
                            </div>
                            {{form_rest(form)}}
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class=\"row\">
            <div class=\"col-sm-offset-2 col-sm-9\">
                <table class=\"table table-striped table-condensed\">
                    <caption>
                        <h4>Les résultats en temps réel</h4>
                    </caption>
                    <thead>
                    <tr>
                        <th>Propositions</th>
                        <th>Points</th>
                        <th>Votants</th>
                    </tr>
                    </thead>
                    <tbody style=\"text-align: left;\">
                    {% for choix in listChoix %}
                    <tr>
                        <td>
                            {{ choix.proposition }}
                        </td>
                        <td>
                            {{ choix.count }}
                        </td>
                        <td>
                            {% for votant in votants %}
                                {{ votant }}{% if not loop.last %},&nbsp;{% endif %}
                            {% endfor %}
                        </td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{% endblock %}
{% block javascripts %}

    <!-- jQuery -->
    <script src=\"{{ asset('js/jquery.js') }}\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\" integrity=\"sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn\" crossorigin=\"anonymous\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#form_choix label\").prepend('<span>&nbsp;&nbsp;</span>');
            \$(\"#form_choix label\").after(\"<br /><br />\");
            \$(\"#form_choix label\").css('color','black');
        });
    </script>
{% endblock %}", "MainBundle:Extra:tokevote.html.twig", "/Applications/MAMP/htdocs/bambou-afrique/src/MainBundle/Resources/views/Extra/tokevote.html.twig");
    }
}
