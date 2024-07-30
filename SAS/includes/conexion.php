<?php
function conectar()
{
    
    $conn =  mysqli_connect("localhost", "root", "", "tecnologia2");

    if (!$conn) {
        echo "Error en la conexion" . mysqli_connect_error();
    }

    //echo "<h1>connexion exitosa</h1>";

    return $conn;
}
