<?php
if (isset($_POST['submit'])) {
    $nombre = htmlspecialchars($_POST['nombre']);

    // Configuración de subida
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Procesar imagen
    $imagen = $_FILES['imagen'];
    $imagenName = basename($imagen['name']);
    $imagenPath = $uploadDir . $imagenName;
    $imagenType = strtolower(pathinfo($imagenPath, PATHINFO_EXTENSION));
    $imagenSize = $imagen['size'];

    // Validaciones para la imagen
    $imagenValida = true;
    if ($imagenType != 'png') {
        echo "La imagen debe ser un archivo PNG.<br>";
        $imagenValida = false;
    }
    /*
    if ($imagenSize > 2 * 1024 * 1024) { // 2 MB
        echo "La imagen no debe superar los 2 MB.<br>";
        $imagenValida = false;
    }*/

    
    $pdf = $_FILES['pdf'];
    $pdfName = basename($pdf['name']);
    $pdfPath = $uploadDir . $pdfName;
    $pdfType = strtolower(pathinfo($pdfPath, PATHINFO_EXTENSION));
    $pdfSize = $pdf['size'];

   
    $pdfValido = true;
    if ($pdfType != 'pdf') {
        echo "El archivo debe ser un PDF.<br>";
        $pdfValido = false;
    }
    if ($pdfSize > 10 * 1024 * 1024) { // 10 MB
        echo "El archivo PDF no debe superar los 10 MB.<br>";
        $pdfValido = false;
    }

    // Si todas las validaciones pasan
    if ($imagenValida && $pdfValido) {
        if (move_uploaded_file($imagen['tmp_name'], $imagenPath) && move_uploaded_file($pdf['tmp_name'], $pdfPath)) {
            // Mostrar datos de los archivos
            $imagenSizeKB = $imagenSize / 1024;
            $imagenSizeMB = $imagenSizeKB / 1024;
            $pdfSizeKB = $pdfSize / 1024;
            $pdfSizeMB = $pdfSizeKB / 1024;

            echo "<h2>Datos del Formulario</h2>";
            echo "<p>Nombre: $nombre</p>";

            echo "<h2>Datos de la Imagen</h2>";
            echo "<p>Nombre: $imagenName</p>";
            echo "<p>Tamaño: $imagenSize bytes ({$imagenSizeKB} KB / {$imagenSizeMB} MB)</p>";
            echo "<img src='$imagenPath' alt='Imagen subida' style='max-width: 200px;'>";

            echo "<h2>Datos del PDF</h2>";
            echo "<p>Nombre: $pdfName</p>";
            echo "<p>Tamaño: $pdfSize bytes ({$pdfSizeKB} KB / {$pdfSizeMB} MB)</p>";
            echo "<a href='$pdfPath' target='_blank'>Ver PDF</a>";
        } else {
            echo "Hubo un error al subir los archivos.";
        }
    }
}
?>
