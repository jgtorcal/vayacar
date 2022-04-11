<?php

class ContenidoController extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de contenidos de la web';
        $this->view->controller_name = 'contenido';
        $this->view->mensaje = "";
        $this->view->renderboton = '<a href="' . APPURL . 'contenidos" class="btn btn-blue">Volver</a>';
        
    }

    // Listar todos los contenidos
    public function index($mensaje = null){

        $contenidos = $this->model->getAll();
        $this->view->contenidos = $contenidos;
        $this->view->mensaje = $mensaje;

        $this->view->render('contenido/index');

    }


    // Update contenidos
    public function update(){

        $telefono = $_POST['telefono'];
        $email  = $_POST['email'];
        $direccion = $_POST['direccion'];

        $mapa = htmlentities(htmlspecialchars($_POST['mapa']));
        $quienes_somos = htmlentities(htmlspecialchars($_POST['quienes_somos']));

        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';
        

        if($this->model->updateContenido([ 
            'telefono' => $telefono, 
            'email' => $email,
            'direccion' => $direccion, 
            'mapa' => $mapa,
            'quienes_somos' => $quienes_somos
            ])){
            $mensaje = "Contenido actualizado correctamente";
        }else{
            $mensaje = "No se pudo actualizar el contenido";
        }
        $this->view->mensaje = $mensaje;
        $this->view->render('contenido/update');
    }


}

?>