<?php
$mysql = new mysql("localhost","root","","ikasleak");
if ($mysql->connect_errno) {
    echo $mysql->connect_errno . " " . $mysql->connect_error;
}
$result = $mysql-> query("SELECT * FROM `ikasleak`;");

while ($row = $result -> fetch_assoc()) {
    echo ($row['izena'] . " - " . $row['email-a'] . " - ");
    echo '<a href="irakasgaienTaula.php?id=' . $row['id'] . '">irakasgaiak</a>';
    echo ' - ';
    echo '<a href="aldatuDatuak.php?id=' . $row['id'] . '">aldatu</a>';
    echo ' - ';
    echo '<a href="ezabatuDatuak.php?id=' . $row['id'] . '">ezabatu</a>';
    echo '<br>';
}
?>