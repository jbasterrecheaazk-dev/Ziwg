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
        <input type="text" name="izena" placeholder="izena" value="<?=$erab['izena']?>">
        <input type="text" name="email" placeholder="email"  value="<?=$erab['email']?>">
        <input type="submit" value="Gorde">
    </form>
    
</body>
</html>