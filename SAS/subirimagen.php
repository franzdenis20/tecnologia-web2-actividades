<?php
require("includes/conexion.php");
$conn = conectar();

if (isset($_FILES['image']['tmp_name']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
    $imagen_array = getimagesize($_FILES['image']['tmp_name']);
    $imagen_cargada = file_get_contents($_FILES['image']['tmp_name']);
    $imagen_cargada = addslashes($imagen_cargada);

    /*
    Logica para guardar la imagen en un directorio
    $carpeta_destino = "uploads/";
    $nombre_archivo = uniqid() . "_" . $_FILES['image']['name'];
    $ruta_completa = $carpeta_destino . $nombre_archivo;

    // Mover la imagen al directorio de destino
    if (move_uploaded_file($_FILES['image']['tmp_name'], $ruta_completa)) {
        // Escapar la ruta para evitar inyecciones SQL
        $ruta_db = mysqli_real_escape_string($conn, $ruta_completa);

        // Modificar la consulta SQL para guardar la ruta
        $sql = "INSERT INTO imagenes (ancho, altura, tipo, nombre, ruta) 
               VALUES ('$ancho', '$altura', '$tipo', '$nombre', '$ruta_db')";

        // ... (resto del código para ejecutar la consulta y manejar errores)
    } else {
        echo "Error al subir la imagen.";
    }
    
    */

    // Escapar los datos para evitar inyecciones SQL
    $ancho = mysqli_real_escape_string($conn, $imagen_array[0]);
    $altura = mysqli_real_escape_string($conn, $imagen_array[1]);
    $tipo = mysqli_real_escape_string($conn, $_FILES['image']['type']);
    $nombre = mysqli_real_escape_string($conn, $_FILES['image']['name']);

    $sql = "INSERT INTO imagenes (ancho, altura, tipo, imagen, nombre) 
            VALUES ('$ancho', '$altura', '$tipo', '$imagen_cargada', '$nombre')";

    // Ejecutar la consulta y manejar errores
    if ($conn->query($sql) === TRUE) {
        $mensaje = "Datos insertados correctamente.";
    } else {
        $mensaje = "Error al insertar datos: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Imagen</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Subir Imagen</h1>

        <?php if (isset($mensaje)): ?>
            <div class="alert alert-info">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Selecciona una imagen:</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir Imagen</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
