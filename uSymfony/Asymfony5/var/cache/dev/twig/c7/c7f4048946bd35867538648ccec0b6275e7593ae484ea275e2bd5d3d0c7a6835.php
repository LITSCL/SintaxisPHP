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

/* home/animales.html.twig */
class __TwigTemplate_0b672773770599e7f5640112a6e919e0861fb04338c402bc0e8ab6d82ac02124 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/animales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/animales.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) || array_key_exists("titulo", $context) ? $context["titulo"] : (function () { throw new RuntimeError('Variable "titulo" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</h1>

";
        // line 4
        echo "
<h3>Animales Terrestres</h3>

";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["animalesTerrestres"]) || array_key_exists("animalesTerrestres", $context) ? $context["animalesTerrestres"] : (function () { throw new RuntimeError('Variable "animalesTerrestres" does not exist.', 8, $this->source); })()));
        echo " ";
        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["animalesTerrestres"]) || array_key_exists("animalesTerrestres", $context) ? $context["animalesTerrestres"] : (function () { throw new RuntimeError('Variable "animalesTerrestres" does not exist.', 10, $this->source); })()), 0, [], "array", false, false, false, 10), "html", null, true);
        echo " ";
        // line 11
        echo "
<h3>Animales Voladores</h3>

";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["animalesVoladores"]) || array_key_exists("animalesVoladores", $context) ? $context["animalesVoladores"] : (function () { throw new RuntimeError('Variable "animalesVoladores" does not exist.', 15, $this->source); })()));
        echo "

";
        // line 17
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["animalesVoladores"]) || array_key_exists("animalesVoladores", $context) ? $context["animalesVoladores"] : (function () { throw new RuntimeError('Variable "animalesVoladores" does not exist.', 17, $this->source); })()), "pajaro1", [], "any", false, false, false, 17) . " => ") . "Es un hermoso ejemplar"), "html", null, true);
        echo " ";
        // line 18
        echo "
<h2>Estructuras de control en Twig</h2>

<h3>Condicional IF</h3>

";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, (isset($context["animalesVoladores"]) || array_key_exists("animalesVoladores", $context) ? $context["animalesVoladores"] : (function () { throw new RuntimeError('Variable "animalesVoladores" does not exist.', 23, $this->source); })()), "pajaro2", [], "any", false, false, false, 23) == "Picaflor")) {
            // line 24
            echo "\t<p>Correctamente, el segundo  animal volador si es un \"Picaflor\".</p>
";
        } else {
            // line 26
            echo "\t<p>Incorrecto, el segundo animal volador no es un \"Picaflor\".</p>
";
        }
        // line 28
        echo "
<h3>Condicional IF con Clausula Start</h3>

<h4>El segundo animal volador comienza con \"Pica\"</h4>
";
        // line 32
        if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (isset($context["animalesVoladores"]) || array_key_exists("animalesVoladores", $context) ? $context["animalesVoladores"] : (function () { throw new RuntimeError('Variable "animalesVoladores" does not exist.', 32, $this->source); })()), "pajaro2", [], "any", false, false, false, 32)) && is_string($__internal_compile_1 = "Pica") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) {
            // line 33
            echo "\t<p>Si</p>
";
        } else {
            // line 35
            echo "\t<p>No</p>
";
        }
        // line 37
        echo "
<h3>Condicional IF con Clausula End</h3>

<h4>El segundo animal volador termina con \"flor\"</h4>
";
        // line 41
        if ((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (isset($context["animalesVoladores"]) || array_key_exists("animalesVoladores", $context) ? $context["animalesVoladores"] : (function () { throw new RuntimeError('Variable "animalesVoladores" does not exist.', 41, $this->source); })()), "pajaro2", [], "any", false, false, false, 41)) && is_string($__internal_compile_3 = "flor") && ('' === $__internal_compile_3 || $__internal_compile_3 === substr($__internal_compile_2, -strlen($__internal_compile_3))))) {
            // line 42
            echo "\t<p>Si</p>
";
        } else {
            // line 44
            echo "\t<p>No</p>
";
        }
        // line 46
        echo "
<h3>Bucle</h3>
";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["animalesTerrestres"]) || array_key_exists("animalesTerrestres", $context) ? $context["animalesTerrestres"] : (function () { throw new RuntimeError('Variable "animalesTerrestres" does not exist.', 48, $this->source); })())) >= 1)) {
            echo " ";
            // line 49
            echo "\t<ul>
