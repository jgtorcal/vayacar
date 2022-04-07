<?php

class UsuarioController extends Controller {

    public $nombre;
    public $email;
    public $password;
    public $id_usuario;
    public $id_rol;

    function __construct() {

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de usuarios';
        $this->view->controller_name = 'usuario';
        // $this->view->mensaje = "Lista de usuarios";
        // $this->view->render('usuario/index');
        
    }

    // public function saludo($variable = null){
    //     $this->view->mensaje = "Date por saludado " . $variable;
    //     $this->view->render('usuario/index');
    // }

    public function index(){
        
        //$this->view->render('usuario/index');
        $usuarios = $this->model->get();
        $this->view->usuarios = $usuarios;
        //var_dump($usuarios);
        $this->view->render('usuario/index');

    }

    public function insert(){

        //echo "creado";
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $this->model->insert(['nombre' => $nombre, 'email' => $email, 'password' => $password]);
        
        $this->view->render('usuario/index');
        
    }

    public function new(){
        
        $this->view->render('usuario/new');
        
    }

    public function get($id){
        
        $this->view->render('usuario/get');
        
    }

    public function update($id){
        
        //$this->view->render('usuario/update');
        
    }

    public function delete($id){
        
        $this->view->render('usuario/delete');
        
    }

    



}

?>