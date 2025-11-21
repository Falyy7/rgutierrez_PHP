<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17: MVC</title>
</head>
<body>
    <h1> LISTA DE TAREAS</h1><br><br>
    <ol>
        <?php
        #Importamos el controlador
        include ("ejercicio17Controlador.php");
        #Llamamos a la función que enumera los datos
        enumerarTareas();
        ?>
    </ol>

    <form action="ejercicio17Controlador.php" method="post">
        Desccripción de la nueva tarea: <br>
         <input type="text" name = "nuevaTarea">
         <input type="submit" value = "CrearTarea">
    </form>
    
</body>
</html>