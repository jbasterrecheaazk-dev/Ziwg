<?php
$astea = [
    "Astelehena" => 64,
    "Asteartea" => 28,
    "Asteazkena" => 98,
    "Osteguna" => 12,
    "Ostirala" => 33,
    "Larunbata" => 30,
    "Igandea" => 31,
    "Batura" => "0",
    "Batazbestekoa" => "0",
];
for ($i=0; $i < 7; $i++) { 
    $hilabeteak[8] = $hilabeteak[8] + $hilabeteak[$i];
}
$hilabeteak[9] = $hilabeteak[8] / 7;
foreach ($astea as $Egunak => $Balioa) {
    echo $astea . "k balio hau dauka." . $eguna . "<br>";
}
?>