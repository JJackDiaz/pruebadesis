// Crear una instancia del objeto XMLHttpRequest
var xmlhttp = new XMLHttpRequest();

// Definir la función que se llamará cuando se reciba la respuesta del servidor
xmlhttp.onreadystatechange = function() {
    // Comprobar si la respuesta se ha completado y se ha recibido correctamente
    if (this.readyState == 4 && this.status == 200) {
        // Convertir la respuesta en un objeto JavaScript
        var data = JSON.parse(this.responseText);

        // Obtener el elemento select del HTML
        var select = document.getElementById("region");

        // Recorrer los datos y crear opciones de select para cada uno
        for (var i = 0; i < data.length; i++) {
            var option = document.createElement("option");
            option.text = data[i].nombre; // aquí puedes asignar cualquier propiedad que quieras mostrar en la opción
            option.value = data[i].id; // aquí puedes asignar cualquier propiedad que quieras usar como valor de la opción
            select.value = data[i].id; // aquí puedes asignar cualquier propiedad que quieras usar como valor de la opción
            select.add(option);
        }
    }
};

// Abrir la conexión y hacer la petición al servidor
xmlhttp.open("GET", "controllers/getRegion.php", true);
xmlhttp.send();