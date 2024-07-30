<?php




$competidores = [


    "Franz" => "10",
    "Pedro" => "9",
    "Saul" => "7",
    "romay" => "8",
    "luis" => "14",
    "juan" => "6",
    "brandon" => "13",
    "pepe" => "5",
    "ariel" => "12",
    "alex" => "11",

];


var_dump($competidores);
//Ordeno el arreglo
asort($competidores);
echo "<hr>";
var_dump($competidores);

//Muestro ganador
echo "<hr>";


// Obtener el nombre del ganador
$ganador = array_key_first($competidores);

// Mostrar el nombre del ganador y su tiempo
echo("Ganador: $ganador con un tiempo de ".$competidores[$ganador]." minutos");
echo "<hr>";
// Obtener el nombre del ganador
$ganador = array_key_first($competidores);
$ganador_tiempo = $competidores[$ganador];
// Obtener el segundo lugar
$segundo = array_key_first(array_slice($competidores, 1, 1, true));
$segundo_tiempo = $competidores[$segundo];
// Mostrar la diferencia de tiempo entre el ganador y el segundo lugar
$diferencia = $segundo_tiempo - $ganador_tiempo;
echo("La diferencia de tiempo entre el ganador y el segundo lugar ($segundo) es de $diferencia minutos.<br>");

echo "<hr>";

// Obtener el último en llegar
$ultimo = array_key_last($competidores);
$ultimo_tiempo = $competidores[$ultimo];
echo("Ultimo: $ultimo con un tiempo de ".$competidores[$ultimo]." minutos");


echo "<hr>";
// Obtener los tres primeros lugares
$tres_primeros = array_slice($competidores, 0, 3, true);
var_dump($tres_primeros);

?>