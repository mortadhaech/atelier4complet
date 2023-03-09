<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* club/index.html.twig */
class __TwigTemplate_705cc1e7cb418146c7521d50ae811931 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        // line 1
        echo "<html>
  <head>
    <style>
      h1 {
        text-align: center;
      }
      img{
  display: block;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
    <h1>Clubs esprit</h1>

    <label>Au sien d'esprit les associations et clubs remplissent plusieurs role étant donneé la diversité des motivations qui attirent ceux qui en sont a l'origine.consient de l'importance de la vie associative,les étudiants jouent un role important dans l'élaboration et la transmission des messages au demendaire.Ci dessous la liste des clubs d'Esprit.N'hésitez pas a la completer.</label>
</br>
<img src=\"https://i0.wp.com/lapresse.tn/wp-content/uploads/2020/07/esprit.jpg?fit=850%2C491&ssl=1\">  
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "club/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
  <head>
    <style>
      h1 {
        text-align: center;
      }
      img{
  display: block;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
    <h1>Clubs esprit</h1>

    <label>Au sien d'esprit les associations et clubs remplissent plusieurs role étant donneé la diversité des motivations qui attirent ceux qui en sont a l'origine.consient de l'importance de la vie associative,les étudiants jouent un role important dans l'élaboration et la transmission des messages au demendaire.Ci dessous la liste des clubs d'Esprit.N'hésitez pas a la completer.</label>
</br>
<img src=\"https://i0.wp.com/lapresse.tn/wp-content/uploads/2020/07/esprit.jpg?fit=850%2C491&ssl=1\">  
  </body>
</html>", "club/index.html.twig", "D:\\Esprit\\symfony\\EspritClub\\templates\\club\\index.html.twig");
    }
}
