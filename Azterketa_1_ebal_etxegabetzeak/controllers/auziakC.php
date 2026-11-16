<?php

require_once __DIR__ . '/../models/auziak.php';

use Model\auziak;

class auziakC
{
    private $model;

    public function __construct()
    {
        $this->model = new auziak();
    }

    public function emanZerbait($id)
    {
        $emaitza = $this->model->emanZerbait($id);
        require_once __DIR__ . '/../views/VAdibideaEmanZerbait.php';
    }
}
?>