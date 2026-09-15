<?php
$n1 = 2;
$n2 = 1;
$n3 = 3;
if ($n1 > $n2 && $n2 > $n3 && $n1 > $n3) {
	echo $n1 . $n2 . $n3;
} elseif ($n1 < $n2 && $n2 > $n3 && $n1 > $n3) {
	echo $n2 . $n1 . $n3;
} elseif ($n1 < $n2 && $n2 < $n3 && $n1 < $n3) {
	echo $n3 . $n2 . $n1;
} elseif ($n1 = $n2 && $n2 = $n3 && $n1 = $n3) {
	echo "Zenbaki berdinak dira.";
}
?>