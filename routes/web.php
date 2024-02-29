<?php

//Aqui podremos definir rutas y determinar lo que se va a mostrar medianndo te una funcion o bien llamando al controlador de una vista
//Llamada de librerias o enrutador
use lib\Route;
use app\controller\homeController;

Route::get('/', function(){
    return "HOla desde la raiz";
});


Route::get('/about', function () {
    return "Pagina about";
});


Route::get('/login', function () {
    return "Hola desde el login";
});

Route::get('/categoria/:especificacion/', function ($content) {
    return "Hola desde el content: " . $content;
});

Route::lanzador();
