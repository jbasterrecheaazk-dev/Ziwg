<?php

namespace Model;

use DB; 

class MAdibidea
{

    private $db;
    public function __construct()
    {
        $this->db = DB::conexion();
    }

    public function emanZerbait($id)
    {
        $sql = "SELECT * FROM taula WHERE id = ? ORDER BY zutabea";
        $sentencia = $this->db->prepare($sql);
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $sentencia->close();

        return true;
    }

}