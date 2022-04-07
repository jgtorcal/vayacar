<?php

class ColorController extends Controller{

    

    function __construct(){

        // $login = true;
        // $su = 1;

        // parent::checkAuth($login, $su);

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de colores';
        $this->view->controller_name = 'color';
        $this->view->mensaje = "";
        $this->view->renderboton = '<a href="' . APPURL . 'colores" class="btn btn-blue">Volver</a>';
        
    }

    // Listar todos los colores
    public function index($mensaje = null){

        $colores = $this->model->getAll();
        $this->view->colores = $colores;
        $this->view->mensaje = $mensaje;
        $this->view->render('color/index');

    }

    // Formulario de nuevo
    public function new(){

        $this->view->render('color/new');

    }

    // Añadir a la BBDD
    public function create(){

        $color = $_POST['color'];
        $mensaje = "";

        if ($this->model->insertColor(['color' => $color])) {
            $mensaje = "Nuevo color creado";
        } else {
            $mensaje = 'Hahabido un error insertando el nuevo color';
        }

        $this->view->mensaje = $mensaje;
        $this->view->render('color/create');

    }

    // Formulario de edición
    public function edit($param = null){

        $id_color = $param;
        $color = $this->model->getById($id_color);
        $this->view->color = $color;
        $this->view->render('color/edit');

    }

    // Update color
    public function update(){

        $id_color = $_POST['id_color'];
        $color  = $_POST['color'];

        if($this->model->updateColor([ 'id_color' => $id_color, 'color' => $color ])){
            $mensaje = "Color actualizado correctamente";
        }else{
            $mensaje = "No se pudo actualizar el color";
        }
        $this->view->mensaje = $mensaje;
        $this->view->render('color/update');
    }

    // del color
    public function delete($param = null){

        $id_color = $param;

        if($this->model->deleteColor($id_color)){
            $mensaje = "Color eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar el color";
        }
        
        $this->view->mensaje = $mensaje;
        $this->view->render('color/delete');
    }

}

?>