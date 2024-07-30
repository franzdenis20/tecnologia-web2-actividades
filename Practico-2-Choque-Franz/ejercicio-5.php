<?php

$vehiculos = array(
    array("vehiculo" => "Vehículo 1", "tiempo_espera" => 5),
    array("vehiculo" => "Vehículo 2", "tiempo_espera" => 3),
    array("vehiculo" => "Vehículo 3", "tiempo_espera" => 7),
    array("vehiculo" => "Vehículo 4", "tiempo_espera" => 4),
    array("vehiculo" => "Vehículo 5", "tiempo_espera" => 6),
    array("vehiculo" => "Vehículo 6", "tiempo_espera" => 2),
    array("vehiculo" => "Vehículo 7", "tiempo_espera" => 8),
    array("vehiculo" => "Vehículo 8", "tiempo_espera" => 5),
    array("vehiculo" => "Vehículo 9", "tiempo_espera" => 4),
    array("vehiculo" => "Vehículo 10", "tiempo_espera" => 3),
    array("vehiculo" => "Vehículo 11", "tiempo_espera" => 6),
    array("vehiculo" => "Vehículo 12", "tiempo_espera" => 9),
    array("vehiculo" => "Vehículo 13", "tiempo_espera" => 1),
    array("vehiculo" => "Vehículo 14", "tiempo_espera" => 7),
    array("vehiculo" => "Vehículo 15", "tiempo_espera" => 5)
);


$maxTiempo = $vehiculos[0]["tiempo_espera"];
$vehiculoMaxTiempo = $vehiculos[0]["vehiculo"];
$sumaTiempos = 0;


foreach ($vehiculos as $vehiculo) {
    
    $sumaTiempos += $vehiculo["tiempo_espera"];
    
    
    if ($vehiculo["tiempo_espera"] > $maxTiempo) {
        $maxTiempo = $vehiculo["tiempo_espera"];
        $vehiculoMaxTiempo = $vehiculo["vehiculo"];
    }
}


$promedioTiempo = $sumaTiempos / count($vehiculos);


echo "El vehículo que esperó más tiempo es: " . $vehiculoMaxTiempo . " con un tiempo de espera de " . $maxTiempo . " minutos<br>";
echo "<hr>";
echo "El promedio de los tiempos de espera es: " . $promedioTiempo . " minutos";
?>
