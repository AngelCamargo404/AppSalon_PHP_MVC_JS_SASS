addEventListener('DOMContentLoaded', function() {
    iniciarApp();
})

function iniciarApp() {
    buscarPorFecha();
}

function buscarPorFecha() {
    addEventListener('input', function(e) {
        const fechaSeleccionada = e.target.value;

        // COLOCAR FECHA EN LA URL
        window.location = `?fecha=${fechaSeleccionada}`;
    });
}