<?php

$productos = array();

// lleno mi arreglode  20 productos con fechas de vencimiento aleatorias
for ($i = 0; $i < 20; $i++) {
     
    $fecha_vencimiento = date('Y-m-d', strtotime('+' . rand(1, 100) . ' days'));
    $productos[] = array(
        "producto" => "Producto " . ($i + 1),
        "fecha_vencimiento" => $fecha_vencimiento
    );
}

// Mostrar los productos y sus fechas de vencimiento
echo "Lista de productos y sus fechas de vencimiento:<br>";
foreach ($productos as $producto) {
    echo $producto["producto"] . " - " . $producto["fecha_vencimiento"] . "<br>";
}

echo "<hr>";


$fecha_actual = date('Y-m-d');


$productos_por_vencer = 0;

foreach ($productos as $producto) {
    $dias_para_vencer = (strtotime($producto["fecha_vencimiento"]) - strtotime($fecha_actual)) / (60 * 60 * 24);
    if ($dias_para_vencer <= 10) {
        $productos_por_vencer++;
    }
}


echo "Número de productos que están por vencer dentro de 10 días o menos: " . $productos_por_vencer;
?>
