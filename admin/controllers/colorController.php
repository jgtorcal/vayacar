<?php

class ColorController extends Controller{

    function __construct(){

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


    function getAllColores(){

        parent::loadModel('color');

        $colores = $this->model->getAll();
        return $colores;

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

        // 0 El color está siendo usada por algún coche, no se puede borrar
        // 1 El color se ha borrado correctamente
        // 2 Ha habido un error borrando el color

        $resultado_delete = $this->model->deleteColor($id_color);

        switch ($resultado_delete){
            case 0: 
                $mensaje = 'El color está siendo usada por algún coche, no se puede borrar';
                break;
            case 1:
                $mensaje = 'El color se ha borrado correctamente';
                break;
            case 2:
                $mensaje = 'Ha habido un error borrando el color';
                break;
        }
        
        $this->view->mensaje = $mensaje;
        $this->view->render('color/delete');
    }

}

?>