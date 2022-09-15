$('#formLogin').submit(function(e) {
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
        success: function(result) {
            if (result.success === true) {
                window.location.href = '/admin/dashboard'
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Login ou senha invalidos!',
                    footer: '<a href="">Fale com o suporte?</a>'
                })
            }
        }

    })
});