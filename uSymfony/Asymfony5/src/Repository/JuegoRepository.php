<?php

namespace App\Repository;

use App\Entity\Juego;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class JuegoRepository extends ServiceEntityRepository //Todas las clases repositorio deben extender de "ServiceEntityRepository".
{
	
	public function __construct(ManagerRegistry $mr)
	{
		parent::__construct($mr, Juego::class);
	}
	
	//El patrón repositorio es similar al patrón DAO (Solo se debe usar para crear métodos findBy).
	
	public function findByYear($year)
	{
		//1. Crear la query.
		$query = $this->createQueryBuilder("j")->andWhere("j.year = $year")->orderBy("j.id", "DESC")->getQuery();
		
		//2. Ejecutar la query.
		$resultado = $query->execute();
		
		//3. Retornar el resultado de la consulta.
		return $resultado;
	}
	
}