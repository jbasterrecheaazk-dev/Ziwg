<?php
if (isset($_GET["number1"]) && isset($_GET["number2"])) {
$zenbaki1 = $_GET["number1"];
$zenbaki2 = $_GET["number2"];
$start = min($zenbaki1, $zenbaki2);
$end = max($zenbaki1, $zenbaki2);
$sum = 0;
for ($i=$start; $i <= $end; $i++) { 
    $sum += $i;
}
echo $sum;
}
?>