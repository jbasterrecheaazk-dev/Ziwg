<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    /*
    $izena = $_GET['izena'];
    $email = $_GET['email'];
    */
    $mysql = new mysqli("localhost","root","","ikasleak");
if ($mysql->connect_errno) {
    echo $mysql->connect_errno . " " . $mysql->connect_error;
}
if (!($sentence = $mysql->prepare("DELETE FROM `ikasleak` WHERE id=?"))) {
    echo "Error." . $mysql->connect_errno . " " . $mysql->connect_error;
}
if (!$sentence->bind_param("i", $id)) {
     echo "Parametroen estekatzea gaizki atera da: (" . $sentence->errno . ") " . $sentence->error;
    }
    
    if (!$sentence->execute()) {
        echo "Akatsa exekuzioan: (" . $sentence->errno . ") " . $sentence->error;
    }
    
    /* gomendagarria da itxiera esplizitua egitea */
    $sentence->close();
header("Location: Taula.php");
} else {
    echo("<br>Parametroetan akatsa<br>");
    ?>
    <br>
    <a href="Taula.php">itzuli</a>
    <?php
}
/*
if (isset($_GET['id'])) {
    $id= $_GET['id'];

    $mysqli = new mysqli("localhost", "root", "", "test");
    if ($mysqli->connect_errno) {
        echo "MySQL konexioak huts egin du: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
     Prestatutako sententzia, 1 fasea: prestaketa 
    if (!($sententzia = $mysqli->prepare("DELETE FROM test WHERE id=?"))) {
        echo "Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
     Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa 
    if (!$sententzia->bind_param("i", $id)) {
        echo "Parametroen estekatzea gaizki atera da: (" . $sententzia->errno . ") " . $sententzia->error;
    }
    
    if (!$sententzia->execute()) {
        echo "Akatsa exekuzioan: (" . $sententzia->errno . ") " . $sententzia->error;
    }
    
     gomendagarria da itxiera esplizitua egitea 
    $sententzia->close();
    
     Prestatu gabeko sententzia 
    //$emaitza = $mysqli->query("SELECT * FROM test");
    //var_dump($emaitza->fetch_all());
    header("Location: select_test.php");
}else{
    echo("<br>Parametroen akatsa<br>");   
}
*/
?>