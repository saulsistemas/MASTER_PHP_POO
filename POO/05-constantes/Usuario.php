<?php
class Usuario{
    const URL_COMPLETA ="http://localhost";
    //LA CONSTANTE NO VARIA, NO CAMBIA SU VALOR, PROPIEDAD ESTATICA, ESTA DEFINIDAD DE CLASE
    public $email;
    public $password;

    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
}

$user = new Usuario();
echo $user::URL_COMPLETA;
echo Usuario::URL_COMPLETA;
var_dump($user);
?>