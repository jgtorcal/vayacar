<?php

class Controller {

    // Generamos el objeto vista
    public function __construct() {

        $this->view = new View();
        
    }

    public function __invoke()
    {
       
    }

    public function loadModel($model){

        $url = 'models/'.$model.'model.php';

        if (file_exists($url)){

            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
            
        }

    }

    public function getSession(){

        require_once 'controllers/loginController.php';
        $sesion = new LoginController();

        return $sesion->checkSesion();

    }

    public function checkAuth($login, $su){

        echo 'login: ' . $login;
        echo 'su: ' . $su;

        $sesion_activa = $this->getSession();

        if ( $login == 1){
            if ($sesion_activa == 1){
                echo "tiene permisos de visualizacion";
            } else {
                header('location: ' . constant('APPURL') . 'login');
            }
        } else {
            echo "no hace falta login";
        }
        

    }



    // function redirect($url, $mensajes = []){
    //     $data = [];
    //     $params = '';
        
    //     foreach ($mensajes as $key => $value) {
    //         array_push($data, $key . '=' . $value);
    //     }
    //     $params = join('&', $data);
        
    //     if($params != ''){
    //         $params = '?' . $params;
    //     }
    //     header('location: ' . constant('URL') . $url . $params);
    // }





}

?>