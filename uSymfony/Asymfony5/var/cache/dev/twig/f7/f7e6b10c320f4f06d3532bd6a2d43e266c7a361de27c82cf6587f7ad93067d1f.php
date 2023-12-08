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

/* home/filtros.html.twig */
class __TwigTemplate_bffb11339ff07d1987307b4377e33ddba8d8fc473fe518c24e813558b1ae3486 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/filtros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/filtros.html.twig"));

        // line 1
        echo "<h1>Filtros en Twig (Se utilizan mendiante una tuberia |)</h1>

<h2>Filtro \"length\": Permite contar la cantidad de indices de un array</h2>
";
        // line 4
        $context["array"] = [0 => "Uno", 1 => "Dos", 2 => "Tres", 3 => "Cuatro"];
        // line 5
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 5, $this->source); })())), "html", null, true);
        echo "

<h2>Filtro \"trim\": Permite eliminar los espacios en blando iniciales y finales de una cadena</h2>
";
        // line 8
        $context["correo"] = "   correo@correo.com   ";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_trim_filter((isset($context["correo"]) || array_key_exists("correo", $context) ? $context["correo"] : (function () { throw new RuntimeError('Variable "correo" does not exist.', 9, $this->source); })())));
        echo "

<h2>Filtro \"upper\": Permite transformar a mayusculas una cadena</h2>
";
        // line 12
        $context["cadena1"] = "mi cadena";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_upper_filter($this->env, (isset($context["cadena1"]) || array_key_exists("cadena1", $context) ? $context["cadena1"] : (function () { throw new RuntimeError('Variable "cadena1" does not exist.', 13, $this->source); })())));
        echo "

<h2>Filtro \"upper\": Permite transformar a minusculas una cadena</h2>
";
        // line 16
        $context["cadena2"] = "MI CADENA";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_lower_filter($this->env, (isset($context["cadena2"]) || array_key_exists("cadena2", $context) ? $context["cadena2"] : (function () { throw new RuntimeError('Variable "cadena2" does not exist.', 17, $this->source); })())));
        echo "

<h2>Filtro \"raw\": Permite insertar un string como codigo HTML</h2>
";
        // line 20
        $context["cadena3"] = "<ul><li>Primer item</li><li>Segundo item</li></ul>";
        // line 21
        echo "Con RAW:
";
        // line 22
        echo (isset($context["cadena3"]) || array_key_exists("cadena3", $context) ? $context["cadena3"] : (function () { throw new RuntimeError('Variable "cadena3" does not exist.', 22, $this->source); })());
        echo "
Sin RAW:
";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["cadena3"]) || array_key_exists("cadena3", $context) ? $context["cadena3"] : (function () { throw new RuntimeError('Variable "cadena3" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "

<h1>Los filtros tambien se pueden encadenar</h1>
";
        // line 27
        $context["cadena4"] = "   Hola como estas   ";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_trim_filter(twig_upper_filter($this->env, (isset($context["cadena4"]) || array_key_exists("cadena4", $context) ? $context["cadena4"] : (function () { throw new RuntimeError('Variable "cadena4" does not exist.', 28, $this->source); })()))));
        echo "

<h1>Filtros Personalizados (Se utilizan mendiante una tuberia | Y/O mediante una funcion)</h1>

<h2>Utilizando filtro mediante tuberia</h2>
";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\MiFiltroExtension']->mostrarTablaMultiplicar(2), "html", null, true);
        echo "

<h2>Utilizando filtro mediante funcion</h2>
";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\MiFiltroExtension']->mostrarTablaMultiplicar(2), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/filtros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  106 => 33,  98 => 28,  96 => 27,  90 => 24,  85 => 22,  82 => 21,  80 => 20,  74 => 17,  72 => 16,  66 => 13,  64 => 12,  58 => 9,  56 => 8,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Filtros en Twig (Se utilizan mendiante una tuberia |)</h1>

<h2>Filtro \"length\": Permite contar la cantidad de indices de un array</h2>
{% set array = [\"Uno\", \"Dos\", \"Tres\", \"Cuatro\"] %}
{{ array|length }}

<h2>Filtro \"trim\": Permite eliminar los espacios en blando iniciales y finales de una cadena</h2>
{% set correo = \"   correo@correo.com   \" %}
{{ dump(correo|trim) }}

<h2>Filtro \"upper\": Permite transformar a mayusculas una cadena</h2>
{% set cadena1 = \"mi cadena\" %}
{{ dump(cadena1|upper) }}

<h2>Filtro \"upper\": Permite transformar a minusculas una cadena</h2>
{% set cadena2 = \"MI CADENA\" %}
{{ dump(cadena2|lower) }}

<h2>Filtro \"raw\": Permite insertar un string como codigo HTML</h2>
{% set cadena3 = \"<ul><li>Primer item</li><li>Segundo item</li></ul>\" %}
Con RAW:
{{ cadena3|raw }}
Sin RAW:
{{ cadena3 }}

<h1>Los filtros tambien se pueden encadenar</h1>
{% set cadena4 = \"   Hola como estas   \" %}
{{ dump(cadena4|upper|trim) }}

<h1>Filtros Personalizados (Se utilizan mendiante una tuberia | Y/O mediante una funcion)</h1>

<h2>Utilizando filtro mediante tuberia</h2>
{{ 2|multiplicar }}

<h2>Utilizando filtro mediante funcion</h2>
{{ multiplicar(2) }}", "home/filtros.html.twig", "C:\\xampp\\htdocs\\uSymfony\\Asymfony5\\templates\\home\\filtros.html.twig");
    }
}
