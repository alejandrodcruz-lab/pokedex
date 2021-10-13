<?php
require_once ("config.php");

class Conexion{

    protected $conexion_db;

    public function __construct()
    {
        $this->$conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB);

        if ($this->conexion_db->connect_error) {
            die ("Ocurrio un error al conectar a la base de datos");
        } else {
            echo "Conexion exitosa";
        }

    }

}



