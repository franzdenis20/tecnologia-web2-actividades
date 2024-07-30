<?php

$archivo = "prueba.txt";

echo (touch($archivo)) ? "Archivo Existe" : "Archivo no existe";
echo "<hr>";




if (touch($archivo)) {
    $datos = fopen($archivo, "a");
    fwrite($datos, "Hoy es lunes\n");
    
    fwrite($datos, "Hoy es lunes de clases 2\n");
    fclose($datos);
    $datos = fopen($archivo, "r");

    while (!feof($datos)) {
        $linea = fgets($datos, 1024);
        echo $linea . "<br>";
    }
    fclose($datos);
}

