<?php

require("includes/conexion.php");

$conn = conectar(); // Llamar a la función conectar() para obtener la conexión a la base de datos

$archivo = fopen("datos.csv", "r");

$bandera = true;

while (!feof($archivo)) {
    $datos = fgetcsv($archivo);

    // Saltar la primera línea (encabezado)
    if ($bandera) {
        $bandera = false;
        continue;
    }

    // Verificar que $datos no esté vacío y tenga el número esperado de columnas
    if ($datos && count($datos) >= 6) {
        $descripcion = mysqli_real_escape_string($conn, $datos[1]);
        $nombre = mysqli_real_escape_string($conn, $datos[2]);
        $pais = mysqli_real_escape_string($conn, $datos[3]);
        $acierto = mysqli_real_escape_string($conn, $datos[4]);
        $estado = mysqli_real_escape_string($conn, $datos[5]);

        $sql = "INSERT INTO preguntas (descripcion, nombre, pais, acierto, estado)
                VALUES ('$descripcion', '$nombre', '$pais', '$acierto', '$estado')";

        $r = mysqli_query($conn, $sql);

        echo ($r) ? "Inserto correctamente<br>" : "Error al insertar: " . mysqli_error($conn) . "<br>";
    }
}

fclose($archivo);

?>
