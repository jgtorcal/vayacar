<?php

require_once('libs/classes/marca.php');

class MarcaModel extends Model {

    public function __construct(){

        parent::__construct();

    }

    public function getAll() {

        // Recuperar lista de marcas
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM marcas");

            while($row = $query->fetch()){

                //$item = new ColorController();
                $item = new Marca;
                $item->id_marca = $row['id_marca'];
                $item->nombre = $row['nombre'];
                $item->logo = $row['logo'];

                array_push($items, $item);
            }

            // echo '<pre>';
            // print_r($items);
            // echo '</pre>';

            return $items;

        } catch(PDOException $e){

            return [];
        }

        

    }


    public function getById($id_marca) {

        // Recuperar marca
        $item = new Marca();

        $query = $this->db->connect()->prepare("SELECT * FROM marcas WHERE id_marca = :id_marca");

        try{

            $query->execute(['id_marca' => $id_marca]);

            while($row = $query->fetch()){
                $item->id_marca = $row['id_marca'];
                $item->nombre = $row['nombre'];
                $item->logo = $row['logo'];
            }

            return $item;

        }catch(PDOException $e){

            return null;

        }

    }

    public function insertMarca($data) {

        // Insertar datos nuevos
        try {

            $query = $this->db->connect()->prepare('INSERT INTO marcas (nombre, logo) VALUES (:nombre, :logo)');

            $query->execute([ 
                'nombre' => $data['nombre'],
                'logo' => $data['logo']
            ]);

            return true;

        } catch(PDOException $e) {

            return false;

        }

    }



    public function updateMarca($item){

        $query = $this->db->connect()->prepare("UPDATE marcas SET nombre = :nombre, logo = :logo WHERE id_marca = :id_marca");

        try{
            $query->execute([
                'id_marca'=> $item['id_marca'],
                'nombre' => $item['nombre'],
                'logo' => $item['logo']
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }
    }



    public function deleteMarca($id){

        $query = $this->db->connect()->prepare("DELETE FROM marcas WHERE id_marca = :id");
        
        try{

            $query->execute([
                'id'=> $id,
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }
    }
    
}

?>