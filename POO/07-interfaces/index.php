<?php
//CONTRATO QUE VAN A OBLIGAR A LOS QUE HEREDEN TAL COMO ESTA

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
}


class IMac implements Ordenador{
    private $modelo;
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function encender(){
        return "encender";
    }
    public function apagar(){
        return "apagar";
        
    }
    public function reiniciar(){
        return "reiniciar";
        
    }
    public function desfragmentar(){
        return "desfragmentar";
        
    }
}
$pc = new IMac();
$pc->setModelo("Macbook pro 2022");
var_dump($pc);
?>