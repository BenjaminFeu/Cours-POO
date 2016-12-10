<?php
//05-heritage
	//-> exemple_heritage.php

class Membre 
{
	public $id;
	public $pseudo;
	public $membre;

	public function __construct() {
		echo "internaute !  <hr />";
	}

	public function Inscription(){
		return "je m'inscris !";

	}

	public function seConnecter() {
		return "je me connecte !";

	}
}
//-------

class Admin extends Membre //extends = héritage. C'est comme si on faisait un cop/coll du code présent dans membre. 
{
	///propriétés et méthodes de Membre
	public function accesBackoffice(){
		return "j'ai accès au Backoffice !!";
	}

}

//----------
$admin = New Admin;
echo $admin -> inscription() . "<br />";
echo $admin -> seConnecter() . "<br />";
echo $admin -> accesBackoffice();

/*
Commentaires : 
	L'héritage est l'un des fondements de la programmation orientée objet.
	Par exemple, dans un site web, l'admin est avant tout un membre, avec les mêmes propriétés et les mêmes actions (functions),
	mais avec des possibilités supplémentaires. Il est donc naturel que l'Admin hérite des propriétés et des méthodes de "Membre".

*/
