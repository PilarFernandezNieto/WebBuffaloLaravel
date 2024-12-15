import './bootstrap';


$(document).ready(function() {
    // Asignar evento click al botón
    $(document).on('click', '.pinchaAqui', function() {
       $('.audiostyle').toggleClass('hidden')
    });
});
