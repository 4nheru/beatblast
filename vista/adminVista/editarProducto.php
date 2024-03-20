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
        <script src="vista/js/sha256.js"></script>
        <script src="vista/js/funciones.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="vista\styles\styleModificar.css">
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
                            <a class="nav-link ini" href="?peticion=perfilAdmin">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link opcion" href="?peticion=verReseñas">Reseñas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link opcion" href="?peticion=verProductos">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link opcion" href="?peticion=logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container mt-3">
    <div class="">
        <div class="row">
            <div class="login m-auto col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <h1 class="text-center">Modificar Producto</h1>
                <form action="?peticion=guardarModificacionProducto" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $datosProducto['id']; ?>">
                    <div class="text-center">
                        <div style="max-width: 250px;" class="mx-auto">
                            <img src="<?php echo $datosProducto['foto']; ?>" class="form-control" style="max-width: 100%;" alt="Imagen del producto">
                        </div>
                    </div>
                    <input type="text" class=" m-3 input usuario" name="nombre" value="<?php echo $datosProducto['nombre']; ?>" placeholder="Introduce el nombre">
                    <textarea name="descripcion" class="descripcion" cols="40" rows="4" placeholder="Comentario..."><?php echo $datosProducto['descripcion']; ?></textarea>
                    <input type="number" class="calificacion" name="precio" min="0.00" step="0.01" value="<?php echo $datosProducto['precio']; ?>" placeholder="Introduce el precio">
                    <div class="m-3 text-start">
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <input type="submit" class="btn btn-light btnLogin" value="Guardar cambios">
                </form>
            </div>
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

    </html>
<?php
} else {
    echo "El producto no se encuentra disponible.";
}
?>