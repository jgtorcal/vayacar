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

    
    public function getById($id_condicion) {

        // Recuperar marca
        $item = new Condicion();

        $query = $this->db->connect()->prepare("SELECT * FROM condiciones WHERE id_condicion = :id_condicion");

        try{

            $query->execute(['id_condicion' => $id_condicion]);

            while($row = $query->fetch()){
                $item->id_condicion = $row['id_condicion'];
                $item->nombre = $row['nombre'];
            }

            return $item;

        }catch(PDOException $e){

            return null;

        }

    }

}
