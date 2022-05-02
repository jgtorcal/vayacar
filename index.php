<?php
// Config del back
require_once 'admin/config/config.php';
// Clase Database
require_once 'admin/libs/database.php';

// Sacamos los contenidos
$db_contenidos = new Database;
$contenidos_array = [];

try{

	$query = $db_contenidos->connect()->query("SELECT * FROM contenidos");

	while($contenidos = $query->fetch()){
		array_push($contenidos_array, $contenidos);
	}

} catch(PDOException $e){

	echo "error contenidos";

}

$content = $contenidos_array[0];

$url = isset($_GET['url']) ? $_GET['url']: null;
$url = rtrim($url, '/');
$url = explode('/', $url);

//print_r($url);


$include ="main.php";
$active = "main";

switch ($url[0]){
	case '':
		$include = 'main.php';
		$active = "main";
		break;
	case 'coches':

		$include = 'coches.php';
		$active = "coches";
		break;

	case 'coche':
		$id_coche = $url[1];
		$include = 'coche.php';
		$active = "coches";
		break;
	case 'quienes-somos':
		$include = 'quienes.php';
		$active = "quienes";
		break;
	case 'contacto':
		$include = 'contacto.php';
		$active = "contacto";
		break;
}

require_once 'header.php';
require_once $include;
include 'footer.php';




