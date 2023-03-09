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

/* student/base.html.twig */
class __TwigTemplate_9cfc303864f9b70ec3a8db4e067afc53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/base.html.twig"));

        // line 1
        echo "
<h2>liste de classroom</h2>
<table border=\"2\">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Editer</th>
            <th>Delete</th>
            
        
        </tr>
    </thead>
    <tbody>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stud"]) || array_key_exists("stud", $context) ? $context["stud"] : (function () { throw new RuntimeError('Variable "stud" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 16
            echo " <tr>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "email", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                   <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edittext", ["id" => twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 19), "name" => twig_get_attribute($this->env, $this->source, $context["f"], "email", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">Editer</a></td>
                   <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteclass", ["id" => twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">Delete</a></td>

                </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </tbody>
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "student/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<h2>liste de classroom</h2>
<table border=\"2\">
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Editer</th>
            <th>Delete</th>
            
        
        </tr>
    </thead>
    <tbody>
{%for f in stud %}
 <tr>
                    <td>{{ f.id}}</td>
                    <td>{{ f.email }}</td>
                   <td><a href=\"{{ path('edittext', {'id': f.id, 'name': f.email}) }}\">Editer</a></td>
                   <td><a href=\"{{ path('deleteclass', {'id': f.id}) }}\">Delete</a></td>

                </tr>

{%endfor%}
  </tbody>
</table>
", "student/base.html.twig", "D:\\Esprit\\symfony\\EspritClub\\templates\\student\\base.html.twig");
    }
}
