<?php

class Controller {

    // Generamos el objeto vista
    public function __construct() {

        $this->view = new View();
        
    }

    public function loadModel($model){

        $url = 'models/'.$model.'model.php';

        if (file_exists($url)){

            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
            
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