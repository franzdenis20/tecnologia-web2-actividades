<?php

// declarar arreglos

// Array de una dimencion

$platos1 = array("saice1","sopa1", "chancho1");
$platos= ["saice2","sopa2", "chancho2"];

var_dump($platos);
echo "</pre>";
//insertar datos

$platos[2]="Nuevo plato";
$platos[3]="Nuevo chancho";

//Insertar al inicio

array_unshift($platos,"jugos");
echo "<hr>";
var_dump($platos);

// Insertar al final

array_push($platos,"enlacefinal");
echo "<hr>";
var_dump($platos);
echo "<hr>";


//array de dos dimenciones

$electrodomesticos = [
    "nombre" => "televisor",
    "modelo" => "LG",
    "precio" => 450,
    "pulgadas" => 16,
    "procedencia" => "china",
    "accesorios" => [
        "game" => "si",
        "smart" => "no",
        "control" => "si",

    ]
];


// otra forma de declarar arrays de dos dimenciones

$electrodomesticos2 = array(
    "nombre" => "televisor",
    "modelo" => "LG",
    "precio" => 450,
    "pulgadas" => 16,
    "procedencia" => "china",
    "accesorios" => [
        "game" => "si",
        "smart" => "no",
        "control" => "si",

    ]



    );

var_dump($electrodomesticos);
echo "<hr>";
echo($electrodomesticos["nombre"]."<br>".$electrodomesticos["precio"]."<br>".$electrodomesticos["accesorios"]["smart"]);


echo "<hr>";

//var_dump($electrodomesticos2);

//array_push($electrodomesticos["accesorios"], ["usb" => "si"]);
$electrodomesticos["accesorios"]["usb"] = "si";
var_dump($electrodomesticos);

//Manejar los indices
echo "<hr>";
var_dump(empty($platos));
var_dump(empty($electrodomesticos));

$cliente = [];

var_dump(empty($cliente));

var_dump(isset($electrodomesticos["procendencia"]));


//ordenar de menor a mayor
echo "<hr>";
sort(($platos));
var_dump($platos);


//ordenar mayor a menor

echo "<hr>";
rsort(($platos));
var_dump($platos);

// ordenar array de dos dimenciones ordenas por los valores en orden alfabetico
echo "<hr>";
asort(($electrodomesticos));
var_dump($electrodomesticos);

// ordenar de forma desendente

echo "<hr>";
arsort(($electrodomesticos));
var_dump($electrodomesticos);

// Ordenar array dos dimenciones indices de acuerdo al orden alfabetico asendente
echo "<hr>";
ksort(($electrodomesticos));
var_dump($electrodomesticos);
// Ordenar array dos dimenciones indices de acuerdo al orden alfabetico desendente
echo "<hr>";
krsort(($electrodomesticos));
var_dump($electrodomesticos);

?>