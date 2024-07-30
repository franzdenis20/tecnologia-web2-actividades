<?php

// Definimos el array con 10 números


function Maximo(...$numeros){
    $maximo = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numero > $maximo) {
            $maximo = $numero;
        }
        
    }

    return $maximo;

}


function Minimo(...$numeros){
    $minimo = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numero < $minimo) {
            $minimo = $numero;
        }
        
    }

    return $minimo;

}

echo "Maximo: ".Maximo(3, 15, 7, 44, 13, 9, 5, 12, 18, 11);
echo "<hr>";
echo "Minimo: ".Minimo(1, 15, 7, 25, 13, 9, 5, 12, 18, 11);

?>