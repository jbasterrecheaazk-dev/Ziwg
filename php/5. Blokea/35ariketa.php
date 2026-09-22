<?php
$hilabeteak = [
    "Urtarrila" => 31,
    "Otsaila" => 28,
    "Martxoa" => 31,
    "Apirila" => 30,
    "Maiatza" => 31,
    "Ekaina" => 30,
    "Uztaila" => 31,
    "Abuztua" => 31,
    "Iraila" => 30,
    "Urria" => 31,
    "Azaroa" => 30,
    "Abendua" => 31,
];
foreach ($hilabeteak as $hilea => $eguna) {
    echo $hilea . "k " . $eguna . " egun ditu.<br>";
}
?>