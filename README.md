# vayacar
Repositorio del Proyecto final DAW

## Instrucciones de montaje

1. Crear la BBDD a partir del archivo SQL que viene en el root de este repo.

2. Hacer un GIT clone o copiar los archivos del proyecto dentro de la carpeta pública de Apache.

3. Editar el archivo config.php del directorio /admin/config de la siguiente forma según el nombre de la carpeta


Substituye "vayacar" por el nombre (y carpeta) de tu proyecto.

```
// URL general de la aplicación
define('FRONTURL', 'http://localhost/vayacar/');

/*
Si estás desplegando en una carpeta en localhost (por ejemplo localhost/vayacar) especifica aquí la carpeta:
define('FOLDER_NAME', 'vayacar');

En caso contrario (por ejemplo vayacar.site) déjalo vacío:
define('FOLDER_NAME', '');
*/
define('FOLDER_NAME', 'vayacar');
```