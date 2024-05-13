# Prueba técnica para ITGallery
=================================
Proyecto realizado con Symfony 6.4 y Tailwind CSS.

## Briefing
[Layout mockups](https://app.zeplin.io/projects)

[Briefing](https://itgallery.notion.site/Prueba-t-cnica-LAMP-ITGallery-377144665a6c43dd978967c1a8b98807)

## Requerimientos
* PHP 8.2+
* Composer 2.0+
* Git 2.0+

## Descargar, instalar y lanzar el proyecto
### Descargar
Clonar el proyecto desde Github:
~~~
git clone https://github.com/albertarques/itgallery.git
~~~

### Instalar
Instalar dependencias:
~~~
composer install
~~~

En el caso de no disponer de Composer, instalar desde su sitio web:

[https://getcomposer.org/](https://getcomposer.org/)

### Lanzando el proyecto
Para lanzar el proyecto debemos tener en cuenta lanzar el servidor de Symfony así como el compilador de Tailwind.

Lanzar el servidor de Symfony en un entorno local:
~~~
symfony serve
~~~

Lanzar el compilador de Tailwind CSS:
~~~
php bin/console tailwind:build --watch
~~~

**ALERT**
-- TODO: Add Tailwind CSS worker to symfony serve command.


Accediendo al front-end desde el navegador web:
~~~
https://127.0.0.1:8000
~~~

Accediendo al backoffice:
~~~
https://127.0.0.1:8000/admin
~~~