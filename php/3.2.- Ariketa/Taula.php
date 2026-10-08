<?php
$mysql = new mysql("localhost","root","ikasleak");
if ($mysql->connect_errno) {
    echo $mysql->connect_errno . " " . $mysql->connect_error;
}
$result = $mysql-> query("SELECT * FROM `ikasleak`");

while ($row = $result->fe) {
    # code...
}
?>