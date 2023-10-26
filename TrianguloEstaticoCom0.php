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
                window.location.href = "TrianguloEstaticoCom1.php"; // Reemplaza con la URL de tu primer formulario
            } else if (valor === "2") {
                window.location.href = "TrianguloEstaticoCom2.1.php"; // Reemplaza con la URL de tu segundo formulario
            } 
            else if (valor === "3") {
                window.location.href = "TrianguloEstaticoCom2.1.php"; // Reemplaza con la URL de tu segundo formulario
            } 
            else if (valor === "4") {
                window.location.href = "FalloEnergia.php"; // Reemplaza con la URL de tu segundo formulario
            } 
        }
    </script>
</head>

 <body class="fondos">
 <div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">FALLO COMUNICACIONES</h1>
</div>
 <div class="paragraph-with-image">
                        <img src="Imagenes/procedimiento.png" alt="">
                        <p class="card-text"><B>PRIMERO VERIFICAR POR CUAL MEDIO ESTA DANDO EL ERROR, SI GPRS O INTERNET</B></p> 
                        <br>                    
                    </div> 
                    <div class="paragraph-with-image">
                        <img src="Imagenes/procedimiento.png" alt="">
                        <p class="card-text"><B>PARA ESO PUEDES IR A LOS EVENTOS QUE ARROJA EN MASTER MIND Y MIRAR EN CASO DE QUE SEA FALLO GPRS , LLEGARA FALLO GPRS <BR></BR>
                    EN CASO DE QUE SEA INTERNET LLEGARA EN MASTERMIND FALLO ETHERNET</B></p> 
                        <br>                    
                    </div> 
        
 
    <form>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">INTERNET</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/procedimiento.png" alt="">
                        <p class="card-text">CUENTA CON AMBOS MEDIOS DE COMUNICACION, SE DEBE REALIZAR LA VERIFICACION DE AMBOS MEDIOS</p> 
                        <br>                    
                    </div>                                                                                                        
                        <div class="form-check">
                        <button type="button" class="btn btn-primary" onclick="redireccionar('1')">Continuar</button>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">GPRS</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SOLO CUENTA CON EL SISTEMA DE SIMCARD</p>
                        <br>                    
                    </div>                   
                        <div class="form-check">
                            
                        <button type="button" class="btn btn-primary" onclick="redireccionar('2')">Continuar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">INCOMUNICADO</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">CUENTA CON AMBOS MEDIOS DE COMUNICACION, SE DEBE REALIZAR LA VERIFICACION DE AMBOS MEDIOS</p> 
                        <br>                    
                    </div>                                                                                                        
                        <div class="form-check">
                        <button type="button" class="btn btn-primary" onclick="redireccionar('1')">Continuar</button>
                        </div>
                    
                    </div>
                </div>
            </div>            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">PANEL APAGADO</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXX POR FAVOR VAMOS A REALIZAR UNA VALIDACION POR FAVOR SEGUIR MIS INDICACIONES.</p> 
                        <br>                    
                    </div>                                                                                                        
                        <div class="form-check">
                        <button type="button" class="btn btn-primary" onclick="redireccionar('4')">Continuar</button>
                        </div>
                    
                    </div>
                </div>
            </div>
            

            <button class="boton-personalizado" type="button" onclick="window.location.href='TrianguloEstatico.php'">Volver</button>

            
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