<?php
class Connect {
    public static function conectar() {
        $mysql = new mysqli("localhost","root","","ikasleak");
        $mysql -> query("SET NAMES 'utf8'");
        return $mysql;
    }
}
?>