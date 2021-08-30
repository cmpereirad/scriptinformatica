<?php
class Usuario {
    public  function registrar () {
        echo "Usuario Registrado";
    }

    public function acceder ($nUsuario, $nPassword){
        echo $nUsuario."esta logueado";
    }
}

// instanciar a la clase usuario, metodo registrar haciendo una variable.
$usuario1 = new Usuario;
//para acceder al metrodo, como es un metodo van los parentesis
$usuario1->registrar();
//metodo acceder necesita dos variables
$usuario1->acceder("jose","123");

?>
