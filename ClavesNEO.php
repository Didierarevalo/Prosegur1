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
                window.location.href = "ClavesSmart.php"; // Reemplaza con la URL de tu segundo formulario
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
  <h1 class="titulo">CLAVES O CAMBIO DE USUARIO NEO</h1>
  <button class="boton-personalizado" type="button" onclick="window.location.href='FallasNEO.php'">Volver</button>

</div>
 <div class="paragraph-with-image">
        <img src="Imagenes/procedimiento.png" alt="">
        <p><b>EN CASO DE QUE SEA EL ADMINISTRADOR Y MANEJE SMART, SELECCIONA SMART, SI NO MANEJA, SELECCIONA PROGRAMACION</p></b>
    </div>
    <div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
        <p><b>-¿ME CONFIRMA SI TIENE ACCESO Y MANEJA EL APLICATIVO SMART?, RECUERDE QUE CON NUESTRO APLICATIVO<BR> PODRA REALIZAR VARIAS ACCIONES SIN NECESIDAD DE REALIZAR SOLICITUDES COMO EN EL CASO DE ACTUALIZAR DE CLAVE DE TECLADO</p></b>
    </div>
 <div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
        <p><b>-ME PUEDE CONFIRMAR SI ES LA PERSONA QUE HARA EL CAMBIO, YA QUE LA CLAVE ES PERSONAL E INTRANSFERIBLE O DEBE SER EL ADMINISTRADOR DE LA ALARMA</p></b>
    </div>
    
      
    <form>
    <div class="container mt-5">
        <div class="row">
        <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">PROCESO SMART</h5>
                        <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXX PARA CAMBIAR SUS CLAVES EN NUESTRO APLICATIVO SMART. QUEREMOS ASEGURARNOS DE QUE ESTE PROCESO SEA LO MÁS SENCILLO Y SEGURO POSIBLE PARA USTED. A CONTINUACIÓN, LE PROPORCIONAREMOS DETALLE A DETALLE LOS PASOS NECESARIOS PARA LLEVAR A CABO ESTE CAMBIO DE CLAVES DE MANERA EXITOSA.</p>
                        <br>                    
                    </div>                        
                        <div class="form-check">
                            <button type="button" class="btn btn-primary" onclick="redireccionar('3'); cambiarTexto();">Seleccionar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                    <h5 class="card-title">PROCESO PROGRAMACIÓN</h5>
                    <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXX HEMOS REALIZADO LA VERIFICACIÓN Y VEMOS QUE SÍ HAY UNA SOLICITUD, LA SOLICITUD ES PARA EL USUARIO XXXXX. ME CONFIRMA POR FAVOR SI USTED ES LA PERSONA DE LA SOLICITUD POR FAVOR <br><br>(SI NO ES POSIBLE LA COMUNICACIÓN CON LA PERSONA DE LA SOLICITUD) SEÑOR/A XXXXXXX NECESITAMOS REALIZAR EL PROCESO CON LA PERSONA DE LA SOLICITUD, ES POSIBLE QUE SE COMUNIQUE NUEVAMENTE CUANDO SE ENCUENTRE LA PERSONA REQUERIDA O HAY UNA FRANJA EN LA QUE NOS PUDIÉRAMOS CONTACTAR.</p>
                        <br>                    
                    </div>
                    <div class="form-check">
                            <br>
                            <button type="button" class="btn btn-primary" onclick="redireccionar('1')">Continuar</button>
                            <button type="button" class="btn btn-danger"onclick="redireccionar('2');enviarMensaje1();" >Finalizar</button>
                            <script>
        function enviarMensaje1() {
            var mensaje = "El cliente se comunica con el fin de solicitar una modificación en las claves o usuarios de NEO. Sin embargo, la identidad del solicitante no coincide con la persona autorizada para llevar a cabo esta modificación. En este sentido, se le solicita cordialmente que se comunique con la persona designada para llevar a cabo el cambio en cuestión. Es importante recordar que la clave es de carácter personal e intransferible. ";
            window.location.href = "Observaciones.php?mensaje=" + encodeURIComponent(mensaje);
        }
    </script>
                        </div>
                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">NO SE HA REALIZADO SOLICITUD</h5>
                        
                        <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX PARA REALIZAR UN CAMBIO, NECESITAMOS QUE SE REALICE LA SOLICITUD A NUESTRA ÁREA ADMINISTRATIVA Y SEA APROBADA. EL CORREO AL QUE SE DEBE REALIZAR LA SOLICITUD ES EL SIGUIENTE <a href= >SOPORTEALARMAS.CO@PROSEGUR.COM.CO</a>. EN EL MOMENTO QUE REALICE LA SOLICITUD, PUEDE COMUNICARSE CON NOSOTROS PARA REALIZAR EL PROCESO DE CAMBIO.</p>
                        <br>                    
                    </div>
                        <div class="form-check">
                            <button type="button" class="btn btn-danger"onclick="redireccionar('2'); enviarMensaje(); ">Finalizar</button>
                            <script>
        function enviarMensaje() {
            var mensaje = "El cliente solicita un cambio de claves o usuarios en NEO, pero aún no ha enviado el correo necesario para completar el proceso, ademas se refleja que no cuenta con el aplicativo smart. Se le proporciona la dirección de correo electrónico a la cual debe enviarlo y se le invita a ponerse en contacto nuevamente una vez que se haya verificado que el correo ha sido remitido.Se le recuerda la importancia de que el correo remitente coincida con el correo registrado a nombre del titular.";
            window.location.href = "Observaciones.php?mensaje=" + encodeURIComponent(mensaje);
        }
    </script>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Repite este bloque para más opciones -->
        </div>


            <!-- Repite este bloque para más opciones -->
        </div>

</div>

</form>
    
    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
</body>
</body>
</html>
