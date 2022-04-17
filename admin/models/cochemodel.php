<?php

require_once('libs/classes/coche.php');
//require_once 'controllers/marcaController.php';
require_once 'models/marcamodel.php';
require_once 'models/colormodel.php';
require_once 'models/provinciamodel.php';
require_once 'models/condicionmodel.php';

class CocheModel extends Model {

    public function __construct(){

        parent::__construct();

    }

    public function getAll() {

        // Recuperar lista de coches
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM coches");

            while($row = $query->fetch()){

                $item = new Coche;

                $item->id_coche = $row['id_coche'];
                $item->referencia = $row['referencia'];
                $item->modelo = $row['modelo'];
                $item->descripcion = $row['descripcion'];
                $item->puertas = $row['puertas'];
                $item->ano = $row['ano'];
                $item->precio = $row['precio'];
                $item->foto = $row['foto'];
                $item->visibilidad = $row['visibilidad'];
                $item->id_marca = $row['id_marca'];
                $item->id_color = $row['id_color'];
                $item->id_provincia = $row['id_provincia'];
                $item->id_condicion = $row['id_condicion'];

                // Nombre del tema en vez del ID
                $marca_query = new MarcaModel;
                $marca = $marca_query->getById($item->id_marca);
                $item->marca_name = $marca->nombre;

                $color_query = new ColorModel;
                $color = $color_query->getById($item->id_color);
                $item->color_name = $color->color;

                $provincia_query = new ProvinciaModel;
                $provincia = $provincia_query->getById($item->id_provincia);
                $item->provincia_name = $provincia->nombre;

                $condicion_query = new CondicionModel;
                $condicion = $condicion_query->getById($item->id_condicion);
                $item->condicion_name = $condicion->nombre;

                //echo '<pre>' . print_r($marca) . '</pre>';
                

                array_push($items, $item);
            }

            return $items;

        } catch(PDOException $e){

            return [];
        }

        

    }


    public function getById($id_coche) {

        // Recuperar coche
        $item = new Coche();

        $query = $this->db->connect()->prepare("SELECT * FROM coches WHERE id_coche = :id_coche");

        try{

            $query->execute(['id_coche' => $id_coche]);

            while($row = $query->fetch()){
                $item->id_coche = $row['id_coche'];
                $item->referencia = $row['referencia'];
                $item->modelo = $row['modelo'];
                $item->descripcion = $row['descripcion'];
                $item->puertas = $row['puertas'];
                $item->ano = $row['ano'];
                $item->precio = $row['precio'];
                $item->foto = $row['foto'];
                $item->visibilidad = $row['visibilidad'];
                $item->id_marca = $row['id_marca'];
                $item->id_color = $row['id_color'];
                $item->id_provincia = $row['id_provincia'];
                $item->id_condicion = $row['id_condicion'];
            }

            return $item;

        }catch(PDOException $e){

            return null;

        }

    }

    public function insertCoche($data) {

        // Insertar datos nuevos
        try {

            $query = $this->db->connect()->prepare('INSERT INTO coches (referencia, modelo, descripcion, puertas, ano, precio, foto, visibilidad, id_marca, id_color, id_provincia, id_condicion) 
            VALUES (:referencia, :modelo, :descripcion, :puertas, :ano, :precio, :foto, :visibilidad, :id_marca, :id_color, :id_provincia, :id_condicion)');

            $query->execute([ 
                'referencia' => $data['referencia'],
                'modelo' => $data['modelo'],
                'descripcion' => $data['descripcion'],
                'puertas' => $data['puertas'],
                'ano' => $data['ano'],
                'precio' => $data['precio'],
                'foto' => $data['foto'],
                'visibilidad' => $data['visibilidad'],
                'id_marca' => $data['id_marca'],
                'id_color' => $data['id_color'],
                'id_provincia' => $data['id_provincia'],
                'id_condicion' => $data['id_condicion']
            ]);

            return true;

        } catch(PDOException $e) {

            return false;

        }

    }



    public function updateCoche($data){

        if (isset($data['foto'])){
            // Query con FOTO
            $query = $this->db->connect()->prepare
            ("UPDATE coches SET
            referencia = :referencia, 
            modelo = :modelo, 
            descripcion = :descripcion, 
            puertas = :puertas, 
            ano = :ano, 
            precio = :precio, 
            foto = :foto, 
            visibilidad = :visibilidad, 
            id_marca = :id_marca, 
            id_color = :id_color, 
            id_provincia = :id_provincia, 
            id_condicion = :id_condicion
            WHERE 
            id_coche = :id_coche");

            try{
                $query->execute([
                    'id_coche' => $data['id_coche'],
                    'referencia' => $data['referencia'],
                    'modelo' => $data['modelo'],
                    'descripcion' => $data['descripcion'],
                    'puertas' => $data['puertas'],
                    'ano' => $data['ano'],
                    'precio' => $data['precio'],
                    'foto' => $data['foto'],
                    'visibilidad' => $data['visibilidad'],
                    'id_marca' => $data['id_marca'],
                    'id_color' => $data['id_color'],
                    'id_provincia' => $data['id_provincia'],
                    'id_condicion' => $data['id_condicion']
                ]);

                return true;

            }catch(PDOException $e){

                return false;

            }
        } else {

            // Query sin foto
            $query = $this->db->connect()->prepare
            ("UPDATE coches SET
            referencia = :referencia, 
            modelo = :modelo, 
            descripcion = :descripcion, 
            puertas = :puertas, 
            ano = :ano, 
            precio = :precio,
            visibilidad = :visibilidad, 
            id_marca = :id_marca, 
            id_color = :id_color, 
            id_provincia = :id_provincia, 
            id_condicion = :id_condicion
            WHERE 
            id_coche = :id_coche");

            try{
                $query->execute([
                    'id_coche' => $data['id_coche'],
                    'referencia' => $data['referencia'],
                    'modelo' => $data['modelo'],
                    'descripcion' => $data['descripcion'],
                    'puertas' => $data['puertas'],
                    'ano' => $data['ano'],
                    'precio' => $data['precio'],
                    'visibilidad' => $data['visibilidad'],
                    'id_marca' => $data['id_marca'],
                    'id_color' => $data['id_color'],
                    'id_provincia' => $data['id_provincia'],
                    'id_condicion' => $data['id_condicion']
                ]);

                return true;

            }catch(PDOException $e){

                echo $e;
                return false;

            }
        }
    }

    public function deleteCoche($id){

        $query = $this->db->connect()->prepare("DELETE FROM coches WHERE id_coche = :id");
        
        try{

            $query->execute([
                'id'=> $id,
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }
    }


    public function contarCoches(){

        $query = $this->db->connect()->prepare("SELECT COUNT(*) AS contador FROM coches");
        
        try{
            $query->execute();
            while($row = $query->fetch()){
                $usos_num = $row['contador'];
            }
        }catch(PDOException $e){
            echo $e; 
        }

        return $usos_num;

    }
    
}

?>