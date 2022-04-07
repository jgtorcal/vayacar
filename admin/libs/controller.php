<?php

class Controller {

    // Generamos el objeto vista
    public function __construct() {

        $this->view = new View();
        $this->view->nombre = $this->getUserEmail();
        $this->view->rol = $this->getRol();
        
    }

    public function loadModel($model){

        $url = 'models/'.$model.'model.php';

        if (file_exists($url)){

            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
            
        }

    }


    function checkSesion(){

        // Comprobamos si existe la sesión, si no, la creamos
        if( !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['email'])){
            //$msg = "SI hay sesión con mail " .$_SESSION['email'];
            return 1;
        } else {
            //$msg = "NO hay sesion ";
            return 0;
        }
    }

    function getRol(){
        if ( $this->checkSesion() ){

            $rol = $_SESSION['rol'];
            return $rol;

        }
    }


    function getUserEmail(){
        if ( $this->checkSesion() ){

            $email = $_SESSION['email'];
            return $email;

        }
    }


    public function checkAuth($login, $su){

        //print_r($_SESSION);

        $sesion_activa = $this->checkSesion();

        if ( $login == 1){
            if ($sesion_activa == 1){

                // Está logueado
                // require_once 'controllers/loginController.php';
                // $sesion = new LoginController();
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