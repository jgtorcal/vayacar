<?php

class ColorController extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->mensaje = "";
        // $this->view->mensaje = "Lista de colores";
        // $this->view->render('color/index');
        
    }

    // Listar todos los colores
    public function index($mensaje = null){

        $colores = $this->model->get();
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

        if ($this->model->insert(['color' => $color])) {
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

        if($this->model->update([ 'id_color' => $id_color, 'color' => $color ])){
            // actualizar alumno exito
            // $color = new ColorController();
            // $color->color = $color;
            $mensaje = "Color actualizado correctamente";

        }else{
            // mensaje de error
            $mensaje = "Ha fallado la actualización del color";
        }

        //$this->view->render('color/edit');
        //$this->index($mensaje);
        $this->view->mensaje = $mensaje;
        $this->view->render('color/update');
    }


    function delete($param = null){

        $id_color = $param;

        if($this->model->delete($id_color)){
            $mensaje = "Color eliminado correctamente";
        }else{
            // mensaje de error
            $mensaje = "No se pudo eliminar el color";
        }
        
        //$this->index($mensaje);
        $this->view->mensaje = $mensaje;
        $this->view->render('color/delete');
    }



}

?>