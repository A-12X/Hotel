//update.php
<?php
require 'db.php';

if (isset($_POST['update'])) {
    $update_id = $_POST['update_id'];
    $update_nombre = $_POST['update_nombre'];
    $update_correo = $_POST['update_correo'];
    $update_mensaje = $_POST['update_mensaje'];

    $update_query = "UPDATE contactenos SET 
    nombre = '$update_nombre', 
    correo = '$update_correo', 
    mensaje = '$update_mensaje' 
    WHERE id = $update_id";

if (mysqli_query($conn, $update_query)) {
header("Location: index.php?mensaje=¡Mensaje actualizado exitosamente!");
} else {
echo "Error al actualizar la Mensaje " . mysqli_error($conn);
}
}
?>