<?php

require_once 'controllers/errores.php';

class App {

    function __construct() {

        // Obtenemos la URL y la parseamos
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // Llamamos al controlador (PRIMERA POSICION DE lA URL)
        if(empty($url[0])) {

            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            return false;

        }

        $archivoController = 'controllers/' . $url[0] . '.php';

        // Si existe el controlador, lo llamamos y utilizamos el método que corresponda
        // Si no existe llamamos al controlador de errores
        if (file_exists($archivoController)) {

            require_once $archivoController;
            $controller = new $url[0];

            if (isset($url[1])){
                $controller->{$url[1]}();
            }

        } else {

            $controller = new Errores();

        }


        
    }

}

?>