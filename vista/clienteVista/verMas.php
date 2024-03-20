<?php

require_once 'modelo/ClsProducto.php';
$objProducto = new Productos();
$objProducto->setDatos($nombre, null, null, null);
$datosProducto = $objProducto->localizarProducto();


if ($datosProducto) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="vista\styles\styleVer.css">
        <title>Beat Blast</title>
    </head>

    <body>
        <div class="container principal">
            <nav class="navbar navbar-expand-lg navbar-light d-flex align-items-center">
                <img class="logo" src="vista\imagenes\icon.png" alt="" width="100">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto d-flex align-items-center">
                        <li class="nav-item active">
                            <a class="nav-link ini" href="?peticion=inicio">Cliente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link opcion" href="?peticion=somos">¿Quienes somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link opcion" href="?peticion=galeria">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link opcion" href="?peticion=logout">Logout</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 ms-auto">
                        <div class="custom-search">
                            <img src="vista\imagenes\lupa.png" class="search-icon" alt="Lupa">
                            <input class=" mr-sm-2" type="text" aria-label="Search">
                        </div>
                    </form>
                </div>
            </nav>

            <div class="container lemaContainer">
                <div class="row">
                    <div class="col-7  bg-transparent lemaTexto mt-5 d-flex flex-column justify-content-center align-items-center">
                        <img class="audiPrinci img-fluid" src="<?php echo $datosProducto['foto']; ?>" alt="">
                    </div>
                    <div class="col-5  bg-transparent text-center">
                        <input type="text" name="id_audifono" value="<?php echo $datosProducto['id']; ?>">
                        <h1 class="mt-5"><?php echo $datosProducto['nombre']; ?></h1><br>
                        <h4 class="text-start">$<?php echo number_format($datosProducto['precio'], 2, '.', ','); ?></h4>
                        <h5 class="text-start"><?php echo $datosProducto['descripcion']; ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <p>&copy; 2024 Angel Espinoza</p>
            </div>
        </footer>
    </body>
    <script>
        // Captura el valor del campo id_audifono
        var idAudifono = document.getElementById('id_audifono').value;

        // Crea una nueva instancia de XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Define la función de devolución de llamada cuando la solicitud se complete
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // La solicitud se completó correctamente
                    console.log(xhr.responseText);
                } else {
                    // Hubo un error al completar la solicitud
                    console.error('Error en la solicitud: ' + xhr.status);
                }
            }
        };

        // Abre una nueva solicitud POST a master.php
        xhr.open('POST', 'master.php', true);

        // Establece el tipo de contenido de la solicitud
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Envía el valor del campo id_audifono como parámetro
        xhr.send('id_audifono=' + idAudifono);
    </script>

    </html>
<?php
} else {
    echo "El producto no se encuentra disponible.";
}
?>