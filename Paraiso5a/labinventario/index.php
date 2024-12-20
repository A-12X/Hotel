<?php
// Incluye la conexión a la base de datos desde el archivo db.php
require 'db.php';

// Comprobamos si el formulario se ha enviado usando el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturamos los valores enviados por el formulario y los almacenamos en variables
    $nombre = strval($_POST['nombre']);
    $categoria = strval($_POST['categoria']);
    $cantidad = intval($_POST['cantidad']);
    $descripcion = strval($_POST['descripcion']);

    // Verificamos si todos los campos están completos
    if (!empty($nombre) && !empty($categoria) && !empty($cantidad)) {
        // Preparamos la consulta SQL para insertar los datos en la tabla 'inventario'
        $sql = "INSERT INTO inventario (nombre, categoria, cantidad, descripcion)
                VALUES ('$nombre', '$categoria', $cantidad, '$descripcion')";
        
        // Ejecutamos la consulta SQL y verificamos si fue exitosa
        if (mysqli_query($conn, $sql)) {
            $mensaje = "¡Inventario agregado exitosamente!";
        } else {
            $mensaje = "Error al intentar agregar al inventario: " . mysqli_error($conn);
        }
    } else {
        // Si algún campo está vacío, mostramos un mensaje de error
        $mensaje = "Por favor, completa todos los campos.";
    }

    // Redirigir a la misma página para evitar el reenvío del formulario
    header("Location: index.php");
    exit();
}

// Consultamos todas las entradas en la tabla inventario
$result = mysqli_query($conn, "SELECT * FROM inventario");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inventario</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <div class="container">
        <h2>Agregar al Inventario</h2>

        <!-- Formulario para agregar elementos al inventario -->
        <form action="index.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre del producto" required>
            <select name="categoria" required>
                <option value="">Seleccione una categoría</option>
                <option value="utileria">Utilería</option>
                <option value="comida">Comida</option>
                <option value="uniformes">Uniformes</option>
                <option value="implementos de aseo">Implementos de Aseo</option>
            </select>
            <input type="number" name="cantidad" placeholder="Cantidad" required>
            <textarea name="descripcion" placeholder="Descripción"></textarea>
            <button type="submit">Agregar al Inventario</button>
        </form>

        <h2>Inventario Actual</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Cantidad</th>
                <th>Descripción</th>
                <th>Fecha Agregado</th>
            </tr>
            <?php
            // Mostrar los elementos del inventario en la tabla
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['categoria']) . "</td>";
                    echo "<td>" . $row['cantidad'] . "</td>";
                    echo "<td>" . htmlspecialchars($row['descripcion']) . "</td>";
                    echo "<td>" . $row['fecha_agregado'] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
