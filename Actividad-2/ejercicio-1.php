<?php
// Tipos de tados
$nombre = "Franz Denis";
$talla = 1.55;
$peso = 68;

$musica = ["regue","rock"];

$bandera = true;

echo "nombre: $nombre <br> Talla: $talla<br>";
print("nombre:".$nombre);
print("Talla: $talla <br>");

print($bandera."<br>");

//echo "$bandera";



//var_dump($musica);

foreach($musica as $genero){
    echo "$genero <br>";
}

echo "<hr>";


// Operadores

/*
$a = $_GET['a'];
$b = $_GET['b'];
echo ("El resultado de la suma es : ".($a + $b). "<br>");
echo ("El resultado de la resta es : ".($a -$b). "<br>");
echo ("El resultado de la Multiplicacion es : ".($a * $b). "<br>");
echo ("El resultado de la Divicion es : ".($a/$b). "<br>");

echo ("El resultado del modulo es : ".($a%$b). "<br>");



// Comparativos

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a <=> $b);

*/

// Actividad
$a = $_GET['a'];
$b = $_GET['b'];

echo "$a";
echo "<hr>";
echo "$b";
echo "<hr>";
var_dump($a[0] > $b[0]);
echo "<br>";
var_dump($a[0] < $b[0]);
echo "<br>";
var_dump($a[0] <= $b[0]);
echo "<br>";
var_dump($a[0] >= $b[0]);
echo "<br>";
var_dump($a[0] == $b[0]);
echo "<br>";
var_dump($a[0] === $b[0]);


echo "<br>";


var_dump($a[0] <=> $b[0]);
echo "<hr>";
var_dump($a[1] > $b[1]);
echo "<br>";
var_dump($a[1] < $b[1]);
echo "<br>";
var_dump($a[1] <= $b[1]);
echo "<br>";
var_dump($a[1] >= $b[1]);
echo "<br>";
var_dump($a[1] == $b[1]);
echo "<br>";
var_dump($a[1] === $b[1]);
echo "<br>";
var_dump($a[1] <=> $b[1]);

echo "<hr>";

var_dump($a[2] > $b[2]);
echo "<br>";
var_dump($a[2] < $b[2]);
echo "<br>";
var_dump($a[2] <= $b[2]);
echo "<br>";
var_dump($a[2] >= $b[2]);
echo "<br>";
var_dump($a[2] == $b[2]);
echo "<br>";
var_dump($a[2] === $b[2]);
echo "<br>";
var_dump($a[2] <=> $b[2]);


?>