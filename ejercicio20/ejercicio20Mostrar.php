<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type = "text/css">
        img{
            height: 120px;
            width: 120px;
        }
    </style>
</head>
<body>
    <?php include "ejercicio20Funciones.php";?>
    <h1>Confirmar personaje</h1>
    <h2><?php echo "Nombre: " . $_POST['nombre'];?></h2>

    <img src="<?php asignaClase($_POST['clase']);?>">
    <img src="<?php asignaGenero($_POST['genero']);?>">
    


</body>
</html>