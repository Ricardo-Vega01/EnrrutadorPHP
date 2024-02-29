Este pequeño proyecto muestra la forma de trabajar con el patron de diseño MVC. De igual forma nos muestra como funciona o se estructura un framework php especificamete, aun que no es muy diferente la forma de estructurar respecto a herramientas como NodeJs o Angular.

Para comprender como funciona este tipo de organización debemos saber como funciona y que es exactamente un router.

Haciendo referencia a un router hablando especificamente de redes, este es un dispositivo que permite, limita o niega el acceso de red a ciertos hosts (dispositivos). En programación funciona de la misma forma aun que con un poco de mas propiedades, una de ellas es que nos permite tener mayor seguridad en la manipulacion y extraccion de datos, de igual forma es una herramienta que de gran utilidad a nivel de CEO.

/*Acerca de la estructura*/
A continuacion se explica el listado de directorios presentes en este proyecto.

1. carpeta app:
    Aqui se coloca toda la logica, tambien conocida como logica de negocio. Es donde mediante un controlador podemos invocar vistas, y/o modelos(consultas).

    Cabe mencionar que dentro de esta carpeta se recominda separar vistas de modelos como de controladores con la finalidad de tener mayor organizacion y legibilidad.

2. carpeta config:
    Esta carpeta puede ir tambien dentro de la carpeta app, ya que aqui se almacenan datos sensibles como credenciales a bases de  daros, logueos o llaves de servicios de terceros, la finalidad de esta carpeta es instanciar estos datos en forma de constrabte para que solo se tengan que escribir una sola vez partes especificas de la aplicacion sin comprometer la segurad del proyecto.

3.  carpeta lib
    Al igual que la carpeta config esta puede ir dentro de la carpeta app. Aqui es donde guardaremos librerias ya sean propias o emitidas por alguna comunidad, estas tienen por objetivo interconectar cirtas acciones dentro de la aplicacion, en este caso realizamos una peuqeña libreria que nos ayudará a tener direcciones URL limpias.

4  carpeta public
    En esta carpeta almacenaremos todo lo de dominio publico es decir estilos (css,Sass), acciones (js), imagenes, fuentes. Tambien encontraremos un archivo index.php. A diferencia de lo que usualmente conocemos este index se encarga de cargar lo necesario para el funcionamiento de la aplicacion pues es el archivo que se comunica directamente con la carpeta app para mostrar vistas, datos, realizar consultas, e incluso cambiar de un controlador a otro.

    Por su parte tambien contamos con un archivo .htaccess y son demaciado importantes ya que contienen la configuración tanto del servidor como del comportamiento interno de la aplicacion. Cabe mencionar que aun asi hay que realizar ciertas configuraciones al servidor donde será alojada la aplicacion ya sea Apache, Nginx, entorno cloud o mediante contenedor (Docker).

5   Caroeta router:
    Aqui instanciamos todas la rutas de nuestri proyecto, pues definimos como deberán aparecer en la URL y asu vez lo invocamos el controlador para mostrar el contenido especifico, asi como apuntar hacia la carpeta donde se encuentra esa vista o esos datos a mostrar.

6   Archivo autoload
    Este prermite prceargar todo lo necesario para la comunicacion entre clases y modulos de nuestro proyecto separando. Logrando mantener asi separadas y organizadas las clases en cuestion, por lo que se limita el uso de funciones como include o reuire/require_once.

    Asi automaticamente se cargan todas las clases siempre y cunado exista el archivo o directorio este se podrá llamar, cabe reclacar que el archivo en cuention debe tener el mismo nombre que la clase, de lo controario nunca funcionara.

Este proyecto solo es una plantilla donde podemos trabajar de manera nativa con php cuya finalidad es poder comprender como se trabaja con MVC dentro de un framework como Laravel o Symfony,