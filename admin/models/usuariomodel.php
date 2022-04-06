<?php

class UsuarioModel extends Model {

    public function __construct(){

        parent::__construct();

    }

    public function get() {

        // Recuperar lista de usuarios
        $items = [];

        try{

            $query = $this->db->connect()->query("SELECT * FROM usuarios");

            while($row = $query->fetch()){

                $item = new UsuarioController();

                $item->id_usuario = $row['id_usuario'];
                $item->nombre = $row['nombre'];
                $item->email    = $row['email'];
                $item->password  = $row['password'];
                $item->id_rol  = $row['id_rol'];

                array_push($items, $item);
            }

            return $items;

        } catch(PDOException $e){

            return [];
        }

    }

    public function insert($data) {

        // Insertar datos nuevos
        $query = $this->db->connect()->prepare('INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)');

        $query->execute([ 
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);

    }



    public function update($item){
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
    
}

?>