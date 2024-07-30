<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Proyectos</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Gestión de Proyectos</h2>
        <form action="validar1.php" method="post" enctype="multipart/form-data" class="mt-4">
            <div class="form-group">
                <label for="project_name">Nombre del Proyecto:</label>
                <input type="text" name="project_name" id="project_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="project_description">Descripción del Proyecto:</label>
                <textarea name="project_description" id="project_description" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="project_file">Documento del Proyecto (PDF o DOCX):</label>
                <input type="file" name="project_file" id="project_file" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
