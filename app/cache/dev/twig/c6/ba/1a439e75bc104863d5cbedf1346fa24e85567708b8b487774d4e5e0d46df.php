<?php

/* ::nav.html.twig */
class __TwigTemplate_c6ba1a439e75bc104863d5cbedf1346fa24e85567708b8b487774d4e5e0d46df extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<body>
    <nav class=\"navbar navbar-fixed-top\" role=\"navigation\" data-0=\"line-height:100px; height:100px; background-color:#0099cc;\">
    <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                <span class=\"fa fa-bars color-white\"></span>
                            </button>
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projetgeneral/images/logo.jpg"), "html", null, true);
        echo "\">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\" data-0=\"margin-top:20px;\" data-300=\"margin-top:5px;\">
                    <li class=\"active\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("projet_general_homepage");
        echo "\"> Accueil </a></li>
                    <li class=\"active\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("projet_demande_ajouter");
        echo "\"> Faire demande </a></li>
                    <li class=\"active\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("projet_demande_lister");
        echo "\"> Liste demande </a></li>
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("projet_demande_equipe");
        echo "\">Equipe</a></li>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("projet_demande_contact");
        echo "\">Contact</a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("projet_demande_connecter");
        echo "\">Connexion</a></li>
                </ul>
            </div>
    </div>
    </nav>
 </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  30 => 10,  19 => 1,);
    }
}
