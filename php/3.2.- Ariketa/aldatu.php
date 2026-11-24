<?php
//class ikasleakUpdate {
    if (isset($_GET['izena']) && isset($_GET['email']) && isset($_GET['id'])) {
    //&& isset($_GET['id'])
    $izena = $_GET['izena'];
    $email = $_GET['email'];
    $id = $_GET['id'];
    
    $sql = "UPDATE ikasleak SET izena = :izena, email = :email WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            'izena' => $izena,
            'email' => $email,
            'id'     => $id
        ]);

        return $stmt->rowCount();


    /*
    $mysql = new mysqli("localhost","root","","ikasleak");
    $emaitza = $mysql->query("UPDATE ikasleak  SET izena=?,email=? WHERE id=?;");
    $erab = $emaitza->fetch_assoc();
    $mysql->close();

    //echo("<br>$izena, $id, $email<br>");

https://www.acens.com/comunicacion/wp-content/images/2017/07/crud-white-paper-acens.pdf

    $mysql = new mysqli("localhost","root","","ikasleak");
    if ($mysql -> connect_errno) {
        echo "Errorea konexioarekin: " . $mysql->connect_errno . " " . $mysql->connect_error;
    }
    

    josemanuel josemanuel@gmail.com
    egg egg@gmail.com
    ole ole@gmail.com

    $result = $mysql-> query("SELECT * FROM `ikasleak`;");
    if (!($sentence = $mysql-> query("SELECT id FROM `ikasleak` WHERE 1;"))) {
        echo "Prestaketa gaizki atera da: (" . $mysql->errno . ") " . $mysql->error;
    }
    UPDATE `ikasleak` SET `id`='[value-1]',`izena`='[value-2]',`email`='[value-3]' WHERE 1
    UPDATE `ikasleak` SET `izena` = ?, `email` = ? WHERE id = ?;

    function eguneratu(int $id, string $izena, string $email): void {
        try {
            Ikaslea::eguneratu($id, $izena, $email);
            $this->bistaratu();
        } catch (Exception $e) {
            echo "Errorea gertatu da: " . $e->getMessage();
        }        
    }
          
    if (!($sentence = $mysql->prepare("UPDATE ikasleak  SET izena=?,email=? WHERE id=?;"))) {
        echo "Prestaketa gaizki atera da: (" . $mysql->errno . ") " . $mysql->error;
    }
    if (!$sentence->bind_param("ssi", $izena, $email, $id)) {
    echo "Error." . $sentence->connect_errno . " " . $sentence->connect_error;
    }
    if (!$sentence->execute()) {
        echo "Akatsa exekuzioan: " . $sentence->connect_errno . " " . $sentence->connect_error;
    }
    
    public static function sintaxia(string $sentence): array{
        //$mysql = new mysqli("localhost", "root", "", "3.2.- Ariketa");
        if ($mysql->connect_errno) {
            throw new Exception($sentence);
            
        }
    }
    
    $sentence->close();

$alerta = "";
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'ok') {
        $alerta = '<div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin: 10px;">Cliente guardado con éxito.</div>';
    } elseif ($_GET['status'] == 'error') {
        $alerta = '<div style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin: 10px;">Cliente no guardado.</div>';
    }
}

 echo $alerta; 
    
    echo $sentence;
    */
    header("Location: Taula.php");
} else {
    echo("<br>Parametroetan akatsa<br>");
    /*
    echo ("<script>alert ("Parametroetan akatsa");</script>");
    $sentence->close();
    */
    header("Location: Taula.php");
}
//}
/*
if (isset($_GET['id']) && isset($_GET['izena'])) {
    $id= $_GET['id'];
    $izena = $_GET['izena'];
    */
/*
    $mysqli = new mysqli("localhost", "root", "", "test");
    if ($mysqli->connect_errno) {
        echo "Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
     Prestatutako sententzia, 1 fasea: prestaketa 
    if (!($sententzia = $mysqli->prepare("UPDATE test SET izena=? WHERE id=?"))) {
        echo "Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
     Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa 
    if (!$sententzia->bind_param("si", $izena, $id)) {
        echo "Parametroen estekatzea gaizki atera da: (" . $sententzia->errno . ") " . $sententzia->error;
    }
    
    if (!$sententzia->execute()) {
        echo "Akatsa exekuzioan: (" . $sententzia->errno . ") " . $sententzia->error;
    }
    
     gomendagarria da itxiera esplizitua egitea 
    $sententzia->close();
    
     Prestatu gabeko sentetzia 
//     $emaitza = $mysqli->query("SELECT * FROM test");
//     var_dump($emaitza->fetch_all());
    header("Location: select_test.php");
}else{
    echo("<br>Parametroetan akatsa<br>");
    
}

*/
?>

