<?php

require_once('libs/classes/estado.php');

class EstadoModel extends Model {


    public function __construct(){

        parent::__construct();

    }


    public function getAll() {

        // Recuperar lista de estados de contactos
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM estados");

            while($row = $query->fetch()){

                $item = new Estado();

                $item->id_estado = $row['id_estado'];
                $item->nombre = $row['nombre'];
                $item->color = $row['color'];

                array_push($items, $item);
            }

            return $items;

        } catch(PDOException $e){

            return [];
        }

    }


    public function getById($id_estado) {

        // Recuperar estado
        $item = new Estado();

        $query = $this->db->connect()->prepare("SELECT * FROM estados WHERE id_estado = :id_estado");

        try{

            $query->execute(['id_estado' => $id_estado]);

            while($row = $query->fetch()){
                $item->id_estado = $row['id_estado'];
                $item->nombre = $row['nombre'];
                $item->color = $row['color'];
            }

            return $item;

        }catch(PDOException $e){

            return null;

        }

    }

}
