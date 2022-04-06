<?php

class ColorModel extends Model {

    public function __construct(){

        parent::__construct();

    }

    public function getAll() {

        // Recuperar lista de colores
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM colores");

            while($row = $query->fetch()){

                $item = new ColorController();

                $item->id_color = $row['id_color'];
                $item->color = $row['color'];

                array_push($items, $item);
            }

            return $items;

        } catch(PDOException $e){

            return [];
        }

    }


    public function getById($id_color) {

        // Recuperar color
        $item = new ColorController();

        $query = $this->db->connect()->prepare("SELECT * FROM colores WHERE id_color = :id_color");

        try{

            $query->execute(['id_color' => $id_color]);

            while($row = $query->fetch()){
                $item->id_color = $row['id_color'];
                $item->color = $row['color'];
            }

            return $item;

        }catch(PDOException $e){

            return null;

        }

    }

    public function insertColor($data) {

        // Insertar datos nuevos
        try {

            $query = $this->db->connect()->prepare('INSERT INTO colores (color) VALUES (:color)');

            $query->execute([ 
                'color' => $data['color']
            ]);

            return true;

        } catch(PDOException $e) {

            return false;

        }

    }



    public function updateColor($item){

        $query = $this->db->connect()->prepare("UPDATE colores SET color = :color WHERE id_color = :id_color");

        try{
            $query->execute([
                'id_color'=> $item['id_color'],
                'color'=> $item['color']
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }
    }



    public function deleteColor($id){

        $query = $this->db->connect()->prepare("DELETE FROM colores WHERE id_color = :id");
        
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