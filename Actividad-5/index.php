<?php

// sentencias if

$compra = $_GET['c'];
$puntos = 0;

/*

$puntos += ($compra > 50 && $compra <= 100) ? 5 : (
    ($compra > 100 && $compra <= 200) ? 15 : (
        ($compra > 200 && $compra <= 500) ? 30 : (
            ($compra > 500) ? 60 : 0
        )
    )
);

*/

switch ($compra) {
    case ($compra > 50 && $compra <= 100):
        $puntos += 5;
        break;
    case ($compra > 100 && $compra <= 200):
        $puntos += 15;
        break;
    case ($compra > 200 && $compra <= 500):
        $puntos += 30;
        break;
    case ($compra > 500):
        $puntos += 60;
        break;
    default:
        $puntos += 0;
}


//while



echo ("<h1>Puntos De Compra: $puntos</h1>");
?>