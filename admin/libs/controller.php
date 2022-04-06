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


}

?>