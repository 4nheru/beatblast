<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="vista/js/sha256.js"></script>
    <script src="vista/js/funciones.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vista\styles\styleLogin.css">
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
                        <a class="nav-link ini" href="?peticion=iniciarSesion">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link opcion" href="?peticion=somos">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link opcion" href="?peticion=galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link opcion" href="?peticion=inicio">Inicio</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="login m-auto">
                <h1 class="mb-5 fw-bold">Registrarse</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <input class="usuario" type="text" name="nombre" placeholder="Nombre de usuario"><br>
                    <input class="correo" type="email" name="correo" placeholder="Correo electrónico"><br>
                    <input class="contra" type="password" name="contrasena"  placeholder="Contraseña">
                    <input type="file" class="form-control" name="foto">
                    <input type="hidden" name="peticion" value="registrarUsuario">
                    <input type="submit" onclick="encriptar()" class="btn-light btnLogin" value="Registrarse">
                </form>
                <p>
                    <?php
                    if (isset($nombre)) {
                        if ($datos)
                            echo 'El registro de realizo con éxito';
                        else
                            echo 'No pudimos realizar el registro';
                    }
                    ?>
                </p>
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