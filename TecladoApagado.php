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
                window.location.href = "TrianguloEstaticoCom2.php"; // Reemplaza con la URL de tu primer formulario
            } else if (valor === "2") {
                window.location.href = "Observaciones.php"; // Reemplaza con la URL de tu segundo formulario
            } 
        }
    </script>
</head>

 <body class="fondos">
 <div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">TECLADO APAGADO</h1>
</div>
 <div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
        <p><b>-ME CONFIRMA SI ESTA ENFRENTE DEL TECLADO POR FAVOR PARA SEGIR UNAS INDICACIONES</p></b>
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
                        <p class="card-text">ME PODRIA CONFIRMAR SI TODO EL SISTEMA EN LA SEDE HAY FLUJO ELECTRICO NORMAL TAMBIEN VERIFICAR SI EL SISTEMA ESTA BIEN CONECTADO</p> 
                        <br>                    
                    </div>      
                    <div class="paragraph-with-image">
                        <img src="Imagenes/procedimiento.png" alt="">
                        <p class="card-text">VERIFICAR EN MASTER MIND LOS EVENTOS QUE HAYA LLEGADO FALLO ENERGIA AC</p>
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
                        <p class="card-text">SI HAY FLUJO NORMAL POR FAVOR DIGITE EN EL TECLADO ##</p>
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
                        <p class="card-text">SI EL TECLADO ENCIENDE ES POQUE EL SISTEMA TIENE UNA FUNCION DE AHORRO DE ENERGIA<BR><BR><B>SI NO ENCIENDE ES UN CORTO EN EL TECLADO SE DEBE GENERAR VISITA </B></p>
                        <br>                    
                    </div>
                    <div class="form-check">
                        
                        <button type="button" class="btn btn-danger"onclick="redireccionar('2');  enviarMensaje3();">CONTINUAR</button>
                        <script>
    function enviarMensaje3() {
        var mensaje = "El cliente llama para solicitar un cambio de claves o usuarios en NEO. Se lleva a cabo el proceso utilizando la aplicación Smart, ya que el cliente es el administrador y maneja esta herramienta. Se informa al cliente sobre el proceso y se brinda una solución para el cambio solicitado.";
        window.location.href = "Observaciones.php?mensaje=" + encodeURIComponent(mensaje);
    }
</script>
                    </div>
                    </div>
                    
                </div>
                
            
            

            <!-- Repite este bloque para más opciones -->
        </div>
        <button class="boton-personalizado" type="button" onclick="window.location.href='ClavesNEO.php'">Volver</button>

</div>

</form>
    
    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
</body>
</body>
</html>