<p align="center"><img src="https://www.eicomunicacion.com/wp-content/uploads/2019/06/logo-UNID-300x135.png" width="250"></p><h1 align="center">Bienvenidos a ERP</h1>Este proyecto nace como un trabajo escolar desarrollado en [Laravel 7.14.1](https://laravel.com/docs/7.x "Laravel 7.14.1") la version más reciente al momento de la publicacion de este repositorio con ciertas espesificaciones de uso.
<h2 align="center">Instalación</h2>
####Requerimientos
1. [Composer](http://getcomposer.org "Composer")
2. PHP en su versión [7.2.5 o más reciente](https://www.php.net/downloads.php "7.2.5 o más reciente")
3. [Git Bash](https://git-scm.com/downloads "Git Bash")

###Clonarlo
```bash
git clone https://github.com/Engellundez/ERP.git
```
Despues de clonarlo deberas copiar el contenido que hay en el archivo **.env.exemple** o en su defecto renombrar este archivo como **.env**.
####Instalar dependenncias
```bash
cd ERP
```
```bash
composer install
```
```bash
php artisan key:generate
```
despues de correr estos comandos es necesario crear la base de datos con el nombre **unioccidente** o en su defecto renombrarla en el archivo **.env**:
```php
DB_CONNECTION=mysql				 //Manejador de base de datos
DB_HOST=127.0.0.1						//Ruta del localhost
DB_PORT=3306							 //Puerto que se usa
DB_DATABASE=unioccidente	   //Nombre de la base de datos
DB_USERNAME=root				   //Usuario en el manejador
DB_PASSWORD=						 //contraseña del usuario en el manejador
```
Una vez que allas creado tu base de datos es momento de correr las migracones con el comando:
```bash
php artisan migrate:fresh --seed
```
de esta manera tendras instalado este repositorio de forma local y listo para usarse.
#####Usuario y contraseña de *super-usuario*
Usuario: angel@hotmail.com
Contraseña: 123456789D

####Seeds de la base de datos
Los Usuarios y contraseñas asi como roles, permisos y su union se encuentran en el archovo ***database/seeds/UserRolSeeder.php***
Asi mismo encontraras las demas seeds en la carpeta ***database/seeds***

#¿Qué contiene este proyecto?
en este proyecto vas a encontrar un desarrollo realizado en laravel y que utiliza las dependencias extras de [Spatie Permission](https://github.com/spatie/laravel-permission "Spatie Permission") y [Laravel Collective HTML](https://github.com/laravelcollective/html "Laravel Collective HTML") para un mejor manejo de roles y permisos
##¿Qué modulos contiene este proyecto?
Este proyecto cuenta con varios modulos vinculados entre si como lo son:
1. Usuarios
1. Roles
1. Permisos
1. Recursos Humanos
1. Entidades (de la republica mexicana)
1. Universidades
1. Departamentos
1. Puestos
1. Carreras
1. Grupos
1. Alumnos
1. Vinculación de alumnos y materias
1. Materias
1. Calificaciones

Cada uno de estos modulos tiene su propio controlador y todos estan protegidos por Autenticacion (inicio de sesión) y control de roles, es recomendable revisar la documentacion tanto de **laravel** como de **spatie** para evitar confuciones.

Todos los archivos de **spatie** los encontras en la carpeta ***vendor/spatie/laravel-permission***

<h2 align="center">Colaboradore</h2>
Desarrollador en jefe: [Angel Lundez](https://github.com/Engellundez "Angel Lundez")
Diseñador de vistas: [Mauricio Diaz](https://github.com/Blasko "Mauricio ")
Bases de datos: [Mario Sanchez](https://github.com/Marioalsr "Mario Sanchez") y [Fernando Porras](https://github.com/Porras2201 "Fernando Porras")
