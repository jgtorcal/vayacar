<?php

class MarcaController extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de marcas';
        $this->view->controller_name = 'marca';
        $this->view->mensaje = "";
        $this->view->renderboton = '<a href="' . APPURL . 'marcas" class="btn btn-blue">Volver</a>';
        
    }

    // Listar todos los colores
    public function index($mensaje = null){

        $marcas = $this->model->getAll();
        $this->view->marcas = $marcas;
        $this->view->mensaje = $mensaje;

        

        $this->view->render('marca/index');

    }

    // Formulario de nuevo
    public function new(){

        $this->view->render('marca/new');

    }

    // Añadir a la BBDD
    public function create(){

        $nombre = $_POST['nombre'];
        $logo = $_POST['logo'];
        $mensaje = "";

        if ($this->model->insertMarca(['nombre' => $nombre, 'logo' => $logo])) {
            $mensaje = "Nueva marca creada";
        } else {
            $mensaje = 'Ha habido un error insertando la nueva marca';
        }

        $this->view->mensaje = $mensaje;
        $this->view->render('marca/create');

    }

    // Formulario de edición
    public function edit($param = null){

        $id_marca = $param;
        $marca = $this->model->getById($id_marca);
        $this->view->marca = $marca;
        $this->view->render('marca/edit');

    }

    // Update color
    public function update(){

        $id_marca = $_POST['id_marca'];
        $nombre  = $_POST['nombre'];
        $logo  = $_POST['logo'];

        if($this->model->updateMarca([ 'id_marca' => $id_marca, 'nombre' => $nombre, 'logo' => $logo ])){
            $mensaje = "Marca actualizada correctamente";
        }else{
            $mensaje = "No se pudo actualizar la marca";
        }
        $this->view->mensaje = $mensaje;
        $this->view->render('marca/update');
    }

    // del color
    public function delete($param = null){

        $id_marca = $param;

        if($this->model->deleteMarca($id_marca)){
            $mensaje = "Marca eliminada correctamente";
        }else{
            $mensaje = "No se pudo eliminar la marca";
        }
        
        $this->view->mensaje = $mensaje;
        $this->view->render('marca/delete');
    }

}

?>