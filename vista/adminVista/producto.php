<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="vista/js/sha256.js"></script>
    <script src="vista/js/funciones.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vista\styles\styleProducto.css">
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

        <div class="container">
            <div class="row">
                <div class="login m-auto col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    <h1 class="mb-5 fw-bold">Agregar Producto</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input class="usuario " type="text" name="nombre" placeholder="Nombre del Producto"><br>
                        <textarea name="descripcion " cols="40" rows="4" placeholder="Comentario..."></textarea><br>
                        <input class="calificacion" name="precio" type="number" min="0.00" step="0.01" placeholder="Precio"><br>
                        <input type="file" class="form-control" name="foto">
                        <input type="hidden" name="peticion" value="guardarProducto">
                        <input type="submit" onclick="encriptar()" class="btn-light btnLogin" value="Agregar"><br>
                        <a class="registrarse" href="?peticion=verProductos">regresar</a><br>
                    </form>
                    <p>
                        <?php
                        if (isset($nombre)) {
                            if ($datos)
                                echo 'El producto ha sido añadido';
                            else
                                echo 'No pudimos añadir el producto';
                        }
                        ?>
                    </p>
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