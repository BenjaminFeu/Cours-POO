<?php 
//06-surcharge-abstraction-finalisation-interface-trait
	//->trait.php


//fonctionne seulement depuis php 5.4, sinon ERREUR. 
trait TPanier //Par convention un trait se nomme comme une classe (1ere lettre maj) + devant un t
{
	public $nbProduit = 1;

	public function affichageProduits() {
		return "Affichage des produits !";
	}

}

//---------------
trait TMembre
{
	public function affichageMembres() {
		return "Affichage des membres !";
	}
}

//------------------
class Site
{
	use TPanier, TMembre;
}

//-----------------------
$site = new Site;
echo $site -> affichageProduits() . "<br />";
echo $site -> affichageMembres() . "<br />";



