<?php

class ErrorController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de errores';
        $this->view->controller_name = 'error';
        $this->view->mensaje = "Errores";

    }

    function MuestraError($error_string){

        $this->view->mensaje = $error_string;
        $this->view->render('error/index');


    }

}

?>