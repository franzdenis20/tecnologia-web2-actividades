<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6">
        <form action="enviar2.php" method="post" class="bg-light p-4 rounded shadow">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido">
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo">
            </div>

            <div class="form-group">
                <label for="comentarios">Comentarios</label>
                <textarea class="form-control" id="comentarios" name="comentarios" rows="4" placeholder="Escribe tus comentarios aquí..."></textarea>
            </div>

            <div class="form-group">
                <label for="idioma">Idioma</label>
                <select class="form-control" id="idioma" name="idioma">
                    <option value="espanol">Español</option>
                    <option value="ingles">Inglés</option>
                    <option value="frances">Francés</option>
                    <option value="aleman">Alemán</option>
                </select>
            </div>

            <fieldset class="form-group">
                <legend>Música favorita</legend>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="musica" id="rock" value="rock">
                    <label class="form-check-label" for="rock">Rock</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="musica" id="pop" value="pop">
                    <label class="form-check-label" for="pop">Pop</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="musica" id="clasica" value="clasica">
                    <label class="form-check-label" for="clasica">Clásica</label>
                </div>
            </fieldset>

            <fieldset class="form-group">
                <legend>Pasatiempos</legend>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="pasatiempo[]" id="leer" value="leer">
                    <label class="form-check-label" for="leer">Leer</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="pasatiempo[]" id="deporte" value="deporte">
                    <label class="form-check-label" for="deporte">Hacer deporte</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="pasatiempo[]" id="musica" value="musica">
                    <label class="form-check-label" for="musica">Escuchar música</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="pasatiempo[]" id="viajar" value="viajar">
                    <label class="form-check-label" for="viajar">Viajar</label>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

