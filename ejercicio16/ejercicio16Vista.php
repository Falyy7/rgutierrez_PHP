<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16: Arquitectura MVC</title>
</head>
<body>
    <h1> Lista de alimentos </h1>
    <ol>
        <?php
        #Importamos las otras partes del proyecto
         include("ejercicio16Controlador.php");
         include("ejercicio16Modelo.php");

        #Llamamos a la función del controlador
         enumerarElementos($compra);

         ?>

    </ol>
</body>
</html>