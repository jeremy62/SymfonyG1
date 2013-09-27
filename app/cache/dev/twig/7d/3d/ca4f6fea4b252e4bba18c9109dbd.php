<?php

/* JBGSBBundle::layout.html.twig */
class __TwigTemplate_7d3dca4f6fea4b252e4bba18c9109dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"moncadre\">
            <div id=\"cadrehaut\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/JBGSB/images/logo.gif"), "html", null, true);
        echo "\" alt=\"logo\" width=\"\" height=\"\" />

                <div id=\"textcadrehaut\"><h1>Le laboratoire pharmaceutique GSB: Galaxy-Swiss Bourdin</h1></div>
            </div>
            <div class=\"cadredumenudroite\"><h1>Le laboratoire:</h1>
                <h2>Le secteur d'activité</h2>
<p>L’industrie pharmaceutique est un secteur très lucratif dans lequel le mouvement de fusion acquisition
est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes
structures.</p>
<p>Des déboires divers récents autour de médicaments ou molécules ayant entraîné des complications
médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,
réputée être le lieu d' arrangements entre l'industrie et les praticiens, et tout du moins un terrain
d'influence opaque.</p>
<h2>L'entreprise</h2>
<p>Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy
(spécialisé dans le secteur des maladies virales dont le SIDA et les hépatites) et le conglomérat
européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union
de trois petits laboratoires .</p>
<p>En 2009, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur
industriel. L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris.
Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis.</p>
<h2>Réorganisation</h2>
<p>Une conséquence de cette fusion, est la recherche d'une optimisation de l’activité du groupe ainsi
constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments
(en passant par une nécessaire restructuration et vague de licenciement), tout en prenant le meilleur
des deux laboratoires sur les produits concurrents.</p>
<p>L'entreprise compte 480 visiteurs médicaux en France métropolitaine (Corse comprise), et 60 dans les
départements et territoires d'outre-mer. Les territoires sont répartis en 6 secteurs géographiques
(Paris-Centre, Sud, Nord, Ouest, Est, DTOM Caraïbes-Amériques, DTOM Asie-Afrique).
Une vision partielle de cette organisation est présentée ci-dessous.</p>
                
            </div>
            <div class=\"cadredumenugauche\">       

                <ul class=\"niveau1\">
                    <li>
                        Présentation
                        <ul class=\"niveau2\">
                            <li><a href=\"#\" title=\"aller à la section présentation\">Activité</a></li>
                            <li><a href=\"#\" title=\"aller à la section présentation\">L'entreprise</a></li>
                        </ul>
                    </li>
                    <li>
                        Le SI
                        <ul class=\"niveau2\">
                            <li><a href=\"#\" title=\"aller à la section présentation\">Description</a></li>
                            <li><a href=\"#\" title=\"aller à la section présentation\">La gestion</a></li>
                            <li><a href=\"#\" title=\"aller à la section présentation\">L'équipement</a></li>
                        </ul>
                    </li>
                    <li>
                        Le Réseau
                        <ul class=\"niveau2\">
                            <li><a href=\"#\" title=\"aller à la section présentation\">Répartition</a></li>
                            <li><a href=\"#\" title=\"aller à la section présentation\">Ségmentation</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id=\"footer\"><span class=\"blanctext\">Copyright 2013-2014</span></div>
    </body>
        ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenu(e)";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/JBGSB/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

\t\t";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        echo "   



";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JBGSBBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 82,  137 => 77,  129 => 7,  126 => 6,  120 => 5,  114 => 83,  111 => 82,  109 => 77,  43 => 14,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }
}
