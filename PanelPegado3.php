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
                window.location.href = "Observaciones.php"; // Reemplaza con la URL de tu primer formulario
            } else if (valor === "2") {
                window.location.href = "PanelPegado4.php";
            }
        }
    </script>
</head>

<body class="fondos">
<div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">FALLA PANEL PEGADO /NO PUEDO DESARMAR /SIRENA NO DEJA DE SONAR</h1>
  <button class="boton-personalizado" type="button" onclick="window.location.href='FallasNEO.php'">Volver</button>

</div>
 

 <div class="paragraph-with-image">
        <img src="Imagenes/PROCEDIMIENTO.png" alt="">
        <p><b>¿AL RESTABLECES EL DISPOSITIVO SE SOLUCIONO EL PROBLEMA?</p></b>
    </div>     
 
    <form>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">SI</h5>
                        

<div class="paragraph-with-image">
                        <img src="Imagenes/ASESOR.png" alt="">
                        <p class="card-text">ERROR SOLVENTADO TIPIFICAR EL PROCEDIMIENTO EN SIEBEL(CONSULTA)
RECUERDE QUE HABLO CON XXXX TÉCNICO DE SOPORTE EN LÍNEA DE PROSEGUR, LE LLEGARÁ UNA ENCUESTA PARA QUE CALIFIQUE MI SERVICIO. ¿QUÉ PUEDO HACER YO POR UN 10?</p> 
                        <br>                    
                    </div>
                        <div class="form-check">
                        <button type="button" class="btn btn-primary" onclick="redireccionar('1');enviarMensaje90();">Continuar</button>
                        </div>
                        <script>
        function enviarMensaje90() {
            var mensaje = "El cliente se comunica para informar sobre un fallo. Se le pide que verifique que el dispositivo 24 horas que este correctamente ajustado y se puede restablecer. Después de que el cliente realiza estas verificaciones, el problema se resuelve satisfactoriamente.";
            window.location.href = "Observaciones.php?mensaje=" + encodeURIComponent(mensaje);
        }
    </script> 
                    
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">NO</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX DEBEMOS REALIZAR LA ANULACIÓN DE LA ZONA PARA QUE EL SISTEMA PUEDA FUNCIONAR CORRECTAMENTE</p>
                        <br>                    
                    </div>
                        
                        <div class="form-check">
                            
                        <button type="button" class="btn btn-primary" onclick="redireccionar('2')">Continuar</button>
                        </div>
                        
                    </div>
                </div>
            </div>

            
            
            
            
            <!-- Repite este bloque para más opciones -->
            
            <!-- Repite este bloque para más opciones -->
        </div>
</div>

</form>
    
    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
</body>
</html>
