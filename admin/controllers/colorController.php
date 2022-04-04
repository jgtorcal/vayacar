<?php

class ColorController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->mensaje = "Lista de colores";
        $this->view->render('color/index');
        
    }



}

?>