<?php

class MarcaController extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de marcas';
        $this->view->controller_name = 'marca';
        $this->view->mensaje = "";
        $this->view->renderboton = '<a href="' . APPURL . 'marcas" class="btn btn-blue">Volver</a>';
        
    }

    // Listar todos los colores
    public function index($mensaje = null){

        $marcas = $this->model->getAll();
        $this->view->marcas = $marcas;
        $this->view->mensaje = $mensaje;
        $this->view->render('marca/index');

    }

    public function getAllMarcas(){

        parent::loadModel('marca');

        $marcas = $this->model->getAll();
        return $marcas;

    }

    // Formulario de nuevo
    public function new(){

        $this->view->render('marca/new');

    }

    public function storeImage($file){

        $status = $statusMsg = ''; 

        if(isset($file['logo'])){ 

            $status = 'error'; 

            if(!empty($file["logo"]["name"])) { 
                // Get file info 
                $fileName = basename($_FILES["logo"]["name"]); 
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                
                // Allow certain file formats 
                $allowTypes = array('jpg','png','jpeg','gif'); 
                
                if(in_array($fileType, $allowTypes)){ 

                    $target_dir = constant('UPLOADSURL');
                    $extarr = explode('.',$file["logo"]["name"]);

                    $filename = $extarr[sizeof($extarr)-2];
                    $ext = $extarr[sizeof($extarr)-1];
                    $hash = md5(Date('Ymdgi') . $filename) . '.' . $ext;
                    //$target_file = $target_dir . $hash;
                    $target_file = $_SERVER['DOCUMENT_ROOT'] . $target_dir . $hash;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    
                    $check = getimagesize($file["logo"]["tmp_name"]);

                    if($check !== false) {
                        $uploadOk = 1;
                    } else {
                        $uploadOk = 0;
                    }
                    
                    if ($uploadOk == 0) {
                    } else {

                        if (move_uploaded_file($file["logo"]["tmp_name"], $target_file)) {
                            return $hash;
                        } else {
                            return NULL;
                        }
                    }

                }else{ 
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
                } 
            }else{ 
                $statusMsg = 'Please select an image file to upload.'; 
            } 
        }

    }

    // Añadir a la BBDD
    public function create(){

        $nombre = $_POST['nombre'];
        $mensaje = "";

        $hash = $this->storeImage($_FILES);

        if (isset($hash)){
            
            if ($this->model->insertMarca(['nombre' => $nombre, 'logo' => $hash])) {
                $mensaje = "Nueva marca creada";
            } else {
                $mensaje = 'Ha habido un error insertando la nueva marca';
            }

        } else {
            $mensaje = "No existe la imagen";
        }
        
        $this->view->mensaje = $mensaje;
        $this->view->render('marca/create');

    }

    // Formulario de edición
    public function edit($param = null){

        $id_marca = $param;
        $marca = $this->model->getById($id_marca);
        $this->view->marca = $marca;
        $this->view->render('marca/edit');

    }

    // Update color
    public function update(){

        $id_marca = $_POST['id_marca'];
        $nombre  = $_POST['nombre'];
        
        if (!empty($_FILES['logo']['name'])){


            $hash = $this->storeImage($_FILES);

            if (!empty($hash)){
            
                if ($this->model->updateMarca([ 'id_marca' => $id_marca, 'nombre' => $nombre, 'logo' => $hash])) {
                    $mensaje = "Marca actualizada correctamente (nombre y logo)";
                } else {
                    $mensaje = 'Ha habido un error insertando la nueva marca  (nombre y logo)';
                }
    
            } else {
                $mensaje = "No existe la imagen";
            }

        } else {

            if($this->model->updateMarcasinlogo([ 'id_marca' => $id_marca, 'nombre' => $nombre ])){
                $mensaje = "Marca actualizada correctamente (nombre)";
            }else{
                $mensaje = "No se pudo actualizar la marca (nombre)";
            }

        }

        
        $this->view->mensaje = $mensaje;
        $this->view->render('marca/update');
    }

    // del color
    public function delete($param = null){

        $id_marca = $param;

        if($this->model->deleteMarca($id_marca)){
            $mensaje = "Marca eliminada correctamente";
        }else{
            $mensaje = "No se pudo eliminar la marca";
        }
        
        $this->view->mensaje = $mensaje;
        $this->view->render('marca/delete');
    }

}

?>