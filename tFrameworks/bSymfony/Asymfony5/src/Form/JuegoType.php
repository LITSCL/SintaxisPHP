<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType; //Nesesario para crear formularios con Inputs.
use Symfony\Component\Form\Extension\Core\Type\SubmitType; //Necesario para crear formularios con botones.

class JuegoType extends AbstractType 
{
	public function buildForm($builder, $options)
	{
		$builder->setMethod("POST")
			->add("nombre", TextType::class, ["label" => "Nombre"]) 
			->add("year", TextType::class, ["label" => "Year"])
			->add("boton", SubmitType::class, ["label" => "Crear", "attr" => ["class" => "btn btn-success"]]);
	}
}
