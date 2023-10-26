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
            } 
        }
    </script>
</head>

<body class="fondos">
<div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">FALLA PERDIDA DE HORA</h1>
  <button class="boton-personalizado" type="button" onclick="window.location.href='FallasNEO.php'">Volver</button>

</div>
 <p class="PNeo"><b>CONFIGURACION DE FECHA Y HORA</p></b>

        
 
    <form>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">Paso 1</h5>
                        

<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX PARA CONFIGURAR FECHA Y HORA POR FAVOR DIRIJASE AL TECLADO Y OPRIMIR: * LUEGO EL NUMERO 6 DESPUES CLAVE MAESTRA DESPUES CON LA FLECHA DIRIJASE AL APARTADO FECHA Y HORA Y INGRESE CON *</p> 
                        <br>                    
                    </div>
                        <div class="form-check">
                            
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Paso 2</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX POR FAVOR DIGITE LA HORA Y LA FECHA, RECUERDE QUE LA FECHA ESTA EN FORMATO 24 HORAS (HH:MM), Y LA FECHA ESTA EN FORMATO MM/DD/AA</p>
                        <br>                    
                    </div>
                        
                        <div class="form-check">
                            

                        </div>
                    </div>
                </div>
            </div>

            
            
            
            <button type="button" class="btn btn-danger" onclick="redireccionar('1');enviarMensaje10();">Finalizar</button>
            <!-- Repite este bloque para más opciones -->
            <script>
        function enviarMensaje10() {
            var mensaje = "El cliente se ha comunicado para informar sobre un problema en su sistema. Tras una minuciosa revisión, se ha identificado que el fallo se debía a una configuración incorrecta de la fecha y la hora. Se ha procedido a explicar al cliente el proceso necesario para corregir dicha configuración, y como resultado, el problema ha sido resuelto. El sistema ya funciona sin inconvenientes.";
            window.location.href = "Observaciones.php?mensaje=" + encodeURIComponent(mensaje);
        }
    </script>
            <!-- Repite este bloque para más opciones -->
        </div>
</div>

</form>
    
    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
</body>
</html>
