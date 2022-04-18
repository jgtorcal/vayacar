<?php
require_once 'config.php';

require_once 'admin/config/config.php';
require_once 'admin/libs/database.php';

require_once 'header.php';

$url = isset($_GET['url']) ? $_GET['url']: null;
$url = rtrim($url, '/');
$url = explode('/', $url);

//print_r($url);

switch ($url[0]){
	case '':
		include 'main.php';
		break;
	case 'coches':
		include 'coches.php';
		break;
	case 'coche':
		$id_coche = $url[1];
		include 'coche.php';
		break;
	case 'quienes-somos':
		include 'quienes.php';
		break;
	case 'contacto':
		include 'contacto.php';
		break;
}

include 'footer.php';
?>