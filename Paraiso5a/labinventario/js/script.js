//JAVASCRIPT

// Validar el formulario antes de enviar
function validarFormulario() {
    const nombre = document.querySelector('input[name="nombre"]').value.trim();
    const categoria = document.querySelector('input[name="categoria"]').value.trim();
    const cantidad = document.querySelector('input[name="cantidad"]').value.trim();
    const descripcion = document.querySelector('input[name="descripcion"]').value.trim();

    if (!nombre || !categoria || cantidad || !descripcion) {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    if (isNaN(nombre) || nombre <= 0) {
        alert("El nombre debe ser un número positivo.");
        return false;
    }

    if (new Date(categoria) >= new Date(categoria)) {
        alert("La categoria de entrada debe ser anterior a la fecha de salida.");
        return false;
    }

    return true;
}

// Confirmación antes de eliminar una reservación
function eliminarInventario(id) {
    if (confirm("¿Estás seguro de que deseas eliminar esta elemento?")) {
        window.location.href = `delete.php?delete_id=${id}`;
    }
}

// Mostrar el formulario de actualización con los datos cargados
function mostrarFormularioActualizar(id, nombre, categoria, cantidad, descripcion) {
    const formActualizar = document.createElement('div');
    formActualizar.innerHTML = `
        <form action="update.php" method="POST">
            <input type="hidden" name="update_id" value="${id}">
            <input type="text" name="update_nombre" value="${nombre}" required>
            <input type="text" name="update_categoria" value="${categoria}" required>
            <input type="text" name="update_cantidad" value="${cantidad}" required>
            <input type="text" name="update_descripcion" value="${descripcion}" required>
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