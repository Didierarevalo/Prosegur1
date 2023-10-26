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
                window.location.href = "Observaciones.php"; // Reemplaza con la URL de tu segundo formulario
            } 
            else if (valor === "3") {
                window.location.href = "index.php"; // Reemplaza con la URL de tu segundo formulario
            } 
            else if (valor === "4") {
                window.location.href = "index.php"; // Reemplaza con la URL de tu segundo formulario
            } 
        }
        function toggleNewCard() {
            // Obtener el contenedor de la nueva tarjeta
            var newCardContainer = document.getElementById("newCardContainer");

            // Alternar la visibilidad de la nueva tarjeta
            if (newCardContainer.style.display === "none") {
                newCardContainer.style.display = "block";
            } else {
                newCardContainer.style.display = "none";
            }
        }
    </script>
</head>

 <body class="fondos">
 <div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">CLAVES O CAMBIO DE USUARIO NEO</h1>
</div>
 <div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
        <p><b>-A CONTINUACION LE DARE LOS PASOS A SEGUIR</p></b>
    </div>

    <div class="paragraph-with-image">
        <img src="Imagenes/procedimiento.png" alt="">
        <p><b>NO OLVIDAR QUE PARA REALIZAR ENSAYOS, DEBE ESTAR INGRESADO A PRUEBAS EN MASTERMIND</p></b>
    </div>
    <div class="paragraph-with-image">
        <img src="Imagenes/procedimiento.png" alt="">
        <p><b>VALIDAR LLEGADA DE SEÑALES EN MASTERMIND</p></b>
    </div>
    <div class="container mt-3">
        <button type="button" class="btn btn-primary" onclick="toggleNewCard()">VERIFICAR CLAVE MAESTRA</button>
    </div>

    <!-- Nueva tarjeta desplegable oculta por defecto -->
    <div class="container mt-3" id="newCardContainer" style="display: none;">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <P>SEÑOR/A POR FAVOR OPRIMIR * LUEGO EL NUMERO 8  AHORA LA CLAVE (4 dígitos al revés de la cuenta) LUEGO 006 AHORA * CON LA FLECHA QUE MIRA HACIA LA DERECHA OPRIMIR * EN DONDE DICE CLAVE MAESTRA TENERLA EN CUENTA PARA EL CAMBIO POR ULTIMO OPRIMIR ###</P>
                    </div>
                </div>
            </div>


        </div>
    </div>
 
    <form>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">PASO 1</h5>
                               
                        <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX POR FAVOR DIRIGIRSE AL TECLADO Y DIGITAR LO SIGUIENTE * LUEGO EL NUMERO 5 LUEGO EL CODIGO MAESTRO Y EL NUMERO USUARIO AL CUAL SE LE HARA EL CAMBIO Y DIGITE SU CLAVE DE 4 DIGITOS<br><br>SEÑOR/A XXXXXXX POR FAVOR DIGITE # DOS VECES</p>
                        <br>                    
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">PASO 2</h5>
                        
                        <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">POR ULTIMO VAMOS A REALIZAR UNA CONFIRMACION DEL PROCESO, POR FAVOR OPRIMIR EL * LUEGO EL NUMERO 1 EN PANTALLA SALDRA DIGITE TAG O CODIGO , AHI DEBES PONER LA CLAVE QUE SE LE HIZO EL CAMBIO SI TE DEJA ACCEDER AL MENU ES POR QUE LA CLAVE SE CAMBIO CORRECTAMENTE</p>
                        <br>                    
                    </div>
                    <div class="form-check">
                        
                        <button type="button" class="btn btn-danger"onclick="redireccionar('2'); enviarMensaje2();">CONTINUAR</button>
                        <script>
    function enviarMensaje2() {
        var mensaje = "Cliente llama para hacer cambio de claves o usuarios NEO se hace el proceso del cambio por medio de programacion ya que el cliente no es el administrador y no maneja smart, se le da solucion";
        window.location.href = "Observaciones.php?mensaje=" + encodeURIComponent(mensaje);
    }
</script>

                    </div>
                    </div>
                </div>
            </div>
            <!-- Repite este bloque para más opciones -->
        </div>
        <button class="boton-personalizado" type="button" onclick="window.location.href='ClavesNEO.php'">Volver</button>

</div>

<div class="centrar-imagen">
<img src="imagenes/claves.png"width="300px" height="250PX">  
    </div>


</form>
    
    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
</body>
</body>
</html>
