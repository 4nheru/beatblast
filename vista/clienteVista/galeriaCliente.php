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

        <div class="container galeria">
            <div class="row">
                <?php
                foreach ($datos as $audifono) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card carta h-100">';
                    echo '<div class="text-center">';
                    echo '<img src="' . $audifono['foto'] . '" class="card-img-top img-fluid" alt="Foto del producto" style="object-fit: cover; height: 200px;">';
                    echo '</div>';
                    echo '<div class="card-body m-3">';
                    echo '<p class="card-title text-start">' . $audifono['nombre'] . '</p>';
                    echo '<p class="card-text text-start">' . $audifono['precio'] . '</p>';
                    echo '<p class="card-text text-start">' . substr($audifono['descripcion'], 0, 100) . '...</p>';
                    echo '<br><a class="botonVerMas" href="?peticion=verMas&nombre=' . $audifono['nombre'] . '">Ver Más</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>

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