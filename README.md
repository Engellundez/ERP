<p align="center"><img src="https://www.eicomunicacion.com/wp-content/uploads/2019/06/logo-UNID-300x135.png" width="250"></p><h1 align="center">Bienvenidos a ERP</h1>
<p>Este proyecto nace como un trabajo escolar desarrollado en <a href="https://laravel.com/docs/7.x">Laravel 7.14.1</a> la version más reciente al momento de la publicacion de este repositorio con ciertas espesificaciones de uso.</p>
<h2 align="center">Instalación</h2>
<h4>Requerimientos</h4>
<ol>
    <li><a href="http://getcomposer.org">Composer</a></li>
    <li>PHP en su versión <a href="https://www.php.net/downloads.php">7.2.5 o mas reciente</a></li>
    <li><a href="https://git-scm.com/downloads">Git Bash</a></li>
</ol>

<h3>Clonarlo</h3>

```bash
git clone https://github.com/Engellundez/ERP.git
```

<p>Despues de clonarlo deberas copiar el contenido que hay en el archivo <b>.env.exemple</b> o en su defecto renombrar este archivo como <b>.env</b>.</p>
<h4>Instalar dependenncias</h4>

```bash
cd ERP
```

```bash
composer install
```

```bash
php artisan key:generate
```

<p>despues de correr estos comandos es necesario crear la base de datos con el nombre <b>unioccidente</b> o en su defecto renombrarla en el archivo <b>.env</b>:</p>

```php
DB_CONNECTION=mysql	            //Manejador de base de datos
DB_HOST=127.0.0.1	            //Ruta del localhost
DB_PORT=3306			        //Puerto que se usa
DB_DATABASE=unioccidente        //Nombre de la base de datos
DB_USERNAME=root	            //Usuario en el manejador
DB_PASSWORD=		            //contraseña del usuario en el manejador
```

<p>Una vez que allas creado tu base de datos es momento de correr las migracones con el comando:</p>

```bash
php artisan migrate:fresh --seed
```

<p>De esta manera tendras instalado este repositorio de forma local y listo para usarse.</p>
<h4>Usuario y contraseña de <em>super-usuario</em></h4>
<ul>
    <li>Usuario: angel@hotmail.com</li>
    <li>Contraseña: 123456789D</li>
</ul>
<h4>Seeds de la base de datos</h4>
<p>Los Usuarios y contraseñas asi como roles, permisos y su union se encuentran en el archovo <b><em>database/seeds/UserRolSeeder.php</em></b></p>
<p>Asi mismo encontraras las demas seeds en la carpeta <b><em>database/seeds</em></b></p>

<h1>¿Qué contiene este proyecto?</h1>
<p>En este proyecto vas a encontrar un desarrollo realizado en laravel y que utiliza las dependencias extras de <a href="https://github.com/spatie/laravel-permission">Spatie Permission</a> y <a href="https://github.com/laravelcollective/html">Laravel Collective HTML</a> para un mejor manejo de roles y permisos</p>
<h2>¿Qué modulos contiene este proyecto?</h2>
<p>Este proyecto cuenta con varios modulos vinculados entre si como lo son:</p>
<ol>
    <li>Usuarios</li>
    <li>Roles</li>
    <li>Permisos</li>
    <li>Recursos Humanos</li>
    <li>Entidades (de la republica mexicana)</li>
    <li>Universidades</li>
    <li>Departamentos</li>
    <li>Puestos</li>
    <li>Carreras</li>
    <li>Grupos</li>
    <li>Alumnos</li>
    <li>Vinculación de alumnos y materias</li>
    <li>Materias</li>
    <li>Calificaciones</li>
</ol>
<p>
Cada uno de estos modulos tiene su propio controlador y todos estan protegidos por Autenticacion (inicio de sesión) y control de roles, es recomendable revisar la documentacion tanto de <b>laravel</b> como de <b>spatie</b> para evitar confuciones.</p>

<p>Todos los archivos de <b>spatie</b> los encontras en la carpeta <b><em>vendor/spatie/laravel-permission</em><b></p>

<h2 align="center">Colaboradore</h2>
<ul>
    <li>Desarrollador en jefe: <a href="https://github.com/Engellundez">Angel Lundez</a></li>
    <li>Diseñador de vistas: <a href="https://github.com/Blasko">Mauricio Dominguez</a></li>
    <li>Bases de datos: <a href="https://github.com/Marioalsr">Mario Sanchez</a> y <a href="https://github.com/Porras2201">Fernando Porras</a>.</li>
</ul>
