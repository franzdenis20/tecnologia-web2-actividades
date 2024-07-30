<?php

function validarCampo($campo, $nombreCampo) {
    if (empty($campo)) {
        echo "<p style='color: red;'>El campo '$nombreCampo' está vacío.</p>";
        return false;
    }
    return true;
}

function validarLongitud($campo, $nombreCampo, $min, $max) {
    if (strlen($campo) < $min || strlen($campo) > $max) {
        echo "<p style='color: red;'>El campo '$nombreCampo' debe tener entre $min y $max caracteres.</p>";
        return false;
    }
    return true;
}

function validarCaracteresEspeciales($campo, $nombreCampo) {
    if (preg_match('/[^a-zA-Z0-9\s]/', $campo)) {
        echo "<p style='color: red;'>El campo '$nombreCampo' no debe contener caracteres especiales.</p>";
        return false;
    }
    return true;
}

$nombre = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$correo = $_POST['correo'] ?? '';
$comentarios = $_POST['comentarios'] ?? '';
$idioma = $_POST['idioma'] ?? '';
$musica = $_POST['musica'] ?? '';
$pasatiempo = $_POST['pasatiempo'] ?? [];

$camposValidos = true;
$camposValidos &= validarCampo($nombre, "Nombre");
$camposValidos &= validarCampo($apellido, "Apellido");
$camposValidos &= validarCampo($correo, "Correo");
$camposValidos &= validarCampo($comentarios, "Comentarios");
$camposValidos &= validarCampo($idioma, "Idioma");
$camposValidos &= validarCampo($musica, "Música favorita");
$camposValidos &= validarCampo(implode(", ", $pasatiempo), "Pasatiempos");

if ($camposValidos) {
    $camposValidos &= validarLongitud($nombre, "Nombre", 3, 20);
    $camposValidos &= validarLongitud($apellido, "Apellido", 3, 20);
    $camposValidos &= validarLongitud($comentarios, "Comentarios", 5, 50);
    $camposValidos &= validarCaracteresEspeciales($comentarios, "Comentarios");
}

if ($camposValidos) {
    echo "<p style='color: green;'>Todos los campos son válidos. Formulario enviado correctamente.</p>";
    echo "<h2>Formulario Completo</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Correo: $correo</p>";
    echo "<p>Comentarios: $comentarios</p>";
    echo "<p>Idioma: $idioma</p>";
    echo "<p>Música: $musica</p>";
    echo "<p>Pasatiempo: " . implode(", ", $pasatiempo) . "</p>";
}
?>
