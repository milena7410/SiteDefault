$('#formLogin').submit(function(e) {
    e.preventDefault();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: $(this).data('/admin/check-login/user'),
        data: $(this).serializeArray(),
        dataType: 'json',
        method: 'POST',
        encode: true,
        success: function(result) {
            console.log(result)
        },
        error: function(error) {
            console.log(error)
        }
    })
});