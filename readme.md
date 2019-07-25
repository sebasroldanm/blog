<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Blog Institucional

Sistema de Información para noticias - UdeC Facatativá

### Requerimientos

* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* MySQL >= 5.7.*
* <a href="https://getcomposer.org/">Composer</a>

### Instalación

El proyecto esta desarrollado en [Laravel 5.8](https://laravel.com/docs/5.8/)

```sh
"Los puntos con simbolo ($) son comandos desde consola
 ubicado en la ruta del proyecto (C:\xampp\htdocs\Siaaf)"
 
1- Clonar proyecto desde GitKraken

2- Inicializar GifFlow y hacer Pull con la rama develop
   (rama la cual se trabajara en el proyecto)
   
3. $ composer install  

4- Copiar el archivo .env.example 
   (.env - copia.example) y cambiar el nombre a .env 
   
5- Dejar la configuracion DB de developer
   y del modulo asignado (Eliminar los demas modulos) ejemplo
   
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=blog
    DB_USERNAME=root
    DB_PASSWORD=secret

5- Crear la base de datos con el respectivo nombre asignado en .env	
   y configurar el archivo .env ejemplo
   
   DB blog
   
6- $ php artisan key:generate
7- $ php artisan storage:link
8- Migrar las bases de datos de developer y el modulo asignado ejemplo
   
    $ php artisan migrate 

9- $ php artisan db:seed 

```

### Herramientas

* <a href="https://github.com/siaaf-udec/dashboard-template">Plantilla Base Metronic Material Theme</a>
* <a href="https://education.github.com/pack">GitHub Student Pack</a>
* <a href="https://www.gitkraken.com/">GitKraken</a>
* <a href="https://siaaf-cit.slack.com/">Canal de Comunicación de Notificaciones</a>
* <a href="http://codeship.com/">Codeship, pruebas de integración contínua</a>


### Material de Apoyo

* <a href="https://styde.net/">Styde</a>
* <a href="https://www.youtube.com/channel/UC07xim4Gg8kOk3uZwMrGNeQ/playlists">YouTube - Raul Palacios</a>
* <a href="https://laravel.com/docs/5.4">Documentación Laravel 5.4</a>
* <a href="https://mailtrap.io/">Pruebas de Email</a>
* <a href="https://wkhtmltopdf.org/downloads.html">Binarios Snappy</a>
* <a href="https://github.com/MicrosoftArchive/redis/releases">Redis Windows</a>
* <a href="https://nodejs.org/en/">Node.js</a>

### Documentos
* <a href="http://es.presidencia.gov.co/dapre/DocumentosSIGEPRE/L-TI-12-denominacion-bases_de_datos.pdf">Denominacion Base de Datos</a>
* <a href="https://prezi.com/e9map5v-izuu/diagrama-de-caso-de-uso-y-diagrama-de-actividades/">Diagramas</a>
* <a href="https://msdn.microsoft.com/es-es/library/bb972214.aspx">Guia UML</a>
* <a href="http://www-2.dc.uba.ar/materias/isoft1/Apuntes/DiagramasDeActividad.pdf">Diagramas de Actividad</a>
* <a href="http://www.cyta.com.ar/ta0604/v6n4a1.htm">Procesos del Negocio a los Casos de Uso</a>
