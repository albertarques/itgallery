# Prueba técnica para ITGallery
=================================

Proyecto realizado con Symfony 6.4

## Briefing
[Layout mockups](https://app.zeplin.io/projects)

[Briefing](https://itgallery.notion.site/Prueba-t-cnica-LAMP-ITGallery-377144665a6c43dd978967c1a8b98807)

## Requerimientos
* PHP 8.2+
* Composer 2.0+
* Git 2.0+

## Bundles
* [StofDoctrineExtensionsBundle](https://github.com/stof/StofDoctrineExtensionsBundle)
* [AliceBundle](https://github.com/theofidry/AliceBundle)
* [Gedmo Doctrine extensions ](https://github.com/doctrine-extensions/DoctrineExtensions/blob/main/doc/symfony.md)
* [Easy Admin](https://symfony.com/bundles/EasyAdminBundle/current/index.html)

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

### Crear la base de datos
Es necesario crear la base de datos para poder arrancar el proyecto:
~~~
php bin/console doctrine:database:create --env=test
php bin/console doctrine:schema:update --complete --force --env=test
~~~

Si además queremos cargar algunos datos preconfigurados (fixtures):
~~~
php bin/console hautelook:fixtures:load --no-interaction --env=test
~~~

### Lanzando el proyecto
Para acceder al proyecto debemos lanzar el servidor de Symfony.

Lanzar el servidor de Symfony en un entorno local:
~~~
symfony serve
~~~

Accediendo al backoffice:
~~~
https://127.0.0.1:8000/admin
~~~