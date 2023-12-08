<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

//Los filtros Twig permite ejecutar funciones en cualquier archivo Twig de la aplicaci�n Symfony.
class MiFiltroExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('multiplicar', [$this, 'mostrarTablaMultiplicar']), //1. Indicando el nombre de la tuber�a que ejecuta el m�todo (En el Array se identifica el m�todo a ejecutar).
        ];
    }

    public function getFunctions(): array
    {
        return [
        		new TwigFunction('multiplicar', [$this, 'mostrarTablaMultiplicar']), //2. Indicando el nombre de la funci�n que ejecuta el m�todo (En el Array se identifica el m�todo a ejecutar).
        ];
    }

    public function mostrarTablaMultiplicar($numero) //3. Creando la funci�n del filtro.
    {
        $tabla = "Tabla del $numero: ";
        for ($i = 0; $i <= 10; $i++) {
        	$tabla.=" | " . "$i x $numero = " . ($i * $numero);
        }  
        return $tabla;
    }
}
