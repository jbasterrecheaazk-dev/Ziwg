<?php
if (isset($_GET['ikasle_id']) && isset($_GET['irakasgaia'])) {
    $ikasle_id = $_GET['ikasle_id'];
    $irakasgaia = $_GET['irakasgaia'];

    $mysql = new mysqli("localhost","root","","ikasleak");
if ($mysql->connect_errno) {
    echo $mysql->connect_errno . " " . $mysql->connect_error;
}
if (!($sentence = $mysql->prepare("DELETE FROM `irakasgaiak` WHERE ikasle_id=? AND irakasgaia=?"))) {
    echo "Error." . $mysql->connect_errno . " " . $mysql->connect_error;
}
if (!$sentence->bind_param("is", $ikasle_id, $irakasgaia)) {
    echo "Error." . $sentence->connect_errno . " " . $sentence->connect_error;
}
if (!$sentence->execute()) {
        echo "Akatsa exekuzioan: " . $sentence->connect_errno . " " . $sentence->connect_error;
    }
$sentence->close();
header("Location: irakasgaienTaula.php");
} else {
    echo("<br>Parametroetan akatsa<br>");
}
?>