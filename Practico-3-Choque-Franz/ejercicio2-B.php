<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censo de Vivienda</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group {
            margin-bottom: 1rem;
        }
        .container {
            margin-top: 2rem;
        }
        .header {
            background-color: #028A0F;
            color: white;
            padding: 1rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        .eye-icon {
            color: green;
        }
        .section-title {
            background-color: #028A0F;
            color: white;
            padding: 0.5rem;
            margin-bottom: 1rem;
        }
        .form-check {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Censo de Población y Vivienda 2024</h2>
        </div>
        <form action="validar2-B.php" method="post">
            <div class="section-title">
                <h3>CAPÍTULO B. TIPO DE VIVIENDA</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h3>1. La vivienda es:</h3>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Casa" required>
                                <label class="form-check-label">Casa</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Chozas, pahuchi" required>
                                <label class="form-check-label">Chozas, pahuchi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Departamento" required>
                                <label class="form-check-label">Departamento</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Cuarto(s) suelto(s)" required>
                                <label class="form-check-label">Cuarto(s) suelto(s)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Vivienda improvisada o móvil" required>
                                <label class="form-check-label">Vivienda improvisada o móvil</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Establecimiento no destinado para vivienda" required>
                                <label class="form-check-label">Establecimiento no destinado para vivienda</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Hotel, hostal, residencial o alojamiento" required>
                                <label class="form-check-label">Hotel, hostal, residencial o alojamiento</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Hospital o clínica con internación" required>
                                <label class="form-check-label">Hospital o clínica con internación</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Cuartel o establecimiento militar" required>
                                <label class="form-check-label">Cuartel o establecimiento militar</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Residencia de adultos mayores" required>
                                <label class="form-check-label">Residencia de adultos mayores</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Albergue de niñas/os" required>
                                <label class="form-check-label">Albergue de niñas/os</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Recinto penitenciario" required>
                                <label class="form-check-label">Recinto penitenciario</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Campamento de trabajo" required>
                                <label class="form-check-label">Campamento de trabajo</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Otra" required>
                                <label class="form-check-label">Otra</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Sin vivienda" required>
                                <label class="form-check-label">Sin vivienda</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="Persona en la calle" required>
                                <label class="form-check-label">Persona en la calle</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo_vivienda" value="En tránsito" required>
                                <label class="form-check-label">En tránsito</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h2>2. La vivienda está:</h2>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_vivienda" value="Ocupada con personas presentes" required>
                                <label class="form-check-label">Ocupada con personas presentes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_vivienda" value="Ocupada con personas temporalmente ausentes" required>
                                <label class="form-check-label">Ocupada con personas temporalmente ausentes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_vivienda" value="Desocupada para alquilar/vender" required>
                                <label class="form-check-label">Desocupada para alquilar/vender</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_vivienda" value="Desocupada terminándose de construir o reparar" required>
                                <label class="form-check-label">Desocupada terminándose de construir o reparar</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_vivienda" value="Desocupada abandonada" required>
                                <label class="form-check-label">Desocupada abandonada</label>
                            </div>
                        </div>
                    </div>
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
