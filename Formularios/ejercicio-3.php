<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .is-invalid {
            border-color: #007bff !important; /* Color azul */
        }
        body {
            background-color: black;
        }
    </style>
</head>
<body>

<?php
// Inicializamos las variables de error
$errores = [
    'nombre' => '',
    'apellido' => '',
    'correo' => '',
    'comentarios' => '',
    'idioma' => '',
    'musica' => '',
    'pasatiempo' => ''
];

// Función para validar campos vacíos
function validarCampo($campo, $nombreCampo) {
    return empty($campo) ? "El campo '$nombreCampo' está vacío." : '';
}

// Función para validar longitud de los campos
function validarLongitud($campo, $nombreCampo, $min, $max) {
    if (strlen($campo) < $min || strlen($campo) > $max) {
        return "El campo '$nombreCampo' debe tener entre $min y $max caracteres.";
    }
    return '';
}

// Función para validar caracteres especiales
function validarCaracteresEspeciales($campo, $nombreCampo) {
    return preg_match('/[^a-zA-Z0-9\s]/', $campo) ? "El campo '$nombreCampo' no debe contener caracteres especiales." : '';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $comentarios = $_POST['comentarios'] ?? '';
    $idioma = $_POST['idioma'] ?? '';
    $musica = $_POST['musica'] ?? '';
    $pasatiempo = $_POST['pasatiempo'] ?? [];

    // Validación de campos
    $errores['nombre'] = validarCampo($nombre, "Nombre") ?: validarLongitud($nombre, "Nombre", 3, 20);
    $errores['apellido'] = validarCampo($apellido, "Apellido") ?: validarLongitud($apellido, "Apellido", 3, 20);
    $errores['correo'] = validarCampo($correo, "Correo");
    $errores['comentarios'] = validarCampo($comentarios, "Comentarios") ?: validarLongitud($comentarios, "Comentarios", 5, 50) ?: validarCaracteresEspeciales($comentarios, "Comentarios");
    $errores['idioma'] = validarCampo($idioma, "Idioma");
    $errores['musica'] = validarCampo($musica, "Música favorita");
    $errores['pasatiempo'] = empty($pasatiempo) ? "El campo 'Pasatiempos' está vacío." : '';

    $camposValidos = !array_filter($errores);

    if ($camposValidos) {
        echo "<p style='color: green;'>Todos los campos son válidos. Formulario enviado correctamente.</p>";
        echo "<h2>Formulario Completo</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Correo: $correo</p>";
        echo "<p>Comentarios: $comentarios</p>";
        echo "<p>Idioma: $idioma</p>";
        echo "<p>Música: $musica</p>";
        echo "<p>Pasatiempos:</p>";
        echo "<ul>";
        foreach ($pasatiempo as $hobby) {
            echo "<li>$hobby</li>";
        }
        echo "</ul>";
    }
}

// Arreglos
$idiomas = ["español", "ingles", "frances", "aleman","Portugal"];

$musicas = ["rock", "pop", "clasica","clasica2"];
$pasatiempos = ["leer", "deporte", "musica", "viajar"];
?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6">
        <form action="" method="post" class="bg-light p-4 rounded shadow">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control <?php echo $errores['nombre'] ? 'is-invalid' : ''; ?>" id="nombre" placeholder="Nombre" name="nombre" value="<?php echo htmlspecialchars($nombre ?? ''); ?>">
                <?php if ($errores['nombre']) echo "<p class='text-danger'>{$errores['nombre']}</p>"; ?>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control <?php echo $errores['apellido'] ? 'is-invalid' : ''; ?>" id="apellido" placeholder="Apellido" name="apellido" value="<?php echo htmlspecialchars($apellido ?? ''); ?>">
                <?php if ($errores['apellido']) echo "<p class='text-danger'>{$errores['apellido']}</p>"; ?>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control <?php echo $errores['correo'] ? 'is-invalid' : ''; ?>" id="correo" placeholder="Correo" name="correo" value="<?php echo htmlspecialchars($correo ?? ''); ?>">
                <?php if ($errores['correo']) echo "<p class='text-danger'>{$errores['correo']}</p>"; ?>
            </div>

            <div class="form-group">
                <label for="comentarios">Comentarios</label>
                <textarea class="form-control <?php echo $errores['comentarios'] ? 'is-invalid' : ''; ?>" id="comentarios" name="comentarios" rows="4" placeholder="Escribe tus comentarios aquí..."><?php echo htmlspecialchars($comentarios ?? ''); ?></textarea>
                <?php if ($errores['comentarios']) echo "<p class='text-danger'>{$errores['comentarios']}</p>"; ?>
            </div>

            <div class="form-group">
                <label for="idioma">Idioma</label>
                <select class="form-control <?php echo $errores['idioma'] ? 'is-invalid' : ''; ?>" id="idioma" name="idioma">
                    <?php foreach ($idiomas as $value) { ?>
                        <option value="<?php echo $value; ?>" <?php echo (isset($idioma) && $idioma == $value) ? 'selected' : ''; ?>><?php echo ucfirst($value); ?></option>
                    <?php } ?>
                </select>
                <?php if ($errores['idioma']) echo "<p class='text-danger'>{$errores['idioma']}</p>"; ?>
            </div>

            <fieldset class="form-group">
                <legend>Música favorita</legend>
                <?php foreach ($musicas as $value) { ?>
                    <div class="form-check">
                        <input class="form-check-input <?php echo $errores['musica'] ? 'is-invalid' : ''; ?>" type="radio" name="musica" id="<?php echo $value; ?>" value="<?php echo $value; ?>" <?php echo (isset($musica) && $musica == $value) ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="<?php echo $value; ?>"><?php echo ucfirst($value); ?></label>
                    </div>
                <?php } ?>
                <?php if ($errores['musica']) echo "<p class='text-danger'>{$errores['musica']}</p>"; ?>
            </fieldset>

            <fieldset class="form-group">
                <legend>Pasatiempos</legend>
                <?php foreach ($pasatiempos as $value) { ?>
                    <div class="form-check">
                        <input class="form-check-input <?php echo $errores['pasatiempo'] ? 'is-invalid' : ''; ?>" type="checkbox" name="pasatiempo[]" id="<?php echo $value; ?>" value="<?php echo $value; ?>" <?php echo (isset($pasatiempo) && in_array($value, $pasatiempo)) ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="<?php echo $value; ?>"><?php echo ucfirst($value); ?></label>
                    </div>
                <?php } ?>
                <?php if ($errores['pasatiempo']) echo "<p class='text-danger'>{$errores['pasatiempo']}</p>"; ?>
            </fieldset>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
