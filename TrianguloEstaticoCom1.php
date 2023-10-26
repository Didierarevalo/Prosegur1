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
                window.location.href = "TrianguloEstaticoCom3.php"; // Reemplaza con la URL de tu primer formulario
            } 
        }
    </script>
</head>

 <body class="fondos">
 <div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">FALLO COMUNICACIONES</h1>
  <button class="boton-personalizado" type="button" onclick="window.location.href='TrianguloEstaticoCom0.php'">Volver</button>

</div>
        
 
    <form>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">Paso 1</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/procedimiento.png" alt="">
                        <p class="card-text">PRIMERO VERIFICAR QUE SE ESTE 
DANDO LA COMUNICACION POR ETHERNET<BR><BR></p> 
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
                        <p class="card-text">SEÑOR/A XXXXXXX PODEMOS REVISAR CONEXION DEL CABLE DE RED 
AL ROUTER Y QUE EL 
INTERNET FUNCIONE CORRECTAMENTE <BR></BR> EN CASO DE QUE NO FUNCIONE EL INTERNET DECIRLE: SEÑOR/A XXXXXXX RECUERDE QUE DEBE TENER INTERNET Y QUE EL CABLE ESTE BIEN CONECTADO PARA QUE NO GENERE ESTE TIPO DE FALLO</p>
                        <br>                    
                    </div>                   
                    <div class="form-check">
                            
                            <button type="button" class="btn btn-danger" onclick="redireccionar('2'); enviarMensaje6();">Finalizar</button>
                            </div>
                            <script>
            function enviarMensaje6() {
                var mensaje = "El cliente llama para informar sobre un fallo en la comunicación. Se realiza una verificación y se identifica un problema de comunicación. Se le explica al cliente que es un fallo debido al ethernet se le solicita asegurarse de que el cable de red esté correctamente conectado para evitar este tipo de fallo.  ";
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
                        <h5 class="card-title">Paso 3</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX LUEGO DE QUE ME CONFIRME QUE EL INTERNET ESTA BIEN Y ESTA FUNCIONANDO CORRECTAMENTE HAREMOS LO SIGUIENTE <BR></BR> EN EL TECLADO OPRIMIR * Y EL NUMERO 8 LUEGO AHORA LA CLAVE (4 dígitos al revés de la cuenta) LUEGO 851 DESPUES 999 Y LUEGO 55 POR ULTIMO ## , ESPERAREMOS APROXIMADAMENTE 3 MINUTOS EN LINEA MIENTRAS SE REINICIA Y COMPROBAMOS COMUNICACION</p>
                        <br>                    
                    </div>                   
                        <div class="form-check">
                            

                        </div>
                    </div>
                </div>
            </div>
            

            
            <button type="button" class="btn btn-primary" onclick="redireccionar('1')">Continuar</button>
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