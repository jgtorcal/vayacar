<?php

class Database {

    private $host;
    private $database;
    private $username;
    private $password;
    private $charset;

    public function __construct() {
        $this->host = constant('DB_HOST');
        $this->database = constant('DB_NAME');
        $this->username = constant('DB_USER');
        $this->password = constant('DB_PASS');
        $this->charset = constant('DB_CHARSET');
    }

    function connect() {

        try{

            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($connection, $this->username, $this->password, $options);
    
            return $pdo;

        } catch(PDOException $e) {

            print_r('Error connection: ' . $e->getMessage());

        }
    }

}

?>