<?php

namespace app\controller;

class control
{
    //Definimos una variable para la vista y otra para los parametros
    public function view($enlace, $data = [])
    {
        //Destructuracion del array
        extract($data);

        //Ocupamos esto cuando las vistas se encuentren en sub carpetas
        $enlace = str_replace('.', '/', $enlace);

        //Comprobacion de existencia de archivos vista
        if (file_exists("../app/views/{$enlace}.php")) {
            ob_start();
            include("../app/views/{$enlace}.php");
            $content = ob_get_clean();

            return $content;
        } else {
            return "Esta pagina no esta disponible";
        }
    }
}
