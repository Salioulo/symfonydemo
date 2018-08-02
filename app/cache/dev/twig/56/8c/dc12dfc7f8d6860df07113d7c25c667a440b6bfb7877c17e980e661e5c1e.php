<?php

/* ProjetGeneralBundle:Demande:ajouter.html.twig */
class __TwigTemplate_568cdc12dfc7f8d6860df07113d7c25c667a440b6bfb7877c17e980e661e5c1e extends Twig_Template
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
        echo "
<!Doctype html>
<html>
\t<head> 
\t\t<meta charset=\"UTF-8\"> 
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/> 
\t</head>
<body> 
\t<div class=\"container\">
\t\t<div class=\"well\">
\t\t\t";
        // line 12
        $this->env->loadTemplate("::base.html.twig")->display($context);
        // line 13
        echo "\t\t</div>
\t\t <h3 align=\"center\"> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
        echo " </h3>
\t\t\t<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
\t    <div class=\"col-lg-8 col-md-8 col-sm-8\" >
\t\t   <form method=\"post\">
\t\t\t\t";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "domaine"), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "typeMateriel"), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "probleme"), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "numero"), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "localisation"), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t</div>\t
\t\t\t\t<input type=\"submit\" value=\"Soumettre\"/>\t\t\t\t
\t\t\t\t";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
\t\t\t</form>
\t    </div>
\t\t    <!-- Footer -->
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
\t</div>\t\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "ProjetGeneralBundle:Demande:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 38,  82 => 35,  76 => 32,  70 => 29,  64 => 26,  58 => 23,  52 => 20,  47 => 18,  40 => 14,  37 => 13,  35 => 12,  27 => 7,  19 => 1,);
    }
}
