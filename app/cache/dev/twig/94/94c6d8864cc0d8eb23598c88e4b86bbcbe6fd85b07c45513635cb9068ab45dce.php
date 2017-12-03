<?php

/* MainBundle:Main:index.html.twig */
class __TwigTemplate_794c29e06d21e92038726e4100eae8c93f09de80821270c724e6441d2f0f635b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "MainBundle:Main:index.html.twig", 1);
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
        $__internal_c50fdb607b0ec769608a764f63bcf0ba8ad9880523cd35acc946a96043262f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50fdb607b0ec769608a764f63bcf0ba8ad9880523cd35acc946a96043262f40->enter($__internal_c50fdb607b0ec769608a764f63bcf0ba8ad9880523cd35acc946a96043262f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c50fdb607b0ec769608a764f63bcf0ba8ad9880523cd35acc946a96043262f40->leave($__internal_c50fdb607b0ec769608a764f63bcf0ba8ad9880523cd35acc946a96043262f40_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b23d9fac85b3c20088d6843c83c25f9cb76d036795359e5d96d256d4ee4e5e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23d9fac85b3c20088d6843c83c25f9cb76d036795359e5d96d256d4ee4e5e30->enter($__internal_b23d9fac85b3c20088d6843c83c25f9cb76d036795359e5d96d256d4ee4e5e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/css/camera.css"), "html", null, true);
        echo "\" type=\"text/css\">

";
        
        $__internal_b23d9fac85b3c20088d6843c83c25f9cb76d036795359e5d96d256d4ee4e5e30->leave($__internal_b23d9fac85b3c20088d6843c83c25f9cb76d036795359e5d96d256d4ee4e5e30_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_71096420ee80ebb9f89a2dbce36036e8ca33745f407c28aabc0abdba98c1f8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71096420ee80ebb9f89a2dbce36036e8ca33745f407c28aabc0abdba98c1f8b5->enter($__internal_71096420ee80ebb9f89a2dbce36036e8ca33745f407c28aabc0abdba98c1f8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        if (array_key_exists("section", $context)) {
            // line 11
            echo "        ";
            $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:index.html.twig", 11)->display(array_merge($context, array("active" => "equipe")));
            // line 12
            echo "
    ";
        } else {
            // line 14
            echo "        ";
            $this->loadTemplate("MainBundle:Common:header.html.twig", "MainBundle:Main:index.html.twig", 14)->display(array_merge($context, array("active" => "equipe")));
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <!--========================================================
                           CONTENT
 =========================================================-->

    <main>

        <section class=\"well well2 wow fadeIn  bg1 animated\" data-wow-duration=\"3s\" style=\"visibility: visible; animation-duration: 3s; animation-name: fadeIn;border: none;background-color: #f2f2f2;\">
            <div class=\"container\">
                <h2 class=\"txt-pr\">
                    Mot
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        du président
                    </span>
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-12\">
                        <div>
                            <p>Le 21ème siècle est surtout marqué par l’e-gouvernance amenant les Etats désireux de relever les challenges du monde moderne à s’équiper d'une forme d’intelligence d’Etat. Et ceci passe par la numérisation des institutions de l’Etat en vue d’une optimisation de la gestion des ressources tant humaine que matériel permettant ainsi une croissance tant sur le plan économique que sur les plans social, administratif, pédagogique, etc.</p>

                            <p>La Fondation O’dellya est donc née de l’idée d’inciter le gouvernement congolais, en particulier, et les gouvernements africains, en général, à tirer profit des gros avantages offerts par le numérique dans la dynamisation de l’économie. A l’heure où les pays développés ont pris conscience de la nécessité de former les cadres actuels et ceux de demain à ce puissant outil en allant jusqu’à réviser les programmes d’enseignement primaire afin d’y insérer l’apprentissage du numérique, le Congo reste quasi insensible à cette quatrième révolution de l’histoire de l’humanité – après la révolution industrielle.
                                Force est de constater, pourtant, que nombreux sont des fils et filles du Congo ayant évolué à l’étranger ont la maîtrise des technologies du numérique dont leur pays a indispensablement besoin pour son développement. La Fondation O’dellya se donne également pour objectif de sensibiliser ces cerveaux sur la nécessité de joindre nos efforts pour répondre à ce besoin d’aider notre beau pays à prendre son envol. En misant sur l’adoption de ce projet au Congo, nous voulons mettre à contribution l’intelligence collaborative de l’ensemble des Congolais pour l’émergence de notre beau pays car de nos jours aucun pays ne peut prétendre à l’émergence sans que l’outil technologique ne soit au cœur du système.</p>

                            <p>La fondation O’dellya, organisation à but non lucratif et regroupant des bénévoles animés d'une même passion, est aussi une prise de conscience de la nécessité d’apporter sa pierre à l’édifice qu’est le Congo, ce pays qui m’a vu naître et m’a fourni tous les rudiments nécessaires pour ma formation. Une façon de redonner au Congo, en particulier, et à l’Afrique en général. C’est aussi un appel à tous les Congolais de faire autant c’est-à-dire participer activement à la croissance de ce pays.</p>

                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        <p>
                        <p>Le « Pacte technologique », projet porté par la Fondation O’dellya, appelle à la gouvernance par l’outil technologique pour un Congo 2.0. Cela pour dire un Congo mettant à profit les prouesses des technologiques numériques pour sa croissance dans tous les plans.</p>

                        <p>Je sais pertinemment que la tâche qui nous incombe est immense et ce projet ne peut réussir qu'avec le haut patronage de son Excellence Monsieur le Président de République du Congo, à qui je lance un appel.</p>

                        <p>Après avoir identifié les actions à réaliser, nous constituons des groupes de travail avec un certain nombre d’experts autour de la question en vue de permettre la mise en place de ce projet.

                            Le projet \"Pacte technologique\" favorisera le partage de la  connaissance mutuelle, renforcera l’écoute active et l’adhésion au projet commun.</p>
                        <p>Je voudrais adresser un remerciement tout particulier à ceux qui ont cru dès le début en cette aventure d’hommes : Quérold, le responsable Community Manager; Styland Brand Ambassador; Spanich; Okémba, responsable des relations publiques; Rose-Marie; Vanessa Nguema; Marie Alfred; Poss Martail; La Reine Silya; Brony; Patrick Ghislain, concepteur et développeur de notre portail Web. Qu’ils soient tous et individuellement remerciés d’avoir lancé et intégré l’aventure du projet Pacte technologique de la fondation O’dellya.

                            J’en profite également pour remercier tous ceux qui apportent un soutien multiforme à l’avancement de ce grand projet pour le Congo.

                            <br><br>Roland Chrisbel,<br>
                            Président Fondateur de la fondation O’dellya

                            <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"well well1 well1_ins1\" style=\"background-color: white;border: none;\" >

            <!--<div class=\"camera_container\">
                <div id=\"camera\" class=\"camera_wrap\">
                    <div data-src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/page-1_slide1.jpg"), "html", null, true);
        echo "\">
                        <div class=\"camera_caption fadeIn\">
                            <div class=\"jumbotron jumbotron1\">
                                <em>
                                    SUCCESS
                                </em>
                                <div class=\"wrap\">
                                    <p>
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/page-1_slide2.jpg"), "html", null, true);
        echo "\">
                        <div class=\"camera_caption fadeIn\">
                            <div class=\"jumbotron jumbotron2\">
                                <em>
                                    quality
                                </em>
                                <div class=\"wrap\">
                                    <p>
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                                    </p>
                                    <a href=\"#\" class=\"btn-link hov_prime fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/page-1_slide3.jpg"), "html", null, true);
        echo "\">
                        <div class=\"camera_caption fadeIn\">
                            <div class=\"jumbotron\">
                                <em>
                                    SOLUTIONS
                                </em>
                                <div class=\"wrap\">
                                    <p>
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                                    </p>
                                    <a href=\"#\" class=\"\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->


            <div id=\"equipe\" class=\"container center991\">
                <h2 class=\"txt-pr\">
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        NOTRE
                    </span>
                    EQUIPE

                </h2>
                <br><br>
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\" data-toggle=\"popover\" data-html=\"true\" title=\"<div class='row'><div class='col-xs-3'><img src='";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/chrisbel.jpg"), "cropResize", array(0 => 50, 1 => 50), "method"), "html", null, true);
        echo "'></div> <div class='col-xs-9'>Roland Chrisbel</div></div>\" data-trigger=\"hover\"
                         data-content=\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend tortor vel imperdiet molestie. Sed volutpat risus purus, ut pharetra erat maximus at. Suspendisse ac ante viverra, malesuada mauris sit amet, tempus turpis. Vestibulum at pharetra risus. Aenean lobortis metus ac hendrerit venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
\"                   >
                        <div class=\"thumbnail thumb-shadow\" data-toggle=\"popover\" data-html=\"true\" data-content=\"Please click on the link to\">
                            <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/chrisbel.jpg"), "forceResize", array(0 => 370, 1 => 370), "method"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"caption bg2\">
                                <h5>
                                    Roland Chrisbel
                                </h5>
                                <div class=\"wrap\">
                                    <p>
                                        Président de la Fondation O'dellya.<br>Expert technique & Formateur Java EE

                                    </p>
                                    <a href=\"#\" class=\"\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/presidentielle2016.jpg"), "resize", array(0 => 870, 1 => 420), "method"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"caption bg3\">
                                <h5>
                                    PHOTO DE GROUPE
                                </h5>
                                <div class=\"wrap\">
                                    <p class=\"thumb_ins1\">
                                        Après un entretien avec les représentants des candidats à l'élection présidentielle 2016.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row wow fadeIn\" data-wow-duration='2s'>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\" data-toggle=\"popover\" data-html=\"true\" title=\"<div class='row'><div class='col-xs-3'><img src='";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/Patrick.jpg"), "cropResize", array(0 => 50, 1 => 50), "method"), "html", null, true);
        echo "'></div> <div class='col-xs-9'>Patrick Ghislain Bassoukissa</div></div>\" data-trigger=\"hover\"
                         data-content=\"
