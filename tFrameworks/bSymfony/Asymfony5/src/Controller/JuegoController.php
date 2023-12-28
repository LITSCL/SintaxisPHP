<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType; //Nesesario para crear formularios con Inputs.
use Symfony\Component\Form\Extension\Core\Type\SubmitType; //Necesario para crear formularios con botones.
use Symfony\Component\HttpFoundation\Request; //Necesario para poder recibir los datos desde un formulario (GET, POST).
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Juego;

use App\Form\JuegoType; //Importando el formulario abstraido.

use Symfony\Component\Validator\Validation; //Necesario para utilizar la clase Validation.
use Symfony\Component\Validator\Constraints\Email; //Necesario para que la clase Validation pueda validar Emails.

class JuegoController extends AbstractController
{
    #[Route("/juego", name: "juego")]
    public function index(): Response
    {
        return $this->render("juego/index.html.twig", [
            "controller_name" => "JuegoController"
        ]);
    }
    
    //FORMULARIO: Método que configura el formulario y renderiza la vista.
    public function formularioCrearJuego(Request $request)
    {
    	$juego = new Juego();
    	$formulario = $this->createFormBuilder($juego) //1. Indicando que es un formulario para la clase "Juego".
			//->setAction($this->generateUrl("juego_crear_juego")) //2. Indicando a donde envía los datos el formulario (Los envía a la url especificada por parámetro).
			->setMethod("POST") //3. Indicando el método por el que viajan los datos del formulario.
			->add("nombre", TextType::class, ["label" => "Nombre"]) //4. Añadiendo un campo input text.
			->add("year", TextType::class, ["label" => "Year"]) //5. Añadiendo un campo input text.
			->add("boton", SubmitType::class, ["label" => "Crear", "attr" => ["class" => "btn btn-success"]]) //6. Añadiendo el botón del formulario.
			->getForm(); //7. Generar el formulario en base a todas las configuraciones anteriores.
    	
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    	
		//NOTA: Este bloque solo es necesario si se desea controlar el formulario en este mismo método (CUANDO NO SE UTILIZA EL METODO "setAction").
		
		$formulario->handleRequest($request); //1. Seteando el objeto que es representado por el formulario.
		
		if ($formulario->isSubmitted() && $formulario->isValid()) { //2. Verificando si se envió el formulario.
			$entityManager = $this->getDoctrine()->getManager();

			$entityManager->persist($juego);

			$entityManager->flush(); //3. Almacenando el registro en la base de datos.
			
			$session = new Session(); 
			$session->getFlashBag()->add("mensaje", "Juego creado exitosamente"); //4. Generando una sesión flash.
			
			return $this->redirectToRoute("juego_formulario_crear_juego"); //5. Redireccionando nuevamente al formulario (Para que se vacíe).
		}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
					       
		return $this->render("juego/formulario_crear_juego.html.twig", ["formulario" => $formulario->createView()]); //8. Renderizar una vista y enviar el formulario.
    }
    	
    //FORMULARIO: Método que recibe los datos del formulario.
    public function crearJuego(Request $request)
    {
    	var_dump($request->get("form"));
    	die();
    }
    
    //FORMULARIO: Integrando formulario desde una clase (Clase Type).
    public function formularioAbstraido(Request $request)
    {
    	$juego = new Juego();
    	$formulario = $this->createForm(JuegoType::class, $juego);
    	
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    	
    	//NOTA: Este bloque solo es necesario si se desea controlar el formulario en este mismo método (CUANDO NO SE UTILIZA EL METODO "setAction").
    	
    	$formulario->handleRequest($request); 
    	
    	if ($formulario->isSubmitted() && $formulario->isValid()) { 
    		$entityManager = $this->getDoctrine()->getManager();
    		
    		$entityManager->persist($juego);
    		
    		$entityManager->flush(); 
    		
    		$session = new Session();
    		$session->getFlashBag()->add("mensaje", "Juego creado exitosamente");
    		
    		return $this->redirectToRoute("juego_formulario_crear_juego");
    	}
    	
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    	
    	return $this->render("juego/formulario_crear_juego.html.twig", ["formulario" => $formulario->createView()]);
    }
    
