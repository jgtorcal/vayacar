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
    
}

?>