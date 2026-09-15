<?php
function countvocals($str) {
    $text = strtolower($str);
    $v = ['a','e','i','o','u'];
    $count = 0;
    for ($i=0; $i < strlen($text); $i++) {
        if (in_array($text[$i], $v)) {
            $count++;
        }
    }
    return $count;
}
echo countvocals("Kaixo mundua");
?>