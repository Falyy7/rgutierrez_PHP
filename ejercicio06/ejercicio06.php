<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6: Array de números</title>
    <style>
        h1 {
            font-size: 20px;

        }
        p{
            font-family: arial;

        }
    </style>
</head>
<body>
    <h1> LISTA DE NÚMEROS </h1>
    <p>
    <?php
    include 'ejercicio06funciones.php';
    $arrayNumeros = [53, 66, 71, 46, 22, 85, 19, 67, 77, 41, 60];

    $mayor = mayorValor($arrayNumeros);
    $menor = menorValor($arrayNumeros);

    echo " El mayor valor es: " . $mayor . "<br>";
    echo " El menor valor es: " . $menor . "<br>";
    echo " El resultado de la suma de todos los números
    del array es: " . sumaValores($arrayNumeros) . " <br> ";
    echo " El número de pares que hay en la lista es: 
    " . contarPares($arrayNumeros) . "<br>";
    ?>
    </p>



</body>
</html>