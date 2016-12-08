<?php 

//04-constance-static-self 
	//->Maison.class.php 

class Maison
{
	public $couleur = "blanc"; //Appartient à l'objet
	public static $espaceTerrain = "500m2"; //Appartient à la classe
	private $nbPorte = 10; //Appartien à l'objet
	private static  $nbPiece = 7; // Appartient à la classe 
	const HAUTEUR = "10m"; // Appartient à la classe.

	public function getNbPorte() { 
		return $this -> nbPorte; //this fait référence à l'objet
	}

	public static function getNbPiece(){
		return self::$nbPiece; //self fait référence à la classe
	}
}

//----------------
echo "Espace terrain : " . Maison::$espaceTerrain . "<br />"; //OK ! J'appelle une propriété appartenant à la classe par ma classe.
// echo "Nombre de pièce : " . Maison::$nbPiece . "<br />"; //ERREUR : j'appelle une propriété appartenant à la classe par ma classe, mais elle est private donc jhe ne peux pas y accéder à l'extérieur de la calsse./
echo "Nombre de pièce : " . Maison::getNbPiece() . "<br />"; //OK ! 
//J'appelle un élément (méthode) appartenant à la classe par la classe. 
$maison = new Maison;
echo "Couleur : " . $maison -> couleur . "<br />"; // OK ! J'appelle une propriété appartenant à l'objet par mon objet. 
echo "Nombre de portes : " . $maison -> getNbPorte() . "<br />"; // OK ! J'appelle une propriété appartenant à l'objet par mon objet.

echo "Hauteur : " . Maison::HAUTEUR. "<br />";


