<?php

require_once 'models/condicionmodel.php';

class CondicionController {

    function __construct(){

        $this->model = new CondicionModel;
        
    }


    function getAllCondiciones(){

        $this->model = new CondicionModel;

        $condiciones = $this->model->getAll();
        return $condiciones;

    }


    function index(){

        $condiciones = $this->getAllCondiciones();

        echo "<pre>";
        print_r($condiciones);
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