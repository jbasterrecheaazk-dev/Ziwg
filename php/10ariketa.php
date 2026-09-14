<?php
date_default_timezone_set('Europe/Madrid');
$now = new DateTime();
$future = new DateTime('2026-12-31 23:59:59');
$interval = $now->date_diff($future);
echo $interval->format('%R%a days, %H hours, %I minutes, %S seconds');
?>