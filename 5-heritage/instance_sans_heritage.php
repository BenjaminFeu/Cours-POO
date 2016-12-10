<?php 
// 05-heritage
	//->instance_sans_heirtage.php

class A 
{
	public function direBonjour(){
		return "Bonjour !";
	}
}

//--------------------------

class B  // la class B n'hérite pas de A mais elle pourrait hériter de classes C et D par exemple. 
{
	public $maVariable; // objet de la classe A
	public function __construct() {
		$this -> maVariable = new A; 
	}

}

//----------
$b = new B; //instance de la classe. Cela déclenche l'exécution de la fonction construct. 
// $b -> maVariable est un objet de la Classe A. 

echo $b -> maVariable -> direBonjour(); //Il s'agit d'une instance sans héritage. 

/*
Commentaires : 
	Nous avons un objet dans un objet. 
	L'intérêt d'avoir une instance sans héritage (récupérer un objet dans la propriété d'une classe) est de pouvoir hériter d'une classe mère d'un côté, tout en ayant la possibilité de récupérer les élements d'une autre classe en même temps. (exemple : ProduitModel Extends Model, mais qui récupère aussi un objet Mysqli pour faire des requêtes.)

*/ 