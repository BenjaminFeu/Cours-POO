<?php 

//03-manipulation-type-argument
	//->exercice3.php
/*
1-création d'un véhicule
2-attribuer le nombre de litre d'essence dans le véhicule
3-afficher le nombre de litres d'essence dans le véhicule
4-La capacité max du réservoir du véhicule est de 50l(50)
5-création d'une pompe
6-attrivbuer un nombre de litre d'essence dans la pompe
7-afficher le nombre de litres d'essence dans la pompe
8-la pompe donne de l'essence au véhicule et fait le plein
9-afficher le nombre delitre d'essence dans le véhicule
10-afficher le nombre de litre d'essences dans la pompe après ravitaillement
*/

class Vehicule
{
	private $litreEssence;
	private $reservoir; //capacite max du réservoir de la voiture. 

	//création d'un constructeur
	// public function __construct($arg1, $arg2) {

	// 	$this  -> setLitreEssence($arg1);
	// 	$this  -> setReservoir($arg2);

	// }


	public function setLitreEssence($litre){
		$this -> litreEssence = $litre;
		
	}

	public function setReservoir($litre) {
		  $this -> reservoir = $litre;
	}

	public function getLitreEssence() {
		
		return $this -> litreEssence;
	}

	public function getReservoir() {
		return $this -> reservoir; 
	}

}	

//---

class Pompe
{
	// public function __construct($arg) {

	// 	$this  -> setLitreEssence($arg);
	// 	// $this  -> setReservoir($arg);

	// }

	private $litreEssence;
	public function setLitreEssence($litre) {
		$this -> litreEssence = $litre;
	}

	public function getLitreEssence() {
		return $this -> litreEssence;
	}

	public function donneEssence(Vehicule $v)
	{
		$this -> setLitreEssence($this -> getLitreEssence() - ($v -> getReservoir() - $v -> getLitreEssence()));
		//755 = 800 - (50-5) = 800 - 45 = 755

		// $objet -> setLitreEssence();
		//modifier le contenu dans la pompe qui sera égal à :
		//nouveau contenu dans la pompe = ancien contenu dans la pompe - (capacité max du véhicule - contenu de la pompe)
		//nouveau contenu de la pompe = 800-(50-5) = 755

		//modifier le contenu dans la véhicule : 
		//nouveau contenu dans le véhicule + capacité max du véhicule - contenu actuel du véhicule
		//nouveau contenu du véhicule = 5 + (50-5)
		$v -> setLitreEssence($v -> getLitreEssence() + ($v -> getReservoir() - $v -> getLitreEssence()));
	}
}

//----------

$vehicule = new Vehicule;
$vehicule -> setLitreEssence(5);
$vehicule -> setReservoir(50);
echo "Nombre de litre de la voiture " . $vehicule  -> getLitreEssence() . "<br />";
echo "Capacité maximum du reservoir " . $vehicule -> getReservoir() . "<br />";

$pompe = new Pompe;
$pompe -> setLitreEssence(800);
echo "Nombre de litre dans la pompe " . $pompe  -> getLitreEssence() . "<br />";
//----
$pompe -> donneEssence($vehicule);
echo "Le véhicule contient : " . $vehicule -> getLitreEssence() .  'litre' . "<br />";
echo "la pompe contient : " . $pompe -> getLitreEssence() . 'l' . '<br />' ;