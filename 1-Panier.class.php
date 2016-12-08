<?php
// 01-class-objet-instance-visibilite
// 	->classPanier.php


class Panier
{//Une classe est un regroupement de propriété de fonction et de propriétés
	public $nbProduit; //Propriété (variable)
	// Variable = propriété
	//fonction = méthode



	public function ajouterArticle() {
		//traitement de ma fonction
		return 'L\' article a été ajouté !';  

	}

	protected function retirerArticle () {
		//traitement de ma fonction
		return 'L\'article a été retiré' ;

	}

	private function affichageArticle() {
		//traitements de ma fonction
		return 'Voici les articles du panier';


	}
}

//---------------------
$panier1 = new Panier; // instanciation de la classe Panier. (création d'un objet de la classe Panier). 

var_dump($panier1); //var_dump mieux pour les objets
var_dump(get_class_methods($panier1)); // Permet de voir les méthodes (public) d'un objet. 

$panier1 -> nbProduit=5;  //la fleche permet d'appeler des methodes
var_dump($panier1);

echo 'il y a ' . $panier1 -> nbProduit . ' produits dans le panier<br/>';
echo 'Panier : ' . $panier1 -> ajouterArticle() . '<br/>' ; //Methode est public : OK pa de problème. 

// echo 'Panier : ' . $panier1 -> retirerArticle() . "<br />"; //Methode protected : ERREUR. L'élement est accessible uniquement dans la classe où il a été déclaré ainsi que dans les classes héritières. 

// echo 'Panier : ' . $panier1 -> affichageArticle() . "<br />"; // Methode protected : ERREUR. L'élement est accessible uniquement dans la classe où il a été déclaré. 

$panier2= new Panier;
var_dump($panier2);

/*
Commentaires : 
	Niveau de visiblité : 
		Public : acessible de partout
		protected : accessible depuis la classe où l'élément a été crée et égakelemnt depuis les classes héritières. 
		private : Acessible Uniquement depuis la calsse où l'élément a été crfée. 

		Divers : "new" est un mot clé qui permet de créer un objet d'une classe. On parle d'instanciation. 
		Une classe peut produire plusieurs objets. 
*/


