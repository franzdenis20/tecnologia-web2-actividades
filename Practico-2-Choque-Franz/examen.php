<?php

$pizzas = [
    "pizza1 jamon" => 50, //cliente 1
    "pizza2 hawaiana" => 65, // cliente 2
    "pizza3 natolitana" => 70 // cliente 3
];


$ventas_dia = [
    "pizza1 jamon" => 5, 
    "pizza2 hawaiana" => 12,
    "pizza3 natolitana" => 8
];

$meriendaEmpleados = 10 * 5;
$alquiler = 1500;
// Ventas de jamon
$ventaPizzaJamon = $pizzas["pizza1 jamon"] * $ventas_dia["pizza1 jamon"];


echo ("Venta total de la Pizza De Jamon: .$ventaPizzaJamon BS");
echo"<hr>";

// Ventas de Hawaiana
$ventaPizzaHawaiana = $pizzas["pizza2 hawaiana"] * $ventas_dia["pizza2 hawaiana"];


echo ("Venta total de la Pizza De Hawaiana: .$ventaPizzaHawaiana BS");
echo"<hr>";

// Ventas de Napolitana
$ventaPizzaNapolitana = $pizzas["pizza3 natolitana"] * $ventas_dia["pizza3 natolitana"];


echo ("Venta total de la Pizza De Napolitana: .$ventaPizzaNapolitana BS");
echo"<hr>";


$ventaTotal = $ventaPizzaHawaiana+$ventaPizzaJamon+$ventaPizzaNapolitana;

echo ("Venta total de la Pizzeria: .$ventaTotal BS");
echo"<hr>";

$ventaTotalUtilidad = $ventaTotal -($meriendaEmpleados + $alquiler);

echo ("Venta total de la Pizzeria Utilidad: .$ventaTotalUtilidad BS");
echo"<hr>";


?>