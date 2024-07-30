<?php


$user = $_GET['user'];

$contra = $_GET['password'];
$contra2 = $_GET['verify'];

echo ($user);
echo ($contra);
echo ($contra2);

echo "<hr>";


var_dump($contra == $contra2);


echo "<hr>";

//divide la palabra en tres partes

$cadena =explode("i",$user);
var_dump($cadena);

// busco la m
echo "<hr>";
echo strpos($cadena[0],"d");
echo "<hr>";
echo strpos($cadena[1],"d");
echo "<hr>";
echo strpos($cadena[2],"d");



?>