<?php
$mysql = new mysqli("localhost","root","","ikasleak");
if ($mysql->connect_errno) {
    echo $mysql->connect_errno . " " . $mysql->connect_error;
}
$result = $mysql-> query("SELECT * FROM `irakasgaiak`;");

while ($row = $result -> fetch_assoc()) {
    echo ($row['id'] . " - " . $row['ikasle_id'] . " - " . $row['irakasgaia'] . " - ");
    echo '<a href="aldatuDatuak.php?id=' . $row['id'] . '">aldatu</a>';
    echo ' - ';
    echo '<a href="ezabatuDatuak.php?id=' . $row['id'] . '">ezabatu</a>';
    echo '<br>';
}
$mysql -> close();
?>
<br>
<a href="gehituDatuak.php">gehitu</a>