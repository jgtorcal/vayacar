<?php

require_once('libs/classes/contenido.php');

class ContenidoModel extends Model {

    public function __construct(){

        parent::__construct();

    }

    public function getAll() {

        // Recuperar el contenido
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM contenidos");

            while($row = $query->fetch()){
                
                $item = new Contenido;
                $item->telefono = $row['telefono'];
                $item->email = $row['email'];
                $item->direccion = $row['direccion'];
                $item->mapa = $row['mapa'];
                $item->quienes_somos = $row['quienes_somos'];

                array_push($items, $item);
            }

            return $items;

        } catch(PDOException $e){

            return [];
        }

        

    }


    public function updateContenido($item){

        

        $query = $this->db->connect()->prepare("UPDATE contenidos 
        SET telefono = :telefono, 
        email = :email,
        direccion = :direccion,
        mapa = :mapa,
        quienes_somos = :quienes_somos");

        try{
            $query->execute([
                'telefono'=> $item['telefono'],
                'email'=> $item['email'],
                'direccion'=> $item['direccion'],
                'mapa'=> $item['mapa'],
                'quienes_somos'=> $item['quienes_somos']
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }
    }
    
}

?>