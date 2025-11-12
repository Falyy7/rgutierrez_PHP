<?php

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$hours = $_POST['hours'];
$minutes = $_POST['minutes'];
$seconds = $_POST['seconds'];

$fechaUnix = mktime($hours, $minutes, $seconds, $month, $day, $year);

echo
"El día " . $day . " de " . $month . " de " . $year . 
" a las " . $hours . ":" . $minutes . ":" . $seconds . 
" tiene el valor UNIX de " . $fechaUnix;



?>