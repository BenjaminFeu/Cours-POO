<?php
// 05-heritage
	//->animal.php

class Animal
{
	protected function deplacement(){
		return "je me déplace";
	}
	public function manger(){
		return "je mange chaque jour";
	}
}

//----
class Elephant extends Animal
{	

	public function quiSuisJe(){
		return "Je suis un éléphant et " . $this -> deplacement(); //J'utilise la fonction déplacement() qui est protected et don accessilbe dans les classes héritières. 
	}
}
//--
class Chat extends Animal
{
	public function quiSuisJe() {
		return "Je suis un chat !" ;  
	}

	public function manger() { //rédifinition de fonction. Différent de la surcharge. 
		return "Je mange... comme un chat";
	}
}
//-------
$eleph = new Elephant;
echo $eleph -> manger() . "<br />";
echo $eleph -> quiSuisJe() . "<hr />";

//--------------
$chat = new Chat;
echo $chat -> manger() . "<br />";
echo $chat -> quiSuisJe() . "<hr />";

/* 
Commentaires : 
	Lorsqu'une classe hérite d'un élément, on l'utilise à l'intérieur de la classe avec $this->comme s'il avait été déclaré dans la classe
	(safu si static ou private).

	Lorsqu'on fait appel à une méthode depuis une classe fille (héritière) l'interpréteur ca dans un premier temps regarder dans la classe si la fonction existe, sinon il va regarder dans la classe mère. C'est ainsi que fonction la redéfinition. 



*/

