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
            } else if (valor === "2") {
                window.location.href = "Observaciones.php"; // Reemplaza con la URL de tu segundo formulario
            } 
        }
    </script>
</head>

 <body class="fondos">
 <div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">FALLO COMUNICACIONES</h1>
</div>

        
 
    <form>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h5 class="card-title">PASO 1</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/procedimiento.png" alt="">
                        <p class="card-text">REVISAR ESTADO DE LA SIM Y SI TIENE
SEÑAL PRIMERO ASESOR DEBE IR A SIEBEL
Y MIRAR EN : DATOS TECNICOS/CRA EL
CAMPO TELEFONO PANEL DATOS , AHI
SALDRA EL NUMERO DE LA SIM
INSTALADA<BR><BR></p> 
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
                        <p class="card-text">INGRESAR A PLATAFORMA KITE Y PEGAR
                            EL NUMERO DE TELEFONO , LUEGO
                            INGRESAR EN LA SIM Y DARLE CLICK EN
                            LANZAR PRUEBA PARA VERIFICAR SEÑAL <BR></BR> (EN CASO DE QUE NO TENGA DATOS O SEÑAL DECIRLE LO SIGUIENTE:) SEÑOR/A XXXXX SE AGENDARA VISITA TECNICA PARA REVISAR FALLO RECUERDE QUE TIENE COSTO DE $44.000 + IVA<B>
</p>
                        <br>                    
                    </div>                   
                    <div class="form-check">
                            
                            <button type="button" class="btn btn-danger" onclick="redireccionar('2'); enviarMensaje7();">Finalizar</button>
                            </div>
                            <script>
            function enviarMensaje7() {
                var mensaje = "El cliente contacta debido a un fallo, tras la verificación se detecta un problema de comunicación por GPRS. Se realizan pruebas en la tarjeta SIM y otros posibles diagnósticos, sin embargo, el fallo persiste. El cliente consiente en programar una visita técnica para resolver la situación.";
                window.location.href = "Observaciones.php?mensaje=" + encodeURIComponent(mensaje);
            }
        </script> 
                            
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Paso 3-Reinicio TL</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX EN EL TECLADO OPRIMIR * Y EL NUMERO 8 LUEGO AHORA LA CLAVE (4 dígitos al revés de la cuenta) LUEGO 851 DESPUES 999 Y LUEGO 55 POR ULTIMO ## , ESPERAREMOS APROXIMADAMENTE 3 MINUTOS EN LINEA MIENTRAS SE REINICIA Y COMPROBAMOS COMUNICACION </p>
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