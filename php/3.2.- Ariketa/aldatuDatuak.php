<?php
$id=$_GET['id'];
$mysql = new mysqli("localhost","root","","ikasleak");
$emaitza = $mysql->query("select * from ikasleak where id=" .$id);
$erab = $emaitza->fetch_assoc();
$mysql->close();
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Page Title</title>
    <link rel='stylesheet' href='main.css'>
</head>
<body>
    <form action="aldatu.php">
        <input type="text" name="izena" placeholder="izena" value="<?=$erab['izena']?>" readonly>
        <input type="text" name="email-a" placeholder="email-a"  value="<?=$erab['email-a']?>">
        <input type="submit" value="Gorde">
    </form>
</body>
</html>