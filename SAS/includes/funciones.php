<?php

require("conexion.php");

function insertar($nombre,$apellido,$telefono){
    $conn = conectar();
    $sql = "INSERT INTO usuario (nombre, apellido, telefono) VALUES ('$nombre', '$apellido', '$telefono')";

    mysqli_query($conn ,$sql);
    //echo("Success User Register");
    
    return true; 
}

function listar() {
    global $conn;
    $conn = conectar();
    $sql = "SELECT * FROM usuario";
    $result = mysqli_query($conn, $sql);

    $datos = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $datos[] = $row;
        }
    }
    return $datos;
}

?>