$(document).ready(function () {
    biblioteca.validacionGeneral('form-general');
    $('#icono').on('blur', function() {
        $('#mostrar-icono').removeClass().addClass('fa fa-fw ' + $(this).val());
    });
});