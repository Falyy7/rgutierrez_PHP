<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9: Variables de sesión</title>
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['tActual'])){
        $_SESSION ['tActual'] = time(); 
        echo 'Se inicia la sesión a las ' . date("H:i:s", $_SESSION['tActual']);
    }
    else{
        
        echo 'Se cierra la sesión que se inició a las ' . date("H:i:s", $_SESSION['tActual']);
        session_destroy();
    }
    ?>
</body>
</html>