    public function validarCorreo($correo)
    {
    	//1. Crear una instacia de Validation (Necesaria para poder validar datos).
    	$validador = Validation::createValidator(); 
    	
    	//2. Crear una variable y validar el dato (Al validar se retorna una lista con los errores).
    	$errores = $validador->validate($correo, [new Email()]); //El método "validate" recibe como primer parámetro el valor a validar y como segundo parámetro un Array con los tipos de validaciones que se desean aplicar al valor.
    	
    	//3. Verificar si hay errores en la validación.
    	if (count($errores) != 0) {
    		echo "El correo NO es valido";
    		
    		foreach ($errores as $error) {
    			echo "<br/>" . $error->getMessage() . "<br/>";
    		}
    	}
    	else {
    		echo "El correo SI es valido";
    	}
    	
    	die();
    }
    
    public function save() //Guardar registro en la base de datos.
    {
    	//1. Crear el Entity Manager (Necesario para alterar datos en la BD con el ORM).
    	$entityManager = $this->getDoctrine()->getManager();
    	
    	//2. Crear el objeto y settear los datos.
    	$juego = new Juego();
    	$juego->setNombre("Dead Space 1");
    	$juego->setYear(2008);
    	
    	//3. Persistir el objeto en el ORM (Se almacena en memoria cache).
    	$entityManager->persist($juego);
    	
    	//4. Persistir el objeto almacenado en el cache del ORM en la base de datos.
    	$entityManager->flush();
    	
    	return new Response("Juego almacenado correctamente con el ID: " . $juego->getId()); //Al hacer el flush, el objeto completa sus atributos (En este caso el id es generado por el dbms).
    }
    
    public function find($id) //Buscar un registro en la base de datos.
    {	
    	//1. Crear el repositorio del modelo (Permite acceder a datos de la tabla mapeada).
    	$repositorioJuego = $this->getDoctrine()->getRepository(Juego::class);
    	
    	//2. Buscar el objeto en la base de datos.
    	$juego = $repositorioJuego->find($id); //El método "find" permite obtener un registro en base a su clave primaria.
    	
    	//3. Comprobar si existía el registro.
    	if (!$juego) {
    		$mensaje = "El juego que buscas no existe";
    	}
    	else {
    		$mensaje = "El juego que buscas es: " . $juego->getNombre();
    	}	
    	
    	return new Response($mensaje);
    }
    
    public function findMejorado(Juego $juego) //Al colocar un objeto mapeado como parámetro de la función, se realiza un find en base a la clave primaria entregada en la petición, por consecuente se obtiene el objeto desde la base de datos.
    {
    	if (!$juego) {
    		$mensaje = "El juego que buscas no existe";
    	}
    	else {
    		$mensaje = "El juego que buscas es: " . $juego->getNombre();
    	}
    	
    	return new Response($mensaje);
    }
    
    public function findAll() //Obtener todos los registros de la base de datos en base a una condición.
    {
    	//1. Crear el repositorio del modelo (Permite acceder a datos de la tabla mapeada).
    	$repositorioJuego = $this->getDoctrine()->getRepository(Juego::class);
    	
    	//2. Traer y almacenar todos los registros.
    	$juegos = $repositorioJuego->findBy(["year" => 2008], ["id" => "DESC"]); //El método "findBy" recibe como primer parámetro un array, en el cual se debe indicar los atributos y los valores, en base a lo anterior se buscan los registros en la base de datos (Similar a una clausula WHERE en SQL). También puede recibir un segundo array con indicaciones de ordenamiento.
    	
    	return $this->render("juego/juegos_encontrados.html.twig", [
    			"juegos" => $juegos
    	]);
    }
    
    public function getAll() //Obtener todos los registros de la base de datos.
    {
    	//1. Crear el repositorio del modelo (Permite acceder a datos de la tabla mapeada).
    	$repositorioJuego = $this->getDoctrine()->getRepository(Juego::class);
    	
    	//2. Traer y almacenar todos los registros.
    	$juegos = $repositorioJuego->findAll();
    	
    	return $this->render("juego/juegos.html.twig", [
    			"juegos" => $juegos
    	]);
    }
    
