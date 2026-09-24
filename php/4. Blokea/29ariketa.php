<!DOCTYPE html>
<html lang='en'>
    <style>
     table, td, th{
        border: 1px solid;
     }   
    </style>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Page Title</title>
    <link rel='stylesheet' href='main.css'>
</head>
<body>
    <table>
               <?php
                $produktuak = array('produktu1', 'produktu2', 'produktu3', 'produktu4', 'produktu5');
                for ($i = 0; $i < count($produktuak); $i++) {
                echo "<th>";
                echo $produktuak[$i];
                echo "</th>";
                }
                ?>
        <tr>
                <?php
                $beherapena = 20;
                $prezioak = array('24', '35', '40', '23', '35');
                for ($i = 0; $i < count($prezioak); $i++) {
                echo "<th>";
                echo "Prezio erreala:" . $prezioak[$i] . "<br>";
                echo "Prezioa beherapenekin:" . ($prezioak[$i] * 20) / 100;
                $prezioak[$i] = ($prezioak[$i] * 20) / 100;
                echo "</th>";
                }
               ?>
        </tr>
    </table>
</body>
</html>