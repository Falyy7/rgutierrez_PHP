<?php

#El fichero receptor recibe a través de $_POST los valores introducidos por el usuario en elarchivo html

echo "¡Hola, " . $_POST["nombre"] . "!<br>"; 
echo "Tu correo electrónico es " . $_POST["correo"] . ".";

?>