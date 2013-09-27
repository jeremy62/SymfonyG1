<?php

/* JBMonPremierBundle:Default:index.html.twig */
class __TwigTemplate_88a2e74ccd96043312683491ad618007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JBMonPremierBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JBMonPremierBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "   ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
   - Tp 2 SLAM4
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        echo "\t\t
   ";
        // line 9
        $this->env->loadTemplate("JBMonPremierBundle::phrase.html.twig")->display($context);
        // line 10
        echo "   <p>";
        $this->displayBlock("title", $context, $blocks);
        echo "</p>
   <h2>Le but est de bien gerer l'architecture globale de ce framwork</h2>
";
    }

    public function getTemplateName()
    {
        return "JBMonPremierBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  45 => 9,  40 => 8,  32 => 4,  29 => 3,);
    }
}
