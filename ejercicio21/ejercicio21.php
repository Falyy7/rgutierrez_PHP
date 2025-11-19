<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elija lugar y fecha para realizar su examen </h1>

    <form action="ejercicio21Recibir.php" method = "GET">
         <label> Elija la ciudad </label><input type="text" name = "ciudad">
         <br><br>
         <label for = "fecha" > Elija la fecha </label><input type="date" name = "fecha">
         <br><br>
         <input type="submit" value = "Enviar" >

    </form>
</body>
</html>