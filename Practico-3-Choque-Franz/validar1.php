<?php
if (isset($_POST['submit'])) {
    $projectName = $_POST['project_name'];
    $projectDescription = $_POST['project_description'];
    $projectFile = $_FILES['project_file'];

    $errors = [];

    // Valida el nombre del proyecto
    if (!preg_match('/^[a-zA-Z0-9\s]+$/', $projectName)) {
        $errors[] = "El nombre del proyecto solo debe contener letras, números y espacios.";
    }

    // Valida la descripción del proyecto
    if (strlen($projectDescription) < 50) {
        $errors[] = "La descripción del proyecto debe tener un mínimo de 50 caracteres.";
    }

    // Valida el archivo
    $allowedTypes = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    if (!in_array($projectFile['type'], $allowedTypes)) {
        $errors[] = "El documento del proyecto debe ser un archivo PDF o DOCX.";
    }
    if ($projectFile['size'] > 5 * 1024 * 1024) { // 5 MB
        $errors[] = "El documento del proyecto no debe exceder los 5 MB.";
    }

    // Mostrar errores si existen
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<h1 style='color: red;'>$error</h1>";
        }
    } else {
        
        $uploadDir = 'practica_3/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Crear un nombre único para el archivo
        $fileExtension = pathinfo($projectFile['name'], PATHINFO_EXTENSION);
        $newFileName = $projectName . '_' . date('YmdHis') . '.' . $fileExtension;
        $uploadFilePath = $uploadDir . $newFileName;

        // Mover el archivo a la carpeta de destino
        if (move_uploaded_file($projectFile['tmp_name'], $uploadFilePath)) {
            echo "<p style='color: green;'>El documento del proyecto se ha subido correctamente.</p>";
            echo "<h3>Detalles del Proyecto</h3>";
            echo "<p>Nombre del Proyecto: $projectName</p>";
            echo "<p>Descripción del Proyecto: $projectDescription</p>";
            echo "<p>Archivo Subido: <a href='$uploadFilePath' target='_blank'>$newFileName</a></p>";
        } else {
            echo "<p style='color: red;'>Hubo un error al subir el documento del proyecto.</p>";
        }
    }
}
?>
