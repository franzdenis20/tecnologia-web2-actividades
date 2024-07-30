<?php
require('includes/funciones.php');

$nombre = $apellido = $telefono = "";
$nombreErr = $apellidoErr = $telefonoErr = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    if (empty(trim($_POST['nombre']))) {
        $nombreErr = "El nombre es obligatorio.";
        $isValid = false;
    } elseif (strlen(trim($_POST['nombre'])) > 20) {
        $nombreErr = "El nombre no debe superar los 20 caracteres.";
        $isValid = false;
    } else {
        $nombre = trim($_POST['nombre']);
    }

    if (empty(trim($_POST['apellido']))) {
        $apellidoErr = "El apellido es obligatorio.";
        $isValid = false;
    } elseif (strlen(trim($_POST['apellido'])) > 20) {
        $apellidoErr = "El apellido no debe superar los 20 caracteres.";
        $isValid = false;
    } else {
        $apellido = trim($_POST['apellido']);
    }

    if (empty(trim($_POST['telefono']))) {
        $telefonoErr = "El teléfono es obligatorio.";
        $isValid = false;
    } elseif (strlen(trim($_POST['telefono'])) > 20) {
        $telefonoErr = "El teléfono no debe superar los 20 caracteres.";
        $isValid = false;
    } else {
        $telefono = trim($_POST['telefono']);
    }

    if ($isValid) {
        if (insertar($nombre, $apellido, $telefono)) {
            $successMessage = "Registro insertado correctamente.";
        } 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Formulario de Usuario</h2>
        <?php if (!empty($successMessage)): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>"  >
                <small class="text-danger"><?php echo $nombreErr; ?></small>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo htmlspecialchars($apellido); ?>"  >
                <small class="text-danger"><?php echo $apellidoErr; ?></small>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($telefono); ?>"  >
                <small class="text-danger"><?php echo $telefonoErr; ?></small>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
    <!-- Bootstrap JS and dependencies (optional but recommended) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
