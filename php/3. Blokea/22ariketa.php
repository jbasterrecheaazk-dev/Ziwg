<?php
if (isset($_GET["lines"])) {
    for ($line=1; $line <= $_GET["lines"]; $line++) { 
        echo str_repeat("o", $line) . "<br>";
    }
} else {
    echo "Error."
}
?>