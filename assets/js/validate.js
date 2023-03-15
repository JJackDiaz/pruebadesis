//Método para los alias alfanumericos.
$.validator.addMethod("alphanumeric", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9]+$/.test(value);
}, "Solo se permiten letras y números.");


//Función con las validaciones del formulario
$(document).ready(function() {
    $('#myForm').validate({
        rules: {
            nombre: 'required',
            alias: {
                required: true,
                minlength: 5,
                //Llamamos al método alphanumeric
                alphanumeric: true
            },
            rut: {
                required: true,
                remote: {
                    url: 'http://localhost/pruebadesis/controllers/validar_rut.php',
                    type: 'post'
                }
            },
            email: {
                required: true,
                email: true
            },
            region: 'required',
            comuna: 'required',
            candidato: 'required',
            'como[]': {
                required: true,
                minlength: 2
            }
        },
        messages: {
            nombre: 'Por favor, ingrese su nombre y apellido',
            alias: 'Por favor, ingrese un alias válido',
            rut: 'Por favor, ingrese un rut válido',
            email: 'Por favor, ingrese un email',
            region: 'Por favor, ingrese un region',
            comuna: 'Por favor, ingrese un comuna',
            candidato: 'Por favor, ingrese un candidato',
            'como[]': 'Por favor, ingrese al menos dos'
        }
    });
});