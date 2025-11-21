<?php
#Inicamos/recuperamos la lista de tareas desde las cookies
function recuperarTareas(){
    $lista = [];
    if (!isset($_COOKIE['tareas'])){
        setcookie('tareas', "", time () + 86400);
    } else{
        $lista = unserialize ($_COOKIE['tareas']);
    }
    return $lista;
}
#Guardamos tareas en la cookie
function guardarTarea($tarea){
    $lista = recuperarTareas();
    $lista[count($lista)] = $tarea;
    setcookie ('tareas', serialize($lista), time() + 86400);
    return count($lista);
}