
<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/Ajustes.css">

        <title>Apolo</title>
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
                    <h5 class="card-title">$1.385.000</h5>
                    <p class="card-text">Guitarra eléctrica de cuerpo sólido con cuerpo de caoba, mástil de arce,
                        diapasón de palisandro y 2 pastillas humbuckers - Ebony Satin
                        Equipada con pastillas humbuckers Modern Classic 490R y 490T
                        de Gibson, esta Les Paul Special posee un perfil de tono contemporáneo diferente del ambiente
                        de la vieja escuela de las Specials equipadas con P-90. El cuerpo de la losa de caoba de la guitarra
                        sustenta su sonido con un fondo fuerte y un rango medio cálido.</p>
                    <a href="#" class="btn btn-primary">Ver mas</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="Imagenes/n1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Derechos de autor en Chile: norma que debería cumplirse, pero que también apela a la voluntad</h5>
                    <p class="card-text">Si bien hay una responsabilidad importante de la SCD -en el cobro de derechos de autor- también el
                        músico debe cumplir con registrar sus composiciones. Punto aparte es la transparencia -en la entrega de las respectivas
                        planillas programáticas- con que actúan las radios en este sentido, las cuales en número son cientos a lo largo del país
                        y hace difícil el poder fiscalizarlas a todas.</p>
                    <a href="#" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="Imagenes/n2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ringo Starr: bateristas chilenos trazan su pulso y su huella</h5>
                    <p class="card-text">81 años cumple esta jornada quizás el miembro más subvalorado de The Beatles. 
                        El último en integrarse al grupo, en 1962, se las arregló para dejar una huella dentro del cuarteto 
                        más importante de la historia de la música popular. Cuatro bateristas chilenos trazan con Culto su estela como músico.</p>
                    <a href="#" class="btn btn-primary">Ver mas</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="Imagenes/n3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Luis Torrejón: el protagonista en las sombras de la historia musical chilena</h5>
                    <p class="card-text">Tras seis décadas de trabajo en silencio, su reciente obtención de un premio Pulsar 
                        hizo justicia con la carrera del ingeniero de grabación que compartió estudio con Violeta Parra, Víctor 
                        Jara y Pablo Neruda. El técnico detrás de varias cumbres de la discografía local que en su casa no conserva 
                        ninguno de los miles de álbumes que registró y que hoy pide mayor reconocimiento para su gremio. “Hay una 
                        pequeña satisfacción cada vez que escuchas uno de esos temas en la radio, cada vez que la gente lo aplaude. 
                        Hay un 5% mío ahí y me siento feliz por eso”, cuenta.</p>
                    <a href="#" class="btn btn-primary">Ver mas</a>
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
