<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Censo de Vivienda</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            background-color: #e5f6df;
            padding: 20px;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-label {
            font-weight: bold;
            color: #007c39;
        }
        .form-control {
            border: 1px solid #007c39;
        }
        .btn-primary {
            background-color: #007c39;
            border-color: #007c39;
        }
        .btn-primary:hover {
            background-color: #005923;
            border-color: #005923;
        }
        h2 {
            color: #007c39;
            text-align: center;
        }
        .header {
            background-color: #007c39;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .subheader {
            color: #007c39;
            margin-bottom: 20px;
        }
        .form-row {
            display: flex;
            flex-wrap: wrap;
        }
        .form-col {
            flex: 1;
            min-width: 200px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div class="header">
            <h1>CAPÍTULO A. UBICACIÓN DE LA VIVIENDA (OCUPADA Y DESOCUPADA)</h1>
        </div>
        <form action="validar2-A.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-col form-group">
                    <label for="segmento" class="form-label">Segmento</label>
                    <input type="text" name="segmento" id="segmento" class="form-control" required maxlength="50">
                </div>
                <div class="form-col form-group">
                    <label for="manzana" class="form-label">Manzana</label>
                    <input type="text" name="manzana" id="manzana" class="form-control" required maxlength="50">
                </div>
                <div class="form-col form-group">
                    <label for="nro_predio" class="form-label">Número de Predio</label>
                    <input type="text" name="nro_predio" id="nro_predio" class="form-control" required maxlength="50">
                </div>
            </div>
            <div class="form-row">
                <div class="form-col form-group">
                    <label for="total_viviendas" class="form-label">Total de viviendas en el predio</label>
                    <input type="number" name="total_viviendas" id="total_viviendas" class="form-control" required>
                </div>
                <div class="form-col form-group">
                    <label for="nro_vivienda" class="form-label">Número de vivienda</label>
                    <input type="number" name="nro_vivienda" id="nro_vivienda" class="form-control" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-col form-group">
                    <label for="ciudad" class="form-label">Ciudad o comunidad</label>
                    <input type="text" name="ciudad" id="ciudad" class="form-control" required maxlength="50">
                </div>
                <div class="form-col form-group">
                    <label for="calle" class="form-label">Calle, avenida, camino o carretera</label>
                    <input type="text" name="calle" id="calle" class="form-control" required maxlength="50">
                </div>
            </div>
            <div class="form-row">
                <div class="form-col form-group">
                    <label for="nro_puerta" class="form-label">Número de puerta</label>
                    <input type="text" name="nro_puerta" id="nro_puerta" class="form-control" required maxlength="50">
                </div>
                <div class="form-col form-group">
                    <label for="planta_piso_nivel" class="form-label">Planta, piso o nivel</label>
                    <input type="text" name="planta_piso_nivel" id="planta_piso_nivel" class="form-control" required maxlength="50">
                </div>
                <div class="form-col form-group">
                    <label for="nro_depto" class="form-label">Número de departamento</label>
                    <input type="text" name="nro_depto" id="nro_depto" class="form-control" required maxlength="50">
                </div>
            </div>
            <div class="form-row">
                <div class="form-col form-group">
                    <label for="nombre_edificio" class="form-label">Nombre del edificio, condominio, torre o conventillo</label>
                    <input type="text" name="nombre_edificio" id="nombre_edificio" class="form-control" required maxlength="50">
                </div>
                <div class="form-col form-group">
                    <label for="bloque" class="form-label">Bloque</label>
                    <input type="text" name="bloque" id="bloque" class="form-control" required maxlength="50">
                </div>
            </div>
            <div class="form-row">
                <div class="form-col form-group">
                    <label for="tipo_vivienda" class="form-label">Tipo de vivienda</label>
                    <select name="tipo_vivienda" id="tipo_vivienda" class="form-control" required>
                        <option value="Casa">Casa</option>
                        <option value="Apartamento">Apartamento</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-col form-group">
                    <label for="foto_vivienda" class="form-label">Foto de la vivienda</label>
                    <input type="file" name="foto_vivienda" id="foto_vivienda" class="form-control"  required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-col form-group">
                    <label for="comentarios" class="form-label">Comentarios adicionales (opcional)</label>
                    <textarea name="comentarios" id="comentarios" class="form-control" maxlength="500"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