    public function update($id) //Actualizar un registro en la base de datos
    {
    	//1. Crear el Entity Manager (Necesario para alterar datos en la BD con el ORM).
    	$entityManager = $this->getDoctrine()->getManager();
    
    	//2. Crear el repositorio del modelo (Permite acceder a datos de la tabla mapeada).
    	$repositorioJuego = $this->getDoctrine()->getRepository(Juego::class);
    	
    	//3. Verificar si existe el registro que se desea actualizar.
    	$juego = $repositorioJuego->find($id);
    	
    	if (!$juego) {
    		$mensaje = "El juego no existe";
    	}
    	else {
    		//4. Modificar el objeto obtenido anteriormente.
    		$juego->setNombre("Elden Ring");
    		$juego->setYear("2022");
    		
    		//5. Persistir el objeto en el ORM (Se almacena en memoria cache).
    		$entityManager->persist($juego);
    		
    		//6. Persistir el objeto almacenado en el cache del ORM en la base de datos.
    		$entityManager->flush();
    		
    		$mensaje = "Registro modificado correctamente";
    	}
    	return new Response($mensaje);
    }
    
    public function delete(Juego $juego) //1. Obtener el objeto desde la base de datos.
    { 
    	//2. Crear el Entity Manager (Necesario para alterar datos en la BD con el ORM).
    	$entityManager = $this->getDoctrine()->getManager();
    	
    	//3. Borrar el juego en el ORM (El borrado se aplica a nivel de cache).
    	$entityManager->remove($juego);
    		
    	//4. Borrar el juego de la base de datos.
    	$entityManager->flush();
    		
    	$mensaje = "Juego eliminado correctamente";
	
    	return new Response($mensaje);
    }
    
    public function customQuery()
    {	
    	//1. Consultas presonalizadas con (QUERY BUILDER).
    	
    	//1.1 Crear el repositorio del modelo (Permite acceder a datos de la tabla mapeada).
    	//$repositorioJuego = $this->getDoctrine()->getRepository(Juego::class);
    	
    	//1.2 Crear la query.
    	//$query = $repositorioJuego->createQueryBuilder("j")->andWhere("j.year = 2022")->orderBy("j.id", "DESC")->getQuery();
    	
    	//1.3 Ejecutar la query.
    	//$resultado = $query->execute();
    	
    	//2. Consultas personalizadas con (DQL -> DOCTRINE QUERY LANGUAGE).
    	
    	//2.1 Crear el Entity Manager (Necesario para alterar datos en la BD con el ORM).
    	//$entityManager = $this->getDoctrine()->getManager();
    	
    	//2.2 Definir la consulta DQL.
    	//$dql = "SELECT j FROM App\Entity\Juego j WHERE j.year = 2022 ORDER BY j.id DESC";
    	
    	//2.3 Crear la query en base a la consulta anteriormente definida.
    	//$query = $entityManager->createQuery($dql);
    	
    	//2.4 Ejecutar la query.
    	//$resultado = $query->execute();
    	
    	//3. Consultas personalizadas con (SQL).
    	
    	//3.1 Obtener la conexión a la base de datos.
    	//$conexion = $this->getDoctrine()->getConnection();
    	
    	//3.2 Definir la sentencia SQL.
    	//$sql = "SELECT * FROM juego WHERE year = 2022 ORDER BY id DESC";
    	
    	//3.3 Preparar la query.
    	//$query = $conexion->query($sql);
    	
    	//3.4 Ejecutar la query.
    	//$resultado = $query->fetchAll(); //El método "fetchAll" ejecuta la query y los resultados los convierte en un array asociativo.
    	
    	//4. Consultas personalizada utilizando el patrón repositorio (Similar a patrón DAO).
    	
    	//4.1 Crear el repositorio del modelo (Permite acceder a datos de la tabla mapeada).
    	$repositorioJuego = $this->getDoctrine()->getRepository(Juego::class);
    	
    	//4.2 Almacenar en una variable el retorno de un método del repositorio.
    	$resultado = $repositorioJuego->findByYear("2022");
    	
    	return new Response(var_dump($resultado));
    }
}
