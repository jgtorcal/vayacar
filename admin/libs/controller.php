<?php

class Controller {

    // General el objeto vista
    // Le pasamos el rol y el email del usuario a la vista para tratarlo en el sidebar
    public function __construct() {

        $this->view = new View();
        $this->view->nombre = $this->getUserEmail();
        $this->view->rol = $this->getRol();
        
    }

    // Carga de forma automática el modelo asociado al controlador
    public function loadModel($model){

        $url = 'models/'.$model.'model.php';

        if (file_exists($url)){

            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
            
        }

    }

    // Comprueba si un usuario ha iniciado sesión
    function checkSesion(){

        // Comprobamos si existe la sesión, si no, la creamos
        if( !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['email'])){
            return 1;
        } else {
            return 0;
        }
    }

    // Obtiene el rol de la sesión
    function getRol(){
        if ( $this->checkSesion() ){

            $rol = $_SESSION['rol'];
            return $rol;

        }
    }

    //Obtiene el email del usuario de la sesión
    function getUserEmail(){
        if ( $this->checkSesion() ){

            $email = $_SESSION['email'];
            return $email;

        }
    }


    // Checkea la autorización
    public function checkAuth($login, $su){

        //print_r($_SESSION);

        $sesion_activa = $this->checkSesion();

        if ( $login == 1){
            if ($sesion_activa == 1){
                
                $rol = $this->getRol();

                switch ($su){
                    // No necesita SU
                    case 0:
                        if ($rol == 1){

                        } else {

                        }
                        break;
                    // Necesita SU
                    case 1:
                        if ($rol == 2){
                            
                        } else {
                            // Mostramos el error de permisos
                            require_once 'controllers/errorController.php';
                            $error = new ErrorController();
                            $error->MuestraError('No tiene permisos');
                        }
                        break;
                }


            } else {

                // Usuario no logueado, se le redirecciona al login
                header('location: ' . constant('APPURL') . 'login');

            }
        } else {

            // No hace falta login
        }
        

    }


}

?>