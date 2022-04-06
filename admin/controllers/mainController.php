<?php

class MainController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->titulo_seccion = 'Panel de administración';
        $this->view->controller_name = 'main';
        $this->view->render('main/index');
        
    }

    function saludo() {
        echo "Metodo saludo de Main<br>";
    }



}

?>