<?php

// require_once 'controllers/marcaController.php';
// require_once 'controllers/colorController.php';
// require_once 'controllers/provinciaController.php';
// require_once 'controllers/condicionController.php';

require_once 'models/marcaModel.php';
require_once 'models/colorModel.php';
require_once 'models/provinciaModel.php';
require_once 'models/condicionModel.php';

class CocheController extends Controller{

    function __construct(){

        parent::__construct();
        $this->view->titulo_seccion = 'Gestión de coches';
        $this->view->controller_name = 'coche';
        $this->view->mensaje = "";
        $this->view->renderboton = '<a href="' . APPURL . 'coches" class="btn btn-blue">Volver</a>';
        
    }

    // Listar todos los coches
    public function index($mensaje = null){

        $coches = $this->model->getAll();
        $this->view->coches = $coches;
        $this->view->mensaje = $mensaje;       
        $this->view->render('coche/index');

    }

    // Formulario de nuevo
    public function new(){

        // Añadimaos Marcas
        $marcas = new MarcaModel;
        $marcas_array = $marcas->getAll();
        $this->view->marcas = $marcas_array;

        // Añadimaos Colores
        $colores = new ColorModel;
        $colores_array = $colores->getAll();
        $this->view->colores = $colores_array;

        // Añadimaos Provincia
        $provincias = new ProvinciaModel;
        $provincias_array = $provincias->getAll();
        $this->view->provincias = $provincias_array;

        // Añadimaos Condiciones
        $condiciones = new CondicionModel;
        $condiciones_array = $condiciones->getAll();
        $this->view->condiciones = $condiciones_array;

        // Se lo mandamos todo a la vista
        $this->view->render('coche/new');

    }

    public function storeImage($file){

        $status = $statusMsg = ''; 

        if(isset($file['foto'])){ 

            //echo '<pre>'; print_r($file); echo '</pre>';

            $status = 'error'; 

            if(!empty($file["foto"]["name"])) { 
                // Get file info 
                $fileName = basename($_FILES["foto"]["name"]); 
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                
                // Allow certain file formats 
                $allowTypes = array('jpg','png','jpeg','gif'); 
                
                if(in_array($fileType, $allowTypes)){ 

                    $target_dir = constant('UPLOADSURL_COCHES');
                    $extarr = explode('.',$file["foto"]["name"]);

                    

                    $filename = $extarr[sizeof($extarr)-2];
                    $ext = $extarr[sizeof($extarr)-1];
                    $hash = md5(Date('Ymdgi') . $filename) . '.' . $ext;
                    //$target_file = $target_dir . $hash;
                    $target_file = $_SERVER['DOCUMENT_ROOT'] . $target_dir . $hash;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    
                    $check = getimagesize($file["foto"]["tmp_name"]);

                    //echo '<pre>'; print_r($target_file); echo '</pre>';

                    if($check !== false) {
                        $uploadOk = 1;
                    } else {
                        $uploadOk = 0;
                    }
                    
                    if ($uploadOk == 0) {
                    } else {

                        if (move_uploaded_file($file["foto"]["tmp_name"], $target_file)) {
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

        $referencia = $_POST['referencia'];
        $modelo = $_POST['modelo'];
        $descripcion = $_POST['descripcion'];
        $puertas = $_POST['puertas'];
        $ano = $_POST['ano'];
        $precio = $_POST['precio'];
        //$foto = $_POST['foto'];
        $visibilidad = $_POST['visibilidad'];
        $id_marca = $_POST['id_marca'];
        $id_color = $_POST['id_color'];
        $id_provincia = $_POST['id_provincia'];
        $id_condicion = $_POST['id_condicion'];

        $mensaje = "";

        $hash = $this->storeImage($_FILES);

        // echo '<pre>';
        // print_r($hash);
        // echo '</pre>';
        // die();

        if (isset($hash)){
            
            if ($this->model->insertCoche([
                'referencia' => $referencia,
                'modelo' => $modelo, 
                'descripcion' => $descripcion, 
                'puertas' => $puertas, 
                'ano' => $ano, 
                'precio' => $precio,  
                'foto' => $hash,
                'visibilidad' => $visibilidad, 
                'id_marca' => $id_marca, 
                'id_color' => $id_color, 
                'id_provincia' => $id_provincia, 
                'id_condicion' => $id_condicion
                ])) {
                $mensaje = "Nuevo coche creado";
            } else {
                $mensaje = 'Ha habido un error insertando el nuevo coche';
            }

        } else {
            $mensaje = "No existe la imagen";
        }
        
        $this->view->mensaje = $mensaje;
        $this->view->render('coche/create');

    }

    // Formulario de edición
    public function edit($param = null){

        $id_coche = $param;
        $coche = $this->model->getById($id_coche);
        $this->view->coche = $coche;
        $this->view->render('coche/edit');

    }

    // Update
    public function update(){

        $id_coche = $_POST['id_coche'];
        $referencia = $_POST['referencia'];
        $modelo = $_POST['modelo'];
        $descripcion = $_POST['descripcion'];
        $puertas = $_POST['puertas'];
        $ano = $_POST['ano'];
        $precio = $_POST['precio'];
        $foto = $_POST['foto'];
        $visibilidad = $_POST['visibilidad'];
        $id_marca = $_POST['id_marca'];
        $id_color = $_POST['referencia'];
        $id_provincia = $_POST['id_provincia'];
        $id_condicion = $_POST['id_condicion'];
        
        if (!empty($_FILES['foto_coche']['name'])){


            $hash = $this->storeImage($_FILES);

            if (!empty($hash)){
            
                if ($this->model->updateCoche([ 
                    'id_coche' => $id_coche,
                    'referencia' => $referencia,
                    'modelo' => $modelo, 
                    'descripcion' => $descripcion, 
                    'puertas' => $puertas, 
                    'ano' => $ano, 
                    'precio' => $precio,  
                    'foto' => $hash,
                    'visibilidad' => $visibilidad, 
                    'id_marca' => $id_marca, 
                    'id_color' => $id_color, 
                    'id_provincia' => $id_provincia, 
                    'id_condicion' => $id_condicion
                    ])) {
                    $mensaje = "Coche actualizada correctamente (nombre y logo)";
                } else {
                    $mensaje = 'Ha habido un error insertando el nuevo logo  (nombre y logo)';
                }
    
            } else {
                $mensaje = "No existe la imagen";
            }

        } else {

            // if($this->model->updateCocheinlogo([ 'id_marca' => $id_marca, 'nombre' => $nombre ])){
            //     $mensaje = "Marca actualizada correctamente (nombre)";
            // }else{
            //     $mensaje = "No se pudo actualizar la marca (nombre)";
            // }

            echo "error 007";

        }

        
        $this->view->mensaje = $mensaje;
        $this->view->render('coche/update');
    }

    // del color
    public function delete($param = null){

        $id_coche = $param;

        if($this->model->deleteCoche($id_coche)){
            $mensaje = "Coche eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar el coche";
        }
        
        $this->view->mensaje = $mensaje;
        $this->view->render('coche/delete');
    }

}

?>