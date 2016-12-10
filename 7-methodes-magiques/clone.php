<?php 

//07-methodes-magiques
	//->clone.php

class Ecole {
	public $nom="WF3";
	public $cp = 75;
	public function __clone() {
		//un clone peut se faire sans déclarer cette fonction. 
		$this->cp = 75004;
		//Cette fonction s'execute sur l'objet cloné. 
	}
}

//----------------------------------------------------------------
$ecole1 = new Ecole;
$ecole1 -> cp = 94;
var_dump($ecole1); //objet[1]

$ecole2 = new Ecole;
var_dump($ecole2); //objet[2]

$ecole3 = $ecole1;
var_dump($ecole3); //object [1] : transmission de référence (même objet). 
$ecole3 -> cp = 93;
var_dump($ecole1); //object[1] cp : 93

$ecole4 = clone $ecole2; 
var_dump($ecole4); //object[]
$ecole2 -> cp=92;
var_dump($ecole2);
var_dump($ecole4);


