<?php

$opciones = [
    'a' => "Carne",
    'b' => "Pescado",
    'c' => "Verduras",

];

$opcionElegida = $opciones["a"];
setcookie('eleccion', $opcionElegida , time() + 20);
echo "Cookie establecida";

?>