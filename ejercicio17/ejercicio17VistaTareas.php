<h1>LISTA DE TAREAS</h1>

<?php

    echo "La tarea añadida es: " . $_POST['tarea'];

    if(!isset($_COOKIE['tarea'])){

        setcookie ("tarea", "", time() + 86400);

    } else{

        $listaTareas = $_COOKIE['tarea'];

        setcookie("ListaDeTareas", $listaTareas . "<br>", time() + 86400);

        echo $listaTareas;
    }
?>
    <br><br>
    <a href="ejercicio17Vistaform.php">Volver</a>

