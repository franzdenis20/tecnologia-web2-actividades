<?php
if (isset($_POST['submit'])) {
    // Verificamos si se ha subido un archivo
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        // Obtener información del archivo subido
        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];
        $fileSize = $_FILES['file']['size'];

        // Calcular el tamaño del archivo en KB y MB
        $fileSizeKB = $fileSize / 1024;
        $fileSizeMB = $fileSizeKB / 1024;

        // Mostrar información del archivo
        echo "Nombre del archivo: " . htmlspecialchars($fileName) . "<br>";
        echo "Tipo de archivo: " . htmlspecialchars($fileType) . "<br>";
        echo "Tamaño del archivo: $fileSize bytes ($fileSizeKB KB, $fileSizeMB MB)<br>";
        echo "Temp name " . $_FILES['file']['tmp_name'];
    } else {
        echo "No se ha subido ningún archivo o ha ocurrido un error.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Subir Archivo</h2>
        <form action="#" method="post" enctype="multipart/form-data" class="mt-4">
            <div class="form-group">
                <label for="file">Seleccionar archivo:</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>