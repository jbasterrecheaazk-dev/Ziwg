<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikusi</title>
</head>

<body>
    <?php
/*
$mysql = new mysqli("localhost","root","","ikasleak");
if ($mysql->connect_errno) {
    echo $mysql->connect_errno . " " . $mysql->connect_error;
}
$result = $mysql-> query("SELECT * FROM `ikasleak`;");

while ($row = $result -> fetch_assoc()) {
    echo ($row['izena'] . " - " . $row['email'] . " - " /*. $row['id']);
    echo '<a href = "irakasgaienTaula.php?id=' . $row['id'] . '">irakasgaiak</a>';
    echo ' - ';
    echo '<a href = "aldatuDatuak.php?id=' . $row['id'] . '">aldatu</a>';
    echo ' - ';
    echo '<a href = "ezabatu.php?id=' . $row['id'] . '">ezabatu</a>';
    echo '<br>';
}
$mysql -> close();
*/

foreach ($data as $datuak) {
    echo ($row['izena'] . " - " . $row['email'] . " - " /*. $row['id']*/);
    echo '<a href = "irakasgaienTaula.php?id=' . $row['id'] . '">irakasgaiak</a>';
    echo ' - ';
    echo '<a href = "aldatuDatuak.php?id=' . $row['id'] . '">aldatu</a>';
    echo ' - ';
    echo '<a href = "ezabatu.php?id=' . $row['id'] . '">ezabatu</a>';
    echo '<br>';
}
?>
<br>
<a href = "gehituDatuak.php">gehitu</a>
</body>
</html>
