<?php

class MainController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->titulo_seccion = 'Panel de administración';
        $this->view->controller_name = 'main';
        $this->view->mensaje = "Main";
        
    }

    public function index(){

        $this->view->render('main/index');

    }



}

?>