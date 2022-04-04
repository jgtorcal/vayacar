<?php

class UsuarioController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->mensaje = "Lista de usuarios";
        $this->view->render('usuario/index');
        
    }



}

?>