<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vista\styles\styleReseñas.css">

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
                        <a class="nav-link opcion" href="?peticion=productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link opcion" href="?peticion=logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <form action="?peticion=guardarReseña" method="post" class="d-flex justify-content-center">
                <div class="login m-auto col-lg-3">
                    <h1 class="mb-5 fw-bold">Reseña</h1>
                    <!-- Ajusta el ancho del select con la clase form-control-custom -->
                    <select name="id_audifono" class=" m-auto form-select form-control-custom" onchange="mostrarId(this)">
                        <?php
                        foreach ($datos as $audifono) {
                            echo '<option value="' . $audifono['id'] . '">' . $audifono['nombre'] . '</option>';
                        }
                        ?>
                    </select>
                    <br>
                    <!-- Ajusta el ancho del textarea con la clase form-control-custom -->
                    <textarea name="comentario" id="" cols="40" rows="4" class="form-control form-control-custom  m-auto" placeholder="Comentario..."></textarea>
                    <br>
                    <!-- Ajusta el ancho del input para la calificación con la clase form-control-custom -->
                    <input name="calificacion" class="calificacion form-control form-control-custom  m-auto" type="number" placeholder="Calificación"><br>
                    <br>
                    <button type="submit" class="btn-light btnLogin btn btn-primary">Guardar</button><br><br>
                    <a class="registrarse" href="?peticion=verReseñas">regresar</a><br>
                </div>
            </form>

        </div>

    </div>
    <footer>
        <div class="container">
            <p>&copy; 2024 Angel Espinoza</p>
        </div>
    </footer>

    <script>
        function mostrarId(select) {
            var idSeleccionado = select.value;
            console.log('ID seleccionado:', idSeleccionado);
        }
    </script>

</body>

</html>