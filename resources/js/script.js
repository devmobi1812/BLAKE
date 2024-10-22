'use strict';

document.addEventListener("DOMContentLoaded", function () {

    //  FUNCION PARA QUE FUNCIONE EL BOTON DE VOLVER
    let btnVolver = document.getElementById("btn-volver");
    if (btnVolver) {
        btnVolver.addEventListener("click", function(event) {
            event.preventDefault();
            history.back();
        });
    }
    
    //  FUNCION QUE EJECUTA LA ELIMINACION DE UNA CANCION
    document.querySelectorAll('.eliminar-cancion').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            let id = this.getAttribute('href').split('/').pop();
            confirmarEliminacion(event, 'cancion/eliminar/' + id);
        });
    });
    //  FUNCION QUE EJECUTA LA ELIMINACION DE UN DISCO
    document.querySelectorAll('.eliminar-disco').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            let id = this.getAttribute('href').split('/').pop();
            confirmarEliminacion(event, 'disco/eliminar/' + id);
        });
    });
    //  FUNCION QUE EJECUTA EL POP-UP DE ELIMINACION
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

