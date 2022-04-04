<?php

class MarcaController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->mensaje = "Lista de marcas";
        $this->view->render('marca/index');
        
    }



}

?>