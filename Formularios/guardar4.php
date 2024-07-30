<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $carrera = $_POST['carrera'];

    $uploadDir = 'archivosData/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $nombreArchivo = 'actividad4'. '.txt';
    $archivoTxt = $uploadDir . $nombreArchivo;

    if (touch($archivoTxt)) {
        $datos = fopen($archivoTxt, "a");
        fwrite($datos, "Nombre: $nombre\n");
        fwrite($datos, "Apellido: $apellido\n");
        fwrite($datos, "Carrera: $carrera\n");
        fclose($datos);

        echo "Formulario enviado y datos guardados correctamente.<br>";

        $datos = fopen($archivoTxt, "r");
        while (!feof($datos)) {
            $linea = fgets($datos, 1024);
            echo $linea . "<br>";
        }
        fclose($datos);
    } else {
        echo "Error al crear el archivo.";
    }
}
?>

