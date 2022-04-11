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

}

?>