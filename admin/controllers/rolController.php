<?php

require_once 'models/rolmodel.php';

class RolController {

    // public $id_rol = null;
    // public $nombre = null;

    function __construct(){

        $this->model = new RolModel;
        
    }

    // function index(){

    //     $roles = $this->model->getAll();

    //     echo '<pre>';
    //     print_r($roles);
    //     echo '</pre>';


    // }


    function getAllRoles(){

        $roles = $this->model->getAll();
        return $roles;

    }
    
}

?>