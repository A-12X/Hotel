<?php
// Archivo: create.php
require 'db.php'; // Incluir conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitizar los datos del formulario
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $categoria = mysqli_real_escape_string($conn, $_POST['categoria']);
    $cantidad = mysqli_real_escape_string($conn, $_POST['cantatidad']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);
    // Consulta SQL para insertar los datos
    $sql = "INSERT INTO inventario (nombre, categoria, cantidad, descripcion) 
            VALUES ('$nombre', '$categoria', '$cantidad', '$descripcion')";

    // Ejecutar la consulta
    if (mysqli_query($conn, $sql)) {
        echo json_encode(['status' => 'success', 'message' => 'elemento registrado exitosamente']);
        header('Location: index.php?mensaje=Elemento registrada exitosamente');
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al registrar: ' . mysqli_error($conn)]);
    }
}

// Cerrar la conexión
mysqli_close($conn);
?>