<p>Parfaitement bilingue (français/anglais) et expert en technologies numériques, j’ai travaillé avec la société Crowd Valley basée à San Francisco en Californie, par télétravail, comme développeur Symfony2. J’ai également travaillé dans la filiale casablancaise de Free/Iliad (FAI français), Telecom Academy, au poste de formateur et Auditeur qualité. J’ai créé ma propre société en 2013 offrant des prestations de développement informatique et infographie. J'ai souhaité apporter mon expertise dans les NTIC à la fondation O'dellya, et cela commence par le développement de ce portail Web.</p>
\"
                    >
                        <div class=\"thumbnail thumb-shadow\">
                            <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/Patrick.jpg"), "cropResize", array(0 => 370, 1 => 370), "method"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"caption bg3\">
                                <h5>
                                    Patrick Ghislain BASSOUKISSA
                                </h5>
                                <div class=\"wrap\">
                                    <p>
                                        Expert en Numérique<br>Développeur Symfony2/PHP5.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\" data-toggle=\"popover\" data-html=\"true\" title=\"<div class='row'><div class='col-xs-3'><img src='";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/senatrice.jpg"), "cropResize", array(0 => 50, 1 => 50), "method"), "html", null, true);
        echo "'></div> <div class='col-xs-9'>Dr. Assambo Kieli</div></div>\" data-trigger=\"hover\"
                         data-content=\"Je suis docteur en médecine, spécialiste en néphrologue. J'ai fait toutes mes études secondaires et universitaires à Lille en France. J’ai été médecin spécialiste à l'hôpital général de Brazzaville actuel CHU de janvier 1986 à mai 2014. j'ai également exercé en tant que conseillère à la santé de la première secrétaire du Sénat puis médecin conseil du parlement congolais de 1998 à 2014. Parallèlement, je donnais des cours de néphrologie à faculté des sciences de la santé à l'université Marien  Ngouabi de1986 à 1997. Depuis septembre2014, je suis élue sénatrice du District de Keller dans le département de la cuvette ouest  au nord du Congo. Dans la vie associative,  je suis membre de la société  française de néphrologie dialyse et transplantation, société internationale de néphrologie, société médical  du Congo, Association des femmes médecin du Congo, coordonnatrice du Réseau. Nation Femme et Climat du Congo(RNAFECC). Mon adhésion à la fondation O'dellya c'est aussi et encore  pour mieux faire.
