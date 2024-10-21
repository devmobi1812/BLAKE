'use strict';

document.addEventListener("DOMContentLoaded", function () {

    let btnVolver = document.getElementById("btn-volver");
    if (btnVolver) {
        btnVolver.addEventListener("click", function(event) {
            event.preventDefault();
            history.back();
        });
    }
    

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
            confirmButtonColor: '#0c9a9c',
            cancelButtonColor: '#e74c3c',
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

