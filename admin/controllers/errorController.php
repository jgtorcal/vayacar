<?php

class ErrorController extends Controller {

    function __construct() {

        parent::__construct();
        // $this->view->mensaje = "Error genérico";
        // $this->view->render('error/index');

    }

    function MuestraError($error_string){

        $this->view->mensaje = "$error_string";
        $this->view->render('error/index');


    }

}

?>