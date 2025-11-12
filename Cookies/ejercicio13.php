<?php

if (!isset ($_COOKIE['repeticiones'])){

    setcookie("repeticiones", 10, time() + 20);
    echo "Creo la cookie";

}else{

    echo "La cookie ya está definida <br>";
    $veces = $_COOKIE['repeticiones'];
    for($i=0; $i < $veces; $i ++){
        echo "Esta es la repetición número " . ($i +1) . ". <br>";
    }

}