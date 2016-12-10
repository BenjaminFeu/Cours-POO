<?php

//10-autoload
	//->autoload.php
function inclusion_automatique($nom_de_la_classe){
	require_once($nom_de_la_classe . ".class.php");
	echo "on passe dans l'autoload (inclusion automatique) <br />";
	echo "Require ($nom_de_la_classe.class.php)<br />";
}

//------------
spl_autoload_register("inclusion_automatique");
//-----------------------
/*
	Commentaires : 
	spl_autoload_register : C'est une fonction prédéfinie qui s'exécute lorsqu'elle voit le "new". 
	Lors de l'éxécution spl_autoload_register va lancer une fonction... 
	spl_autoload_register va apporter en argument de ma fonctiok le nom de la classe (le mot qu'il a trouvé après le "new" (A, B, C, D).

*/