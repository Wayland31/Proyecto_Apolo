function valida() {
    //validar nombre obligatorio
    var nombre = document.getElementById('username');
    if (nombre.value == '') {
        alert('El nombre de usuario es obligatorio');
        nombre.focus();
        return false;
    }

    //validar email obligatorio
    var email = document.getElementById('email');
    if (email.value == '') {
        alert('El email es obligatorio');
        email.focus();
        return false;
    }

    var expClave = /^(\+?56)?(\s?)(0?9)(\s?)[9876543]\d{7}$/;
    var fono = document.getElementById('telefono');
    if (!expClave.test(fono.value)) {
        alert('Solo numeros de 9 digitos');
        fono.focus();
        return false;
    }
    

    var clave = document.getElementById('Password1');
    if (!(clave.value.length >= 4 && clave.value.length <= 8)) {
        alert('La clave es obligatoria entre 4 y 8 caracteres');
        clave.focus();
        return false;
    }

    pass1 = document.getElementById('Password1');
    pass2 = document.getElementById('Password2');

    if (pass1.value != pass2.value) {

        // Si las constraseñas no coinciden mostramos un mensaje 
        alert('Las Contraseñas no coinsiden')
        clave.focus();
        return false;
    }

    var terminos = document.getElementById('terminos');
    var cont = 0;
    if(terminos.checked == false){
        alert('Términos y Condiciones es obligatorio');
        terminos.focus();
        return false;
    }


    alert('Bienvenido a APOLO');
    return true;

}
