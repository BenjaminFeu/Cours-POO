<?php

// -> Singleton.class.php

// Design Pattern : Un design pattern est une solution en réponse à un problème rencontré par plusieurs développeurs. 
//C'est ce qu'on appelle singleton, c'est la réponse à la question : Comment puis-je créer une classe qui ne soit instanciable qu'une seule fois ?
// (par exemple pour avoir une seule connexion à la BDD).

class Singleton //créer une classe qui ne pourra être instanciée qu'une seule fois. 
{
	private static $instance = NULL; 
	private function __construct(){} // La classe n'est pas instanciable car __construct est private. 
	private function __clone(){} // l'objet n'est pas clonable car __clone() est private. 
	public static function getInstance() {
		if(is_null(self::$instance)) { //si $instance est nul ($instance sera nul seulement la première fois), alors on y met un objet de la class Singleton. 
			self::$instance = new Singleton; 
			// self::$instance = new self; 

		}
		return self::$instance; //Dans tous les cas on retourne l'objet de la classe Singleton. On retourne toujours le même objet. 


	}
	

}

//-----------
// $objet = new Singleton; //Impossible !! 

$objet = Singleton::getInstance();
var_dump($objet);
$objet2=Singleton::getInstance();
var_dump($objet2);

/*
Singleton est un design pattern
Dans notre exemple, $ôbjet et $oibjet2 représentent le même objet ayant la référence #1. 
On peut notamment utiliser le singleton pour s'assurer qu'il y ait qu'une seule connexion à la BDD dans toute notre application afin d'assurer la sécurité. 
*/
