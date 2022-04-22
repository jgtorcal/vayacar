<?php

require_once 'models/usuariomodel.php';
class LoginController extends Controller {

    function __construct(){

        parent::__construct();
        
    }

    function index(){
        $this->view->render('login/index');
    }



    function auth(){

        // Comprobamos si existe la sesión, si no, la creamos
        if( !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        print_r($_POST);
        
        // Comprobamos si los campos del formulario nos vienen llenos y creamos las variables de sesión
        if (isset($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email'])) {

            // Saneamos y almacenamos los valores del formulario en vars
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);

            $login_result = $this->login($email, $password);

            if ($login_result == true) {

                //Llamamos a la función login para determinar si el usuario existe en la BBDD
                require_once 'models/usuariomodel.php';
                $usuario = new UsuarioModel();
                $user = $usuario->getByEmail($email);


                //Creamos las variables de sesión con el usuario
                if ($user){
                    
                    if ( $user[0]->id_rol == 1 ) {
                        $rol = 1;
                    } elseif ( $user[0]->id_rol == 2) {
                        $rol = 2;
                    }
                    
                    $_SESSION['email'] = $user[0]->email;
                    $_SESSION['nombre'] = $user[0]->nombre;
                    $_SESSION['rol'] = $rol;

                    $login_result = 1;
                    header('location: ' . constant('APPURL'));

                }

            } else {
                $login_result = 0;
                header('location: ' . constant('APPURL') . 'login/error');
            }

        }

    }

    public function login ($email, $password){

        $usuario = new UsuarioModel();
        $login = $usuario->checkPass($email, $password);

        print_r($login);

        if ($login > 0 ) {

            echo '<br>login() true';
            return true;
            
        } else {
            echo '<br>login() false';
            return false;
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