<?php
class Coche{

    
    //PUBLIC: Desde cualquier lugar
    public $color;
    //PROTECTED: Desde la clase que la define y desde la clase que hereden esta clase
    protected $marca;
    //PRIVATE: Desde la clase que se ubica
    private $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;


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