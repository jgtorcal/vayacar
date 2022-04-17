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
                
                $item = new Marca;
                $item->id_marca = $row['id_marca'];
                $item->nombre = $row['nombre'];
                $item->logo = $row['logo'];

                //Sabemos si la marca se usa o no en los coches
                $query_usos = $this->db->connect()->prepare("SELECT COUNT(*) AS contador FROM coches WHERE id_marca = :id_marca;");
                try{
                    $query_usos->execute(['id_marca' => $row['id_marca']]);
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

                // Sabemos si la marca se usa o no en los coches
                $query_usos = $this->db->connect()->prepare("SELECT COUNT(*) AS contador FROM coches WHERE id_marca = :id_marca;");
                try{
                    $query_usos->execute(['id_marca' => $row['id_marca']]);
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

    public function updateMarcasinlogo($item){

        $query = $this->db->connect()->prepare("UPDATE marcas SET nombre = :nombre WHERE id_marca = :id_marca");

        try{
            $query->execute([
                'id_marca'=> $item['id_marca'],
                'nombre' => $item['nombre']
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }
    }



    public function deleteMarca($id){

        $marca = $this->getById($id);

        if ($marca->usos > 0){
            // Se usa, no se puede borrar
            $mensaje = 0;
        } else {

            // No se usa la marca, se puede borrar
            $query = $this->db->connect()->prepare("DELETE FROM marcas WHERE id_marca = :id");
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



    public function contarMarcas(){

        $query = $this->db->connect()->prepare("SELECT COUNT(*) AS contador FROM marcas");
        
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