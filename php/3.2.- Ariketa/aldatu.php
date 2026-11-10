<?php
if (isset($_GET['izena']) && isset($_GET['email']) && isset($_GET['id'])) {
    //&& isset($_GET['id'])
    $izena = $_GET['izena'];
    $email = $_GET['email'];
    $id = $_GET['id'];
    /*echo($izena, $id, $email);*/

    $mysql = new mysqli("localhost","root","","ikasleak");
    if ($mysql -> connect_errno) {
        echo "Errorea konexioarekin: " . $mysql->connect_errno . " " . $mysql->connect_error;
    }
    /*
    $result = $mysql-> query("SELECT * FROM `ikasleak`;");
    if (!($sentence = $mysql-> query("SELECT id FROM `ikasleak` WHERE 1;"))) {
        echo "Prestaketa gaizki atera da: (" . $mysql->errno . ") " . $mysql->error;
    }
    UPDATE `ikasleak` SET `id`='[value-1]',`izena`='[value-2]',`email`='[value-3]' WHERE 1
    UPDATE `ikasleak` SET `izena` = ?, `email` = ? WHERE id = ?;*/
    if (!($sentence = $mysql->prepare("UPDATE `ikasleak` SET izena = '?',email = '?' WHERE id = ?;"))) {
        echo "Prestaketa gaizki atera da: (" . $mysql->errno . ") " . $mysql->error;
    }
    if (!$sentence->bind_param("ss", $izena, $email)) {
    echo "Error." . $sentence->connect_errno . " " . $sentence->connect_error;
    }
    if (!$sentence->execute()) {
        echo "Akatsa exekuzioan: " . $sentence->connect_errno . " " . $sentence->connect_error;
    }
    $sentence->close();
    header("Location: Taula.php");
} else {
    echo("<br>Parametroetan akatsa<br>");
    /*echo ("<script>alert ("Parametroetan akatsa");</script>");*/
    /*$sentence->close();*/
    header("Location: Taula.php");
}
?>