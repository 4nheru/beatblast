<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vista\styles\styleGaleria.css">

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

        <div class="container galeria">
            <div class="container tablaa">
                <div class="text-end ">
                    <a href="?peticion=agregarProducto" class="btn-light btnLogin">Agregar Producto</a><br><br>
                </div>
                <table class="table table-striped table-hover table-custom"> 
                            <thead class="thead-light">
                                <tr>
                                    <th class="align-middle text-center">Nombre</th>
                                    <th class="align-middle text-center">Descripción</th>
                                    <th class="align-middle text-center">Precio</th>
                                    <th class="align-middle text-center">Foto</th>
                                    <th class="align-middle text-center">Eliminar</th>
                                    <th class="align-middle text-center">Modificar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($datos) {
                                    foreach ($datos as $producto) {
                                        echo '<tr>';
                                        echo '<td class="align-middle text-center">' . $producto['nombre'] . '</td>';
                                        echo '<td class="align-middle text-center" style="max-width: 150px; overflow: hidden; text-overflow: ellipsis;"><div style="max-height: 100px; overflow-y: auto;">' . $producto['descripcion'] . '</td>';
                                        echo '<td class="align-middle text-center">$' . $producto['precio'] . '</td>';
                                        echo '<td class="align-middle text-center"><img src="' . $producto['foto'] . '" alt="Foto del producto" style="max-width: 100px;"></td>';
                                        echo '<td class="align-middle text-center"><a href="?peticion=cancelarProducto&nombre=' . $producto['nombre'] . '"><img src="vista/imagenes/eliminar.png" style="max-width: 50px;"></a></td>';
                                        echo '<td class="align-middle text-center"><a href="?peticion=modificarProducto&nombre=' . $producto['nombre'] . '"><img src="vista\imagenes\editar.png" style="max-width: 50px;"></a></td>';
                                        echo '</tr>';
                                    }
                                } else {
                                    echo '<tr><td colspan="8" class="text-center">No hay productos disponibles.</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
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