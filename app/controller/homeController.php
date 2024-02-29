<?php

namespace app\controller;

use app\model\conn;
//Controlador de vista principal
class homeController extends control
{
    public function index()
    {
        $conection = new conn();
        return $this->view('home',[
            'title' => "Game Console",
            'desc' => "this a body for page"
        ]);
    }


}
