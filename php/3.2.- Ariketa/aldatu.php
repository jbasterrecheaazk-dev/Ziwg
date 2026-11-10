<?php
if (isset($_GET['izena']) && isset($_GET['email']) && isset($_GET['id'])) {
    //&& isset($_GET['id'])
    $izena = $_GET['izena'];
    $email = $_GET['email'];
    $id = $_GET['id'];
    
    //echo("<br>$izena, $id, $email<br>");

    $mysql = new mysqli("localhost","root","","ikasleak");
    if ($mysql -> connect_errno) {
        echo "Errorea konexioarekin: " . $mysql->connect_errno . " " . $mysql->connect_error;
    }
    /*

    josemanuel josemanuel@gmail.com
    egg egg@gmail.com
    ole ole@gmail.com

    $result = $mysql-> query("SELECT * FROM `ikasleak`;");
    if (!($sentence = $mysql-> query("SELECT id FROM `ikasleak` WHERE 1;"))) {
        echo "Prestaketa gaizki atera da: (" . $mysql->errno . ") " . $mysql->error;
    }
    UPDATE `ikasleak` SET `id`='[value-1]',`izena`='[value-2]',`email`='[value-3]' WHERE 1
    UPDATE `ikasleak` SET `izena` = ?, `email` = ? WHERE id = ?;*/
    if (!($sentence = $mysql->prepare("UPDATE `ikasleak` SET `izena`=?,`email`=? WHERE id=?;"))) {
        echo "Prestaketa gaizki atera da: (" . $mysql->errno . ") " . $mysql->error;
    }
    if (!$sentence->bind_param("ssi", $izena, $email, $id)) {
    echo "Error." . $sentence->connect_errno . " " . $sentence->connect_error;
    }
    if (!$sentence->execute()) {
        echo "Akatsa exekuzioan: " . $sentence->connect_errno . " " . $sentence->connect_error;
    }
    public static function sintaxia(string $sentence): array{
        $mysql = new mysqli("localhost", "root", "", "3.2.- Ariketa");
        if ($mysql->connect_errno) {
            throw new Exception($sentence);
            
        }
    }
    $sentence->close();
/*
$alerta = "";
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'ok') {
        $alerta = '<div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 10px;">Cliente guardado con éxito.</div>';
    } elseif ($_GET['status'] == 'error') {
        $alerta = '<div style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px;">Cliente no guardado.</div>';
    }
}

 echo $alerta; 
    
    echo $sentence;*/
    header("Location: Taula.php");
} else {
    echo("<br>Parametroetan akatsa<br>");
    /*echo ("<script>alert ("Parametroetan akatsa");</script>");*/
    /*$sentence->close();*/
    header("Location: Taula.php");
}
?>