<?php

/* ProjetGeneralBundle:Demande:lister.html.twig */
class __TwigTemplate_02d08202c8d18de3822dc820ce6f6209585b6b2f533449c5a5708e8b0c7f3409 extends Twig_Template
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
\t\t<meta charset=\"UTF-8\"> 
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/> 
\t</head>
<body> 
\t<div class=\"container\">
\t\t<div class=\"well\">
\t\t\t";
        // line 11
        $this->env->loadTemplate("::base.html.twig")->display($context);
        // line 12
        echo "\t\t\t";
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "\t\t</div>
\t\t\t<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
\t     \t<h3 align=\"center\"> Liste des demandes </h3>
\t\t<table align=\"center\" border=\"1\" width=\"40%\" class=\"table table-striped table-bordered table-hover\">
\t\t<tr> 
\t\t\t\t<th>N°</th>
\t\t\t\t<th>Domaine</th>
\t\t\t\t<th>Materiel</th>
\t\t\t\t<th>Probl&eacute;me</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Num&eacute;ro</th>
\t\t\t\t<th>Localisation</th>
\t\t\t\t<th colspan=\"2\">D&eacute;tail</th>
\t\t</tr>
\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "demandes"));
        foreach ($context['_seq'] as $context["_key"] => $context["dem"]) {
            // line 28
            echo "\t\t<tr>
\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dem"), "Id"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dem"), "domaine"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dem"), "typeMateriel"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dem"), "probleme"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dem"), "description"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dem"), "numero"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dem"), "localisation"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_demande_affecter", array("id" => $this->getAttribute($this->getContext($context, "dem"), "id"))), "html", null, true);
            echo "\">Affecter</a></td>
\t\t\t\t<td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_demande_ignorer", array("id" => $this->getAttribute($this->getContext($context, "dem"), "id"))), "html", null, true);
            echo "\">Ignorer</a></td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t</table>
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

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Ajouter";
    }

    public function getTemplateName()
    {
        return "ProjetGeneralBundle:Demande:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 12,  104 => 40,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  67 => 30,  63 => 29,  60 => 28,  56 => 27,  40 => 13,  37 => 12,  35 => 11,  27 => 6,  20 => 1,);
    }
}
