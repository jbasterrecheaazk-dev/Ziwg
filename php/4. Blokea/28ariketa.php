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
                $prezioak = array('prezio1', 'prezio2', 'prezio3', 'prezio4', 'prezio5');
                for ($i = 0; $i < count($prezioak); $i++) {
                echo "<th>";
                echo $prezioak[$i];
                echo "</th>";
                }
               ?>
        </tr>
    </table>
</body>
</html>