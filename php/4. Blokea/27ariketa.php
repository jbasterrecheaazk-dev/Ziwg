<?php
$izena1 = 'John';
$izena2 = 'Jane';
$abizena1 = 'Doe';
$abizena2 = 'Doe';
$nan1 = '00000000B';
$nan2 = '11111111C';
$erab1 = array($izena1, $abizena1, $nan1);
$erab2 = array($izena2, $abizena2, $nan2);
for ($i = 0; $i < count($erab1); $i++) {
    echo $erab1[$i];
    echo "<br>";
}
for ($i = 0; $i < count($erab2); $i++) {
    echo $erab2[$i];
    echo "<br>";
}
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
    <table>
        <td>
            <th>
                  
            </th>
        </td>
        <td>
            <th>
                
            </th>
        </td>
        <tr>
            <td>
            <th>
                
            </th>
        </td>
        </tr>
    </table>
</body>
</html>