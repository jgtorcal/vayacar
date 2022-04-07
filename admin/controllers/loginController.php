<?php

class LoginController extends Controller {

    function __construct(){

        parent::__construct();
        

    }

    function index(){
        $this->view->render('login/index');
    }

    function checkSesion(){

        // Comprobamos si existe la sesión, si no, la creamos
        if( !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        //print_r($_SESSION);

        if (isset($_SESSION['email'])){
            $msg = "SI hay sesión con mail " .$_SESSION['email'];
            return 1;
        } else {
            $msg = "NO hay sesion ";
            return 0;
        }
    }

    function auth(){

        // Comprobamos si existe la sesión, si no, la creamos
        if( !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Comprobamos si los campos del formulario nos vienen llenos y creamos las variables de sesión
        if (isset($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email'])) {

            // Saneamos y almacenamos los valores del formulario en vars
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            // Llamamos a la función login para determinar si el usuario existe en la BBDD
            require_once 'models/usuariomodel.php';
            $usuario = new UsuarioModel();
            $login = $usuario->getByEmail($email);

            //var_dump($login);
            //$login = login($password, $email);

            //Si existe, creamos las variables de sesión y seteamos la variable de control login-result por si falla enseñar el mensaje en la caja del login
            //También actualizamos la última fecha de login
            if (!empty($login[0]->email)){
                
                if ( $login[0]->id_rol == 1 ) {
                    $rol = 1;
                } elseif ( $login[0]->id_rol == 2) {
                    $rol = 2;
                }
                
                $_SESSION['email'] = $login[0]->email;
                $_SESSION['nombre'] = $login[0]->nombre;
                $_SESSION['rol'] = $rol;

                $login_result = 1;
                //$this->view->render('login/ok');
                header('location: ' . constant('APPURL'));


            } else {

                $login_result = 0;
                header('location: ' . constant('APPURL') . 'login/error');

            }

        }

    }

    function error(){
        $this->view->mensaje = "Error de login";
        $this->view->render('login/index');
    }

    function cerrar(){

        session_start();

        // Borramos las variables de sesión
        session_unset();

        // Borramos la sesión
        session_destroy();

        // Redireccionamos al login
        header("Location:".APPURL."login");
    }
}

?>