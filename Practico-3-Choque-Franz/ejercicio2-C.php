<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Características de la Vivienda</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
        }

        .header {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border-radius: 5px 5px 0 0;
            text-align: center;
        }

        .header h2 {
            margin: 0;
        }

        .green-header {
            background-color: #28a745;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .form-check-label {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="green-header">
            <h2>CAPÍTULO C. CARACTERÍSTICAS DE LA VIVIENDA CON PERSONAS PRESENTES</h2>
        </div>
        <form action="validar2-C.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>3. ¿Cuál es el material de construcción más utilizado en las paredes de esta vivienda?</label>
                    <select class="form-control" name="material_paredes" required>
                        <option value="1">Ladrillo, bloque de cemento, hormigón</option>
                        <option value="2">Adobe, tapial</option>
                        <option value="3">Tajique, quinche</option>
                        <option value="4">Piedra</option>
                        <option value="5">Madera</option>
                        <option value="6">Caña, palma, tronco</option>
                        <option value="7">Otro</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>4. ¿Las paredes interiores de esta vivienda, tienen revoque?</label>
                    <select class="form-control" name="paredes_revoque" required>
                        <option value="1">Sí</option>
                        <option value="2">No</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>5. ¿Cuál es el material de construcción más utilizado en los techos de esta vivienda?</label>
                    <select class="form-control" name="material_techos" required>
                        <option value="1">Calamina o plancha</option>
                        <option value="2">Teja (de cemento, arcilla o fibrocemento)</option>
                        <option value="3">Loza de hormigón armada</option>
                        <option value="4">Paja, palma, caña, barro, jatata, motacú, otro</option>
                        <option value="5">Otro</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>6. ¿Cuál es el material más utilizado en los pisos de esta vivienda?</label>
                    <select class="form-control" name="material_pisos" required>
                        <option value="1">Tierra</option>
                        <option value="2">Tablón de madera</option>
                        <option value="3">Machimbre, parquet</option>
                        <option value="4">Cerámica, porcelanato</option>
                        <option value="5">Mosaico, baldosa</option>
                        <option value="6">Cemento</option>
                        <option value="7">Otro</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>7. Principalmente, el agua que usan en la vivienda proviene de:</label>
                    <select class="form-control" name="fuente_agua" required>
                        <option value="1">Cañería de red</option>
                        <option value="2">Pileta pública</option>
                        <option value="3">Cosecha de agua de lluvia</option>
                        <option value="4">Pozo excavado o perforado con bomba</option>
                        <option value="5">Pozo no protegido o sin bomba</option>
                        <option value="6">Manantial o vertiente protegida</option>
                        <option value="7">Río, acequia o vertiente no protegida</option>
                        <option value="8">Carro repartidor (aguatero)</option>
                        <option value="9">Otro</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>8. El agua que usan en la vivienda se distribuye:</label>
                    <select class="form-control" name="distribucion_agua" required>
                        <option value="1">Por cañería dentro de la vivienda</option>
                        <option value="2">Por cañería fuera de la vivienda, pero dentro del lote o terreno</option>
                        <option value="3">No se distribuye por cañería</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>9. ¿De dónde proviene la energía eléctrica que usan en la vivienda?</label>
                    <select class="form-control" name="energia_electrica" required>
                        <option value="1">Servicio público de energía eléctrica</option>
                        <option value="2">Motor propio (generador)</option>
                        <option value="3">Panel solar</option>
                        <option value="4">Ninguno</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
