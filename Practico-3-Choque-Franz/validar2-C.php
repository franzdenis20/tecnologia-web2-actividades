<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];

    $material_paredes = $_POST['material_paredes'];
    $paredes_revoque = $_POST['paredes_revoque'];
    $material_techos = $_POST['material_techos'];
    $material_pisos = $_POST['material_pisos'];
    $fuente_agua = $_POST['fuente_agua'];
    $distribucion_agua = $_POST['distribucion_agua'];
    $energia_electrica = $_POST['energia_electrica'];

    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo "<p>$error</p>";
        }
    } else {
        $uploadDir = 'practica_3/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $nombreArchivo = 'datos_vivienda_' . date('YmdHis') . '.txt';
        $archivoTxt = $uploadDir . $nombreArchivo;

        $contenidoTxt = "Material de construcción de las paredes: $material_paredes\n";
        $contenidoTxt .= "Paredes interiores con revoque: $paredes_revoque\n";
        $contenidoTxt .= "Material de construcción de los techos: $material_techos\n";
        $contenidoTxt .= "Material de los pisos: $material_pisos\n";
        $contenidoTxt .= "Fuente del agua: $fuente_agua\n";
        $contenidoTxt .= "Distribución del agua: $distribucion_agua\n";
        $contenidoTxt .= "Fuente de energía eléctrica: $energia_electrica\n";

        file_put_contents($archivoTxt, $contenidoTxt);

        echo "<h1>Formulario enviado y datos guardados correctamente.</h1>";
    }
}
?>
