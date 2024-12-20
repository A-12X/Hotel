//JAVASCRIPT

// Validar el formulario antes de enviar

// Confirmación antes de eliminar una reservación
function eliminarMensaje(id) {
    if (confirm("¿Estás seguro de que deseas eliminar este mensaje?")) {
        window.location.href = `delete.php?delete_id=${id}`;
    }
}

// Mostrar el formulario de actualización con los datos cargados
function mostrarFormularioActualizar(id, nombre, correo, mensaje) {
    const formActualizar = document.createElement('div');
    formActualizar.innerHTML = `
        <form action="update.php" method="POST">
            <input type="hidden" name="update_id" value="${id}">
            <input type="text" name="update_nombre" value="${nombre}" required>
            <input type="text" name="update_correo" value="${correo}" required>
            <input type="text" name="update_mensaje" value="${mensaje}" required>
            <button type="submit" name="update">Actualizar</button>
            <button type="button" onclick="cerrarFormularioActualizar()">Cancelar</button>
        </form>
    `;

    document.body.appendChild(formActualizar);
}

// Cerrar el formulario de actualización
function cerrarFormularioActualizar() {
    const formActualizar = document.querySelector('form[action="update.php"]');
    if (formActualizar) {
        formActualizar.remove();
    }
}