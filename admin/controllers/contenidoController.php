<?php

class ContenidoController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de contenidos';
        $this->view->controller_name = 'contenido';
        $this->view->mensaje = "Lista de contenidos";
        $this->view->render('contenido/index');
        
    }



}

?>