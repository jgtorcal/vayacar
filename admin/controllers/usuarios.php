<?php

class UsuarioController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->render('usuario/index');
        
    }

    function saludo() {
        echo "Metodo saludo de Main<br>";
    }



}

?>