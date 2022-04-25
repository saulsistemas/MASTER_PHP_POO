<?php
//POSIBILIDAD DE COMPARTIR ATRIBUTOS Y METODOS ENTRE CLASES

class Persona{
    public $nombre;
    public $apellido;
    public $edad;

    
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function getEdad(){
        return $this->edad;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }
    
    function hablar(){
        return "estoy hablando";
    }
    function camina(){
        return "estoy caminando";
    }
}

class Informatico extends Persona{
    public $lenguajes;
    public function __construct(){
        $this->lenguajes = "Html,css";
    }
    public function sabeLenguajes($lenguajes){
        return $this->lenguajes=$lenguajes;
    }
    function programar(){
        return "soy programador";
    }
    function repararOrdenador(){
        return "reparar ordenador";
    }
    function hacerOfimatica(){
        return "Instalando a office";
    }
}

class TecnicoRedes extends Informatico{
    public $auditarRedes;
    public $experienciaRedes;
    public function __construct(){
        parent::__construct();
        $this->auditarRedes = "WAN ,MAN";
    }
    function auditoria(){
        return "Estoy auditando una red";
    }
}
?>