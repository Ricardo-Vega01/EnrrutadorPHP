<?php
//Precarga de clases
spl_autoload_register(function ($evento) {
    //Visualizacion en rutas
    $ruta = '../' . str_replace('\\', DIRECTORY_SEPARATOR, $evento) . '.php';
    //COmprobacion de existencia de rutas
    if (file_exists($ruta)) {
        require_once $ruta;
    }else {
        die("No se encontro el archivo". $evento);
    }
});
