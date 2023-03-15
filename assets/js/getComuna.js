// Crear una instancia del objeto XMLHttpRequest
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // Convertir la respuesta en un objeto JavaScript
        var data = JSON.parse(this.responseText);

        // Obtener el elemento select del HTML
        var select = document.getElementById("comuna");

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

xmlhttp.open("GET", "controllers/getComuna.php", true);
xmlhttp.send();