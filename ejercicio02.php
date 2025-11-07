<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo02: Variables y tipos de datos</title>
</head>
<body>
    <?php

    #Iniciamos las variables:

    $texto = "caracteres";
    $entero = 5;
    $decimal = 9.5;
    define("Pi", 3.1416);

    #Introducimos las variables en el texto mediante la concatenación. En PHP se concatena mediante "." y espacios.

    echo "Esto es una cadena de " . $texto . "<br>";
    echo "El " . $entero . " es una variable de tipo entero y podemos hacer cosas como:
    " . ( 2 * Pi * $entero) . "<br>";
    echo "Y este " . $decimal . " es un número en coma flotante y permite operaciones como
    el redondeo: " . round($decimal) . "<br>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">