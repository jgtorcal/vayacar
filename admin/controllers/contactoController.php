<?php

require_once 'models/estadoModel.php';

class ContactoController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de contactos';
        $this->view->controller_name = 'contacto';
        $this->view->mensaje = "Lista de contactos";
        $this->view->renderboton = '<a href="' . APPURL . 'contactos" class="btn btn-blue">Volver</a>';
        
    }

    // Listar todos los contactos
    public function index($mensaje = null){

        $contactos = $this->model->getAll();
        $this->view->contactos = $contactos;
        $this->view->mensaje = $mensaje;
        
        $this->view->render('contacto/index');

    }


    function getAllContactos(){

        parent::loadModel('contacto');

        $contactos = $this->model->getAll();
        return $contactos;

    }



    // Formulario de edición
    public function edit($param = null){

        $id_contacto = $param;
        $contacto = $this->model->getById($id_contacto);
        $this->view->contacto = $contacto;

        // Añadimaos Estados
        $estados = new EstadoModel;
        $estados_array = $estados->getAll();
        $this->view->estados = $estados_array;

        $this->view->render('contacto/edit');

    }

    // Update color
    public function update(){

        $id_contacto = $_POST['id_contacto'];
        $nombre  = $_POST['nombre'];
        $telefono  = $_POST['telefono'];
        $email  = $_POST['email'];
        $mensaje  = $_POST['mensaje'];
        $id_estado  = $_POST['id_estado'];
        

        if($this->model->updateContacto([ 
            'id_contacto' => $id_contacto, 
            'nombre' => $nombre,
            'telefono' => $telefono,
            'email' => $email,
            'mensaje' => $mensaje,
            'id_estado' => $id_estado
            
         ])){
            $mensaje = "Contacto actualizado correctamente";
        }else{
            $mensaje = "No se pudo actualizar el contacto";
        }
        $this->view->mensaje = $mensaje;
        $this->view->render('contacto/update');
    }


    // del contacto
    public function delete($param = null){

        $id_contacto = $param;

        $resultado_delete = $this->model->deleteContacto($id_contacto);

        switch ($resultado_delete){
            case 1:
                $mensaje = 'El contacto se ha borrado correctamente';
                break;
            case 2:
                $mensaje = 'Ha habido un error borrando el contacto';
                break;
        }
        
        $this->view->mensaje = $mensaje;
        $this->view->render('contacto/delete');
    }



}

?>