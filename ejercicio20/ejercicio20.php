<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20: Formulario y asignación mediante funciones</title>
</head>
<body>
    <h1>Rellene el formulario</h1>
    <br>
    <form action="ejercicio20Mostrar.php" method = "POST">
    <p> Nombre <input type="text" name = "nombre"> </p>
        <br>
    <p> Seleccione una clase
        <select name="clase" id="clase">
            <option value="profesor"> Profesor </option>
            <option value="alumno"> Alumno </option>
            <option value="unknown"> Unknown </option>
        </select>
    </p>
    <p> Seleccione un género <br>
        <input type="radio" id = "genero" name = "genero" value = "masculino"> <label> Masculino </label><br>
        <input type="radio" id = "genero" name = "genero" value = "femenino"> <label> Femenino </label><br>
        <input type="radio" id = "genero" name = "genero" value = "otro"> <label> Otro </label><br>

    </p>
    
    <input type="submit" value = "Enviar" >
    </form>
</body>
</html>