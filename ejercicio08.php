<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8: Fechas</title>
</head>
<body>
    <?php
    $t = time();
    echo 'Mostramos la fecha de diferentes maneras: <br><br>';
    echo '1º Número de segundos transcurridos desde el 1 de enero de 1970 a las 00:00:00 (GMT): <b>' . $t . '</b> <br> <br>';
    echo 'Utilizando ("y, m, d", $t): <b> ' . date("y/m/d", $t) . '</b><br><br>';
    echo 'Utilizando ("l Js \of F Y H: is A"): <b> ' . date("l jS \of F Y H:i:s A") . '</b> <br> <br>';
    $fecha = getdate(date("U"));
    echo 'Utilizando getdate(date("U")) muestra lo siguiente: <b>' . 

        $fecha["weekday"] . ", " . $fecha["mday"] . " of " . $fecha["month"] . " of " .
        
        $fecha["year"] . " at " . $fecha["hours"] . ":" . $fecha["minutes"] . '.</b> <br> <br>';
    

    #Para mostrar la fecha en español:
    setlocale(LC_TIME, 'es_ES.UTF-8', 'esp', 'es' );
    $formatoFechaYHora = "%A, %d de %B de %Y %H:%M:%S" ;
    $strf = strftime($formatoFechaYHora, time());
    echo 'Utilizando $strftime(): %A, %d de %B de %Y %H:%M:%S muestra: <b>' . $strf . '</b>';

    ?>
    
</body>
</html>