const form = document.getElementById('form');

form.addEventListener('submit', e => {
    e.preventDefault();

    let error = '';
    let email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

    if (form['name'].value == '') {
        error = 'Todos los campos son reqeridos';
    } else if (!email.test(form['email'].value)) {
        error = 'Ingrese un correo electrÃ³nico valido';
    } else if (form['text'].value == '') {
        error = 'Escriba un mensaje valido';
    }

    if (error != '') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: error
        });
    } else {

        fetch("controller_php/mail.php", {
            method: "POST",
            body: new FormData(form)
        }).then(response => response.text()).then(response => {
            if (response == 'ok') {
                Swal.fire(
                  'FELICIDADES!',
                  'Su mensaje se env¨ªo con ¨¦xitoa!',
                  'success'
                )
                form.reset();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: response
                });
            }
        });

    }
});