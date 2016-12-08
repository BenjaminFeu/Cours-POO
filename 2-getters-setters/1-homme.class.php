<?php 
// 02-getter-setter-constructeur-this
	// -> Homme.class.php


class Homme 
{
	private $prenom;
	private $nom;

	public function setPrenom($prenom) {

		if(is_string($prenom)){
		$this -> prenom = $prenom; //$this représente l'objet dans lequel j'utilise la fonction. 

		}

	}

	public function getPrenom() {
		return $this -> prenom;
	}

	public function setNom($nom) {

		if(is_string($nom)){
		$this -> nom = $nom; //$this représente l'objet dans lequel j'utilise la fonction. 

		}

	} 

	public function getnom() {
		return $this -> nom;
	}

}


//-------------
$homme = new Homme; 
$homme -> setPrenom("Benjamin");
echo "Prenom : " . $homme -> getPrenom() . '<br />';

$homme -> setNom("Feurgard");
echo "Nom : " . $homme->getNom() . "<br />";