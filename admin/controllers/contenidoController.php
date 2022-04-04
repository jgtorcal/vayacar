<?php

class ContenidoController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->mensaje = "Lista de contenidos";
        $this->view->render('contenido/index');
        
    }



}

?>