<?php

//09-namespaces 
	//->appel.php 

namespace General;

require("espace1.php");
require("espace2.php");

//use Espace1;
//use Espace2;

Use Espace1, Espace2;

$c = new Espace1\A;
echo $c -> test1() . "<br />";

$c = new Espace2\A;
echo $c -> test2();