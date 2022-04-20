<?php

define('FRONTURL', 'http://localhost/vayacar/');
define('FOLDER_NAME', 'vayacar');

/* CONSTANTES APP */
define('PROJECT_FOLDER', $_SERVER['DOCUMENT_ROOT'].'/'.FOLDER_NAME.'/');
define('APPURL', FRONTURL .'admin/');
define('PUBLICURL', APPURL . 'views/public/');// Carpeta donde están los CSS para el layout
define('UPLOADS_URL', PROJECT_FOLDER.'admin/views/public/uploads/logos/');// Carpeta para subir los logos
define('UPLOADS_COCHES_URL', PROJECT_FOLDER.'admin/views/public/uploads/coches/');// Carpeta para subir las fotos de los coches
define('PUBLIC_UPLOADS_URL', APPURL.'views/public/uploads/logos/');// Carpeta pública donde están las imágenes de logos para las vistas
define('PUBLIC_UPLOADS_COCHES_URL', APPURL.'views/public/uploads/coches/');// Carpeta pública donde están las imágenes de los coches para las vistas

/* CONSTANTES DB */
define('DB_NAME', 'vayacar');
define('DB_HOST', 'departamentodeinternet.com');
define('DB_USER', 'vayacaruser');
define('DB_PASS', 'zGve18%1');
define('DB_CHARSET', 'utf8mb4');

?>