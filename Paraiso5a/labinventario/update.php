//update.php
<?php
require 'db.php';

if (isset($_POST['update'])) {
    $update_id = $_POST['update_id'];
    $update_nombre = $_POST['update_nombre'];
    $update_categoria = $_POST['update_categoria'];
    $update_cantidad= $_POST['update_cantidad'];
    $update_descripcion = $_POST['update_descripcion'];

    $update_query = "UPDATE inventario SET 
                    nombre = '$update_nombre', 
                    categoria = '$update_categoria', 
                    cantidad = '$update_cantidad', 
                    descripcion = '$update_descripcion', 
                    WHERE id = $update_id";

    if (mysqli_query($conn, $update_query)) {
        header("Location: index.php?mensaje=¡Elemento actualizado exitosamente!");
    } else {
        echo "Error al actualizar la Elemento: " . mysqli_error($conn);
    }
}
?>