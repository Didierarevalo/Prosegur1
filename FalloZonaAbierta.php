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
                window.location.href = "TrianguloEstaticoSabo4.php"; // Reemplaza con la URL de tu primer formulario
            } else if (valor === "2") {
                window.location.href = "Observaciones.php"; // Reemplaza con la URL de tu segundo formulario
            } 
        }
    </script>
</head>

 <body class="fondos">
 <div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">FALLO ZONA ABIERTA</h1>
  <button class="boton-personalizado" type="button" onclick="window.location.href='ArmadoNeo.php'">Volver</button>

</div>
 <p class="PNeo"></p>

        
 
    <form>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">PASO 1</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX CON LA FLECHA QUE ESTA MIRANDO HACIA LA DERECHA , OPRIMIR E INDIQUEME QUE ZONA LE APARECE EN EL TECLADO PARA MIRAR EN SISTEMA QUE ZONA ES Y DONDE ESTA</p> 
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
                        <h5 class="card-title">PASO 2</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX POR FAVOR LE SOLICITO AMABLEMENTE QUE REALICE UNA VERIFICACIÓN EN LA ZONA XX EN CUESTIÓN PARA ASEGURARSE DE QUE ESTÉ DEBIDAMENTE CERRADA Y PROTEGIDA. LE PEDIMOS QUE COMPRUEBE SI SE TRATA DE UNA PUERTA O VENTANA QUE ESTÉ AJUSTADA CORRECTAMENTE O SI SE RELACIONA CON UN SENSOR, ASEGÚRESE DE QUE NINGUNA PERSONA ESTÉ SIENDO DETECTADA POR EL MISMO.
</p>
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
                        <h5 class="card-title">PASO 3</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX POR FAVOR DIRIGIRSE AL 
TECLADO QUE NO ESTE EL TRIANGULO 
AMARILLO ENCENDIDO, Y ESTE UN CHULO EN VERDE ENCENDIDO
</p>
                        <br>                    
                    </div>                   
                        <div class="form-check">
                            
                        
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <button type="button" class="btn btn-primary" onclick="redireccionar('1')">CONTINUAR</button>
            
            
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