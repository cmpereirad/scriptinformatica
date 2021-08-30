<?php
//variables pueden ser publicas, privadas o protegidas.

class Usuario {
//propiedades
    public $id = 54;
    public $usuario;
    public $password;


    public function __construct(){
        echo "llamado al constructor";
    }


    public  function registrar () {
        echo "Usuario Registrado";
    }

    public function acceder ($usuario, $password){
        $this->auto_usuario($usuario, $password);
    }
// con this accede al metodo auto usuario y le pasa los valores

    public function auto_usuario($usuario, $password){
        //echo $usuario. "esta autenticado";
        echo this->id;
    }



    public function __destruct() {
        echo "llamado al destructor";
    }
}


$usuario1 = new Usuario;
$usuario1->acceder("jose","123");



?>