<?php

class Usuarios extends Controlador{

    public function __construct()    {

    }

// Siempre debe existir el metodo index
    public function index(){
        $data = [];
        $this->view('usuario/index', $data);
    }
}

?>