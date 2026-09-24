<?php
$n = 7;
if ($n >= 1 && $n<=4.9) {
    echo "Ez gaindituta.";
} elseif ($n >= 5 && $n<=5.9) {
    echo "Nahiko.";
} elseif ($n >= 6 && $n<=6.9) {
    echo "Ondo.";
} elseif ($n >= 7 && $n<=8.9) {
    echo "Oso ondo.";
} elseif ($n >= 9 && $n<=10) {
    echo "Bikain.";
} else {
     echo "Error.";
}
?>