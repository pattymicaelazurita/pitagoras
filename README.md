# Pitagoras
"Pitágoras” es una aplicación multiplataforma la cual está enfocada en ayudar a 
comprender matemáticas y física básica, abierto para todos los públicos. Esta aplicación se 
manejará con un sistema similar a “Duolingo”, por lo cual habrá múltiples retos para el 
usuario para que pueda dominar los temas en base a la práctica. La aplicación otorgará o 
quitará puntos al usuario para que pueda visualizar su progreso. 

Su funcionamiento es interactivo y sencillo de utilizar, además todos los retos son 
generados de manera aleatoria por lo cual será́ necesario meditar la solución del problema 
con cuidado. Con esto las personas que se encuentren en dificultad de aprender, esta 
aplicación servirá́ como introducción a las ciencias numéricas, facilita el aprendizaje al poder 
hacerlo a su propio ritmo, entrar en diferentes niveles de dificultad los cuales se 
desbloquearán conforme a su progreso. Además, siempre habrá́ nuevos desafíos para el 
usuario por si desea repasar en cada nivel, tanto con ejercicios numéricos y teóricos.




## CakePHP Estructura de la aplicación

![Build Status](https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

A continuación la estructura para generar la aplicación basada en  [CakePHP](https://cakephp.org) 4.x.

El origen de código framework se lo puede encontrar en el siguiente enlace: [cakephp/cakephp](https://github.com/cakephp/cakephp).

### Instalación

1. Descargar [Composer](https://getcomposer.org/doc/00-intro.md) o actualizar `composer self-update`.
2. Ejecutar `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

Si el composer está instalado globalmente se debe ejecutar:

```bash
composer create-project --prefer-dist cakephp/app
```

En caso que se desee utilizar una app customizada en base al nombre del directorio (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

Hasta este punto se puede visualizar el homepage por defecto de una aplicación cake PHP
Para configuraciones personalizadas sobre el puerto especifico se deben seguir las siguientes configuraciones (Se debe personalizar de acuerdo a puerto seleccionado):

```bash
bin/cake server -p 8765
```

Visitar `http://localhost:8765` para ver página de bienvenida.

### Actualizar

Las configuraciones adicionales se deberán realizar de manera manual. En este caso se configuro reconocimiento de la bdd en Model en base a conexión PHP y de Xampp

### Configuración

Leer y editar el ambiente directamente `config/app_local.php` y configurar el 
`'Datasources'` 
Adicionalmente se cambian parametros de reconocimeinto en  `config/app.php`.

## Uso de proyecto "Pitagoras"
En esta versión el aplicativo de pitagoras permite realizar acciones CRUD sobre las tablas que en un futuro permitirán dar paso al CORE planteado. Este core tiene por objetivo evaluar el progreso del estudiante desde el usuario tutor. Para esta fase se ha generado usuario administrador "master" que podrá agregar data manualmente en la aplicación. 
