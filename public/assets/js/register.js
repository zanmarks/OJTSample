$(document).ready(function(){
    $('#registerBtn').click(function () {
        var firstname = $('#Firstname').val();
        var lastname = $('#Lastname').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var Confirm_pass = $('#Confirm_Pass').val();
        var profilePic = $('#profile_pic')[0].files[0];
    
        if (firstname === '' || lastname === '' || email === '' || password === '' || Confirm_pass === '' || phone === '' || profilePic === null) {
            swal({
                icon: 'error',
                title: 'Please fill up all fields.',
            });
            return;
        }
    
        if (phone.length !== 11) {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: 'Phone number must be 11 digits.',
            });
            return;
        }
    
        if (password !== Confirm_pass) {
            swal({
                icon: 'error',
                title: 'Oops...',
                text: 'Passwords do not match!',
            });
            return;
        }
    
        var formData = new FormData($('#registerForm')[0]);
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            url: '/createAccount',
            method: 'POST',
            data: formData,
            processData: false, 
            contentType: false,
            beforeSend: function () {
                $('#registerBtn').html('Processing...').prop('disabled', true);
            },
            success: function (message) {
                $('#registerBtn').html('Register').prop('disabled', false);
                swal({
                    icon: 'success',
                    title: 'Registered Successfully',
                    text: 'Account created successfully.',
                });
            },
            error: function (xhr) {
                $('#registerBtn').html('Register').prop('disabled', false);
              
                console.log(xhr.responseText);
            }
        });
    });
    
});