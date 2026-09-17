<?php
$n1 = 6;
$n2 = 9;
$start = min($n1, $n2);
$end = max($n1, $n2);
$sum = 0;
for ($i=$start; $i < $end; $i++) { 
    $sum += $i;
}
echo $sum;
?>