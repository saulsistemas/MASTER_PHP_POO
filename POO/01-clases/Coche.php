<?php
//es un molde para crear objetos con sus caracteristicas y metodos
class Coche{

    //Atributos
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    //Metodo, son las acciones

    function getColor(){
        return $this->color;
    }
    function setColor($color){
        $this->color=$color;
    }

    function acelerar(){
        return $this->velocidad++;
    }

    function frenar(){
        return $this->velocidad--;
    }


}

$coche1 = new Coche();
$coche1->color ="Rojo";
$coche1->velocidad =100;
echo  $coche1->getColor();
$coche1->acelerar();
echo  $coche1->acelerar();
echo "<br>";
$coche2 = new Coche();
$coche2->color ="Verde";
$coche2->velocidad =100;
$coche2->setColor("azul");
echo  $coche2->getColor();
$coche2->frenar();
echo  $coche2->frenar();
?>