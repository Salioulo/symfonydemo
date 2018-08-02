<?php

/* ProjetGeneralBundle:Demande:contact.html.twig */
class __TwigTemplate_cdc23ab8c69b6dfb0dd1738de3c439ee11bc9f9dfc4523ee476919686129553f extends Twig_Template
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
\t<div class=\"container\">
\t\t<div class=\"well\">
\t\t\t";
        // line 10
        $this->env->loadTemplate("::base.html.twig")->display($context);
        // line 11
        echo "\t\t\t";
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t</div>
    \t<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
<div class=\"container\">

      <div class=\"row mar-bot40\">
        <div class=\"col-md-offset-3 col-md-6\">
          <div class=\"section-header\">
            <h2 class=\"section-heading animated\" data-animation=\"bounceInUp\">Nous Contacter</h2>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
          <form action=\"\" method=\"post\" role=\"form\" class=\"contactForm\">
                <div class=\"form-group\">
                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Votre Nom\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" />
                </div>
                <div class=\"form-group\">
                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Votre Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\" />           
                </div>
                <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Objet\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\" />
                </div>
                <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" data-rule=\"required\" data-msg=\"Please write something for us\" placeholder=\"Message\"></textarea>
                </div>
                <div class=\"text-center\"><button type=\"submit\" class=\"line-btn green\">Envoyer Message</button></div>
          </form>
        </div>
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
\t</div>\t\t
</body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Ajouter";
    }

    public function getTemplateName()
    {
        return "ProjetGeneralBundle:Demande:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 11,  39 => 12,  36 => 11,  34 => 10,  26 => 5,  20 => 1,);
    }
}
