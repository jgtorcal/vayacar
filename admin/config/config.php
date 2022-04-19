<?php

define('PROJECT_FOLDER', 'vayamec');
define('FRONTURL', 'http://localhost/vayamec/');

/* CONSTANTES APP */
define('APPURL', FRONTURL .'admin/');
define('PUBLICURL', APPURL . 'views/public/');// Carpeta donde están los CSS para el layout
define('UPLOADS_URL', PROJECT_FOLDER.'/admin/views/public/uploads/');// Carpeta para subir los logos
define('UPLOADS_COCHES_URL', PROJECT_FOLDER.'/admin/views/public/uploads/coches/');// Carpeta para subir las fotos de los coches
define('PUBLIC_UPLOADS_URL', APPURL.'views/public/uploads/');// Carpeta pública donde están las imágenes de logos para las vistas
define('PUBLIC_UPLOADS_COCHES_URL', APPURL.'views/public/uploads/coches/');// Carpeta pública donde están las imágenes de los coches para las vistas

/* CONSTANTES DB */
define('DB_NAME', 'vayamec');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

?>