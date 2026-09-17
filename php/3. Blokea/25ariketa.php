<?php
if (isset($_GET["N"])) {
    $number = $_GET["N"];
    $lehena = true;

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $lehena = false;
            break;
        }
    }

    if ($lehena) {
        echo "Zenbakia lehena da.";
    } else {
        echo "Zenbakia ez da lehena.";
    }
} else {
    # code...
}
?>