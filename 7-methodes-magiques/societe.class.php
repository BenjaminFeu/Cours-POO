<?php

// 07-methodes-magiques
	//->Societe.class.php

// les méthodes magiques s'executent automatiquement

class Societe 
{
	public $adresse;
	public $ville;
	public $cp;

	public function __contruct() {}

	public function __set($nom, $valeur) {
		echo "la propriété $nom n'existe pas dans l'objet. La valeur n'a donc pas pu être affectée !";
	} //Se déclenche lorsque l'on tente d'affecter une valeur à une propriété qui n'existe pas. PHP est permissif, sans cette méthode magique, on 	peut créer des propriétés à la volée.

		public function __get($nom) {
			echo "La propriété $nom n'existe pas dans cet objet !";
		} // __get() se déclenche lorsque l'on tente d'afficher une propriété qui n'existe pas. 

		public function __call($nom, $arguments) {
			echo "la methode $nom n'existe pas dans l'objet. les arguments étaient : " . implode('-'; $arguments);
		} //se déclenche lorsqu'on tente d'exécuter une méthode qui n'existe pas. 
}

/*
__callstatic () : même chose que call mais pour les méthodes statiques. 
__destruct () : s'execute à la fin du script. Intéressant pour fermer la connexion à la base de données. 
__toString() : se déclenche lorsqu'on tente d'afficher un objet comme un chaine de caractère. 
__wakeup(), __sleep(), __invoke(), __clone()... 
*/

}



//-------------
$societe = new Societe;
$societe -> nom = "MaSociete";
echo "<br />";
echo $societe -> codePostal;
var_dump($societe);