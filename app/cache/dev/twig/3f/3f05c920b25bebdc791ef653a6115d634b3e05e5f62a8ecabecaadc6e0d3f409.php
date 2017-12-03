<?php

/* MainBundle:Main:index-1.html.twig */
class __TwigTemplate_f2c25bbfc59b0b66efb99f4fe39b2344da9202347742724a9c3b8436f3860a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:index-1.html.twig", 1);
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
        $__internal_9bfec8225d54a0274913df043b6ed15f897f402e5a3273456118fe35a0e81a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfec8225d54a0274913df043b6ed15f897f402e5a3273456118fe35a0e81a6c->enter($__internal_9bfec8225d54a0274913df043b6ed15f897f402e5a3273456118fe35a0e81a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:index-1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bfec8225d54a0274913df043b6ed15f897f402e5a3273456118fe35a0e81a6c->leave($__internal_9bfec8225d54a0274913df043b6ed15f897f402e5a3273456118fe35a0e81a6c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_54e43edc75fd738a31153fee732a8ef846c19d9a26910d1d39888c37453c902c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e43edc75fd738a31153fee732a8ef846c19d9a26910d1d39888c37453c902c->enter($__internal_54e43edc75fd738a31153fee732a8ef846c19d9a26910d1d39888c37453c902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:index-1.html.twig", 3)->display($context);
        // line 4
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    <main>

        <section class=\"well well4\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <h2>
                            about
                            <small>
                                us
                            </small>
                        </h2>
                        <img class=\"\" src=\"images/page-2_img1.jpg\" alt=\"\">
                        <p class=\"lead\">
                            Folor sit amet conse ctetur adipisicing elit
                        </p>
                        <p>
                            Quisque in metus nibh. In hac habitasse platea dic tumst. Curabitur eu lorem ac lacus laoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem.
                            <br /><br />
                            Suspendisse sit amet vehicula nisl, nec faucibus nisl. Proin ac fermentum orci, non semper metus
                        </p>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <h2>
                            our
                            <small>
                                history
                            </small>
                        </h2>

                        <article class='media offs2'>
                            <div class=\"media-left text-center\">
                                <time datetime='2015'>2009 -</time>
                            </div>
                            <div class=\"media-body\">
                                <p>
                                    Curabitur eu lorem ac lacus laoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem. Suspen disse sit amet vehicula nisl, nec
                                </p>
                            </div>
                        </article>

                        <article class='media'>
                            <div class=\"media-left text-center\">
                                <time datetime='2015'>2009 -</time>
                            </div>
                            <div class=\"media-body\">
                                <p>
                                    Fusce vitae orci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem. Suspen disse sit amet vehicula nisl, nec faucibus nisl. Proin ac fermentum orci, non
                                </p>
                            </div>
                        </article>

                        <article class='media'>
                            <div class=\"media-left text-center\">
                                <time datetime='2015'>2009 -</time>
                            </div>
                            <div class=\"media-body\">
                                <p>
                                    Mauris eu augue lorem. Suspen disse sit am et vehicula nisl, nec faucibus nisl. Proin ac fermentum orci, non semper metus. Nulla nulla tellus, tincidunt vel er
                                </p>
                            </div>
                        </article>

                        <article class='media'>
                            <div class=\"media-left text-center\">
                                <time datetime='2015'>2009 -</time>
                            </div>
                            <div class=\"media-body\">
                                <p>
                                    Suspen disse sit amet vehicula nisl, nefauci bus nisl. Proin ac fermentum orci, non semp er metus. Nulla nulla tellus, tincidunt vel eros gravida, cursus cursus nisl. Nullam ac magna nisi. Integer dictum sagittis vulpu
                                </p>
                            </div>
                        </article>

                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <h2>
                            jobs
                        </h2>

                        <p class=\"lead offs2\">
                            Folor sit amet conse ctetur adipisicing elit
                        </p>

                        <p>
                            Curabitur eu lorem ac lacus laoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem. Suspendisse sit amet vehi cula nisl, nec faucibus nisl. Proin ac
                        </p>

                        <ul class=\"marked-list\">
                            <li>
                                <a href=\"#\">
                                    Curabitur eu lorem ac lacus laoreet auctor
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Fusce itae orci nec velit ornare rhon
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Ecus ut tempus estauris eu augue lorem.
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Suspendisse sit amet vehicula
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Anisl, nec faucibus nislroin ac fermentum
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Horci, non semper metusulla nulla
                                </a>
                            </li>
                        </ul>

                        <p>
                            Erci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem. Suspendisse sit amet vehi cula nisl, nec faucibus nisl. Proin ac fermentum orci, non semper metus. Nulla nulla tellus, tincidunt vel eros gravida, cursus cursus nisl. Nullam ac
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section class=\"well well4 bg1 wow fadeIn\" data-wow-duration='3s'>
            <div class=\"container\">
                <h2>
                    meet our
                    <small>
                        team
                    </small>
                </h2>
                <div class=\"row offs3 center767\">
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"thumbnail1\">
                            <img class=\"\" src=\"images/page-2_img2.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4>
                                    <a href=\"#\">
                                        Inga North
                                    </a>
                                </h4>
                                <p>
                                    Quisque in metus nibh. In hac habit asse platea dictumst. Curabitur eu lor em ac lacus laoreet auctor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"thumbnail1\">
                            <img class=\"\" src=\"images/page-2_img3.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4>
                                    <a href=\"#\">
                                        Tom Nelson
                                    </a>
                                </h4>
                                <p>
                                    Curabitur eu lor em ac lacus laoreet auctor. Fusce vitae orci nec velit orna re rhoncus ut tempus est
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"thumbnail1\">
                            <img class=\"\" src=\"images/page-2_img4.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4>
                                    <a href=\"#\">
                                        Ivana Wong
                                    </a>
                                </h4>
                                <p>
                                    Eu lor em ac lacus laoreet auctor.
                                    Fusce vitae orci nec velit ornare rho
                                    ncus ut tempus est. Mauris
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"thumbnail1\">
                            <img src=\"images/page-2_img5.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4>
                                    <a href=\"#\">
                                        Richard Cox
                                    </a>
                                </h4>
                                <p>
                                    Fusce vitae orci nec velit ornare rho
                                    ncus ut tempus est. Mauris eu augue lorem. Suspendisse sit ame
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"well well5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <h2>
                            advantages
                        </h2>
                        <ul class=\"index-list\">
                            <li>
                                Quisque in metus nibh. In hac habit asse platea dictumst. Curabitur eu lor em ac lacus laoreet
                            </li>
                            <li>
                                Fusce vitae orci nec velit ornare rh
                                oncus ut tempus est. Mauris eu augue lorem. Suspendisse sit am
                            </li>
                            <li>
                                Curabitur eu lor em ac lacus lao
                                reet auctor. Fusce vitae orci nec velit ornare rhoncus ut temp
                            </li>
                            <li>
                                Saoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut temus est. Mau ris eu augue lorem. Suspendi
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <h2>
                            purposes
                        </h2>
                        <p class=\"lead\">
                            Folor sit amet conse ctetur adipisicing elit
                        </p>

                        <p>
                            Curabitur eu lorem ac lacus laoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem. Suspendisse sit amet vehi cula nisl, nec faucibus nisl. Proin ac fermentum orci, non semper metus. Nulla nulla tellus
                        </p>
                        <ul class=\"marked-list offs3\">
                            <li>
                                <a href=\"#\">
                                    Fusce itae orci nec velit ornare rhon
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Ecus ut tempus estauris eu augue lorem.
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Suspendisse sit amet vehicula
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Anisl, nec faucibus nislroin ac fermentum
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Horci, non semper metusulla nulla
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Dellus, tincidunt vel eros gravida, cursu
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Nullam ac magna nisi. Integer
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Dictum sagittis vulputate ulla a purus
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <h2>
                            testimonial
                        </h2>
                        <blockquote class=\"media offs3\">
                            <div class=\"media-left media_ins1\">
                                <img src=\"images/page-2_img6.jpg\" alt=\"\">
                            </div>
                            <div class=\"media-body\">
                                <p>
                                    <q>
                                        \"Curabitur eu lorem ac lacus laoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut tem pus est. Mauris eu aug ue lorem. Suspendisse sit amet vehi cul\"
                                    </q>
                                </p>
                                <cite>
                                    Edna Barton,<br />
                                    client
                                </cite>
                            </div>
                        </blockquote>

                    </div>
                </div>
            </div>
        </section>

    </main>
    ";
        // line 320
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:index-1.html.twig", 320)->display($context);
        
        $__internal_54e43edc75fd738a31153fee732a8ef846c19d9a26910d1d39888c37453c902c->leave($__internal_54e43edc75fd738a31153fee732a8ef846c19d9a26910d1d39888c37453c902c_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:index-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 320,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}
{% block body %}
    {% include('MainBundle:Common:header.html.twig') %}
    <!--========================================================
                           CONTENT
 =========================================================-->

    <main>

        <section class=\"well well4\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <h2>
                            about
                            <small>
                                us
                            </small>
                        </h2>
                        <img class=\"\" src=\"images/page-2_img1.jpg\" alt=\"\">
                        <p class=\"lead\">
                            Folor sit amet conse ctetur adipisicing elit
                        </p>
                        <p>
                            Quisque in metus nibh. In hac habitasse platea dic tumst. Curabitur eu lorem ac lacus laoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem.
                            <br /><br />
                            Suspendisse sit amet vehicula nisl, nec faucibus nisl. Proin ac fermentum orci, non semper metus
                        </p>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <h2>
                            our
                            <small>
                                history
                            </small>
                        </h2>

                        <article class='media offs2'>
                            <div class=\"media-left text-center\">
                                <time datetime='2015'>2009 -</time>
                            </div>
                            <div class=\"media-body\">
                                <p>
                                    Curabitur eu lorem ac lacus laoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem. Suspen disse sit amet vehicula nisl, nec
                                </p>
                            </div>
                        </article>

                        <article class='media'>
                            <div class=\"media-left text-center\">
                                <time datetime='2015'>2009 -</time>
                            </div>
                            <div class=\"media-body\">
                                <p>
                                    Fusce vitae orci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem. Suspen disse sit amet vehicula nisl, nec faucibus nisl. Proin ac fermentum orci, non
                                </p>
                            </div>
                        </article>

                        <article class='media'>
                            <div class=\"media-left text-center\">
                                <time datetime='2015'>2009 -</time>
                            </div>
                            <div class=\"media-body\">
                                <p>
                                    Mauris eu augue lorem. Suspen disse sit am et vehicula nisl, nec faucibus nisl. Proin ac fermentum orci, non semper metus. Nulla nulla tellus, tincidunt vel er
                                </p>
                            </div>
                        </article>

                        <article class='media'>
                            <div class=\"media-left text-center\">
                                <time datetime='2015'>2009 -</time>
                            </div>
                            <div class=\"media-body\">
                                <p>
                                    Suspen disse sit amet vehicula nisl, nefauci bus nisl. Proin ac fermentum orci, non semp er metus. Nulla nulla tellus, tincidunt vel eros gravida, cursus cursus nisl. Nullam ac magna nisi. Integer dictum sagittis vulpu
                                </p>
                            </div>
                        </article>

                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <h2>
                            jobs
                        </h2>

                        <p class=\"lead offs2\">
                            Folor sit amet conse ctetur adipisicing elit
                        </p>

                        <p>
                            Curabitur eu lorem ac lacus laoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem. Suspendisse sit amet vehi cula nisl, nec faucibus nisl. Proin ac
                        </p>

                        <ul class=\"marked-list\">
                            <li>
                                <a href=\"#\">
                                    Curabitur eu lorem ac lacus laoreet auctor
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Fusce itae orci nec velit ornare rhon
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Ecus ut tempus estauris eu augue lorem.
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Suspendisse sit amet vehicula
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Anisl, nec faucibus nislroin ac fermentum
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Horci, non semper metusulla nulla
                                </a>
                            </li>
                        </ul>

                        <p>
                            Erci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem. Suspendisse sit amet vehi cula nisl, nec faucibus nisl. Proin ac fermentum orci, non semper metus. Nulla nulla tellus, tincidunt vel eros gravida, cursus cursus nisl. Nullam ac
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section class=\"well well4 bg1 wow fadeIn\" data-wow-duration='3s'>
            <div class=\"container\">
                <h2>
                    meet our
                    <small>
                        team
                    </small>
                </h2>
                <div class=\"row offs3 center767\">
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"thumbnail1\">
                            <img class=\"\" src=\"images/page-2_img2.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4>
                                    <a href=\"#\">
                                        Inga North
                                    </a>
                                </h4>
                                <p>
                                    Quisque in metus nibh. In hac habit asse platea dictumst. Curabitur eu lor em ac lacus laoreet auctor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"thumbnail1\">
                            <img class=\"\" src=\"images/page-2_img3.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4>
                                    <a href=\"#\">
                                        Tom Nelson
                                    </a>
                                </h4>
                                <p>
                                    Curabitur eu lor em ac lacus laoreet auctor. Fusce vitae orci nec velit orna re rhoncus ut tempus est
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"thumbnail1\">
                            <img class=\"\" src=\"images/page-2_img4.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4>
                                    <a href=\"#\">
                                        Ivana Wong
                                    </a>
                                </h4>
                                <p>
                                    Eu lor em ac lacus laoreet auctor.
                                    Fusce vitae orci nec velit ornare rho
                                    ncus ut tempus est. Mauris
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"thumbnail1\">
                            <img src=\"images/page-2_img5.jpg\" alt=\"\">
                            <div class=\"caption\">
                                <h4>
                                    <a href=\"#\">
                                        Richard Cox
                                    </a>
                                </h4>
                                <p>
                                    Fusce vitae orci nec velit ornare rho
                                    ncus ut tempus est. Mauris eu augue lorem. Suspendisse sit ame
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"well well5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <h2>
                            advantages
                        </h2>
                        <ul class=\"index-list\">
                            <li>
                                Quisque in metus nibh. In hac habit asse platea dictumst. Curabitur eu lor em ac lacus laoreet
                            </li>
                            <li>
                                Fusce vitae orci nec velit ornare rh
                                oncus ut tempus est. Mauris eu augue lorem. Suspendisse sit am
                            </li>
                            <li>
                                Curabitur eu lor em ac lacus lao
                                reet auctor. Fusce vitae orci nec velit ornare rhoncus ut temp
                            </li>
                            <li>
                                Saoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut temus est. Mau ris eu augue lorem. Suspendi
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <h2>
                            purposes
                        </h2>
                        <p class=\"lead\">
                            Folor sit amet conse ctetur adipisicing elit
                        </p>

                        <p>
                            Curabitur eu lorem ac lacus laoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut tempus est. Mauris eu augue lorem. Suspendisse sit amet vehi cula nisl, nec faucibus nisl. Proin ac fermentum orci, non semper metus. Nulla nulla tellus
                        </p>
                        <ul class=\"marked-list offs3\">
                            <li>
                                <a href=\"#\">
                                    Fusce itae orci nec velit ornare rhon
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Ecus ut tempus estauris eu augue lorem.
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Suspendisse sit amet vehicula
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Anisl, nec faucibus nislroin ac fermentum
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Horci, non semper metusulla nulla
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Dellus, tincidunt vel eros gravida, cursu
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Nullam ac magna nisi. Integer
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    Dictum sagittis vulputate ulla a purus
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-4 col-sm-6 col-xs-12\">
                        <h2>
                            testimonial
                        </h2>
                        <blockquote class=\"media offs3\">
                            <div class=\"media-left media_ins1\">
                                <img src=\"images/page-2_img6.jpg\" alt=\"\">
                            </div>
                            <div class=\"media-body\">
                                <p>
                                    <q>
                                        \"Curabitur eu lorem ac lacus laoreet auctor. Fusce vitae orci nec velit ornare rhoncus ut tem pus est. Mauris eu aug ue lorem. Suspendisse sit amet vehi cul\"
                                    </q>
                                </p>
                                <cite>
                                    Edna Barton,<br />
                                    client
                                </cite>
                            </div>
                        </blockquote>

                    </div>
                </div>
            </div>
        </section>

    </main>
    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}




", "MainBundle:Main:index-1.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Main/index-1.html.twig");
    }
}
