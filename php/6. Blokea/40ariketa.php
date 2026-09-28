<?php

if (isset($_POST['Bidali'])) {
    $Izena = trim($_POST['Izena']);
    $Abizena = trim($_POST['Abizena']);
    $Adina = trim($_POST['Adina']);
    if (empty($Izena)) {
        echo "Izenaren kutxa hutzik dago.";
    } else {
        echo "Bere izena " . htmlspecialchars($Izena) . " da.";
    }
    if (empty($Abizena)) {
        echo "Izenaren kutxa hutzik dago.";
    } else {
        echo "Bere izena " . htmlspecialchars($Abizena) . " da.";
    }
    if (empty($Adina)) {
        echo "Izenaren kutxa hutzik dago.";
    } else {
        echo "Bere izena " . htmlspecialchars($Adina) . " da.";
    }
}
?>