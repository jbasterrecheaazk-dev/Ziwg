<?php
class ikasleak_model {
    private $db;
    private $ikasleak;

    public function __constructor(){
        $this->db=Connect::conectar();
        
    }
}
?>