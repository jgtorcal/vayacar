<?php

if ( !empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['mensaje']) && !empty($_POST['id_coche']) ) {

    // Config DB
    require_once 'admin/config/config.php';
    // Clase Database
    require_once 'admin/libs/database.php';


    $db = new Database;
    // Insertar datos nuevos
    try {

        $query = $db->connect()->prepare('INSERT INTO contactos (nombre, telefono, email, mensaje, id_estado, id_coche) 
        VALUES (:nombre, :telefono, :email, :mensaje, :id_estado, :id_coche)');

        $query->execute([ 
            'nombre' => $_POST['nombre'],
            'telefono' => $_POST['telefono'],
            'email' => $_POST['email'],
            'mensaje' => $_POST['mensaje'],
            'id_estado' => 1,
            'id_coche' => $_POST['id_coche'],
        ]);

        echo "Formulario recibdo correctamente, en breve nos pondremos en contacto.";

    } catch(PDOException $e) {
    }

} else {

    echo "Ha habido un error enviando el formulario.";

}



?>