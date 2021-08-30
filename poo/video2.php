<?php
//constructores. son metodos se crean con una sintaxis determinada.

class Usuario {

    public function __construct(){
        echo "llamado al constructor";
    }


    public  function registrar () {
        echo "Usuario Registrado";
    }

    public function acceder ($nUsuario, $nPassword){
        echo $nUsuario."esta logueado";
    }

    public function __destruct() {
        echo "llamado al destructor";
    }
}

// El constructor o destructor no hace falta instanciado. solo llamar a la clase Usuario
$usuario1 = new Usuario;
//para acceder al metrodo, como es un metodo van los parentesis
//$usuario1->registrar();
//$usuario1->acceder("jose","123");



?>