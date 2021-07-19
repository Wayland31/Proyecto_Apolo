<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/Ajustes.css">
        <script src="js/Validacion.js"></script>
        
        <title>Registro</title>
    </head>

    <body>
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

                    </ul>

                </div>

            </div>
        </nav>
        <br>

        <div class="container">

            <br>
            <div class="formularios">
                <form name="formulario" method="post" onsubmit="return valida();" >
                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre de usuario</label>
                        <input type="text" name="nombre" class="form-control" id="username" aria-describedby="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                        <input type="email" name="correo" class="form-control" id="email"  size="30" required aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telefono</label>
                        <input type="tel" name="telefono" class="form-control" id="telefono" aria-describedby="telefono" placeholder="9 Dígitos con Prefijo (Ej: +56912345678)">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contrasena</label>
                        <input type="password" name="contrasena" class="form-control" id="Password1" placeholder="Entre 4 a 8 carácteres">
                    </div>
                    <div class="mb-3">
                        <label for="confcontrasena" class="form-label">Confirme contrasena</label>
                        <input type="password" class="form-control" id="Password2">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terminos">
                        <label class="form-check-label" for="exampleCheck1">Terminos y condiciones</label>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary">Registrarse</button>
                </form>
                <br>
                <?php
                include("registrar.php");
                ?>
            </div>
            <br>

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
