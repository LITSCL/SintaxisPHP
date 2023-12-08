<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')] //Asignando la ruta al controlador.
    public function index(): Response
    {
        return $this->render("home/index.html.twig", [
            "controller_name" => "HomeController",
        	"saludar" => "Hola Mundo" //Enviando una variable a la vista.
        ]);
    }
    
    public function animal($nombre)
    {
    	$titulo = "Bienvenido a la pagina de Animal";
    	return $this->render("home/animal.html.twig", ["titulo" => $titulo, "nombre" => $nombre]);
    }
    
    public function animales()
    {
    	$titulo = "Bienvenido a la pagina de Animales";
    	$animalesTerrestres = array("Perro", "Gato", "Huron", "Erizo");
    	$animalesVoladores = array("pajaro1" => "Paloma", "pajaro2" => "Picaflor", "pajaro3" => "Gaviota", "pajaro4" => "Condor");
    	return $this->render("home/animales.html.twig", ["titulo" => $titulo, "animalesTerrestres" => $animalesTerrestres, "animalesVoladores" => $animalesVoladores]);
    }
    
    public function pelicula($nombre)
    {
    	$titulo = "Bienvenido a la pagina de Pelicula";
    	return $this->render("home/pelicula.html.twig", ["titulo" => $titulo, "nombre" => $nombre]);
    }
    
    public function persona($nombre, $apellido, $edad)
    {
    	$titulo = "Bienvenido a la pagina de Persona";
    	return $this->render("home/persona.html.twig", ["titulo" => $titulo, "nombre" => $nombre, "apellido" => $apellido, "edad" => $edad]);
    }
    
    public function redirigir()
    {
    	//return $this->redirectToRoute("index"); //El método "redirectToRoute" permite redirigir a una ruta utilizando su nombre.
    	//return $this->redirectToRoute("persona", ["nombre" => "Esteban", "Apellido" => "Alvarez", "edad" => "23"]); //El método "redirectToRoute" también permite enviar datos a la ruta mediante un array asociativo.
    	return $this->redirect("https://www.google.com/"); //El método "redirect" permite redirigir a una URL especificada por parámetro.
    }
    
    public function plantilla()
    {
    	return $this->render("home/plantilla.html.twig");
    }
    
    public function variable()
    {
    	return $this->render("home/variable.html.twig");
    }
    
    public function utilizandoInclude()
    {
    	return $this->render("home/utilizando_include.html.twig");
    }
    
    public function filtros()
    {
    	return $this->render("home/filtros.html.twig");
    }
}
