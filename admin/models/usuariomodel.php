<?php

class UsuarioModel extends Model {

    public function __construct(){

        parent::__construct();

    }

    public function getAll() {

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


    public function getByEmail($email) {

        // Recuperar info del usuario por email
        // Usado para el login y auth
        $items = [];

        try{

            $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE email = :email');
            $query->execute([
                'email' => $email
            ]);

            while($row = $query->fetch()){

                require_once 'controllers/usuarioController.php';
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

    public function getById($id_usuario) {

        // Recuperar color
        $item = new UsuarioController();

        $query = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE id_usuario = :id_usuario");

        try{

            $query->execute(['id_usuario' => $id_usuario]);

            while($row = $query->fetch()){
                $item->id_usuario = $row['id_usuario'];
                $item->nombre = $row['nombre'];
                $item->email    = $row['email'];
                $item->password  = $row['password'];
                $item->id_rol  = $row['id_rol'];
            }

            return $item;

        }catch(PDOException $e){

            return null;

        }

    }

    public function insertUsuario($data) {

        // Insertar datos nuevos
        $query = $this->db->connect()->prepare('INSERT INTO usuarios (nombre, email, password, id_rol) VALUES (:nombre, :email, :password, :id_rol)');

        try{
            $query->execute([ 
                'nombre' => $data['nombre'],
                'email' => $data['email'],
                'password' => $data['password'],
                'id_rol' => $data['id_rol']
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }

    }



    public function updateUsuario($item){

        $query = $this->db->connect()->prepare("UPDATE usuarios SET nombre = :nombre, email = :email, password = :password, id_rol = :id_rol WHERE id_usuario = :id_usuario");

        try{
            $query->execute([
                'id_usuario'=> $item['id_usuario'],
                'nombre' => $item['nombre'],
                'email' => $item['email'],
                'password' => $item['password'],
                'id_rol' => $item['id_rol']
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }
    }


    public function deleteUsuario($id){

        $query = $this->db->connect()->prepare("DELETE FROM usuarios WHERE id_usuario = :id");
        
        try{

            $query->execute([
                'id'=> $id,
            ]);

            return true;

        }catch(PDOException $e){

            return false;

        }
    }

    public function contarUsuarios(){

        $query = $this->db->connect()->prepare("SELECT COUNT(*) AS contador FROM usuarios");
        
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