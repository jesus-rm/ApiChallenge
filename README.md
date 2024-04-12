<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# **Api Challenge - RapidAuto**

<p align="center">
<a href="https://laravel.com/"><img src="https://img.shields.io/badge/Laravel-v11.3.1-red?logo=laravel" alt="Laravel"></a>
<a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-^8.2.17-9cf?logo=php" alt="PHP"></a>
<a href="https://nodejs.org/en/"><img src="https://img.shields.io/badge/Node-v20.11.1-success?logo=nodedotjs" alt="NodeJS"></a>
<a href="https://getbootstrap.com/"><img src="https://img.shields.io/badge/Bootstrap%20-^5.3.3-blueviolet?logo=bootstrap" alt="Bootstrap"></a>
<a href="https://vitejs.dev/"><img src="https://img.shields.io/badge/Vite-v5.0-blue?logo=vite" alt="Vite"></a>
</p>
<br>

## **Sobre el proyecto**

API Challenge es una aplicación web desarrollada como una Prueba para la vacante de RapidAuto como programador en Laravel & React Native.

> Consiste en consumir una API (en este caso se consumió la API JSONPlaceholder) y almacenar los datos obtenidos en una base de datos para su correspondiente uso.


#### Paquetes y/o librerías adicionales

En la siguiente tabla se muestran los paquetes o librerías agregados para desarrollar la aplicación web.

| Nombre | Version |
|---- |---- |
|[Laravel UI](https://github.com/laravel/ui)| 4.5.1|
|[Laravel Lang (lang, attributes, publisher)](https://laravel-lang.com/)|(15.1, 2.10, 16.3)|

En cuanto a la plantilla usada, se menciona a continuación.

| Plantilla | Plataforma |
|---- |---- |
|[NiceAdmin](https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/)| [BootstrapMade](https://bootstrapmade.com/)|


## **Configuración**

#### 1. Instalación de dependencias

Una vez que haya descargado o clonado el presente repositorio, abra una terminal en la carpeta raíz del proyecto y ejecute el siguiente comando para instalar todas las dependencias de PHP que están definidas en el archivo composer.json:

```bash
composer install
```

#### 2. Configurar archivo de entorno (.env):

Copia el archivo .env.example y renómbralo a .env. Este archivo contiene la configuración específica de tu entorno, como las credenciales de la base de datos y las configuraciones de correo electrónico.

Asegúrate de configurar correctamente este archivo según tu entorno local.

#### 3. Generar clave de aplicación (app_key):

Ejecuta el siguiente comando para generar una nueva clave de aplicación en el archivo .env. Esta clave se utiliza para cifrar los datos de sesión y debe ser única para cada proyecto.

```bash
php artisan key:generate
```

#### 4. Ejecutar migraciones de base de datos:

Dado que la aplicación web utiliza una base de datos (MySQL/MariaDB), ejecuta las migraciones de base de datos para crear las tablas necesarias en tu base de datos local. Para ello,  ejecuta el siguiente comando:

```bash
php artisan migrate
```

#### 5. Iniciar servidor local:

Para ejecutar el proyecto en tu servidor local, inicia los servicios necesarios (apache/nginx, mysql/mariadb). Recuerda que para consultar la base de datos se requiere de un cliente como HeidiSQL, PhpMyAdmin, etc.


## **Novedad Laravel 11**
Con la última versión de Laravel, ahora es posible aprovechar el soporte directo con SQLite, lo que hace que sea aún más fácil ejecutar la aplicación web.

Si no cuenta con un entorno de desarrollo local, simplemente configure el archivo .env para utilizar SQLite como base de datos predeterminada de la siguiente manera:

```bash
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```
Después ejecute las migraciones con el siguiente comando:

```bash
php artisan migrate
```
Finalmente, para ejecutar la aplicación web inicie el servidor local que provee Laravel:

```bash
php artisan serve
```

## **Arquitectura y decisiones de diseño**
La arquitectura utilizada en esta aplicación web se basa en un patrón de diseño conformado de tres partes:

- **Presentación**: se implementa una interfaz de usuario que permite a los usuarios interactuar con la aplicación y ver los datos en un dashboard. Se utilizan tecnologías web como HTML, CSS, JS y algunas librerias adicionales, junto con el framework Laravel para el backend.

- **Lógica de negocio**:  se procesan y manipulan los datos recibidos de la API para adaptarlos a las necesidades específicas de la aplicación. En este caso, se realizan transformaciones y validaciones según sea necesario para preparar los datos para su almacenamiento y presentación.

- **Acceso a datos**: se interactúa con la bases de datos (MySQL) para almacenar y recuperar los datos. Se utilizan modelos Eloquent en Laravel para definir la estructura de los datos y realizar operaciones de lectura y escritura.

Algunas decisiones de diseño tomadas incluyen:

- **Uso de Laravel como framework**

- **Uso de modelos Eloquent**: para interactuar con las bases de datos se utilizaron los modelos Eloquent de Laravel ya que proporcionan una forma intuitiva y conveniente de trabajar.

- **Consumo de API**: se consume la API externa proporcionada y  se procesan los datos recibidos antes de almacenarlos en la base de datos. Esto permite una mayor modularidad y evita problemas como la duplicidad.

- **Soporte para múltiples bases de datos**: Dado que se usa Eloquent, la aplicación web funciona y es compatible con diferentes tipos de bases de datos (por ejemplo MySQL, MariaDB y SQLite), lo que proporciona flexibilidad para su uso y/o ejecución.


## Licencia

El framework de Laravel es de código abierto, bajo la [Licencia MIT](https://opensource.org/licenses/MIT)