\"                   >
                        <div class=\"thumbnail thumb-shadow\">
                            <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/senatrice.jpg"), "forceResize", array(0 => 370, 1 => 370), "method"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"caption bg-primary\">
                                <h5>
                                    Dr. Assambo Kieli
                                </h5>
                                <div class=\"wrap\">
                                    <p>
                                        Sénatrice, Docteur néphrologue.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\" data-toggle=\"popover\" data-html=\"true\" title=\"<div class='row'><div class='col-xs-3'><img src='";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/Rose-Marie.jpg"), "cropResize", array(0 => 50, 1 => 50), "method"), "html", null, true);
        echo "'></div> <div class='col-xs-9'>Rose-Marie Geneviève BOUBOUTOU</div></div>\" data-placement=\"left\" data-trigger=\"hover\"
                         data-content=\"<p>Franco-congolaise, je suis diplômée d'un DEA de droit des contrats de l'Université Paris XI-Sceaux, d'un Master en relations internationales de l'Université Américaine de Paris et d'un Master en management des Médias de l'IEP de Paris (Sciences Po).</p>
<p>Journaliste, j’ai collaboré les trois dernières années à la rédaction du quotidien congolais Les Dépêches de Brazzaville et à l'Agence d'information d'Afrique centrale (ADIAC). J’ai créé en août 2015 le site www.africabusinessinsider.news déjà partenaire de grands événements en Afrique et en Europe.</p>

