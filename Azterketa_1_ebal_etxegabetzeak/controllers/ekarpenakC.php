<?php

require_once __DIR__ . '/../models/ekarpenak.php';

use Model\ekarpenak;

class ekarpenakC
{
    private $model;

    public function __construct()
    {
        $this->model = new ekarpenak();
    }

    public function emanZerbait($id)
    {
        $emaitza = $this->model->emanZerbait($id);
        require_once __DIR__ . '/../views/VAdibideaEmanZerbait.php';
    }
}
?>