<?php
$zenbakiak = [];
for ($i=0; $i < 50; $i++) { 
    $zenbakiak[] = mt_rand(0, 49);
}
$count = array_count_values($zenbakiak);
echo $count ;
?>