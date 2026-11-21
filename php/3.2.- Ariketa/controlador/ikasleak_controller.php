<?php
require_once("modeloa\ikasleak_model.php");
$ikas = new ikasleak_model();
$data = $ikas -> get_ikasleak();
require_once("vista/Taula.php");
?>