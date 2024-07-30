<?php
// Definir un array con 15 temperaturas y sus respectivas fechas
$temperaturas = array(
    array("fecha" => "2024-07-01", "temperatura" => 32),
    array("fecha" => "2024-07-02", "temperatura" => 30),
    array("fecha" => "2024-07-03", "temperatura" => 28),
    array("fecha" => "2024-07-04", "temperatura" => 35),
    array("fecha" => "2024-07-05", "temperatura" => 33),
    array("fecha" => "2024-07-06", "temperatura" => 31),
    array("fecha" => "2024-07-07", "temperatura" => 29),
    array("fecha" => "2024-07-08", "temperatura" => 34),
    array("fecha" => "2024-07-09", "temperatura" => 36),
    array("fecha" => "2024-07-10", "temperatura" => 27),
    array("fecha" => "2024-07-11", "temperatura" => 25),
    array("fecha" => "2024-07-12", "temperatura" => 29),
    array("fecha" => "2024-07-13", "temperatura" => 32),
    array("fecha" => "2024-07-14", "temperatura" => 31),
    array("fecha" => "2024-07-15", "temperatura" => 33)
);


$maxTemp = $temperaturas[0]["temperatura"];
$minTemp = $temperaturas[0]["temperatura"];
$maxTempFecha = $temperaturas[0]["fecha"];
$minTempFecha = $temperaturas[0]["fecha"];
$sumaTemp = 0;


foreach ($temperaturas as $temp) {
    // Suma todas las temperaturas para el promedio
    $sumaTemp += $temp["temperatura"];
    
    // El día más caluroso
    if ($temp["temperatura"] > $maxTemp) {
        $maxTemp = $temp["temperatura"];
        $maxTempFecha = $temp["fecha"];
    }
    
    // El día más frío
    if ($temp["temperatura"] < $minTemp) {
        $minTemp = $temp["temperatura"];
        $minTempFecha = $temp["fecha"];
    }
}

$promedioTemp = $sumaTemp / count($temperaturas);


echo "El día más caluroso es: " . $maxTempFecha . " con una temperatura de " . $maxTemp . "°C<br>";
echo "El día más frío es: " . $minTempFecha . " con una temperatura de " . $minTemp . "°C<br>";
echo "El promedio de temperatura es: " . $promedioTemp . "°C";
?>
