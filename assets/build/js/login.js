$(document).ready(function() {
    $('.nit_empresa').mask('0000-000000-000-0')
    $('.nrc_register').mask('000000-0')
    $('.dui_register').mask('00000000-0')

    var error_alert = Swal.mixin({
        toast: true,
        icon: 'error',
        title: 'General Title',
        animation: false,
        position: 'top-right',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
    $('#create_acount').on('click', () => {
        var razon_social = $('#razon_social').val(),
            nit_empresa = $('#nit_empresa').val(),
            nrc_register = $('#nrc_register').val(),
            correo_empresa = $('#correo_empresa').val()
        if (razon_social.length === 0 || nit_empresa.length === 0 || nrc_register.length === 0 || correo_empresa.length === 0) {
            error_alert.fire({
                title: 'Ingrese todos los datos'
            });
        } else {
            console.log('llenos')
        }
    })
});