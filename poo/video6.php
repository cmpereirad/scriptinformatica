<?php
// con el metodo magico SET puedo setear una variable privada.
class Usuario {
    private $nombre;
    private $edad;

    public function __set ($nombre, $valor){
        echo "Configurando ".$nombre." con el valor <strong>".$valor."</strong><br />";
        $this->nombre = $valor;
    }

    public function __get ($nombre){
        echo "Obteniendo ".$nombre." que tiene el valor <strong>".$this->nombre."</strong><br />";

    }

    public function __isset($nombre){
        echo "Esta".$nombre." configurada";
        return isset($this->nombre);
    }
}
$usuario1 = new Usuario;

$usuario1->nombre = "Juan";

echo $usuario1->nombre;
//para verificar isset la funcion magica
var_dump(isset($usuario1->nombre));

?>