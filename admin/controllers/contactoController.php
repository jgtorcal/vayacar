<?php

class ContactoController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->mensaje = "Lista de contactos";
        $this->view->render('contacto/index');
        
    }



}

?>