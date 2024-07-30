<?php
// Definir un array con 20 estudiantes y sus estados
$estudiantes = array(
    array("nombre" => "Estudiante 1", "nota" => 85, "estado" => "estratégico"),
    array("nombre" => "Estudiante 2", "nota" => 78, "estado" => "autónomo"),
    array("nombre" => "Estudiante 3", "nota" => 90, "estado" => "resolutivo"),
    array("nombre" => "Estudiante 4", "nota" => 88, "estado" => "estratégico"),
    array("nombre" => "Estudiante 5", "nota" => 67, "estado" => "pre formal"),
    array("nombre" => "Estudiante 6", "nota" => 72, "estado" => "receptivo"),
    array("nombre" => "Estudiante 7", "nota" => 95, "estado" => "estratégico"),
    array("nombre" => "Estudiante 8", "nota" => 60, "estado" => "pre formal"),
    array("nombre" => "Estudiante 9", "nota" => 85, "estado" => "estratégico"),
    array("nombre" => "Estudiante 10", "nota" => 70, "estado" => "resolutivo"),
    array("nombre" => "Estudiante 11", "nota" => 74, "estado" => "autónomo"),
    array("nombre" => "Estudiante 12", "nota" => 90, "estado" => "estratégico"),
    array("nombre" => "Estudiante 13", "nota" => 58, "estado" => "pre formal"),
    array("nombre" => "Estudiante 14", "nota" => 66, "estado" => "receptivo"),
    array("nombre" => "Estudiante 15", "nota" => 80, "estado" => "estratégico"),
    array("nombre" => "Estudiante 16", "nota" => 92, "estado" => "resolutivo"),
    array("nombre" => "Estudiante 17", "nota" => 76, "estado" => "autónomo"),
    array("nombre" => "Estudiante 18", "nota" => 59, "estado" => "pre formal"),
    array("nombre" => "Estudiante 19", "nota" => 84, "estado" => "estratégico"),
    array("nombre" => "Estudiante 20", "nota" => 73, "estado" => "receptivo")
);

// contadores
$contadorPreFormal = 0;
$contadorEstrategico = 0;
$sumaNotasEstrategico = 0;


foreach ($estudiantes as $estudiante) {
    
    if ($estudiante["estado"] == "pre formal") {
        $contadorPreFormal++;
    }
    
    if ($estudiante["estado"] == "estratégico") {
        $contadorEstrategico++;
        $sumaNotasEstrategico += $estudiante["nota"];
    }
}


if ($contadorEstrategico > 0) {
    $promedioEstrategico = $sumaNotasEstrategico / $contadorEstrategico;
} else {
    $promedioEstrategico = 0;
}


echo "Número de estudiantes en estado 'pre formal': " . $contadorPreFormal . "<br>";
if ($contadorPreFormal > 0) {
    echo " Los estudiantes en estado 'pre formal' necesitan retroalimentación.<br>";
}
echo "Promedio de notas de estudiantes en estado 'estratégico': " . $promedioEstrategico;
?>
