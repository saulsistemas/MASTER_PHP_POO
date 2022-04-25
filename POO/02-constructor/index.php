<?php

require_once "Coche.php";

$coche1 = new Coche("verde","toyota","sedan",100,400,3);
$coche2 = new Coche("azul","toyota","sedan",100,400,3);
$coche3 = new Coche("rojo","toyota","sedan",100,400,3);

$coche1->color="celeste";
//$coche1->marca="bmb"; //PRIVADA

var_dump($coche1);
var_dump($coche2);
var_dump($coche3);

?>