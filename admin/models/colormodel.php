<?php

require_once('libs/classes/color.php');

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

                $item = new Color;
                $item->id_color = $row['id_color'];
                $item->color = $row['color'];

                // Sabemos si el color se usa o no en los coches
                $query_usos = $this->db->connect()->prepare("SELECT COUNT(*) AS contador FROM coches WHERE id_color = :id_color;");
                try{
                    $query_usos->execute(['id_color' => $row['id_color']]);
                    while($row2 = $query_usos->fetch()){
                        $item->usos = $row2['contador'];
                    }
                }catch(PDOException $e){
                    echo $e;
                    return null;
                }

                array_push($items, $item);
            }

            return $items;

        } catch(PDOException $e){

            return [];
        }

        

    }


    public function getById($id_color) {

        // Recuperar color
        $item = new Color();

        $query = $this->db->connect()->prepare("SELECT * FROM colores WHERE id_color = :id_color");

        try{

            $query->execute(['id_color' => $id_color]);

            while($row = $query->fetch()){
                $item->id_color = $row['id_color'];
                $item->color = $row['color'];

                // Sabemos si el color se usa o no en los coches
                $query_usos = $this->db->connect()->prepare("SELECT COUNT(*) AS contador FROM coches WHERE id_color = :id_color;");
                try{
                    $query_usos->execute(['id_color' => $row['id_color']]);
                    while($row2 = $query_usos->fetch()){
                        $item->usos = $row2['contador'];
                    }
                }catch(PDOException $e){
                    echo $e;
                    return null;
                }

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

        $color = $this->getById($id);

        if ($color->usos > 0){
            // Se usa, no se puede borrar
            $mensaje = 0;
        } else {

            // No se usa, se puede borrar
            $query = $this->db->connect()->prepare("DELETE FROM colores WHERE id_color = :id");
            try{
                $query->execute([
                    'id'=> $id,
                ]);
                $mensaje = 1;
            }catch(PDOException $e){
                $mensaje = 2;
            }

        }

        return $mensaje;

        
    }
    
}

?>