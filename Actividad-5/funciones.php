<?php 

//$producto = $_GET['nombre'];
$monto =$_GET['cantidad'];
$edad =$_GET['edad'];
$iva =$_GET['iva'];


function ConIva (int $monto):float{
    $monto_iva = 0;
    $monto_iva = $monto +($monto * 0.13);
    return $monto_iva;
}

function SinIva (int $monto):float{
    $monto_iva = 0;
    $monto_iva = $monto +($monto * 0.15);
    return $monto_iva;
}



try {
    echo "Resultado: ".(($iva == "true")?(ConIva($monto)):(SinIva($monto)));

} catch (TypeError $e) {
    echo "Error ".$e->getMessage();
    //throw $th;
}
echo "<hr>";
echo "Edad: ".(($edad >= 18)? "Puedes realizar la compra":"No puedes realizar la compra");



//Segundo Ejericio

//Array de notas y calcular el promedio

function Promedio(int|float ...$notas){
    $suma = 0;
    foreach($notas as $nota ){
        $suma += $nota;
    }

    return $suma/count(($notas));
    //yield $suma; 
   
}
echo "<hr>";
echo (Promedio(14.7,23,56,34,65,89,56));
?>