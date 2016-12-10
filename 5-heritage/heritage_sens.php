<?php 
// 05-heritage
	//->heritage_sens.php. 

//Transitivité : Si B héirate de A et que hérite B alors, C hérite de A. 

class A
{
	public function test(){
		return "test";
	}

	protected function test4(){
		return " + test 4";
	}
}

class B extends A
{
	public function test2(){
		return "test2";
	}
}

class C extends B
{
	public function test3(){
		return "test3" . $this -> test4();
	}
}

//----
$c = new C;
echo $c -> test() . "<br />"; //méthode de A accessible par C (héritage)
echo $c -> test2() . "<br />"; //méthode de B accessible par C (héritage)
echo $c -> test3() .  "<br />"; //méthode de C accessible par C (héritage)
var_dump (get_class_methods($c)); //Affiche les 3 méthodes. 


/*
Commentaires : 
	Si B hérite de A
	 Et si C hérite de B
	  Alors..... Ca hérite de A (indirectement)

	Les méthodes protected de A sont accesibles dans C (pourtant l'héritage est indirect et passe par B). 
	Rappel : Les éléments protected sont accessibles dans la classe où ils ont été déclarés ET DANS LES 
	classes héritières. 

	L'héritage est :
		-non reflexif : Class D extends D : Une classe ne peut pas hériter d'elle même. 
		-non symétrique : Ce n'est pas parce que E extends F que F extends E automatiquement, ne pas essayez d'utiliser un élément de F dans E. 
		-sans cycle : 
			si Class X extends Y
			Alors Class Y enstends X est impossible
		-Unique : Class N extends M, O : pas d'héritage multiple en PHP. 	

*/	  
