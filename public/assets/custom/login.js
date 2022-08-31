var url = "http://localhost/gludesa";

function login_administrator() {
    var username = $('#username').val();
    var password = $('#password').val();
    if (username == '' || password == '') {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Please fill all fields',
            type: 'error',
            confirmButtonText: 'Ok'
        });
    } else {
        $.ajax({
            url: url + "/users/check_login",
            method: "POST",
            data: {
                username: username,
                password: password
            },
            dataType: "json",
            success: function (data) {
                if (data.status == 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Login Successful',
                        type: 'success',
                        confirmButtonText: 'Ok'
                    });
                    document.location.href = url + "/home";
                }
            },
            error: function (data) {
                if (data.status == 'Users Not Found') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Username Not Found',
                        type: 'error',
                        confirmButtonText: 'Ok'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Login Failed',
                        type: 'error',
                        confirmButtonText: 'Ok'
                    });
                }
            }
        });
    }

}