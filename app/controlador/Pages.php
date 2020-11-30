<?php
class Pages extends Controlador{

    public function __construct()
    {
        $this->pageModelo = $this->model('Pages');
    }

    public function index(){

        // $data = $this->pageModelo->obtenerTurista("Jenny");

        $data = [
            'title' => 'SharePosts',
            'description' => 'Simple social network built on the TraversyMVC PHP framework'
          ];
         
          $this->view('pages/index', $data);
    }
}

?>