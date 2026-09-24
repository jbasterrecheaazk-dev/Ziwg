<?php
$n1 = 1;
$n2 = 3;
$n3 = 2;
if ($n1 > $n2 && $n2 > $n3 && $n1 > $n3) {
	// --123
	echo $n1 . $n2 . $n3 . " 1. Aukera.";
} elseif ($n1 < $n2 && $n2 > $n3 && $n1 > $n3) {
	// --213
	echo $n2 . $n1 . $n3 . " 2. Aukera.";
} elseif ($n1 < $n2 && $n2 < $n3 && $n1 < $n3) {
	// --321
	echo $n3 . $n2 . $n1 . " 3. Aukera.";
} elseif ($n1 > $n2 && $n2 < $n3 && $n1 < $n3) {
	// --312
	echo $n3 . $n1 . $n2 . " 4. Aukera.";
} elseif ($n1 < $n2 && $n2 > $n3 && $n1 < $n3) {
	// --231
	echo $n3 . $n1 . $n2 . " 5. Aukera.";
} elseif ($n1 > $n2 && $n2 < $n3 && $n1 > $n3) {
	// 132
	echo $n3 . $n1 . $n2 . " 6. Aukera.";
} elseif ($n1 = $n2 && $n2 = $n3 && $n1 = $n3) {
	echo "Zenbaki berdinak dira.";
} else {
	echo "Error";
}
?>