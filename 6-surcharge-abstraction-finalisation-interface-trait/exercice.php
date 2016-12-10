<?php

//06-surcharge-abstraction-finalisation-interface-trait
	//exercice.php



abstract class Vehicule
{	
	final public function demarrer() {
		return "je demarre";
	}
	abstract public function carburant(); //Une fonction abstraite n'a pas de contenu. (pas de corps). 
	public function nbTestObligatoire() {
		return 100;
	}

}

//--------
class  VehiculePeugeot extends Vehicule{
	// public function demarrer() {} ;

	public function carburant() {
		return "essence";
	}

	public function nbTestObligatoire(){
		return parent::nbTestObligatoire() + 70;
	}
}
//---
class  VehiculeRenault extends Vehicule{
	// public function demarrer() {};

	public function carburant() {
		return "diesel";
	}

	public function nbTestObligatoire(){
		return parent::nbTestObligatoire() + 30;
	}
}

$vehiculePeugeot = new VehiculePeugeot;
echo $vehiculePeugeot -> demarrer() . "<br />";
echo $vehiculePeugeot -> carburant() . "<br />";
echo $vehiculePeugeot -> nbTestObligatoire() . "<br />";

$vehiculeRenault = new VehiculeRenault;
echo $vehiculeRenault -> demarrer() . " " . $vehiculeRenault -> carburant() . "<br />";
// echo  "<br />";
echo $vehiculeRenault -> nbTestObligatoire() . "<br />";

