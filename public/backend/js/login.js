$('#formLogin').submit(function (e) {
    e.preventDefault();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/admin/check-login/user',
        data: $(this).serializeArray(),
        dataType: 'json',
        method: 'POST',
        success: function (result) {

            if (result.success === true) {
                // teste

                Swal.fire({
                    title: 'Logado',
                    showConfirmButton: false,
                    text: 'Bem-vindo ao dashboard',
                    icon: 'success',
                    toast: true,
                    position: 'top-end',
                })
                setTimeout(function () {
                    window.location.href = '/admin/dashboard'
                }, 1500);


            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Login ou senha invalidos!',
                    footer: '<a href="">Entre em contato com o suporte?</a>'
                })
            }
        }

    })
});
