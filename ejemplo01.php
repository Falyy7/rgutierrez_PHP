<!-- Ejemplo 1: Cómo integrar HTML y PHP en un mismo fichero -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo01: HTML y PHP</title>
</head>
<body>

<!-- Comentario en HTML-->
    <ul>
        <li> <?php echo "Punto <a href='https://campus.ilerna.com/ultra/stream'>primero</a>" ?></li>
        <li> <?php echo " Punto segundo" ?></li>
    </ul>


    <?php

#Comentario en PHP
echo "<ul>
<li>Punto tercero</li>
<li>Punto cuarto</li>
</ul>";

?>
<?php
echo "Hola Onliners"
?>

</body>
</html>