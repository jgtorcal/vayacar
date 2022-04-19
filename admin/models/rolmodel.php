<?php

require_once('libs/classes/rol.php');

class RolModel extends Model {


    public function __construct(){

        parent::__construct();

    }


    public function getAll() {

        // Recuperar lista de roles
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM roles");

            while($row = $query->fetch()){

                $item = new Rol();

                $item->id_rol = $row['id_rol'];
                $item->nombre = $row['nombre'];

                array_push($items, $item);
            }

            return $items;

        } catch(PDOException $e){

            return [];
        }

    }



    public function getById($id_rol) {

        // Recuperar rol
        $item = new Rol();

        $query = $this->db->connect()->prepare("SELECT * FROM roles WHERE id_rol = :id_rol");

        try{

            $query->execute(['id_rol' => $id_rol]);

            while($row = $query->fetch()){
                $item->id_rol = $row['id_rol'];
                $item->nombre = $row['nombre'];
            }

            return $item;

        }catch(PDOException $e){

            return null;

        }

    }

}

?>