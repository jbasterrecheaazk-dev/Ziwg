<?php
if (isset($_GET["bi"])) {
    $bikoiti = $_GET["bi"] == "true" ? true : false;
    $top = rand(1, 99);
    for ($number=0; $number < $top; $number++) { 
        if ($bikoiti && $number % 2 == 0) {
            echo $number . "<br>";
        } elseif (!$bikoiti && $number % 2 != 0) {
            echo $number . "<br>";
        }
    }
} else {
    echo "Ez definituta.";    
}
?>