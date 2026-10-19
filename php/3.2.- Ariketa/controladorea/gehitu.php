<?php
if (isset($_GET['izena']) && isset($_GET['email'])) {
    $izena = $_GET['izena'];
    $email = $_GET['email'];

    $mysql = new mysqli("localhost","root","","ikasleak");
if ($mysql->connect_errno) {
    echo $mysql->connect_errno . " " . $mysql->connect_error;
}
if (!($sentence = $mysql->prepare("INSERT INTO `ikasleak`(`id`, `izena`, `email`) VALUES ('[value-1]', ?, ?)"))) {
    //echo "Error." $mysql->connect_errno . " " . $mysql->connect_error;
}
if (condition) {

}
} else {
    # code...
}

?>