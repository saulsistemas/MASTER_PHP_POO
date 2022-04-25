<?php
//NO SE PUEDE CREAR OBJETOS NI INSTANCIAR
abstract class Ordenador{
    //SIRVE PARA DEFINIR QUE ESTUCTURA VA TENER
     public $encendito;

    abstract public function encender();       
    
    public function apagar(){
        $this->encendito=false;
    }
}

class PcAsus extends Ordenador{
    public $software;

    public function arrancarSoftware(){
        $this->software=true;
    }

    public function encender()
    {
        $this->encendito=true;
    }
}

$pc = new PcAsus();
$pc->arrancarSoftware();
$pc->encender();
var_dump($pc);
?>