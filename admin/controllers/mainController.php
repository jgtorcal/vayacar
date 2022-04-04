<?php

class MainController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->render('main/index');
        
    }

    function saludo() {
        echo "Metodo saludo de Main<br>";
    }



}

?>