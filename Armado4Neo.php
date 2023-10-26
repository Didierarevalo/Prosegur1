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
  <h1 class="titulo">BYPASS ZONA</h1>
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
                        <p class="card-text">SEÑOR/A XXXXXXX PARA REALIZAR EL BYPASS DE ZONA POR FAVOR DIRIJASE AL 
TECLADO Y OPRIMIR:
* LUEGO EL NUMERO 1 DIGITAR SU CLAVE Y EL NUMERO DE ZONA XXXX, POR ULTIMO DIGITE ##  <br><br>
EN CASO DE QUE NO PUEDA, HACER EL BYPASS SIN CLAVE:POR FAVOR DIGITE * LUEGO EL NUMERO 1 , AHORA EL NUMERO DE ZONA XX Y POR ULTIMO DIGITE ##</p> 
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
                        <p class="card-text">SEÑOR/A XXXXXXX, CONFIRME SI APARECE UN CHULO EN VERDE EN LA PARTE SUPERIOR DERECHA DEL TECLADO POR FAVOR Y REALIZAR EL ARMADO DEL SISTEMA, EN ESTE CASO LO DEBE 
DEJAR ARMAR, SIN EMBARGO SE TENDRA 
QUE AGENDAR CITA TECNICA PARA 
ARREGLAR EL FALLO DE LA ZONA CON BYPASS</p>
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
                        <h5 class="card-title">Paso 3</h5>
                        
<div class="paragraph-with-image">
                        <img src="Imagenes/asesor.png" alt="">
                        <p class="card-text">SEÑOR/A XXXXXXX SE DEBE ASIGNAR VISITA TECNICA PARA 
REVISAR FALLO, SEÑOR/A XXXXXXX LA VISITA TIENE UN COSTO DE 
$44.000 +IVA.<BR><br> ¿ACEPTA EL COSTO DE LA VISITA?, RECUERDE QUE ES FUNDAMENTAL UN ESTADO OPTIMO DE LOS EQUIPOS PARA GARANTIZAR EL FUNCIONAMIENTO DEL SISTEMA. <br><BR>(POR ULTIMO TIPIFICAR EL 
PROCEDIMIENTO Y LA VISITA O LA OBSERVACION EN SIEBEL, <B>RECUERDE ES MANTENIMIENTO + REPARACION</B>)</p>
                        <br>                    
                    </div>
                        <div class="form-check">
                            

                        </div>
                    </div>
                </div>
            </div>
            
            
            <button type="button" class="btn btn-danger" onclick="redireccionar('1');enviarMensaje5()";>Finalizar</button>
            <script>
        function enviarMensaje5() {
            var mensaje = "El cliente llama para reportar un fallo y acepta el procedimiento para realizar un bypass en la zona. Después de acceder al sistema, se le proporciona una solución y el cliente logra armar correctamente y ya no cuenta con falla. Además, el cliente acepta programar una visita técnica para verificar las zonas y asegurarse de que todo funcione adecuadamente.  ";
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
