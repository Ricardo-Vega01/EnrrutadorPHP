<?php
//Llamada de controlador para modelo
namespace app\model;

use mysqli;

class conn
{
    //Datos de conexion a la BD
    protected $db_server = SERVER;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db = DB_NAME;

    protected $connection;

    public function __construct()
    {
        $this->connection();
    }
    //Parametros de conexion
    public function connection()
    {   
        //Datos ubicados en config
        $this->connection = new mysqli(
            $this->db_server,
            $this->db_user,
            $this->db_pass,
            $this->db
        );
        //Comprobacion de conexion
        if ($this->connection->connect_error) {
            die("Error de conexión: ".$this->connection->connect_error);
        }
    }
}
