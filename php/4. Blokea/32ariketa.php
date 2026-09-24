<?php
$zenbakiak = array('', '', '', '', '', '', '', '', '', '');
$batuketa = 0;
$contadorea = 0;
for ($i=0; $i < count($zenbakiak); $i++) {
    $numero = random_int(0, 99);
    $zenbakiak[$i] = $numero;
    echo "<br>" . $zenbakiak[$i] . "<br>";
    $batuketa += $zenbakiak[$i];
    $contadorea++;
    echo "<br>" . $batuketa . "<br>";
}
$batezbestekoa = $batuketa / $contadorea;
echo "<br>" . "Batezbestekoa:" . $batezbestekoa;
?>