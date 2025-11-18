<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19: Formulario con cookies </title>
</head>
<body>
    <h1>LISTA DE LA COMPRA</h1>
    <br>
    <form action="ejercicio19Mostrar.php" method="POST">
        <label for="producto"> Producto </label><input type="text" name = "producto">
        <br><br>
        <label for="cantidad"> Cantidad </label><input type="number" name = "cantidad">
        <br><br>
        <input type="submit" name = "comprar" value = "Comprar">
    </form>
</body>
</html>