<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo_vivienda = $_POST['tipo_vivienda'] ?? '';
    $estado_vivienda = $_POST['estado_vivienda'] ?? '';

    $errores = [];

  
    if (empty($tipo_vivienda)) {
        $errores[] = "Debe seleccionar el tipo de vivienda.";
    }

    if (empty($estado_vivienda)) {
        $errores[] = "Debe seleccionar el estado de la vivienda.";
    }

   
    if (empty($errores)) {
        $uploadDir = 'practica_3/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $nombreArchivo = 'datos_vivienda_' . date('YmdHis') . '.txt';
        $archivoTxt = $uploadDir . $nombreArchivo;

        $contenidoTxt = "Tipo de vivienda: $tipo_vivienda\n";
        $contenidoTxt .= "Estado de la vivienda: $estado_vivienda\n";

        file_put_contents($archivoTxt, $contenidoTxt);

        echo "Formulario enviado y datos guardados correctamente.";
    } else {
        foreach ($errores as $error) {
            echo "<h1>$error</h1>";
        }
    }
}
?>
