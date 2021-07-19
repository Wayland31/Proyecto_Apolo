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
                        <label for="nombre" class="form-label">Nombre del producto</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="name">
                    </div>
                    <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" class="form-control-file" name="imagen">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio del producto</label>
                        <input type="number" name="precio" class="form-control" id="precio">
                    </div>
                    <div class="mb-3">
                        <label for="detalle" class="form-label">Detalle del producto</label>
                        <input type="text" name="detalle" class="form-control" id="detalle"  aria-describedby="detalle">
                    </div>
                    <div class="mb-3">
                        <label for="instrumento" class="form-label">Instrumento a agregar</label>
                        <select name="instrumento" id="instrumento">
                            <option value="1">Flauta</option>
                            <option value="2">Guitarra</option>
                            <option value="3">Bateria</option>
                            <option value="4">Saxofon</option>
                            <option value="5">Ukelele</option>
                            <option value="6">Ninguno</option>
                        </select>
                    </div>

                    <button type="submit" name="agregarp" class="btn btn-primary">Publicar</button>
                </form>
                <br>
                <?php
                include("registrarProducto.php");
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
