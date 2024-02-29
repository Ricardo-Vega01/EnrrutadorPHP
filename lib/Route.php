<?php

namespace lib;

class Route
{

    private static $routes = [];
    
    //Para rutas de tipo Get => De dominio publico
    public static function get($uri, $callback)
    {
        $uri = trim($uri, '/');
        self::$routes['GET'][$uri] = $callback;
    }

    //Para rutas de tipo POST => Para tratar información delicada 
    public static function post($uri, $callback)
    {

        $uri = trim($uri, '/');
        self::$routes['POST'][$uri] = $callback;
    }

    //Gestor interno de rutas
    public static function lanzador()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = trim($uri, '/');

        $metodo = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes[$metodo] as $route => $callback) {
            //Limitar caracteres de rutas
            if (strpos($route, ':') != false) {
                $route = preg_replace('#:[a-zA-Z]+#', '([a-zA-Z]+)', $route);
            }
            //Comparacion de coincidencia con lo determinado en el archivo web.php
            if (preg_match("#^$route$#", $uri, $coincidencia)) {

                $params = array_slice($coincidencia, 1);
                if (is_callable($callback)) {
                    $respuesta = $callback(...$params);
                }
                
                if(is_array($callback)){
                    $controller = new $callback[0];
                    $respuesta = $controller -> {$callback[1]}(...$params);
                }

                if (is_array($respuesta) || is_object($respuesta)) {
                    header('Content-Type: aplication-json');
                    echo json_encode($respuesta);
                } else {
                    echo $respuesta;
                }
                return;
            }
        }
        //En caso de que la ruta no coincida
        echo "<h1>404 NOT-FOUND</h1>";
    }
}
