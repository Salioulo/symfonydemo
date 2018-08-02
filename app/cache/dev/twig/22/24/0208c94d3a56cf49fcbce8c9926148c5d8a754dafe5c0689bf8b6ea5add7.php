<?php

/* ProjetGeneralBundle:Default:index.html.twig */
class __TwigTemplate_22240208c94d3a56cf49fcbce8c9926148c5d8a754dafe5c0689bf8b6ea5add7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!Doctype html>
<html>
\t<head> 
        <meta charset=\"UTF-8\"> 
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/> 
\t</head>
<body> 
    <div class=\"container\">
            <div class=\"well\">
                ";
        // line 11
        $this->env->loadTemplate("::base.html.twig")->display($context);
        // line 12
        echo "                ";
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "            </div>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <div class=\"slider\">
            <div id=\"carousel-slider\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators visible-xs\">
                <li data-target=\"#carousel-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carousel-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#carousel-slider\" data-slide-to=\"2\"></li>
                </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"item active\">
                            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projetgeneral/images/ordi8.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                        </div>

                        <div class=\"item\">
                            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projetgeneral/images/ordi7.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                        </div>
                        
                    </div>
                    
                    <a class=\"left carousel-control hidden-xs\" href=\"#carousel-slider\" data-slide=\"prev\">
                        <i class=\"fa fa-angle-left\"></i>
                    </a>

                    <a class=\" right carousel-control hidden-xs\" href=\"#carousel-slider\" data-slide=\"next\">
                            <i class=\"fa fa-angle-right\"></i>
                    </a>
            </div> <!-- carousel slider-->
        </div>   <!-- slider -->
        \t<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <!-- Footer -->
<footer class=\"page-footer font-small blue special-color-dark\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                  <p> <b>Nos partenaires</p>
                </div>
            </div>
        </div>
        <div class=\"footer-copyright text-center py-3\">© 2018 Copyright:
            <a href=\"https://www.agir.com\"> Agir.com</a>
        </div>
    </footer>
  <!-- Footer -->
    </div>    <!-- container -->
</body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    public function getTemplateName()
    {
        return "ProjetGeneralBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 12,  61 => 29,  54 => 25,  40 => 13,  37 => 12,  35 => 11,  27 => 6,  20 => 1,);
    }
}
