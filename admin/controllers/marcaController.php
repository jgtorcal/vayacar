<?php

class MarcaController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de marcas';
        $this->view->controller_name = 'marca';
        $this->view->mensaje = "Lista de marcas";
        
    }

    public function index(){

        $this->view->render('marca/index');

    }



}

?>