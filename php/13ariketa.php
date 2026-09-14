<?php
function checkpalindromo($texto) {
    $clear = strtolower(str_replace(' ','',$texto));
    $inverted = strrev($clear);
    return $clear === $inverted;

}
$line = "aitorrotia";
if (checkpalindromo($line)) {
    echo "Palindromoa da.";
} else {
    echo "Ez da palindromoa.";
}
?>