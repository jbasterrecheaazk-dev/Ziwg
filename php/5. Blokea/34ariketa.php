<?php
    $erabiltzaileak = [
        ["Izena" => "Jon", "Abizena" => "Doe", "NAN" => "23423432L"],
        ["Izena" => "Jane", "Abizena" => "Dave", "NAN" => "98798789K"]
    ];
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
        <tr>
            <th>Izena</th>
            <th>Abizena</th>
            <th>NAN</th>
        </tr>
        <?php foreach ($erabiltzaileak as $erabiltzaileak): ?>
        <tr>
           <td><?php echo $erabiltzaileak['Izena']; ?></td>
           <td><?php echo $erabiltzaileak['Abizena']; ?></td>
           <td><?php echo $erabiltzaileak['NAN']; ?></td>
           </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
