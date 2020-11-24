<?php

class Core{
    
    protected $controladorActual = 'Pages';
    protected $metodoActual = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->obtenerUrl();
        
        if(file_exists('../app/controlador/'.ucwords($url[0]).'.php')){
            $this->controladorActual = ucwords($url[0]);
            unset($url[0]);
        }

        require_once '../app/controlador/'. $this->controladorActual .'.php';

        $this->controladorActual = new $this->controladorActual;

        if(isset($url[1])){
            if(method_exists($this->controladorActual, $url[1])){
                $this->metodoActual = $url[1];
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controladorActual,
        $this->metodoActual],$this->params);
    }

    public function obtenerUrl()
    {
       if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
       }
    }
}

?>