<?php
class Coche{

    

    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;

    //metodo que carga al iniciar
    //public function __construct(){
    //    $this->color ="red";
    //    $this->marca="Ferrari";
    //    $this->modelo="Aventador";
    //    $this->velocidad=100;
    //    $this->caballaje=500;
    //    $this->plazas=2;
    //}
    public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas){
        $this->color =$color;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->velocidad=$velocidad;
        $this->caballaje=$caballaje;
        $this->plazas=$plazas;
    }

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
?>