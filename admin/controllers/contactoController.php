<?php

class ContactoController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de contactos';
        $this->view->controller_name = 'contacto';
        $this->view->mensaje = "Lista de contactos";
        $this->view->render('contacto/index');
        
    }



}

?>