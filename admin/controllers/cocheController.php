<?php

class CocheController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de coches';
        $this->view->controller_name = 'coche';
        $this->view->mensaje = "Lista de coches";
        
    }

    public function index(){

        $this->view->render('coche/index');

    }



}

?>