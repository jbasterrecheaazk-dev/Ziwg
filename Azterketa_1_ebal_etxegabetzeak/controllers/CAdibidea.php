<?php

require_once __DIR__ . '/../models/MAdibidea.php';

use Model\MAdibidea;

class CAdibidea
{
    private $model;

    public function __construct()
    {
        $this->model = new MAdibidea();
    }

    public function emanZerbait($id)
    {
        $emaitza = $this->model->emanZerbait($id);
        require_once __DIR__ . '/../views/VAdibideaEmanZerbait.php';
    }
}