//read.php
<?php
require 'db.php';

$consulta_hotel = mysqli_query($conn, "SELECT * FROM contactenos");

if (mysqli_num_rows($consulta_hotel) > 0) {
    while ($row = mysqli_fetch_assoc($consulta_hotel)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['correo']}</td>
                <td>{$row['mensaje']}</td>
                <td>
                    <button onclick='eliminarMensaje({$row['id']})'>Eliminar</button>
                    <button onclick='mostrarFormularioActualizar({$row['id']}, \"{$row['nombre']}\", \"{$row['correo']}\", \"{$row['mensaje']}\")'>Actualizar</button>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No hay mensajes enviados.</td></tr>";
}
?>