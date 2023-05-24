function validarContrasena() {

    let password = document.getElementById('password').value

    let expresion = /[a-z]+\d/

    if (password.length < 8 || !expresion.test(password)) {

        alert('La contraseña no cumple')

    }

    else {

        document.getElementById('btn-enviar').style.display = 'block';




    }

    console.log(password)

}