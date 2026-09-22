<?php
if (isset($_GET["N"])) {
function lehena($zenbakia) {
    if ($zenbakia < 2) {
        return false;
    }
    $root = sqrt($zenbakia);
    for ($i=0; $i < $root; $i++) { 
        if ($zenbakia % $i == 0) {
            return false;
            }
        }
        return true;
    }
    for ($i=0; $i < $_GET["N"]; $i++) { 
        if (lehena($i)) {
            echo $i;
        }
    }
}
?>