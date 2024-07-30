<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errores = [];

    // Validar nombre del proyecto
    $segmento = $_POST['segmento'];
    $manzana = $_POST['manzana'];
    $nro_predio = $_POST['nro_predio'];
    $total_viviendas = $_POST['total_viviendas'];
    $nro_vivienda = $_POST['nro_vivienda'];
    $ciudad = $_POST['ciudad'];
    $calle = $_POST['calle'];
    $nro_puerta = $_POST['nro_puerta'];
    $planta_piso_nivel = $_POST['planta_piso_nivel'];
    $nro_depto = $_POST['nro_depto'];
    $nombre_edificio = $_POST['nombre_edificio'];
    $bloque = $_POST['bloque'];
    $tipo_vivienda = $_POST['tipo_vivienda'];
    $comentarios = $_POST['comentarios'];

    $campos_texto = [$segmento, $manzana, $nro_predio, $ciudad, $calle, $nro_puerta, $planta_piso_nivel, $nro_depto, $nombre_edificio, $bloque];
    $nombres_campos = ['Segmento', 'Manzana', 'Número de Predio', 'Ciudad', 'Calle', 'Número de puerta', 'Planta, piso o nivel', 'Número de departamento', 'Nombre del edificio', 'Bloque'];

    foreach ($campos_texto as $index => $campo) {
        if (!preg_match('/^[a-zA-Z0-9 ]{1,50}$/', $campo)) {
            $errores[] = "El campo " . $nombres_campos[$index] . " solo debe contener letras, números y espacios, y no exceder 50 caracteres.";
        }
    }

    // Validar foto de la vivienda
    if (isset($_FILES['foto_vivienda']) && $_FILES['foto_vivienda']['error'] == 0) {
        $foto = $_FILES['foto_vivienda'];
        $extensionesPermitidas = ['jpg', 'jpeg', 'png'];
        $extension = pathinfo($foto['name'], PATHINFO_EXTENSION);

        if (!in_array(strtolower($extension), $extensionesPermitidas)) {
            $errores[] = "La foto de la vivienda debe ser un archivo JPG o PNG.";
        }

        if ($foto['size'] > 2 * 1024 * 1024) {
            $errores[] = "La foto de la vivienda no debe exceder los 2 MB.";
        }
    } else {
        $errores[] = "Debe subir una foto de la vivienda.";
    }

    // Validar comentarios
    if (!empty($comentarios) && strlen($comentarios) > 500) {
        $errores[] = "Los comentarios adicionales no deben exceder los 500 caracteres.";
    }

    // Gestión de Archivos
    if (empty($errores)) {
        $uploadDir = 'practica_3/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Guardar la foto con un nombre único
        $nombreArchivoFoto = $segmento . '_' . date('YmdHis') . '.' . $extension;
        move_uploaded_file($foto['tmp_name'], $uploadDir . $nombreArchivoFoto);

        // Guardar datos en un archivo txt
        $archivoTxt = $uploadDir . 'datos_' . date('YmdHis') . '.txt';
        $contenidoTxt = "Segmento: $segmento\n";
        $contenidoTxt .= "Manzana: $manzana\n";
        $contenidoTxt .= "Número de Predio: $nro_predio\n";
        $contenidoTxt .= "Total de viviendas en el predio: $total_viviendas\n";
        $contenidoTxt .= "Número de vivienda: $nro_vivienda\n";
        $contenidoTxt .= "Ciudad o comunidad: $ciudad\n";
        $contenidoTxt .= "Calle, avenida, camino o carretera: $calle\n";
        $contenidoTxt .= "Número de puerta: $nro_puerta\n";
        $contenidoTxt .= "Planta, piso o nivel: $planta_piso_nivel\n";
        $contenidoTxt .= "Número de departamento: $nro_depto\n";
        $contenidoTxt .= "Nombre del edificio, condominio, torre o conventillo: $nombre_edificio\n";
        $contenidoTxt .= "Bloque: $bloque\n";
        $contenidoTxt .= "Tipo de vivienda: $tipo_vivienda\n";
        $contenidoTxt .= "Nombre de la foto: $nombreArchivoFoto\n";
        if (!empty($comentarios)) {
            $contenidoTxt .= "Comentarios: $comentarios\n";
        }
        file_put_contents($archivoTxt, $contenidoTxt);

        echo "Formulario enviado y datos guardados correctamente.";
    } else {
        foreach ($errores as $error) {
            echo "<h1 style='color: red;'>$error</h1>";
        }
    }
}
?>
