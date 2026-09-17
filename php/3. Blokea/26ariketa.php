<?php
if (isset($_GET["N"])) {
    $number = $_GET["N"];
    for ($j=0; $j < $number; $j++) {
        $lehena = true;

    for ($i = 2; $i < $j; $i++) {
        if ($j % $i == 0) {
            $lehena = false;
            break;
        }
    }

    if ($lehena) {
        echo $j . " Zenbakia lehena da." . "<br>";
    } else {
        echo $j . "Zenbakia ez da lehena." . "<br>";
    }
    }  
}
?>