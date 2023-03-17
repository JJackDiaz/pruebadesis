<!DOCTYPE html>
<html lang="en">
<head>
    <!-- codificación de caracteres -->
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    
    <title>Sistema de Votación</title>
</head>
<body>
    <script src="assets/js/validate.js"></script>
    <div>
        <h1 id="title">Formulario de votación</h1>
        <?php
        if (isset($_GET['guardado']) && $_GET['guardado'] == "true") {
            echo "<div>Datos guardados correctamente</div>";
        }
        ?>
        <form id="myForm" method="post" action="http://localhost/pruebadesis/">

        <div class="form-group">
            <label for="nombre">Nombre y Apellido:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        
        <div class="form-group">
            <label for="alias">Alias:</label>
            <input type="text" id="alias" name="alias" required>
        </div>
        
        <div class="form-group">
            <label for="rut">RUT:</label>
            <input type="text" id="rut" name="rut" required>
            <div id="rutError"></div>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="region">Región:</label>
            <select id="region" name="region" value="" required>
                <option value="">Seleccione una Región</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="comuna">Comuna:</label>
            <select id="comuna" name="comuna" value="" required>
                <option value="">Seleccione una Comuna</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="candidato">Candidato:</label>
            <select id="candidato" name="candidato" required>
                <option value="">Seleccione un Candidato</option>
                <!-- Opciones de candidatos cargadas desde la base de datos -->
            </select>
        </div>
        <div class="form-group">
            <div class="input-container">
                <label>¿Cómo se enteró de nosotros?</label>
                <input type="checkbox" name="como[]" value="web">Web<br>
                <input type="checkbox" name="como[]" value="tv">TV<br>
                <input type="checkbox" name="como[]" value="redes_sociales">Redes Sociales<br>
                <input type="checkbox" name="como[]" value="amigo">Amigo<br>
            </div>
        </div>
        <button type="submit">Votar</button>
        </form>
    </div>
    <script src="assets/js/sendForm.js"></script>
    <script src="assets/js/getRegion.js"></script>
    <script src="assets/js/getComuna.js"></script>
    <script src="assets/js/getCandidato.js"></script>

</body>
</html>