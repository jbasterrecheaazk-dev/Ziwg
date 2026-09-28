<?php
if (isset($_POST['Batuketa'])) {
$n1 = $_POST['v1'];
$n2 = $_POST['v2'];
$result = $n1 + $n2;
 echo "El resultado es: " . $result;
}

if (isset($_POST['Kenketa'])) {
$n1 = $_POST['v1'];
$n2 = $_POST['v2'];
$result = $n1 - $n2;
 echo "El resultado es: " . $result;
}

if (isset($_POST['Biderketa'])) {
$n1 = $_POST['v1'];
$n2 = $_POST['v2'];
    $result = $n1 * $n2;
    echo "El resultado es: " . $result;
}

if (isset($_POST['Zatiketa'])) {
$n1 = $_POST['v1'];
$n2 = $_POST['v2'];
if ($n2 != 0) {
    echo "Error: División por cero";
} else {
$result = $n1 / $n2;
 echo "El resultado es: " . $result;
}
}
?>