<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Evidencias</title>
</head>
<body>
    <h1>Subir Evidencias</h1>
    <form action="guardar_evidencia.php" method="POST" enctype="multipart/form-data">
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" required><br><br>

        <label for="imagenes">Subir Imágenes:</label>
        <input type="file" name="imagenes[]" multiple accept="image/*" required><br><br>

        <button type="submit">Subir Evidencia</button>
    </form>
</body>
</html>
