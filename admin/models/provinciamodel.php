<?php

require_once('libs/classes/provincia.php');

class ProvinciaModel extends Model {


    public function __construct(){

        parent::__construct();

    }


    public function getAll() {

        // Recuperar lista provincias
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM provincias");

            while($row = $query->fetch()){

                $item = new Provincia();

                $item->id_provincia = $row['id_provincia'];
                $item->nombre = $row['nombre'];

                array_push($items, $item);
            }

            return $items;

        } catch(PDOException $e){

            return [];
        }

    }

}
