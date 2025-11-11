<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 4: Formulario </title>
</head>
<body>
    <!-- Al introducir en "action" la ruta del fichero receptor y el method POST, podemos enviar los valores introducidos por el usuario en este HTML al archivo receptor-->
    <form name ="formulario" action="ejercicio05receptor.php" method="POST"> 

        <h1>FORMULARIO WEB</h1>
        <label> Usuario: </label> <input type="text" name="nombre" value=""/>
        <label> Correo electrónico: </label> <input type="email" name="correo" value=""/>
        <input type="submit" name = "enviar" value="Enviar" />
        <input type="reset" name = "cancelar" value="Cancelar" />

    </form>
</body>
</html>