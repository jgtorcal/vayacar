<?php

require_once 'models/estadomodel.php';

class EstadoController {

    function __construct(){

        $this->model = new EstadoModel;
        
    }


    function getAllEstados(){

        $estados = $this->model->getAll();
        return $estados;

    }


    function index(){

        $estados = $this->getAllEstados();

        echo "<pre>";
        print_r($estados);
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