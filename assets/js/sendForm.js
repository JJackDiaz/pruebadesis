$(document).ready(function() {
    $('#myForm').submit(function(event) {
        event.preventDefault();

        // Obtener los datos del formulario
        var formData = $(this).serialize();

        // Enviar los datos al archivo PHP utilizando AJAX
        $.ajax({
            type: 'POST',
            url: 'controllers/form.php',
            data: formData,
            success: function() {
                setTimeout(function() {
                    alert('Datos enviados correctamente');
                    location.reload();
                }, 4000);
            },
            error: function() {
                alert('Ocurrió un error al enviar los datos.');
            }
        });

    });
});