\"                   >
                        <div class=\"thumbnail thumb-shadow\">
                            <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/Rose-Marie.jpg"), "forceResize", array(0 => 370, 1 => 370), "method"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"caption bg2\">
                                <h5>
                                    Rose-Marie Geneviève BOUBOUTOU
                                </h5>
                                <div class=\"wrap\">
                                    <p>
                                        Journaliste rédactrice.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\" data-toggle=\"popover\" data-html=\"true\" title=\"<div class='row'><div class='col-xs-3'><img src='";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/Brony.jpg"), "cropResize", array(0 => 50, 1 => 50), "method"), "html", null, true);
        echo "'></div> <div class='col-xs-9'>Brony Fortunat Calixte NGOLALI</div></div>\" data-placement=\"right\" data-trigger=\"hover\"
                         data-content=\"<p>Je suis journaliste niveau 3, journaliste-Reporter, présentateur TV et Radio,  Ancien directeur général de la Télévision Pour Tous( TPT) de Pointe-Noire, ancien directeur des informations de Top tv à Brazzaville, ancien directeur de la publication du journal 'Le Choc' Congo Brazzaville, ancien formateur à informorac-Congo( projet de l'UE, destinée à la formation des journalistes). Ancien chef Scout. Actuellement, coordinateur de l'équipe de la fondation O'dellya au Congo Brazzaville
                     Je suis d'abord et avant tout amoureux des nouvelles technologies. Je crois également que, le développement du monde, d'une manière générale et de l'Afrique en particulier, passe par les TIC. Le Projet Pacte 'Technologie' vient donc stimuler et attiser en moi, ce désir ardent de participer et de contribuer,  à la mesure du possible, au développement du Congo,par  l'outil technologique. Et j'y crois.</p>

