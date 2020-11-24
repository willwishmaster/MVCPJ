<?php
class Prueba{

    public function __construct()
    {
        // echo 'Estas en la pagina de prueba.';
    }

    public function index($nombre='Maria'){
        echo "Saludo desde la clase Prueba dice ". $nombre;
    }

    public function saludo(){
        echo "Esto deberuia funcionar";
    }

    public function suma($a){
        echo "La suma es: " . $a;
    }
}

?>