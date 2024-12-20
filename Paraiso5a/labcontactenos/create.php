//create.php
<?php
// Archivo: create.php
require 'db.php'; // Incluir conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitizar los datos del formulario
    $nombre = strval($_POST['nombre']);
    $correo = strval($_POST['correo']);
    $mensaje = strval($_POST['mensaje']);

    // Consulta SQL para insertar los datos
    $sql = "INSERT INTO contactenos (nombre, correo, mensaje) 
            VALUES ('$nombre', '$correo', '$mensaje')";

    // Ejecutar la consulta
    if (mysqli_query($conn, $sql)) {
        echo json_encode(['status' => 'success', 'message' => 'Mensaje enviado exitosamente']);
        header('Location: index.php?mensaje=Mensaje entragado exitosamente');
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al registrar: ' . mysqli_error($conn)]);
    }
}