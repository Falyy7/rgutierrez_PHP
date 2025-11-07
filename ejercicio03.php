<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar PHP en HTML</title>
    <style>
        img{
            width: 300px;
            height: 200px;
            display:block;
            margin-top: 50px;
            margin-right: auto;
            margin-left:auto;
        }

        a{
            font-size: 20px;
            color: orange;
            font-family: arial;
        }
    </style>
</head>
<body>
    <!--Insertar código PHP en HTML -->
    <?php
    #Podemos definir código PHP en cualquier punto del fichero.
    $direccion= "ejemplo02";
    $extension =".php";
    $imagen = "logo.png";
    ?>
    <!--Seguimos programando con html e introducimos fragmentos en php -->
    <a href="<?php echo $direccion . $extension ?>">
        Este enlace coge la dirección definida a través de las variables declaradas
    </a> <br>


    <img src="ralph.gif" alt="">


    
</body>
</html>