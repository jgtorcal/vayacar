<?php

require_once 'models/rolmodel.php';

class RolController {

    function __construct(){

        $this->model = new RolModel;
        
    }


    function getAllRoles(){

        $roles = $this->model->getAll();
        return $roles;

    }

    function index(){

        $roles = $this->getAllRoles();

        echo "<pre>";
        print_r($roles);
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