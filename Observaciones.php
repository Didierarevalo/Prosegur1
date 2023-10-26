<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosegur tecapp</title>
    <link rel="stylesheet" href="css/css.css?v1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script>
        function redireccionar(valor) {
            // Redirecciona a un formulario diferente basado en el valor del botón
            if (valor === "1") {
                window.location.href = "ProcesoClavesNEO.php"; // Reemplaza con la URL de tu primer formulario
            } else if (valor === "2") {
                //window.location.href = "index.php"; // Reemplaza con la URL de tu segundo formulario
            } 
            else if (valor === "3") {
                window.location.href = "index.php"; // Reemplaza con la URL de tu segundo formulario
            } 
            else if (valor === "4") {
                window.location.href = "index.php"; // Reemplaza con la URL de tu segundo formulario
            } 
        }
    </script>
</head>

 <body class="fondos">
 <div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">PROCEDIMIENTO</h1>
</div>


        
 
 <form>
 <div class="container2">
 <div class="paragraph-with-image">
        <img src="Imagenes/procedimiento.png" alt="">
        <p><b>-Escribe el procedimiento que hiciste y si se dio solución</p></b>
    </div>
        <textarea class="textarea-centrado" id="comentarios" name="comentarios" placeholder="El procedimiento que hice..." required></textarea>
        
        <button type="button" class="btn btn-danger"onclick="redireccionar('2'); tomarobser();">ENVIAR</button>
    </div>
    <script>
        // Función para obtener el mensaje de la URL
        function obtenerMensajeDeURL() {
            var urlParams = new URLSearchParams(window.location.search);
            var mensaje = urlParams.get("mensaje");
            return mensaje || ""; // Si no se encuentra el mensaje, dejarlo vacío
        }

        // Coloca el mensaje en el textarea
        document.getElementById("comentarios").value = obtenerMensajeDeURL();
    </script>

    </form>
    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="./js/tomarDatos.js"></script>
    <script src="./js/registrarDatos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</body>
</html>
