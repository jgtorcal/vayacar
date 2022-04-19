<?php

require_once 'models/rolModel.php';
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
        $this->view->mensaje = "";
        $this->view->renderboton = '<a href="' . APPURL . 'usuarios" class="btn btn-blue">Volver</a>';
        
    }

    // Listar todos los usuarios
    public function index($mensaje = null){

        $usuarios = $this->model->getAll();
        $this->view->usuarios = $usuarios;

        $this->view->mensaje = $mensaje;
        $this->view->render('usuario/index');

    }

    // Formulario de nuevo usuario
    public function new(){

        $roles = new RolModel;
        $roles_array = $roles->getAll();
        $this->view->roles = $roles_array;

        // echo '<pre>';
        // print_r($roles_array);
        // echo '</pre>';

        $this->view->render('usuario/new');

    }


    // Añadir a la BBDD
    public function create(){

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id_rol = $_POST['id_rol'];

        if ($this->model->insertUsuario([
            'nombre' => $nombre, 
            'email' => $email, 
            'password' => $password,
            'id_rol' => $id_rol
        ])) {
            $mensaje = "Nuevo usuario creado";
        } else {
            $mensaje = 'Ha habido un error creando el usuario';
        }

        $this->view->mensaje = $mensaje;
        $this->view->render('usuario/create');

    }

    // Formulario de edición
    public function edit($param = null){

        $id_usuario = $param;
        $usuario = $this->model->getById($id_usuario);
        $this->view->usuario = $usuario;

        $roles = new RolModel;
        $roles_array = $roles->getAll();
        $this->view->roles = $roles_array;
        
        $this->view->render('usuario/edit');

    }

    // Update usuario
    public function update(){

        $id_usuario = $_POST['id_usuario'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id_rol = $_POST['id_rol'];

        if($this->model->updateUsuario([
            'id_usuario' => $id_usuario, 
            'nombre' => $nombre, 
            'email' => $email, 
            'password' => $password,
            'id_rol' => $id_rol
        ])){
            $mensaje = "Usuario actualizado correctamente";
        }else{
            $mensaje = "No se pudo actualizar el usuario";
        }
        $this->view->mensaje = $mensaje;
        $this->view->render('usuario/update');
    }

    // del usuario
    public function delete($param = null){

        $id_usuario = $param;

        if($this->model->deleteUsuario($id_usuario)){
            $mensaje = "Usuario eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar el usuario";
        }
        
        $this->view->mensaje = $mensaje;
        $this->view->render('usuario/delete');
    }


}

?>