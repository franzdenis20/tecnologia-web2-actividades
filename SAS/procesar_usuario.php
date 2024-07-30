<?php
require('includes/funciones.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $telefono = trim($_POST['telefono']);
    
    // Validaciones
    if (empty($nombre) || empty($apellido) || empty($telefono)) {
        echo "Todos los campos son obligatorios.";
    } elseif (strlen($nombre) > 20 || strlen($apellido) > 20 || strlen($telefono) > 20) {
        echo "Los campos no deben superar los 20 caracteres.";
    } else {
        insertar($nombre, $apellido, $telefono);
    }
}
?>
