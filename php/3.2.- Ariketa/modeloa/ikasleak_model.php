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
        $consulta = $this -> db -> query ("SELECT * FROM `ikasleak`;");
        while ($line = $consulta -> fetch_assoc()) {
            $this->ikasleak[]=$line;
        }
        return $this->ikasleak;
    }
}
?>