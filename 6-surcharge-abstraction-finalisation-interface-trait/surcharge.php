<?php
	//06-surcharge-abstraction-finalisation-interface-trait
		//->surcharge.php

	//Surcharge : Ou "Override" permet de modifier le comportement d'une méthode héritée et d'y apporter des traitements supplémentaires. 
	//surcharge =/= (différent de) rédéfinition. 

class A 
{
	public function calcul() {
		return 10;
	}
}

//------
class B extends A 
{
	public function calcul() {
		//return 15. Return 10 + 5.

		return parent::calcul() + 5; 
		//Je n'utilise pas $this -> car cela aurait un effet récursif. 
		//$this -> calcul() signifiant la fonction dans laquelle je suis 
		//parent:: fonctionne pour appeler une méthode d'une classe partente lors d'une surcharge. 
		//self:: ne fonctionnerait pas non plus car ferait appel à un élément static de la classe dans laquelle je suis. 
	}
}