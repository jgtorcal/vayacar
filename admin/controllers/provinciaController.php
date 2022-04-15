<?php

require_once 'models/provinciamodel.php';

class ProvinciaController {

    function __construct(){

        $this->model = new ProvinciaModel;
        
    }


    function getAllProvincias(){

        $this->model = new ProvinciaModel;

        $provincias = $this->model->getAll();
        return $provincias;

    }


    function index(){

        $provincias = $this->getAllProvincias();

        echo "<pre>";
        print_r($provincias);
        echo "</pre>";

    }


    // Override de los métodos de controller
    public function loadModel($model){
    }

    public function checkSesion(){
    }

    public function checkAuth($login, $su){
    }
    
}

?>