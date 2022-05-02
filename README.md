# **Instrucciones para el despliegue de la aplicación:**

## 1. Requisitos:

La aplicación utiliza el stack LAMP el cual se puede implementar fácilmente con [XAMPP](https://www.apachefriends.org/download.html).

- **Apache con Mod_rewrite activado** (con XAMPP activado por defecto)
- **PHP 7 o superior**
- **MySQL 5.6 o superior**

 

## 2. Instrucciones de montaje

1. Copiar los archivos del proyecto dentro de la carpeta pública de Apache.

2. Crear la BBDD a partir del archivo SQL que viene en la carpeta principal del proyecto..

3. Editar el archivo config.php del directorio /admin/config de la siguiente forma según el nombre de la carpeta donde se vaya a desplegar el proyecto:

En este archivo, substituye "vayacar" por el nombre (o carpeta) de tu proyecto:

URL general de la aplicación

```php
define('FRONTURL', 'http://localhost/vayacar/');
```

Si estás desplegando en una carpeta en localhost (por ejemplo localhost/vayacar) especifica aquí la carpeta:

```php
define('FOLDER_NAME', 'vayacar');
```

En caso contrario (por ejemplo vayacar.site) déjalo vacío:

```php
define('FOLDER_NAME', '');
```

4. Añade los datos de tu BBDD al final de este archivo:

```php
define('DB_NAME', 'nombre_base_de_datos');
define('DB_HOST', 'host');
define('DB_USER', 'usuario_base-de-datos');
define('DB_PASS', 'password_base_de_datos');
```

 

## 3. Notas

- **URL Fronend**: La URL de tu carpeta principal
  Por ejemplo https://localhost/vayacar
- **URL Backoffice**: La URL de tu carpeta /admin
  Por ejemplo https://localhost/vayacar/admin
- He dejado una carpeta llamada imagenes_test en la raíz del proyecto con imágenes de prueba para añadir coches o marcas.
- El archivo SQL del proyecto se llama admin_vayacar.sql
- He dejado una demo del proyecto totalmente funcional en la siguiente dirección real: https://www.vayacar.site
- Hay 2 usuarios de prueba con diferentes roles
  - [jgtorcal@gmail.com](mailto:jgtorcal@gmail.com) / 1234 (SuperAdministrador)
  - [mike@gmail.com](mailto:mike@gmail.com) / 12345 (Administrador)
- He dejado algunos vehículos y marcas ya creadas con fines demostrativos

