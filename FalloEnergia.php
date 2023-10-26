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
                window.location.href = "TrianguloEstatico.php"; // Reemplaza con la URL de tu primer formulario
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
    </script>
</head>

 <body class="fondos">
 <div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">FALLO O BAJON DE ENERGIA</h1>
  <button class="boton-personalizado" type="button" onclick="window.location.href='FallasNEO.php'">Volver</button>

</div>
 <div class="paragraph-with-image">
        <img src="Imagenes/ASESOR.png" alt="">
        <p><b>-¿ESTA DISPUESTO A REINICIAR EL SISTEMA DE ALARMA? RECUERDE QUE PARA ESTO DEBE DIRIGIRSE A DONDE ESTE LA ALARMA Y DESTAPAR LA CAJA</p></b>
    </div>


        
 
    <form>
<div class="container mt-5">
        <div class="row">
        <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">SI</h5>
                         <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p>-DEME UN MOMENTO EN LINEA YA LE DIRE EL PASO A PASO PARA PODER HACER EL CAMBIO DE BATERIA</p>
                        </div> 
                                                                                                 
                    
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">NO</h5>
                        <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p>-SE AGENDARA UNA VISITA TECNICA PARA SOLUCIONAR EL FALLO , RECUERDE QUE LA VISITA TECNICA TIENE UN COSTO DE $44.000 +IVA</p>
                        </div>
                        <div class="form-check">
                            <button type="button" class="btn btn-danger" onclick="redireccionar('2');enviarMensaje15();">Continuar</button>
                        </div>
                        <script>
        function enviarMensaje15() {
            var mensaje = "El cliente se comunica debido a un fallo de energía. Se le solicita reiniciar el sistema de alarma para solucionar el problema, pero el cliente manifiesta su falta de disposición para manipular el sistema. En consecuencia, acepta programar una visita técnica para abordar la situación. ";
            window.location.href = "Observaciones.php?mensaje=" + encodeURIComponent(mensaje);
        }
    </script>  
                    </div>
                </div>
            </div>
</div>

        <p class="PNeo"><B>EN CASO DE QUE EL CLIENTE ESTE DISPUESTO DECIRLE LO SIGUIENTE</p>

<div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
        <p>-A CONTINUACION LE DIRE EL PROCEDIMIENTO</B></p>
    </div>
    <div class="container mt-5">
        <div class="row">
        <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">PASO 1</h5>
                         <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p>-POR FAVOR ABRA LA CAJA DONDE ESTA EL SISTEMA DE ALARMA Y PRIMERO DESCONECTE EL CABLE NEGRO O ROJO Y LUEGO EL TRANSFORMADOR, ESPERA 10 SEGUNDOS , LUEGO VOLVER A CONECTAR EN EL MISMO ORDEN PRIMERO EL CABLE ROJO O NEGRO Y EL TRANSFORMADOR</p>
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
                        <p>-CUANDO SE ENCIENDA DE NUEVO EL SISTEMA DE ALARMA ACERQUESE AL TECLADO Y REVISE SI DEJO DE SONAR EL PITIDO , ME CONFIRMA POR FAVOR SI ¿LUEGO DE EL REINICIO SALE UN TRIANGULO AMARILLO ENCENDIDO?</p>
                        

                    </div>
                    <div class="form-check">
                            <button type="button" class="btn btn-primary" onclick="redireccionar('1')">FALLA TRIANGULO</button>
                        </div>
                        <div class="form-check">
                            <button type="button" class="btn btn-danger" onclick="redireccionar('2');enviarMensaje16();">SOLUCIONADO</button>
                        </div>
                        </div>
                        <script>
        function enviarMensaje16() {
            var mensaje = "El cliente se comunica debido a un fallo de energía. Se le indica que reinicie el sistema de alarma, lo cual realiza con éxito. Como resultado, el problema se resuelve, se restauran fallos y se da solucion.";
            window.location.href = "Observaciones.php?mensaje=" + encodeURIComponent(mensaje);
        }
    </script> 
                </div>
            </div>
</div>

                



</form>
    
    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
</body>
</body>
</html>