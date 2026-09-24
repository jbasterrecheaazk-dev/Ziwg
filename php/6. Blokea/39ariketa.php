<?php
session_start();

$erabiltzailea = "admin";
$pasahitza = "123456";

$Erabiltzailea = $_POST['erabiltzailea'] ?? '';
$Pasahitza = $_POST['pasahitza'] ?? '';

if ($Erabiltzailea === $erabiltzailea && $Pasahitza === $pasahitza) {
//  $_SESSION['erabiltzailea'] = $Erabiltzailea;
//  header("Location: ")
    echo $Erabiltzailea . " " . $Pasahitza;
} else {
    echo "Erabiltzailea edo pasahitza ez dago zuzen.";
}

?>