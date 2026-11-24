<?php
class ikasleak_model {
    private $db;
    private $ikasleak;

    public function __constructor(){
        $this->db=Connect::conectar();
        $this->ikasleak=array();

        //https://victorroblesweb.es/2013/11/18/tutorial-mvc-en-php-nativo/
    }
    public function get_ikasleak() {
        //$result = $mysql-> query("SELECT * FROM `ikasleak`;");
        $consulta = $db-> query("SELECT * FROM `ikasleak`;");
        while ($line = $consulta -> fetch_assoc()) {
            $this->ikasleak[]=$line;
        }
        return $this->ikasleak;
    }
}
?>