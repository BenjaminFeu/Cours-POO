<?php 
//06-surcharge-abstraction-finalisation-interface-trait
	// ->abstraction.php 
abstract class Joueur 
{
	public function seConnecter() {
		return $this -> EtreMajeur();
	}

	abstract public function EtreMajeur(); //Une fonction abstraite n'a pas de contenu. (pas de corps). 
	abstract public function Devise();

}	
//----------------------------
class Joueurfr extends Joueur
{
	public function EtreMajeur() {
		return 18;
	}
	public function Devise() {
		return '€';
	}


}
//----------------------------
class JoueurUs extends Joueur 
{
	public function EtreMajeur() {
		return 21;
	}
	
	public function Devise() {
		return '$';
	}	

}


//----------
//$joueur = new Joueur; //Erreur : une classe abstraite ne peut pas être instanciée. 

$joueurFr = new JoueurFr;
echo $joueurFr -> seConnecter() . "<hr />";

$joueurUs = new JoueurUs;
echo $joueurUs -> seConnecter() . "<hr />";


/*
Commentaires : 
	-Une classe abstraite ne peut pas être instanciée
	-les méthodes abstraites n'ont pas de contenu
	-lorsqu'on hérite d'une méthode abstraite, on doit obligatoirement la redéfinir
	-Pour déclarer une méthode abstraite, la classe doit être abstraite. 
	-Une classe abstraite peut contenir des méthodes normales. 

Le dévelopeeur qui écrit la classe abstraite est au coeur de l'application, et va obliger les autres développeurs à redéfinir des méthodes
(abstract) afin d'assurer le bon fonctionnement de l'application. Il impose de bonnes contraintes !!
*/	