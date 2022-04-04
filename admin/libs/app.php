<?php

require_once 'controllers/error.php';

class App {

    function __construct(){

        // Obtenemos la URL y la parseamos
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // Llamamos al controlador (PRIMERA POSICION DE lA URL)
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

            $controller = new ErrorApp();

        }


        
    }

}

?>