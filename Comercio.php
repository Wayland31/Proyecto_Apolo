<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/Ajustes.css">

        <title>Comercio</title>
    </head>

    <body>
        <!-- Barra de la pagina con navegador, login y registro,ademas el boton de buscar,se pondra el icono de la aplicacion mas adelante -->

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: orange;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Apolo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Noticias.php">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Comercio.php">Comercio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Grupos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Inicio de sesion/Registro
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Login.php">Iniciar sesion</a></li>
                                <li><a class="dropdown-item" href="registro.php">Registrarse</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="Recuperar.php">Recuperar contrasena</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
        <br>

        <!-- Cuerpo de la pagina,donde se veran las publicaciones novedosas-->

        <div class="container-xl">
            <div class="card" style="width: 18rem;">
                <img src="Imagenes/g1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gibson Les Paul</h5>
                    <h5>$1.385.000</h5>
                    <p class="card-text">Guitarra eléctrica de cuerpo sólido con cuerpo de caoba, mástil de arce,
                        diapasón de palisandro y 2 pastillas humbuckers - Ebony Satin
                        Equipada con pastillas humbuckers Modern Classic 490R y 490T
                        de Gibson, esta Les Paul Special posee un perfil de tono contemporáneo diferente del ambiente
                        de la vieja escuela de las Specials equipadas con P-90. El cuerpo de la losa de caoba de la guitarra
                        sustenta su sonido con un fondo fuerte y un rango medio cálido.</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Ver mas</button>
                        <button type="button" class="btn btn-primary">Comprar</button>
                    </div>
                </div>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    <br>
    <footer>
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contactenos</h5>

                    <p>
                        soporte@outlook.cl
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Fono</h5>

                    <p>
                        555-666-777
                    </p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>

    </footer>

</html>
