<?php 

// -> Etudiant.class.php

class Etudiant 
{
	private $prenom;

	//Constructeur : 
	public function __construct($arg){ //contruct() est une fonction magique qui séxecute lors de l'instanciation.
		// $this -> prenom = $arg;
			$this -> setPrenom($arg);

		}


	public function setPrenom($prenom) {
		$this -> prenom = $prenom;

	}

	public function getPrenom() {
		return $this -> prenom;
	}

}

//Exercice : Essayer de renseigner la propriété prenom sans changer l'extérieur de la classe. 

//-------------
$etudiant = new Etudiant ("Benjamin");
echo "Prenom : " . $etudiant -> getPrenom (); 
