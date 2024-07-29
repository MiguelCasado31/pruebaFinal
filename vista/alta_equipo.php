<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Agregar Nuevo Equipo</h1>
        <form action="../controlador/controlador_equipo.php" method="post">
            <div class="mb-3">
                <input type="hidden" name="accion" value="alta">
                <label for="nombre_equipo" class="form-label">Nombre del Equipo:</label>
                <input type="text" class="form-control" id="nombre_equipo" name="nombre_equipo" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>