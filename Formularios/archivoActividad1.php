<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Subir Archivos</h2>
        <form action="procesar.php" method="post" enctype="multipart/form-data" class="mt-4">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="imagen">Seleccionar imagen (PNG):</label>
                <input type="file" name="imagen" id="imagen" class="form-control"  required>
            </div>
            <div class="form-group">
                <label for="pdf">Seleccionar archivo PDF:</label>
                <input type="file" name="pdf" id="pdf" class="form-control" accept="application/pdf" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

