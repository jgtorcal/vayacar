<?php

require_once 'controllers/errorController.php';

class App {

    function __construct() {

        // Obtenemos la URL y la parseamos
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // Llamamos al controlador (PRIMERA POSICION DE lA URL)
        if(empty($url[0])) {

            $controller_name = 'main';
            $login = 1;
            $su = 0;

        } else {

            switch ($url[0]) {
                case 'main':
                    $controller_name = 'main';
                    $login = 1;
                    $su = 0;
                    break;
                case 'usuarios':
                    $controller_name = 'usuario';
                    $login = 1;
                    $su = 1;
                    break;
                case 'coches':
                    $controller_name = 'coche';
                    $login = 1;
                    $su = 0;
                    break;
                case 'marcas':
                    $controller_name = 'marca';
                    $login = 1;
                    $su = 1;
                    break;
                case 'colores':
                    $controller_name = 'color';
                    $login = 1;
                    $su = 1;
                    break;
                case 'contenidos':
                    $controller_name = 'contenido';
                    $login = 1;
                    $su = 1;
                    break;
                case 'contactos':
                    $controller_name = 'contacto';
                    $login = 1;
                    $su = 0;
                    break;
                case 'login':
                    $controller_name = 'login';
                    $login = 0;
                    $su = 0;
                    break;
                case 'roles':
                    $controller_name = 'rol';
                    $login = 0;
                    $su = 0;
                    break;
            }
            
        }


        if (isset($controller_name)){
            $archivoController = 'controllers/' . $controller_name . 'Controller.php';
        } else {
            $controller = new ErrorController();
            $controller->MuestraError('No existe la ruta especificada');
        }


        // Si existe el controlador, lo llamamos y utilizamos el método que corresponda
        // Si no existe llamamos al controlador de errores
        if (file_exists($archivoController)) {

            require_once $archivoController;

            $clase = ucfirst($controller_name).'Controller';
            $controller = new $clase;
            $controller->loadModel($controller_name);
            $controller->checkSesion();
            $controller->checkAuth($login, $su);
            

            // Si hay método
            if (isset($url[1])){

                $method_name = $url[1];

            } else {

                $method_name = 'index';
            }

            if (method_exists($clase, $method_name)) {


                if (isset($url[2])){
                    $controller->{$method_name}($url[2]);
                } else {
                    $controller->{$method_name}();
                }

            } else {

                $controller = new ErrorController();
                $controller->MuestraError('No existe el método ' . $method_name);

            }
            

        } else {

            $controller = new ErrorController();
            $controller->MuestraError('No existe el controlador');

        }
        
    }

}

?>