'use strict';

document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll('.eliminar-cancion').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            let id = this.getAttribute('href').split('/').pop();
            confirmarEliminacion(event, 'cancion/eliminar/' + id);
        });
    });

    document.querySelectorAll('.eliminar-disco').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            let id = this.getAttribute('href').split('/').pop();
            confirmarEliminacion(event, 'disco/eliminar/' + id);
        });
    });

    function confirmarEliminacion(event, url) {
        event.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esto",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: "Cancelar",
            confirmButtonText: 'Eliminar',
            customClass: {
                confirmButton: 'btnConfirmar',
                cancelButton: 'btnCancelar'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
});

