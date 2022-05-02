<?php

// URL general de la aplicación
define('FRONTURL', 'https://localhost/vayacar/');

// URL general de la aplicación
//define('FRONTURL', 'https://vayacar.local.code/');

/*
Si estás desplegando en una carpeta en localhost (por ejemplo localhost/vayacar) especifica aquí la carpeta:
define('FOLDER_NAME', 'vayacar');

En caso contrario (por ejemplo vayacar.site) déjalo vacío:
define('FOLDER_NAME', '');
*/

// 
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
define('DB_NAME', 'admin_vayacar');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

?>