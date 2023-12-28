<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

//Los filtros Twig permite ejecutar funciones en cualquier archivo Twig de la aplicación Symfony.
class MiFiltroExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter("multiplicar", [$this, "mostrarTablaMultiplicar"]), //1. Indicando el nombre de la tubería que ejecuta el método (En el Array se identifica el método a ejecutar).
        ];
    }

    public function getFunctions(): array
    {
        return [
        		new TwigFunction("multiplicar", [$this, "mostrarTablaMultiplicar"]), //2. Indicando el nombre de la función que ejecuta el método (En el Array se identifica el método a ejecutar).
        ];
    }

    public function mostrarTablaMultiplicar($numero) //3. Creando la función del filtro.
    {
        $tabla = "Tabla del $numero: ";
        for ($i = 0; $i <= 10; $i++) {
        	$tabla.=" | " . "$i x $numero = " . ($i * $numero);
        }  
        return $tabla;
    }
}
