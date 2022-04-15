<?php

require_once('libs/classes/condicion.php');

class CondicionModel extends Model {


    public function __construct(){

        parent::__construct();

    }


    public function getAll() {

        // Recuperar lista de condiciones
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM condiciones");

            while($row = $query->fetch()){

                $item = new Condicion();

                $item->id_condicion = $row['id_condicion'];
                $item->nombre = $row['nombre'];

                array_push($items, $item);
            }

            return $items;

        } catch(PDOException $e){

            return [];
        }

    }

}
