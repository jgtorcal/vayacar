<?php

require_once 'models/usuariomodel.php';
require_once 'models/cochemodel.php';
require_once 'models/marcamodel.php';
class MainController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->titulo_seccion = 'Panel de administración';
        $this->view->controller_name = 'main';
        $this->view->mensaje = "Main";
        
    }

    public function index(){

        $this->model = new UsuarioModel;
        $num_usuarios = $this->model->contarUsuarios();
        $this->view->num_usuarios = $num_usuarios;

        $this->model = new CocheModel;
        $num_coches = $this->model->contarCoches();
        $this->view->num_coches = $num_coches;

        $this->model = new MarcaModel;
        $num_marcas = $this->model->contarMarcas();
        $this->view->num_marcas = $num_marcas;




        $this->view->num_contactos = 666;

        $this->view->render('main/index');

    }



}

?>