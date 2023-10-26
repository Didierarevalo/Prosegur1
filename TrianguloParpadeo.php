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
                window.location.href = "TrianguloParpadeo2.php"; // Reemplaza con la URL de tu primer formulario
            } else if (valor === "2") {
                window.location.href = "TrianguloParpadeo1.php"; // Reemplaza con la URL de tu segundo formulario
            } 
        }

        function toggleNewCard() {
            // Obtener el contenedor de la nueva tarjeta
            var newCardContainer = document.getElementById("newCardContainer");

            // Alternar la visibilidad de la nueva tarjeta
            if (newCardContainer.style.display === "none") {
                newCardContainer.style.display = "block";
            } else {
                newCardContainer.style.display = "none";
            }
        }
    </script>
</head>
 <body class="fondos">
 <div class="contenedor5">
  <img src="imagenes/logo.png" alt="" class="imagen">
  <h1 class="titulo">FALLO BATERIA</h1>
  <button class="boton-personalizado" type="button" onclick="window.location.href='FallasNEO.php'">Volver</button>

</div>
        <div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
        <p><b>-SEÑOR/A XXXXX POR FAVOR SIGA MIS INDICACIONES</p></b>
         </div> 
         <div class="paragraph-with-image">
        <img src="Imagenes/PROCEDIMIENTO.png" alt="">
        <p><b>-BUSCAR LA ZONA QUE ESTA SALTANDO EL ERROR EN MASTERMIND, Y ESPECIFICACION DE LA ZONA</p></b>
         </div> 
 <div class="container mt-3">
        <button type="button" class="btn btn-primary" onclick="toggleNewCard()">REFERENCIA PILAS</button>
    </div>

    <!-- Nueva tarjeta desplegable oculta por defecto -->
    <div class="container mt-3" id="newCardContainer" style="display: none;">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Magneticos liviano</h5>
                        <div class="paragraph-with-image">
                        <img src="Imagenes/pilaliviano.png" alt="">
                        <p class="card-text">Pila Cr2450           <br></p> 
                        <br>                    
                    </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Sensores y magneticos pesados</h5>
                        <div class="paragraph-with-image">
                        <img src="Imagenes/PilaSensor.jpeg" alt="">
                        <p class="card-text">Pila Cr123A<br></p> 
                        <br>                    
                    </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Teclado y Humos</h5>
                        <div class="paragraph-with-image">
                        <img src="Imagenes/Triplea.jpg" alt="">
                        <p class="card-text">Pila AAA<br></p> 
                        <br>                    
                    </div> 
                    </div>
                </div>
            </div>
        </div>
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
        <p>-CON LAS FLECHAS QUE SE ENCUENTRAN EN LA PARTE SUPERIOR DEL TECLADO, OPRIMIR LA FECHA QUE APUNTA HACIA LA DERECHA Y DIRIJASE HASTA DONDE SALGA BATERIA BAJA DISPOSITIVO OPRIMIR TECLA *</p>
    </div> 
                        <p class="card-text"></p>                                                                                                                          
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Paso 2</h5>
                        <div class="paragraph-with-image">
        <img src="Imagenes/asesor.png" alt="">
        <p>-EL DISPOSITIVO QUE TIENE BAJA BATERIA ES XXXXXX LO QUE HAREMOS SERA LO SIGUIENTE</p>
    </div>               
                    </div>
                </div>
            </div>
            <div class="centrar-imagen">
<img src="imagenes/bateria.png"width="250px" height="200PX">  
    </div>
            
            
            <!-- Repite este bloque para más opciones -->
            <button type="button" class="btn btn-primary" onclick="redireccionar('2')">Continuar</button>
        </div>
</div>
</form>    <!-- Incluye el script de Bootstrap (jQuery y Popper.js son requeridos) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+M6m5i5IQr5mW5u4xj5Hf5R5x/K/5fG5f5t5E5u5Q5z5U5w5T5" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ugOaSJZ3ZcW5M5J5og4HQpev4F5tu6Bk/F5v5v5u5q2O5n5E5e5L5W5B5f5r5f5t5u5z5U5w5T5" crossorigin="anonymous"></script>
</body>
</html>