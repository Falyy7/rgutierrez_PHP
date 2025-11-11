<?php
function mayorValor ($array){
    return max ($array);
}

function menorValor ($array){
    return min ($array);
}

function sumaValores ($array){
    return array_sum ($array);
}

function contarPares ($array){
    $contador = 0;
    foreach ($array as $num) {
        if ($num % 2 == 0) {
            $contador ++;
        }
    }
    return $contador;
}
    ?>