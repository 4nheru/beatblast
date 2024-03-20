<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vista\styles\styleTablaReseñas.css">

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
        <div class="text-end">
            <a href="?peticion=agregarReseña" class="btn-light btnLogin">Agregar Reseña</a><br><br>
        </div>

        <table class="table table-bordered table-light">
            <thead>
                <tr class="text-center">
                    <th scope="col">id</th>
                    <th scope="col">id_Admin</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Calificación</th>
                    <th scope="col">Modificar</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($datos as $resena) : ?>
                    <tr class="align-middle">
                        <td><?php echo $resena['id_reseña']; ?></td>
                        <td><?php echo $resena['id_admin']; ?></td>
                        <td><?php echo $resena['comentario']; ?></td>
                        <td><?php echo $resena['calificacion']; ?></td>
                        <td><a href=""><img src="vista\imagenes\editar.png" width="60px" alt=""></a></td>
                    </tr>
                <?php endforeach; ?>
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