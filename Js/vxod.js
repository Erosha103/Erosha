

$('.btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        pass = $('input[name="pass"]').val();

    $.ajax({
        url: '../php/auth.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            pass: pass
        },
        success (data) {

            if (data.status) {
                document.location.href = '../sait/Main.html';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });

});

$('.btn-success').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        pass = $('input[name="pass"]').val(),
        name = $('input[name="name"]').val(),
        pass_confirm = $('input[name="pass_confirm"]').val();

    let formData = new FormData();
    formData.append('login', login);
    formData.append('pass', pass);
    formData.append('pass_confirm', pass_confirm);
    formData.append('name', name);
});