<?php 
//06-surcharge-abstraction-finalisation-interface-trait
	//->interface.php 
interface Mouvement
{
	public function demarrer(); //dans une interface, une méthode n'a pas de contenu. 

}

class Bateau implements Mouvement //possibilite d'extends une class et implémenter une ou plusieurs interfaces. On ne peut pas extends une interface. 
{
	public function demarrer() { //Obligation de définir la méthode. Sinon cela provoque une erreur. 

	}
}

//-------------
class Avion implements Mouvement 
{
	public function demarrer() { //Obligation de définir la méthode. Sinon cela provoque une erreur. 
	}
}

/*
Commentaires : 
	Une interface est liste de méthodes (sans contenu) qui permet de garantir que toute classe qui implemente l'interface contiendra les méthodes de l'interface avec la même signature (même nom). C'est une sorte de contrat qui garantie un minimum de méthode avec la bonne. C'est une sorte de contrat  qui garantie un minimum de méthode avec la bonne orthographe. 

	-Une interface n'est pas instanciable. 
	-Un bateau hérite de Vehicule
	-Un avion hérite de Véhicule
		Avion, et bateau n'héritent pas de Mouvement, c'est juste un point commun entre eux. 
	-Il est possible d'implémenter plusieurs interfaces en même temps. 
	-Il est possible d'hériter d'une classe et d'implémenter une interface en même temps. 
	-Les fonctions dans une interface sont forcément public (sinon elles ne pourraient pas être redéfinies). 

*/	