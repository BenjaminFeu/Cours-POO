<?php
// -> Membre.class.php
// Exercice : Au veu de cette classe vbous allze esssayer de rensiegner les propriétées pseudo et mdp et de les afficher/ 

class Membre

{
	private $pseudo;
	private $mdp;

	public function setPseudo($pseudo) {
		$this -> pseudo = $pseudo; 

	}

	public function getPseudo() {
		return $this -> pseudo;

	}

	public function setMdp($mdp) {
		$this -> mdp = $mdp; 

	}

	public function getMdp() {
		return $this -> mdp;

	}


}


//-------

$membre = new Membre;
$membre -> setPseudo("Benji"); 

$membre -> setMdp("lamalice");  

echo "Le pseudo est : " . $membre->getPseudo() . " et son mot de passe est : " . $membre->getMdp() . "<br />";  

