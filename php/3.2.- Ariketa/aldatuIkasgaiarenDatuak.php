<?php
$id=$_GET['id'];
$mysql = new mysqli("localhost","root","","ikasleak");
$emaitza = $mysql->query("SELECT * FROM irakasgaiak WHERE id=" . $id . ";");
//$emaitza = $mysql->query("select * from ikasleak where id=" .$id);
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
    
    <form action="ikasgaiaAldatu.php">    
        <!--input type="text" name="id" placeholder="id" value="<!?=$erab['id']?>" //$row['id'] -->
        <input type="text" name="ikasle_id " placeholder="ikasle_id" value="<?=$erab['ikasle_id']?>">
        <input type="text" name="irakasgaia" placeholder="irakasgaia"  value="<?=$erab['irakasgaia']?>">
        <input type="submit" value="Gorde">
    </form>
    
</body>
</html>