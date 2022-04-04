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

            // $archivoController = 'controllers/mainController.php';
            // require_once $archivoController;
            // $controller = new MainController();
            $controller_name = 'main';
            return false;

        }

        /*
            /usuarios
            /usuarios/new
            /usuarios/edit/1
            /usuarios/update/1
            /usuarios/del/1

            /coches
            /coches/new
            /coches/edit/1
            /coches/update/1
            /coches/del/1
        */

        switch ($url[0]) {
            case 'main':
                $controller_name = 'main';
                break;
            case 'usuarios':
                $controller_name = 'usuario';
                
                break;
            case 'coches':
                $controller_name = 'coche';
                break;
            case 'marcas':
                $controller_name = 'marca';
                break;
            case 'colores':
                $controller_name = 'color';
                break;
            case 'contenidos':
                $controller_name = 'contenido';
                break;
            case 'contactos':
                $controller_name = 'contacto';
                break;
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

            // Si hay método
            if (isset($url[1])){

                $method_name = $url[1];

                if (method_exists($clase, $method_name)) {

                    //$controller->{$method_name}();

                    if (isset($url[2])){
                        $controller->{$method_name}($url[2]);
                    } else {
                        $controller->{$method_name}();
                    }

                } else {

                    $controller = new ErrorController();
                    $controller->MuestraError('No existe el método');

                }

            }

            // if (isset($url[1])){
            //     $controller->{$url[1]}();
            // }

        } else {

            $controller = new ErrorController();
            $controller->MuestraError('No existe el controlador');

        }
        
    }

}

?>