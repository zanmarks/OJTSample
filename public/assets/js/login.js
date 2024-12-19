$('#loginBtn').click(function(){
    var email = $('#email').val();
    var password = $('#password').val();

    if(email == '' || password == '')
    {
        swal({
            icon: 'error',
            title: 'Opps.',
            text: 'Please fill up all forms.',
        });
        return;
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/verify-Account',
        method: 'POST',
        data: {
            email: email,
            password: password
        },
        success: function (response) {
            if(response.messageError)
            {
                swal({
                    icon: 'error',
                    title: 'Opps.',
                    text: response.messageError,
                });
            }
            else
            {
                window.location.href = '/homepage';
            }
        },
        error: function (xhr) {          
            console.log(xhr.responseText);
        }
    });
});