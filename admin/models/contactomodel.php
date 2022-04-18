<?php

require_once('libs/classes/contacto.php');
require_once 'models/estadomodel.php';
require_once 'models/cochemodel.php';
require_once 'models/marcamodel.php';

class ContactoModel extends Model {

    public function __construct(){

        parent::__construct();

    }

    public function getAll() {

        // Recuperar lista de contactos
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM contactos");

            while($row = $query->fetch()){

                $item = new Contacto;
                $item->id_contacto = $row['id_contacto'];
                $item->nombre = $row['nombre'];
                $item->telefono = $row['telefono'];
                $item->email = $row['email'];
                $item->mensaje = $row['mensaje'];
                $item->id_estado = $row['id_estado'];
                $item->id_coche = $row['id_coche'];

                // Nombre del tema en vez del ID
                $estado_query = new EstadoModel;
                $estado = $estado_query->getById($item->id_estado);
                $item->estado_name = $estado->nombre;
                $item->estado_color = $estado->color;

                // Marca y modelo
                $coche_query = new CocheModel;
                $coche = $coche_query->getById($item->id_coche);
                $marca_query = new MarcaModel;
                $marca = $marca_query->getById($coche->id_marca);

                $item->marca_name = $marca->nombre;
                $item->modelo = $coche->modelo;

                array_push($items, $item);
            }

            return $items;

        } catch(PDOException $e){

            return [];
        }

        

    }


    public function getById($id_contacto) {

        // Recuperar color
        $item = new Contacto();

        $query = $this->db->connect()->prepare("SELECT * FROM contactos WHERE id_contacto = :id_contacto");

        try{

            $query->execute(['id_contacto' => $id_contacto]);

            while($row = $query->fetch()){

                $item->id_contacto = $row['id_contacto'];
                $item->nombre = $row['nombre'];
                $item->telefono = $row['telefono'];
                $item->email = $row['email'];
                $item->mensaje = $row['mensaje'];
                $item->id_estado = $row['id_estado'];
                $item->id_coche = $row['id_coche'];

                // Marca y modelo
                $coche_query = new CocheModel;
                $coche = $coche_query->getById($item->id_coche);
                $marca_query = new MarcaModel;
                $marca = $marca_query->getById($coche->id_marca);

                $item->marca_name = $marca->nombre;
                $item->modelo = $coche->modelo;

            }

            return $item;

        }catch(PDOException $e){

            return null;

        }

    }


    public function updateContacto($item){

        $query = $this->db->connect()->prepare("UPDATE contactos SET nombre = :nombre, telefono = :telefono, email = :email, mensaje = :mensaje, id_estado = :id_estado WHERE id_contacto = :id_contacto");

        try{
            $query->execute([
                'id_contacto'=> $item['id_contacto'],
                'nombre'=> $item['nombre'],
                'telefono'=> $item['telefono'],
                'email'=> $item['email'],
                'mensaje'=> $item['mensaje'],
                'id_estado'=> $item['id_estado'],
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }
    }


    public function deleteContacto($id){

        // No se usa, se puede borrar
        $query = $this->db->connect()->prepare("DELETE FROM contactos WHERE id_contacto = :id");
        try{
            $query->execute([
                'id'=> $id,
            ]);
            $mensaje = 1;
        }catch(PDOException $e){
            $mensaje = 2;
        }

        return $mensaje;

        
    }





    public function contarContactos(){

        $query = $this->db->connect()->prepare("SELECT COUNT(*) AS contador FROM contactos");
        
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