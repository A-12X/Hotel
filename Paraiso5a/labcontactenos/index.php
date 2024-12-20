<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de contactenos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <h2>Crear Nuevo Mensaje</h2>
    <form action="create.php" method="POST" onsubmit="return validarFormulario()">
        <input type="text" name="nombre" placeholder="nombre" required>
        <input type="text" name="correo" placeholder="correo" required>
        <input type="text" name="mensaje" placeholder="mensaje" required>
        <button type="submit">Cargar</button>
    </form>

    <h2>Mensaje enviado</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Mensaje</th>
        </tr>
        <?php include 'read.php'; ?>
    </table>
</div>
<script src="js/script.js"></script>
</body>
</html>