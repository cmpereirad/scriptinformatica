<?php
//variables pueden ser publicas, privadas o protegidas.

class Usuario {
    

    public function __construct(){
        //echo "llamado al constructor";
    }


    public  function registrar () {
        //echo "Usuario Registrado";

    }

    public function acceder ($usuario, $password){
        $this->usuario = $usuario;
        $this->password = $password;
        $this->auto_usuario();

    }
// en este caso auto usuario no recibe variables.

    public function auto_usuario(){
        //echo $usuario. "esta autenticado";
        echo $this->usuario. " SE ENCUENTRA LOGUEADO";
    }

    public function __destruct() {
        //echo "llamado al destructor";
    }
}


$usuario1 = new Usuario;
$usuario1->acceder("jose","123");



?>