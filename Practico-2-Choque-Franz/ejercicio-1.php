<?php
// Inicializar el array con los estados posibles
$estados = array("me gusta", "comentarios", "compartir");

// Generar un array con 50 datos aleatorios
$seguidores = array();
for ($i = 0; $i < 50; $i++) {
    $seguidores[] = $estados[array_rand($estados)];
}
echo "<pre>";
var_dump($seguidores);

echo "</pre>";

echo "<hr>";

// Inicializar contadores
$conteoEstados = array(
    "me gusta" => 0,
    "comentarios" => 0,
    "compartir" => 0
);

// Cuento los estados
foreach ($seguidores as $estado) {
    $conteoEstados[$estado]++;
}

// Calcular el estado más utilizado
$estadoMasUtilizado = array_search(max($conteoEstados), $conteoEstados);

// Calcula el estado menos utilizado
$estadoMenosUtilizado = array_search(min($conteoEstados), $conteoEstados);

// Calcular el promedio de cada estado
$promedioEstados = array(
    "me gusta" => $conteoEstados["me gusta"] / count($seguidores) * 100,
    "comentarios" => $conteoEstados["comentarios"] / count($seguidores) * 100,
    "compartir" => $conteoEstados["compartir"] / count($seguidores) * 100



);


echo "El estado más utilizado por los seguidores es: " . $estadoMasUtilizado . "<hr>";
echo "El promedio de 'me gusta' es: " . $promedioEstados["me gusta"]."%" . "<br>";
echo "El promedio de 'comentarios' es: " . $promedioEstados["comentarios"]."%"  . "<br>";
echo "El promedio de 'compartir' es: " . $promedioEstados["compartir"] ."%"  . "<hr>";
echo "El estado menos utilizado por los seguidores es: " . $estadoMenosUtilizado . "<br>";
?>
