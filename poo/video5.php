<?php
//variables pueden ser publicas, privadas o protegidas.
//propiedades de usuario

class Usuario {

    public $id = 30;
    public $email;
    public $usuario;
    public $password;

    
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


$usuario = new Usuario;
$usuario->acceder("jose","123");
echo "<br />";
echo $usuario->id;

?>