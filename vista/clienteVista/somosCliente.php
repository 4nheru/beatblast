<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="vista\styles\styleSomos.css">
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
            </div>
        </nav>

        <div class="container des">
            <div class="imagen">
                <img src="vista\imagenes\bannerFinal.jpeg" alt="">
            </div>

            <div class="historia">
                <div class="text-center">
                    <h1>Bienvenidos a Beat Blast</h1>
                    <h5>"Escucha tu mundo, valora tu sonido"</h5>
                </div>
                <hr>
                <div class="mt-5">
                    <h1>¿Por qué Beat Blast?</h1>
                    <p>Aquí, explora lo que te hace único. No te centres en los logros de tu negocio, sino en cómo tus reseñas y recomendaciones ayudan a los usuarios a encontrar el audífono perfecto para ellos.</p>
                    <ul>
                        <li><b>Nuestra Misión:</b> Proporcionar reseñas imparciales y detalladas para que nuestros usuarios puedan tomar decisiones informadas sobre sus audífonos.</li>
                        <li><b>Nuestros Valores:</b> Transparencia, calidad y compromiso con la satisfacción del cliente.</li>
                    </ul>
                </div>
                <hr>
                <div class="mt-5">
                    <h1>Conoce Nuestra Historia</h1>
                    <p>Beat Blast nació de la pasión por la música y el sonido de alta calidad. Después de años de buscar los mejores audífonos y no encontrar reseñas fiables, decidimos crear una plataforma donde los amantes de la música puedan encontrar información precisa y útil para su próxima compra.</p>
                </div>
                <hr>
                <div class="mt-5">
                    <h1>Nuestros Compromisos</h1>
                    <p>En Beat Blast, nos comprometemos a proporcionar reseñas imparciales y detalladas para ayudarte a encontrar los audífonos perfectos. Además, estamos comprometidos con la satisfacción del cliente y siempre estamos disponibles para responder a tus preguntas y comentarios.</p>
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