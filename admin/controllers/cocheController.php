<?php

class CocheController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->mensaje = "Lista de coches";
        $this->view->render('coche/index');
        
    }



}

?>