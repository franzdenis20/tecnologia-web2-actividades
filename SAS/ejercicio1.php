<?php
if (isset($_POST['nombre'])) {
    $nombre = "galleta";
    $valor = $_POST['nombre']."|".$_POST['password'];
    
    $fecha = time() + (60 * 60 * 24);

    setcookie($nombre, $valor, $fecha);
}

if (isset($_POST['eliminar_cookie'])) {
    setcookie("galleta", "", time() - 3600);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
    <p>
            <?php
                if (isset($_COOKIE['galleta'])) {
                    $datos = $_COOKIE['galleta'];
                    $datos_array = explode("|",$datos);
                    $usuario = $datos_array[0];
                    $password = $datos_array[1];
                    $recordar = "on";
                    
                }

                if (isset($_POST['recordar'])) {
                    
                }
            ?>
        </p>
        <input type="text" name="nombre">
        <hr>
        <input type="password" name="password" value="<?php echo($recordar== "on")? $password: ""  ?>">
        <hr>
        <input type="checkbox" name="recordar" <?php if($recordar=="on") echo 'checked'?>>
        

        <input type="submit" value=" enviar">
        <button type="submit" name="eliminar_cookie">Eliminar Cookie</button>
    </form>

</body>

</html>