\"                   >
                        <div class=\"thumbnail thumb-shadow\">
                            <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/Brony.jpg"), "forceResize", array(0 => 370, 1 => 370), "method"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"caption bg2\">
                                <h5>
                                    Brony Fortunat Calixte NGOLALI
                                </h5>
                                <div class=\"wrap\">
                                    <p>
                                        Journaliste présentateur TV et Radio.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span id=\"mot\"></span>
            </div>
        </section>

        <section class=\"well well2\" style=\"border: none;\">
            <div class=\"container\">
                <h2 id=\"actu\" class=\"txt-pr\">
                    Actu
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        Numérique en Afrique
                    </span>
                </h2>
                <div class=\"row offs1\">
                    <div class=\"col-md-6 col-sm-12\">
                        <ul class=\"link-list wow fadeInLeft\" data-wow-duration='3s'>
                            <li>

                                <a href=\"http://www.jeuneafrique.com/317909/economie/google-veut-former-1-million-de-jeunes-africains-metiers-numerique/\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-2 actu-img\"><img src=\"";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/reuters-google-592x296.jpg"), "forceResize", array(0 => 120, 1 => 100), "method"), "html", null, true);
        echo "\"></div>
                                        <div CLASS=\"col-xs-10\">Google forme des jeunes sur le numérique en Afrique</div>
                                    </div>
                                </a>
                                <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                            </li>
                            <li>
                                <a href=\"http://www.banquemondiale.org/…/using-digital-technology-to…\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-2 actu-img\"><img src=\"";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/ga-using-digital-technology-to-improve-gabons-health-care-780x439.jpg"), "forceResize", array(0 => 120, 1 => 100), "method"), "html", null, true);
        echo "\"></div>
                                        <div CLASS=\"col-xs-10\">Le numérique au service de la santé au Gabon</div>
                                    </div>
                                </a>
                                <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                            </li>
                            <li>
                                <a href=\"http://www.voaafrique.com/a/le-rwanda-a-la-heure-de-la-numerisation-de-ses-services-adminstratifs/3370651.html\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-2 actu-img\"><img src=\"";
        // line 282
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/rwanda-numerisation-administration.png"), "forceResize", array(0 => 120, 1 => 100), "method"), "html", null, true);
        echo "\"></div>
                                        <div CLASS=\"col-xs-10\">La numérisation des administrations au Rwanda</div>
                                    </div>
                                </a>
                                <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                            </li>
                            <li>
                                <a href=\"http://www.jeuneafrique.com/322952/politique/maroc-applications-mobiles-veulent-faciliter-lutilisation-services-publiques/\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-2 actu-img\"><img src=\"";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/egouv-maroc.jpg"), "forceResize", array(0 => 120, 1 => 100), "method"), "html", null, true);
        echo "\"></div>
                                        <div CLASS=\"col-xs-10\">L'e-gouvernance au Maroc</div>
                                    </div>
                                </a>
                                <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        <img class=\"width_img\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->env->getExtension('Gregwar\ImageBundle\Extensions\ImageTwig')->image("bundles/main/images/numerique3.jpg"), "forceResize", array(0 => 570, 1 => 470), "method"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>
        </section>

        <section class=\"well well3 parallax\" data-url=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/images/le-tout-numerique.jpg"), "html", null, true);
        echo "\" data-mobile=\"true\" data-speed=\"0.9\" style=\"border: none;\">
            <div class=\"container\">
                <div class=\"wrap text-center\">
                    <strong>
                        LE TOUT NUMERIQUE,<br />
                        POUR UN CONGO 2.0,
                        <small>
                            NOUS Y CROYONS !
                        </small>
                    </strong>

                </div>
            </div>
        </section>

    </main>

    ";
        // line 323
        $this->loadTemplate("MainBundle:Common:footer.html.twig", "MainBundle:Main:index.html.twig", 323)->display($context);
        
        $__internal_71096420ee80ebb9f89a2dbce36036e8ca33745f407c28aabc0abdba98c1f8b5->leave($__internal_71096420ee80ebb9f89a2dbce36036e8ca33745f407c28aabc0abdba98c1f8b5_prof);

    }

    // line 325
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2bf2a0464efc1da866312bf0be2957d099093949477b14bc6864ce6c2d6e52a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf2a0464efc1da866312bf0be2957d099093949477b14bc6864ce6c2d6e52a6->enter($__internal_2bf2a0464efc1da866312bf0be2957d099093949477b14bc6864ce6c2d6e52a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 326
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/main/js/device.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCJeCYd7WriRsWWMvsS7ygyndMCBWnGvKc\"
            type=\"text/javascript\"></script>


";
        
        $__internal_2bf2a0464efc1da866312bf0be2957d099093949477b14bc6864ce6c2d6e52a6->leave($__internal_2bf2a0464efc1da866312bf0be2957d099093949477b14bc6864ce6c2d6e52a6_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 328,  459 => 326,  453 => 325,  446 => 323,  426 => 306,  417 => 300,  405 => 291,  393 => 282,  381 => 273,  369 => 264,  332 => 230,  323 => 224,  306 => 210,  297 => 204,  280 => 190,  273 => 186,  256 => 172,  247 => 166,  227 => 149,  207 => 132,  200 => 128,  168 => 99,  150 => 84,  132 => 69,  77 => 16,  74 => 15,  71 => 14,  67 => 12,  64 => 11,  61 => 10,  55 => 9,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}

{% block stylesheets %}
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/main/css/camera.css') }}\" type=\"text/css\">

{% endblock %}

{% block body %}
    {% if section is defined %}
        {% include('MainBundle:Common:header.html.twig') with {'active':'equipe'} %}

    {% else %}
        {% include('MainBundle:Common:header.html.twig') with {'active':'equipe'} %}
    {% endif %}
    <!--========================================================
                           CONTENT
 =========================================================-->

    <main>

        <section class=\"well well2 wow fadeIn  bg1 animated\" data-wow-duration=\"3s\" style=\"visibility: visible; animation-duration: 3s; animation-name: fadeIn;border: none;background-color: #f2f2f2;\">
            <div class=\"container\">
                <h2 class=\"txt-pr\">
                    Mot
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        du président
                    </span>
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-12\">
                        <div>
                            <p>Le 21ème siècle est surtout marqué par l’e-gouvernance amenant les Etats désireux de relever les challenges du monde moderne à s’équiper d'une forme d’intelligence d’Etat. Et ceci passe par la numérisation des institutions de l’Etat en vue d’une optimisation de la gestion des ressources tant humaine que matériel permettant ainsi une croissance tant sur le plan économique que sur les plans social, administratif, pédagogique, etc.</p>

                            <p>La Fondation O’dellya est donc née de l’idée d’inciter le gouvernement congolais, en particulier, et les gouvernements africains, en général, à tirer profit des gros avantages offerts par le numérique dans la dynamisation de l’économie. A l’heure où les pays développés ont pris conscience de la nécessité de former les cadres actuels et ceux de demain à ce puissant outil en allant jusqu’à réviser les programmes d’enseignement primaire afin d’y insérer l’apprentissage du numérique, le Congo reste quasi insensible à cette quatrième révolution de l’histoire de l’humanité – après la révolution industrielle.
                                Force est de constater, pourtant, que nombreux sont des fils et filles du Congo ayant évolué à l’étranger ont la maîtrise des technologies du numérique dont leur pays a indispensablement besoin pour son développement. La Fondation O’dellya se donne également pour objectif de sensibiliser ces cerveaux sur la nécessité de joindre nos efforts pour répondre à ce besoin d’aider notre beau pays à prendre son envol. En misant sur l’adoption de ce projet au Congo, nous voulons mettre à contribution l’intelligence collaborative de l’ensemble des Congolais pour l’émergence de notre beau pays car de nos jours aucun pays ne peut prétendre à l’émergence sans que l’outil technologique ne soit au cœur du système.</p>

                            <p>La fondation O’dellya, organisation à but non lucratif et regroupant des bénévoles animés d'une même passion, est aussi une prise de conscience de la nécessité d’apporter sa pierre à l’édifice qu’est le Congo, ce pays qui m’a vu naître et m’a fourni tous les rudiments nécessaires pour ma formation. Une façon de redonner au Congo, en particulier, et à l’Afrique en général. C’est aussi un appel à tous les Congolais de faire autant c’est-à-dire participer activement à la croissance de ce pays.</p>

                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        <p>
                        <p>Le « Pacte technologique », projet porté par la Fondation O’dellya, appelle à la gouvernance par l’outil technologique pour un Congo 2.0. Cela pour dire un Congo mettant à profit les prouesses des technologiques numériques pour sa croissance dans tous les plans.</p>

                        <p>Je sais pertinemment que la tâche qui nous incombe est immense et ce projet ne peut réussir qu'avec le haut patronage de son Excellence Monsieur le Président de République du Congo, à qui je lance un appel.</p>

                        <p>Après avoir identifié les actions à réaliser, nous constituons des groupes de travail avec un certain nombre d’experts autour de la question en vue de permettre la mise en place de ce projet.

                            Le projet \"Pacte technologique\" favorisera le partage de la  connaissance mutuelle, renforcera l’écoute active et l’adhésion au projet commun.</p>
                        <p>Je voudrais adresser un remerciement tout particulier à ceux qui ont cru dès le début en cette aventure d’hommes : Quérold, le responsable Community Manager; Styland Brand Ambassador; Spanich; Okémba, responsable des relations publiques; Rose-Marie; Vanessa Nguema; Marie Alfred; Poss Martail; La Reine Silya; Brony; Patrick Ghislain, concepteur et développeur de notre portail Web. Qu’ils soient tous et individuellement remerciés d’avoir lancé et intégré l’aventure du projet Pacte technologique de la fondation O’dellya.

                            J’en profite également pour remercier tous ceux qui apportent un soutien multiforme à l’avancement de ce grand projet pour le Congo.

                            <br><br>Roland Chrisbel,<br>
                            Président Fondateur de la fondation O’dellya

                            <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"well well1 well1_ins1\" style=\"background-color: white;border: none;\" >

            <!--<div class=\"camera_container\">
                <div id=\"camera\" class=\"camera_wrap\">
                    <div data-src=\"{{ asset('bundles/main/images/page-1_slide1.jpg') }}\">
                        <div class=\"camera_caption fadeIn\">
                            <div class=\"jumbotron jumbotron1\">
                                <em>
                                    SUCCESS
                                </em>
                                <div class=\"wrap\">
                                    <p>
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-src=\"{{ asset('bundles/main/images/page-1_slide2.jpg') }}\">
                        <div class=\"camera_caption fadeIn\">
                            <div class=\"jumbotron jumbotron2\">
                                <em>
                                    quality
                                </em>
                                <div class=\"wrap\">
                                    <p>
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                                    </p>
                                    <a href=\"#\" class=\"btn-link hov_prime fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-src=\"{{ asset('bundles/main/images/page-1_slide3.jpg') }}\">
                        <div class=\"camera_caption fadeIn\">
                            <div class=\"jumbotron\">
                                <em>
                                    SOLUTIONS
                                </em>
                                <div class=\"wrap\">
                                    <p>
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                                    </p>
                                    <a href=\"#\" class=\"\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->


            <div id=\"equipe\" class=\"container center991\">
                <h2 class=\"txt-pr\">
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        NOTRE
                    </span>
                    EQUIPE

                </h2>
                <br><br>
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 col-xs-12\" data-toggle=\"popover\" data-html=\"true\" title=\"<div class='row'><div class='col-xs-3'><img src='{{ image('bundles/main/images/chrisbel.jpg').cropResize(50, 50) }}'></div> <div class='col-xs-9'>Roland Chrisbel</div></div>\" data-trigger=\"hover\"
                         data-content=\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend tortor vel imperdiet molestie. Sed volutpat risus purus, ut pharetra erat maximus at. Suspendisse ac ante viverra, malesuada mauris sit amet, tempus turpis. Vestibulum at pharetra risus. Aenean lobortis metus ac hendrerit venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
\"                   >
                        <div class=\"thumbnail thumb-shadow\" data-toggle=\"popover\" data-html=\"true\" data-content=\"Please click on the link to\">
                            <img src=\"{{ image('bundles/main/images/chrisbel.jpg').forceResize(370,370) }}\" alt=\"\">
                            <div class=\"caption bg2\">
                                <h5>
                                    Roland Chrisbel
                                </h5>
                                <div class=\"wrap\">
                                    <p>
                                        Président de la Fondation O'dellya.<br>Expert technique & Formateur Java EE

                                    </p>
                                    <a href=\"#\" class=\"\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-12 col-xs-12\">
                        <div class=\"thumbnail thumb-shadow\">
                            <img src=\"{{ image('bundles/main/images/presidentielle2016.jpg').resize(870,420) }}\" alt=\"\">
                            <div class=\"caption bg3\">
                                <h5>
                                    PHOTO DE GROUPE
                                </h5>
                                <div class=\"wrap\">
                                    <p class=\"thumb_ins1\">
                                        Après un entretien avec les représentants des candidats à l'élection présidentielle 2016.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row wow fadeIn\" data-wow-duration='2s'>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\" data-toggle=\"popover\" data-html=\"true\" title=\"<div class='row'><div class='col-xs-3'><img src='{{ image('bundles/main/images/Patrick.jpg').cropResize(50, 50) }}'></div> <div class='col-xs-9'>Patrick Ghislain Bassoukissa</div></div>\" data-trigger=\"hover\"
                         data-content=\"
<p>Parfaitement bilingue (français/anglais) et expert en technologies numériques, j’ai travaillé avec la société Crowd Valley basée à San Francisco en Californie, par télétravail, comme développeur Symfony2. J’ai également travaillé dans la filiale casablancaise de Free/Iliad (FAI français), Telecom Academy, au poste de formateur et Auditeur qualité. J’ai créé ma propre société en 2013 offrant des prestations de développement informatique et infographie. J'ai souhaité apporter mon expertise dans les NTIC à la fondation O'dellya, et cela commence par le développement de ce portail Web.</p>
\"
                    >
                        <div class=\"thumbnail thumb-shadow\">
                            <img src=\"{{ image('bundles/main/images/Patrick.jpg').cropResize(370, 370) }}\" alt=\"\">
                            <div class=\"caption bg3\">
                                <h5>
                                    Patrick Ghislain BASSOUKISSA
                                </h5>
                                <div class=\"wrap\">
                                    <p>
                                        Expert en Numérique<br>Développeur Symfony2/PHP5.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\" data-toggle=\"popover\" data-html=\"true\" title=\"<div class='row'><div class='col-xs-3'><img src='{{ image('bundles/main/images/senatrice.jpg').cropResize(50, 50) }}'></div> <div class='col-xs-9'>Dr. Assambo Kieli</div></div>\" data-trigger=\"hover\"
                         data-content=\"Je suis docteur en médecine, spécialiste en néphrologue. J'ai fait toutes mes études secondaires et universitaires à Lille en France. J’ai été médecin spécialiste à l'hôpital général de Brazzaville actuel CHU de janvier 1986 à mai 2014. j'ai également exercé en tant que conseillère à la santé de la première secrétaire du Sénat puis médecin conseil du parlement congolais de 1998 à 2014. Parallèlement, je donnais des cours de néphrologie à faculté des sciences de la santé à l'université Marien  Ngouabi de1986 à 1997. Depuis septembre2014, je suis élue sénatrice du District de Keller dans le département de la cuvette ouest  au nord du Congo. Dans la vie associative,  je suis membre de la société  française de néphrologie dialyse et transplantation, société internationale de néphrologie, société médical  du Congo, Association des femmes médecin du Congo, coordonnatrice du Réseau. Nation Femme et Climat du Congo(RNAFECC). Mon adhésion à la fondation O'dellya c'est aussi et encore  pour mieux faire.
\"                   >
                        <div class=\"thumbnail thumb-shadow\">
                            <img src=\"{{ image('bundles/main/images/senatrice.jpg').forceResize(370,370) }}\" alt=\"\">
                            <div class=\"caption bg-primary\">
                                <h5>
                                    Dr. Assambo Kieli
                                </h5>
                                <div class=\"wrap\">
                                    <p>
                                        Sénatrice, Docteur néphrologue.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\" data-toggle=\"popover\" data-html=\"true\" title=\"<div class='row'><div class='col-xs-3'><img src='{{ image('bundles/main/images/Rose-Marie.jpg').cropResize(50, 50) }}'></div> <div class='col-xs-9'>Rose-Marie Geneviève BOUBOUTOU</div></div>\" data-placement=\"left\" data-trigger=\"hover\"
                         data-content=\"<p>Franco-congolaise, je suis diplômée d'un DEA de droit des contrats de l'Université Paris XI-Sceaux, d'un Master en relations internationales de l'Université Américaine de Paris et d'un Master en management des Médias de l'IEP de Paris (Sciences Po).</p>
<p>Journaliste, j’ai collaboré les trois dernières années à la rédaction du quotidien congolais Les Dépêches de Brazzaville et à l'Agence d'information d'Afrique centrale (ADIAC). J’ai créé en août 2015 le site www.africabusinessinsider.news déjà partenaire de grands événements en Afrique et en Europe.</p>

\"                   >
                        <div class=\"thumbnail thumb-shadow\">
                            <img src=\"{{ image('bundles/main/images/Rose-Marie.jpg').forceResize(370,370) }}\" alt=\"\">
                            <div class=\"caption bg2\">
                                <h5>
                                    Rose-Marie Geneviève BOUBOUTOU
                                </h5>
                                <div class=\"wrap\">
                                    <p>
                                        Journaliste rédactrice.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\" data-toggle=\"popover\" data-html=\"true\" title=\"<div class='row'><div class='col-xs-3'><img src='{{ image('bundles/main/images/Brony.jpg').cropResize(50, 50) }}'></div> <div class='col-xs-9'>Brony Fortunat Calixte NGOLALI</div></div>\" data-placement=\"right\" data-trigger=\"hover\"
                         data-content=\"<p>Je suis journaliste niveau 3, journaliste-Reporter, présentateur TV et Radio,  Ancien directeur général de la Télévision Pour Tous( TPT) de Pointe-Noire, ancien directeur des informations de Top tv à Brazzaville, ancien directeur de la publication du journal 'Le Choc' Congo Brazzaville, ancien formateur à informorac-Congo( projet de l'UE, destinée à la formation des journalistes). Ancien chef Scout. Actuellement, coordinateur de l'équipe de la fondation O'dellya au Congo Brazzaville
                     Je suis d'abord et avant tout amoureux des nouvelles technologies. Je crois également que, le développement du monde, d'une manière générale et de l'Afrique en particulier, passe par les TIC. Le Projet Pacte 'Technologie' vient donc stimuler et attiser en moi, ce désir ardent de participer et de contribuer,  à la mesure du possible, au développement du Congo,par  l'outil technologique. Et j'y crois.</p>

\"                   >
                        <div class=\"thumbnail thumb-shadow\">
                            <img src=\"{{ image('bundles/main/images/Brony.jpg').forceResize(370,370) }}\" alt=\"\">
                            <div class=\"caption bg2\">
                                <h5>
                                    Brony Fortunat Calixte NGOLALI
                                </h5>
                                <div class=\"wrap\">
                                    <p>
                                        Journaliste présentateur TV et Radio.
                                    </p>
                                    <a href=\"#\" class=\"btn-link fa-angle-right\"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span id=\"mot\"></span>
            </div>
        </section>

        <section class=\"well well2\" style=\"border: none;\">
            <div class=\"container\">
                <h2 id=\"actu\" class=\"txt-pr\">
                    Actu
                    <span style=\"color:#21c2f8;font-weight:200;\">
                        Numérique en Afrique
                    </span>
                </h2>
                <div class=\"row offs1\">
                    <div class=\"col-md-6 col-sm-12\">
                        <ul class=\"link-list wow fadeInLeft\" data-wow-duration='3s'>
                            <li>

                                <a href=\"http://www.jeuneafrique.com/317909/economie/google-veut-former-1-million-de-jeunes-africains-metiers-numerique/\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-2 actu-img\"><img src=\"{{ image('bundles/main/images/reuters-google-592x296.jpg').forceResize(120,100) }}\"></div>
                                        <div CLASS=\"col-xs-10\">Google forme des jeunes sur le numérique en Afrique</div>
                                    </div>
                                </a>
                                <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                            </li>
                            <li>
                                <a href=\"http://www.banquemondiale.org/…/using-digital-technology-to…\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-2 actu-img\"><img src=\"{{ image('bundles/main/images/ga-using-digital-technology-to-improve-gabons-health-care-780x439.jpg').forceResize(120,100) }}\"></div>
                                        <div CLASS=\"col-xs-10\">Le numérique au service de la santé au Gabon</div>
                                    </div>
                                </a>
                                <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                            </li>
                            <li>
                                <a href=\"http://www.voaafrique.com/a/le-rwanda-a-la-heure-de-la-numerisation-de-ses-services-adminstratifs/3370651.html\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-2 actu-img\"><img src=\"{{ image('bundles/main/images/rwanda-numerisation-administration.png').forceResize(120,100) }}\"></div>
                                        <div CLASS=\"col-xs-10\">La numérisation des administrations au Rwanda</div>
                                    </div>
                                </a>
                                <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                            </li>
                            <li>
                                <a href=\"http://www.jeuneafrique.com/322952/politique/maroc-applications-mobiles-veulent-faciliter-lutilisation-services-publiques/\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-2 actu-img\"><img src=\"{{ image('bundles/main/images/egouv-maroc.jpg').forceResize(120,100) }}\"></div>
                                        <div CLASS=\"col-xs-10\">L'e-gouvernance au Maroc</div>
                                    </div>
                                </a>
                                <a href=\"#\" class=\"btn-link l-h1 fa-angle-right\"></a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-6 col-sm-12\">
                        <img class=\"width_img\" src=\"{{ image('bundles/main/images/numerique3.jpg').forceResize(570, 470) }}\" alt=\"\">
                    </div>
                </div>
            </div>
        </section>

        <section class=\"well well3 parallax\" data-url=\"{{ asset('bundles/main/images/le-tout-numerique.jpg') }}\" data-mobile=\"true\" data-speed=\"0.9\" style=\"border: none;\">
            <div class=\"container\">
                <div class=\"wrap text-center\">
                    <strong>
                        LE TOUT NUMERIQUE,<br />
                        POUR UN CONGO 2.0,
                        <small>
                            NOUS Y CROYONS !
                        </small>
                    </strong>

                </div>
            </div>
        </section>

    </main>

    {% include('MainBundle:Common:footer.html.twig') %}
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('bundles/main/js/jquery-migrate-1.2.1.min.js') }}\"></script>

    <script src=\"{{ asset('bundles/main/js/device.min.js') }}\"></script>

    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCJeCYd7WriRsWWMvsS7ygyndMCBWnGvKc\"
            type=\"text/javascript\"></script>


{% endblock %}




", "MainBundle:Main:index.html.twig", "/Applications/MAMP/htdocs/odellya/src/MainBundle/Resources/views/Main/index.html.twig");
    }
}