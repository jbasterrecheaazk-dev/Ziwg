<?php
$zenbaki1 = 3;
$zenbaki2 = 8;
$start = min($zenbaki1, $zenbaki2);
$end = max($zenbaki1, $zenbaki2);
$sum = 0;
for ($i=0; $i <= $end; $i++) { 
    $sum += $i;
}
$sum = $sum + $start;
echo $sum;
?>