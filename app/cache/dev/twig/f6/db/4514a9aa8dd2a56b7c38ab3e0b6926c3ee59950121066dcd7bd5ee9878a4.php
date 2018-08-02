<?php

/* ProjetGeneralBundle:Demande:connecter.html.twig */
class __TwigTemplate_f6db4514a9aa8dd2a56b7c38ab3e0b6926c3ee59950121066dcd7bd5ee9878a4 extends Twig_Template
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
        echo "<html>
\t<head> 
\t\t<meta charset=\"UTF-8\"> 
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/> 
\t</head>
<body> 
\t\t<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
\t\t<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
\t\t</div>
\t\t\t\t<form method=\"POST\" action=\"\" align=\"center\">
\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t<table align=\"center\">
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t<label for=\"inputCity\">Login</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"login\" placeholder=\"Saisir votre login\">
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t<label for=\"inputZip\">Mot de passe</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"motpass\" placeholder=\"Saisir votre mot de passe\">
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t<input type=\"submit\" class=\"form-control\" name=\"connecter\" value=\"connecter\">
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t\t<a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("projet_general_homepage");
        echo "\"> Retour </a>
\t\t\t</div>
\t\t\t</form>
\t<!-- fin form connexion-->
\t    <!-- Footer -->
<footer class=\"page-footer font-small blue special-color-dark\">

    <!-- Footer Elements -->
    <div class=\"container\">

      <!--Grid row-->
      <div class=\"row\">

        <!--Grid column-->
        <div class=\"col-md-6 mb-4\">

        

        </div>
        <!--Grid column-->

        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class=\"footer-copyright text-center py-3\">© 2018 Copyright:
      <a href=\"https://mdbootstrap.com/bootstrap-tutorial/\"> Agir.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</div> <!-- container-->
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ProjetGeneralBundle:Demande:connecter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 38,  25 => 5,  19 => 1,);
    }
}
