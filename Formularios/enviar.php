<?php


$usuario = $_POST['usuario'];
$password = $_POST['password'];

echo(strlen($usuario)>= 10)?"Bienvenido: ".$usuario: "EL usuario debe contener mayor o igual a 10 digitos";


$num = [0,1,2,3,4,5,6,7,8,9];
$c = 0;
foreach($num as $valor){
    
    if (strpos($password,$valor)!== false) {
       $c++;
    }

}
echo "<hr>";
echo($c>0)?"Contraseña Correcta":"Error en la contraseña";






?>