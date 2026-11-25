<?php
if (isset($_GET['id']) && isset($_GET['ikasle_id']) && isset($_GET['irakasgaia'])) {
    try {
    $id = $_GET['id'];
    $ikasle_id = $_GET['ikasle_id'];
    $irakasgaia = $_GET['irakasgaia'];

    $mysqli = new mysqli("localhost", "root", "", "ikasleak");
    if ($mysqli->connect_errno) {
        echo "Akatsa MySQL konexioan: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    /* Prestatutako sententzia, 1 fasea: prestaketa */
    if (!($sententzia = $mysqli->prepare("UPDATE irakasgaiak SET id=?,ikasle_id=?,irakasgaia=?  WHERE id=?;"))) {
        echo "Prestaketa gaizki atera da: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Prestatutako sententzia, 2 fasea: estekatzea y exekuzioa */
    if (!$sententzia->bind_param("iis", $id, $ikasle_id, $irakasgaia)) {
        echo "Parametroen estekatzea gaizki atera da: (" . $sententzia->errno . ") " . $sententzia->error;
    }
    
    if (!$sententzia->execute()) {
        echo "Akatsa exekuzioan: (" . $sententzia->errno . ") " . $sententzia->error;
    }

    $sententzia->close();
    header("Location: irakasgaienTaula.php");
} catch (\Throwable $th) {
    echo 'Caught exception: ', $th->getMessage(), "\n";
    /*throw $th;*/
}
} else {

    //echo("<br>Parametroetan akatsa<br>");
    try {
    throw new Exception('Parametroetan akatsa');
} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}
    ?>
    <br>
    <a href="irakasgaienTaula.php">itzuli</a>
    <?php
    /*
    $sentence->close();
    */
    //header("Location: Taula.php");
}
?>