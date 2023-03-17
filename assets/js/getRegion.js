// Crear una instancia del objeto XMLHttpRequest
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    //valida los estados de la solictud sean enviados correctamente.
    if (this.readyState == 4 && this.status == 200) {
        // Convertir la respuesta en un objeto JavaScript
        var data = JSON.parse(this.responseText);

        // Obtener el elemento select del HTML
        var select = document.getElementById("region");

        // Recorrer los datos y crear opciones de select para cada uno
        for (var i = 0; i < data.length; i++) {
            var option = document.createElement("option");
            option.text = data[i].nombre;
            option.value = data[i].id;
            select.value = data[i].id;
            select.add(option);
        }
    }
};

//iniciar solicitud
xmlhttp.open("GET", "controllers/getRegion.php", true);
//enviar solicitud
xmlhttp.send();