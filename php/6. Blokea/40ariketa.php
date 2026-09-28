<?php


if (isset($_POST['Bidali'])) {
    $Izena = trim($_POST['Bidali']);
    $Abizena = trim($_POST['Bidali']);
    $Adina = trim($_POST['Bidali']);
    if (empty($Izena)) {
        echo "Izenaren kutxa hutzik dago. <br>";
    } else {
        echo "Bere izena " . htmlspecialchars($Izena) . " da. <br>";
    }
    if (empty($Abizena)) {
        echo "Izenaren kutxa hutzik dago. <br>";
    } else {
        echo "Bere izena " . htmlspecialchars($Abizena) . " da. <br>";
    }
    if (empty($Adina)) {
        echo "Izenaren kutxa hutzik dago. <br>";
    } else {
        echo "Bere izena " . htmlspecialchars($Adina) . " da. <br>";
    }
}
?>