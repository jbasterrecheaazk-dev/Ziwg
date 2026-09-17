<?php
function lehena($_GET["N"]) {
    if ($_GET["N"] <= 1) return false;
    if ($_GET["N"] == 2) return true;
    if ($_GET["N"] % 2 == 0) return false;
    $top = ceil(sqrt($_GET["N"]));
    for ($i = 3; $i <= $top; $i += 2) {
        if ($_GET["N"] % $i == 0) return false;
    }
    return true;
}
if (lehena($_GET["N"])) {
    echo "Zenbakia lehena da.";
} else {
    echo "Zenbakia ez da lehena.";
}
?>