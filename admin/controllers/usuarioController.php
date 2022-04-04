<?php

class UsuarioController extends Controller {

    function __construct() {

        parent::__construct();
        // $this->view->mensaje = "Lista de usuarios";
        // $this->view->render('usuario/index');
        
    }

    public function saludo($variable = null){
        $this->view->mensaje = "Date por saludado " . $variable;
        $this->view->render('usuario/index');
    }



}

?>