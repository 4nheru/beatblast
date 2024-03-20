<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vista\styles\style.css">
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
                        <a class="nav-link ini" href="?peticion=inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link opcion" href="?peticion=somos">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link opcion" href="?peticion=galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link opcion" href="?peticion=iniciarSesion">Login</a>
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
                <div class="col-6 bg-transparent lemaTexto d-flex flex-column">
                    <h1>"Escucha tu mundo, <br>valora tu sonido"</h1>
                    <a href="#" class="btn-light botonVerMas">Ver mas...</a>
                </div>
                <div class="col-6 bg-transparent">
                    <img class="audiPrinci" src="vista\imagenes\audifonosPrincipal.png" alt="">
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