<?php

/* ::base.html.twig */
class __TwigTemplate_061c4757139ca784742470d9ae70781217cf4debe62a452085291c22342ad72e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
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
        echo " - Mon Projet </title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link href=\"//netdna.boostrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/add.css"), "html", null, true);
        echo "\" />        
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        echo "
       ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "        <script src=\"//code.jQuery.com/jQuery.min.css\"> </script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"> </script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
        $this->env->loadTemplate("::nav.html.twig")->display($context);
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  80 => 14,  75 => 10,  70 => 5,  62 => 18,  59 => 17,  57 => 16,  54 => 15,  52 => 14,  45 => 11,  43 => 10,  39 => 9,  34 => 7,  29 => 5,  23 => 1,);
    }
}
