<?php
  /*
   * Base Controller
   * Loads the models and views
   */
  class Controlador {
    // Load model
    public function model($model){
      // Require model file
      require_once '../app/modelo/' . $model . '.php';

      // Instatiate model
      return new $model();
    }

    // Load view
    public function view($view, $data = []){
      // Check for view file
      if(file_exists('../app/vista/' . $view . '.php')){
        require_once '../app/vista/' . $view . '.php';
      } else {
        // View does not exist
        die('La vista no existe');
      }
    }
  }
  ?>