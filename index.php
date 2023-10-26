<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosegur tecapp</title>
    <link rel="stylesheet" href="css/css.css?v1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="fondos">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Prosegur tecapp</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Administrativo.php">Consultas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<img src="imagenes/logo.png" alt="" width="180" height="60">
<div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
        <p><b>-BUEN DIA HABLA CON XXXXXX DE SOPORTE TECNICO EN LINEA DE PROSEGUR, CON ¿QUIEN TENGO EL GUSTO DE HABLAR?<BR> EN QUE LE PUEDO COLABORAR ME PUEDE INDICAR EL NUMERO DE CEDULA O NIT CON EL QUE ESTA REGISTRADO EL SERVICIO POR FAVOR.</b></p>
    </div>  
    <div class="paragraph-with-image">
        <img src="Imagenes/procedimiento.png" alt="">
        <p><b>INGRESAR LA CEDULA DEL TITULAR EN MASTERMIND Y AHI SE ENCONTRARA EL CONTRATO DE LA PERSONA PARA REGISTRARLO A CONTINUACION:</p></b>
    </div> 
    


    <div class="container">
        <div class="row justify-content-center mt-5 ">
            <div class="col-md-6">
                <div class="card">
                <div class="card-header color1">Ingreso</div>
                    <div class="card-body color1">
                        <form method="POST" action="controlador.php" onsubmit="return validarFormulario()">
                        <div class="mb-3">
                                <label for="username" class="form-label">Contrato</label>
                                <input type="text" class="form-control" placeholder="XXXXXXX" id="contrato" name="contrato" required>
                                
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" placeholder="COXXXXXX" id="username" name="username" minlength="9" maxlength="10"required>
                                
                            </div>
                            <input type=submit value="Ingresar" onclick="tomarContrato();"></input>                            
                            
                        </form>
                    </div>
       
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="./js/tomarDatos.js"></script>

    <script>
        function validarFormulario() {
            // Obtener el valor del campo de entrada
            const username = document.getElementById("username").value;

            // Verificar si comienza con "co" o "CO"
            if (username.startsWith("co") || username.startsWith("CO")) {
                // El valor es válido, permite que el formulario se envíe
                return true;
            } else {
                // El valor no es válido, muestra una alerta de error
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'El nombre de usuario debe comenzar con "co" o "CO".',
                });
                // Detiene el envío del formulario
                return false;
            }
        }
    </script>
</body>
</html>