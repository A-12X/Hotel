//read.php
<?php
require 'db.php';

$consulta_hotel = mysqli_query($conn, "SELECT * FROM inventario");

if (mysqli_num_rows($consulta_hotel) > 0) {
    while ($row = mysqli_fetch_assoc($consulta_hotel)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['categoria']}</td>
                <td>{$row['cantidad']}</td>
                    <button onclick='eliminarElemento({$row['id']})'>Eliminar</button>
                    <button onclick='mostrarFormularioActualizar({$row['id']}, \"{$row['nombre']}\", \"{$row['categoria']}\", \"{$row['cantidad']}\", \"{$row['descripcion']}\")'>Actualizar</button>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No hay elemento registradas.</td></tr>";
}
?>