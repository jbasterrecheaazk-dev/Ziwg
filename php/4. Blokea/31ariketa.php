<?php
$zenbakiak = array('', '', '', '', '', '', '', '', '', '');
for ($i=0; $i < count($zenbakiak); $i++) {
    $numero = random_int(0, 99);
    $zenbakiak[$i] = $numero;
    echo "<br>" . $zenbakiak[$i] . "<br>";
}
$txikiena = 100;
for ($i=0; $i < count($zenbakiak); $i++) {
    
    if ($zenbakiak[$i] < $txikiena) {
        $txikiena = $zenbakiak[$i];
    }
}
echo "Txikiena: " . $txikiena;
?>