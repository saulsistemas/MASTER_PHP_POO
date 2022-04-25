<?php
require_once 'Configuracion.php';

Configuracion::setColor("Red");
Configuracion::setEntorno("Localhost");
Configuracion::setNewsletter(true);
echo Configuracion::$color;

//EJEMPLO DE COMO INSTANCIAR PROPIEDADES ESTATICAS NO RECOMENDABLE USAR
//$conf = new Configuracion();
//$conf::setColor('Verde');
//echo $conf::$color;
?>