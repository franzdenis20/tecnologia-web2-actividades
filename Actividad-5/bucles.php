<?php
/*
$inferior  = $_GET['i'];
$superior  = $_GET['s'];

$c = 0;
*/
/*
while ($superior >= $inferior) {
    echo"<br>";
    echo ("$inferior");
    

    if ($inferior % 7 == 0) {
        $c++;
    }
    $inferior=$inferior + 1;
    
}
echo"<br>";
echo("Contador : $c");

*/
/*
do {
    echo "<br>";
    echo $inferior;

    if ($inferior % 7 == 0) {
        $c++;
        echo ("i $inferior");
    }
    $inferior++;
} while ($superior >= $inferior);

echo "<hr>";
echo "Contador: $c";
*/
/*
echo "<hr>";
$electrodomesticos =[
    ["nombre" => "Televisor",
     "precio" => 400,
     "estado" => true],

    ["nombre" => "Heladera",
     "precio" => 300,
     "estado" => false],

    ["nombre" => "bicicleta",
     "precio" => 100,
     "estado" => true],
];

echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";

echo "<hr>";

foreach($electrodomesticos as $producto){
    echo "Nombre: " . $producto['nombre'] . "<br>";
    echo "Precio: $" . $producto['precio'] . "<br>";
    echo "Estado: " . ($producto['estado'] ? 'Disponible' : 'No disponible') . "<br>";
    echo "<br>";
}
*/


// Actividad de clase

$prov  = $_GET['p'];



$provincias = [
    "Cercado" => "Tarija",
    "Aniceto Arce" => "Tarija",
    "Arce" => "Tarija",
    "Padcaya" => "Tarija",
    "San Lorenzo" => "Tarija",
    "Uriondo" => "Tarija",
    "El Puente" => "Sercado",
    "Bermejo" => "Gran Chaco"
];

foreach($provincias as $provincia => $departamento){
    
    
    if ($prov == $provincia) {
        echo "$provincia pertenece al departamento de $departamento.<br>";
    }
}
?>