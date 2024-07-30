<?php
$cliente = "Juan Perez";

//Saber el tamaño de la cadena
echo "Funciones";

print(strlen($cliente));

echo "<br>";

var_dump($cliente);

// Para limpiar los espacios en blanco de una cadena
echo "<br>";

$texto = "juan perez";

var_dump($texto);

$texto2 = strlen(trim($texto));

echo($texto2);
echo "<hr>";

// convertir mayusculas y minusculas
//minusculas
echo (strtolower($cliente));

// mayusculas
echo "<br>";
echo(strtoupper($texto));

echo "<br>";

var_dump(strtolower($cliente)  === strtolower($texto) );


// remplazar

echo "<br>";
echo str_replace("Juan","Jose",$cliente);


// Buscar Posicion

echo "<br>";
echo strpos($cliente,"Perez");

//Buscar 
echo "<hr>";
echo substr_count($cliente,"e");


// dividir una cadena

$cadena =explode("e",$texto);
echo "<br>";
var_dump($cadena);


// unir la cadena
echo "<br>";
$cadena = implode("e",$cadena);
var_dump($cadena);


?>

