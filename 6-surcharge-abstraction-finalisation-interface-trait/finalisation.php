<?php 

//06-surcharge-abstraction-finalisation-interface-trait
	//finalisation.php

final class Application // final indique que la classe ne pouura pas être héritée. 
{
	public function lancementApplication() {
		return "l'appli se lance ! ";
	}
}
//----------------------------------------------
class Extension extends Application{} // Erreur, on ne peut pas hériter. 
//----------------------------------------------

class Application2
{
	final public function lancementApplication() {
		return "l'appli se lance ! ";
	}
}

class Extension2 extends Application2
{
	public function lancementApplication2() {//Erreur, on ne peut pas redéfinir ou surcharger une méthode "final".

	}
}

/*
Commentaires : 
	-une classe finale ne peut pas être héritée
	-une classe finale aura forcément des méthodes "final", donc pas nécessaire de mettre le mot clé "final"
	-Une classe finale peut contenir des méthodes normales.
	-Une classe finale peut être instanciée
	-Une méthode finale peut être présente dans une classe normale. 
	-L'intérêt de créer une méthode  est que son comportement ne puis pas $etre modifiée. 

*/	
