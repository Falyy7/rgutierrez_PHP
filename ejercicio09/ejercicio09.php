<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio09_resultado.php" method = "post">

        <!-- Seleccionar el día  -->
        <label for="day">Día del mes</label>
        <input type="number" name="day" id="day"min ="1" max="31" >

        
        <!-- Seleccionar el mes  -->
        </select> <br> <br>
        <label for="month">Mes del año</label>
        <select name="month" id="month">
        <option value=""></option>
        <option value="1"> January</option>
        <option value="2"> February</option>
        <option value="3"> March</option>
        <option value="4"> April</option>
        <option value="5"> May</option>
        <option value="6"> June</option>
        <option value="7"> July</option>
        <option value="8"> August</option>
        <option value="9"> September</option>
        <option value="10"> October</option>
        <option value="11"> November</option>
        <option value="12"> December</option>
        </select> <br> <br>

        <!-- Seleccionar el año  -->
         <label for="year"> Año </label>
         <input type="number" name="year" id="year" min = "1970" max = "2025">
         <br><br>

         <!-- Seleccionar horas, minutos y segundos  -->
          <label for="hours">Horas</label>
          <input type="number" name = "hours" id="hours" max="24">
          <br><br>

          <label for="minutes">Minutos</label>
          <input type="number" name="minutes" id="minutes" max="60">
          <br><br>

          <label for="seconds">Segundos</label>
          <input type="number" name="seconds" id="seconds" max="60">
          <br><br>

         <!-- Enviar formulario -->
          <input type="submit" value="Convertir">
    </form>
</body>
</html>