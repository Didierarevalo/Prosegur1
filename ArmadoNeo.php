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
                window.location.href = "Armado2Neo.php"; // Reemplaza con la URL de tu primer formulario
            } else if (valor === "2") {
                window.location.href = "TrianguloArmado.html"; // Reemplaza con la URL de tu segundo formulario
            } 
            else if (valor === "3") {
                window.location.href = "FalloZonaAbierta.php"; // Reemplaza con la URL de tu segundo formulario
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
  <h1 class="titulo">FALLA ARMADO</h1>
  <button class="boton-personalizado" type="button" onclick="window.location.href='FallasNEO.php'">Volver</button>

</div>

 <div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
        <p><b>-SEÑOR/A XXXXX ME PUEDE CONFIRMAR SI ESTA ENFRENTE DEL TECLADO PARA REALIZAR UNAS VALIDACIONES POR FAVOR</p></b>
    </div> 
        
 
    <form>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">Paso 1</h5>
                          <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX, POR FAVOR EN LA PARTE SUPERIOR DERECHA DEL TECLADO HAY UNOS ICONOS CON LEDS, PODRIA INDICARME CUALES ESTAN ENCENDIDOS POR FAVOR</p> 
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
                        <h5 class="card-title">Check Verde</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/ASESOR.png" alt="">
                        <p class="card-text">SEÑOR/A XXXX, CUANDO APARECE UN CHULO VERDE ES QUE EL SISTEMA ESTA LISTO PARA ARMAR, POR LO QUE POR FAVOR REALICE LA PRUEBA DEL ARMADO Y POSTERIOR DESARMADO POR FAVOR, CONFIRMEME SI QUEDA ALGUN LED ENCENDIDO</p>
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
                        <h5 class="card-title">Triangulo Amarillo</h5>
                        <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX AL APARECER UN TRIANGULO AMARILLO QUIERE DECIR QUE HAY UN FALLO EN EL SISTEMA</p>
                        <br>                    
                    </div>    
                        <div class="form-check">
                            
                        <button type="button" class="btn btn-primary" onclick="redireccionar('2')">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Ningun Led Encendido</h5>
                        <div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX AL NO APARECER NINGUN LED ENCENDIDO, PODRIA HABER ALGUNA ZONA ABIERTA, POR LO QUE SIGA LAS SIGUIENTES INSTRUCCIONES</p>
                        <br>                    
                    </div>    
                        <div class="form-check">
                            
                        <button type="button" class="btn btn-primary" onclick="redireccionar('3')">Continuar</button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="centrar-imagen">
                
<img src="imagenes/panelleds.png"width="250px" height="200PX">  
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
