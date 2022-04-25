<?php
require_once 'Clases.php';
$per= new Persona();
$inf = new Informatico();
$inf->sabeLenguajes("PHP, C#");
//echo $inf->hablar();
var_dump($per);
var_dump($inf);
?>