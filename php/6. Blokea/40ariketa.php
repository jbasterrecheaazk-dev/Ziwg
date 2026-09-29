<?php
if (isset($_POST['Bidali'])) {
//  $Izena = trim($_POST['Izena']);
//  $Abizena = trim($_POST['Abizena']);
//  $Adina = trim($_POST['Adina']);
    if (empty($_POST['Izena'])) {
        echo "Izenaren kutxa hutzik dago. <br>";
    } else {
        echo "Bere izena " . htmlspecialchars($Izena) . " da. <br>";
    }
    if (empty($_POST['Abizena'])) {
        echo "Abizenaren kutxa hutzik dago. <br>";
    } else {
        echo "Bere abizena " . htmlspecialchars($Abizena) . " da. <br>";
    }
    if (empty($_POST['Adina'])) {
        echo "Adinaren kutxa hutzik dago. <br>";
    } else {
        echo "Bere adina " . htmlspecialchars($Adina) . " da. <br>";
    }
}
?>