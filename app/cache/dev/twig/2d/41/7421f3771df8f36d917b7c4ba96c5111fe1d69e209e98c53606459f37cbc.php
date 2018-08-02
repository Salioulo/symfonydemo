<?php

/* ProjetGeneralBundle:Demande:equipe.html.twig */
class __TwigTemplate_2d417421f3771df8f36d917b7c4ba96c5111fe1d69e209e98c53606459f37cbc extends Twig_Template
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
\t<div class=\"container\">
\t\t<div class=\"well\">
\t\t\t";
        // line 10
        $this->env->loadTemplate("::base.html.twig")->display($context);
        // line 11
        echo "\t\t</div>
    \t<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <div class=\"container\">

      <div class=\"row mar-bot10\">
            <div class=\"col-md-offset-3 col-md-6\">
             <h2 class=\"section-heading animated\" data-animation=\"bounceInUp\">Notre equipe</h2>
            <p> <h3>Une equipe jeune et dynamique vous assistera sur tous vos soucis mat&eacute;riels</h3> </p>
            </div>
      </div>

      <div class=\"row align-center mar-bot45\">
        <div class=\"col-md-4\">
          <div class=\"wow bounceIn\" data-animation-delay=\"4.8s\">
            <div class=\"team-member\">
              <div class=\"profile-picture\">
                <figure><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projetgeneral/images/iba.jpeg"), "html", null, true);
        echo "\"></figure>
              </div>
              <div class=\"team-detail\">
                <h4>Ibrahima SENE</h4>
                <span> <u>Administrateur R&eacute;seau </u></span>
              </div>
              <div class=\"team-bio\">
                <p>Sorti de UGB ...</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-4\">
          <div class=\"wow bounceIn\">
                <div class=\"team-member\">
                        <div class=\"profile-picture\">
                        <figure><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projetgeneral/images/members1.jpg"), "html", null, true);
        echo "\"></figure>
                        </div>
                </div>
                <div class=\"team-detail\">
                    <h4>Alexander Chernov</h4>
                    <span>D&eacute;veloppeur Web</span>
                </div>
                <div class=\"team-bio\">
                    <p> Passionn&eacute; par les technolies ...</p>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-4\">
          <div class=\"wow bounceIn\">
                <div class=\"team-member\">
                    <div class=\"profile-picture\">
                        <figure><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projetgeneral/images/members3.jpg"), "html", null, true);
        echo "\"></figure>
                    </div>
                </div>
                <div class=\"team-detail\">
                    <h4>Jose Manuel</h4>
                    <span>Web designer</span>
                </div>
                <div class=\"team-bio\">
                    <p>Le design fait notre ...</p>
                </div>
            </div>
          </div>

      </div>
    <!-- Footer -->
          <footer class=\"page-footer font-small blue special-color-dark\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 mb-4\">
                 
                </div>
            </div>
        </div>
        <div class=\"footer-copyright text-center py-3\">© 2018 Copyright:
            <a href=\"https://www.agir.com\"> Agir.com</a>
        </div>
    </footer>  
  <!-- Footer -->
    </div>\t\t
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "ProjetGeneralBundle:Demande:equipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 60,  72 => 43,  53 => 27,  35 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }
}