\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["animalesTerrestres"]) || array_key_exists("animalesTerrestres", $context) ? $context["animalesTerrestres"] : (function () { throw new RuntimeError('Variable "animalesTerrestres" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
                echo " ";
                // line 51
                echo "\t\t<li>";
                echo twig_escape_filter($this->env, $context["animal"], "html", null, true);
                echo "</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t</ul>
";
        }
        // line 55
        echo "
<ul>
";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            // line 58
            echo "\t<li>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</ul>

<h2>Funciones predefinidas en Twig</h2>

<hr/>

<h3>Obtener el numero mas chico de un Array (Metodo: \"min\")</h3>

";
        // line 68
        echo twig_escape_filter($this->env, min([0 => 9, 1 => 11, 2 => 6, 3 => 99, 4 => 2, 5 => 43, 6 => 902]), "html", null, true);
        echo "

<hr/>

<h3>Obtener el numero mas grande de un Array (Metodo: \"max\")</h3>

";
        // line 74
        echo twig_escape_filter($this->env, max([0 => 9, 1 => 11, 2 => 6, 3 => 99, 4 => 2, 5 => 43, 6 => 902]), "html", null, true);
        echo "

<hr/>

<h3>Obtener un valor aleatorio de un indice de un Array (Metodo: \"random\")</h3>

";
        // line 80
        echo twig_escape_filter($this->env, twig_random($this->env, [0 => 9, 1 => 11, 2 => 6, 3 => 99, 4 => 2, 5 => 43, 6 => 902]), "html", null, true);
        echo "

<hr/>

<h3>Generar un rango de numeros \"Ideal para usarlo en bucles\" (Metodo: \"range\")</h3>

";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 100, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo " ";
            // line 87
            echo "\t";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "<br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/animales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 87,  208 => 86,  199 => 80,  190 => 74,  181 => 68,  171 => 60,  162 => 58,  157 => 57,  153 => 55,  149 => 53,  140 => 51,  135 => 50,  132 => 49,  129 => 48,  125 => 46,  121 => 44,  117 => 42,  115 => 41,  109 => 37,  105 => 35,  101 => 33,  99 => 32,  93 => 28,  89 => 26,  85 => 24,  83 => 23,  76 => 18,  73 => 17,  68 => 15,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>{{ titulo }}</h1>

{# Trabajar con Arrays. #}

<h3>Animales Terrestres</h3>

{# Array con indices. #}
{{ dump(animalesTerrestres) }} {# El metodo \"dump\" (Similar a \"var_dump\") permite mostrar el contenido de una variable. #}

{{ animalesTerrestres[0] }} {# Mostrando el indice \"0\" del Array. #}

<h3>Animales Voladores</h3>

{# Array asociativo. #}
{{ dump(animalesVoladores) }}

{{ animalesVoladores.pajaro1 ~ \" => \" ~ \"Es un hermoso ejemplar\" }} {# El signo \"~\" permite concatenar. #}

<h2>Estructuras de control en Twig</h2>

<h3>Condicional IF</h3>

{% if animalesVoladores.pajaro2 == \"Picaflor\" %}
\t<p>Correctamente, el segundo  animal volador si es un \"Picaflor\".</p>
{% else %}
\t<p>Incorrecto, el segundo animal volador no es un \"Picaflor\".</p>
{% endif %}

<h3>Condicional IF con Clausula Start</h3>

<h4>El segundo animal volador comienza con \"Pica\"</h4>
{% if animalesVoladores.pajaro2 starts with \"Pica\" %}
\t<p>Si</p>
{% else %}
\t<p>No</p>
{% endif %}

<h3>Condicional IF con Clausula End</h3>

<h4>El segundo animal volador termina con \"flor\"</h4>
{% if animalesVoladores.pajaro2 ends with \"flor\" %}
\t<p>Si</p>
{% else %}
\t<p>No</p>
{% endif %}

<h3>Bucle</h3>
{% if animalesTerrestres|length >= 1 %} {# Verificando que hayan datos en el Array. #}
\t<ul>
\t{%  for animal in animalesTerrestres %} {# Recorriendo el Array mediante un bucle \"for\". #}
\t\t<li>{{ animal }}</li>
\t{% endfor %}
\t</ul>
{% endif %}

<ul>
{% for i in 0..10 %} {# Para recorrer un rango de numeros en un bucle \"for\", se debe utilizar la nomenclatura de \"..\", en este caso se indica que se recorre el bucle de 0 hasta 10 (0..10) #}
\t<li>{{ i }}</li>
{% endfor %}
</ul>

<h2>Funciones predefinidas en Twig</h2>

<hr/>

<h3>Obtener el numero mas chico de un Array (Metodo: \"min\")</h3>

{{ min([9, 11, 6, 99, 2, 43, 902]) }}

<hr/>

<h3>Obtener el numero mas grande de un Array (Metodo: \"max\")</h3>

{{ max([9, 11, 6, 99, 2, 43, 902]) }}

<hr/>

<h3>Obtener un valor aleatorio de un indice de un Array (Metodo: \"random\")</h3>

{{ random([9, 11, 6, 99, 2, 43, 902]) }}

<hr/>

<h3>Generar un rango de numeros \"Ideal para usarlo en bucles\" (Metodo: \"range\")</h3>

{% for i in range(0, 100, 5) %} {# El primer parametro indica desde donde comenzar, el segundo donde terminar y el tercero el aumento de la variable por cada iteracion. #}
\t{{ i }}<br/>
{% endfor %}
", "home/animales.html.twig", "C:\\xampp\\htdocs\\SintaxisPHP\\cl\\litscl\\sintaxisphp\\uSymfony\\Asymfony5\\templates\\home\\animales.html.twig");
    }
}
