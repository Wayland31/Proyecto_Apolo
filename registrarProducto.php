<?php
include("con_db.php");

if (isset($_POST['agregarp'])) {
    if (strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['imagen']) >= 1 &&
            strlen($_POST['precio']) >= 1 &&
            strlen($_POST['detalle']) >= 1 &&
            strlen($_POST['instrumento']) >= 1 ){

        $nombre = trim($_POST['nombre']);
        $imagen = trim($_POST['imagen']);
        $precio = trim($_POST['precio']);
        $detalle = trim($_POST['detalle']);
        $instrumento = trim($_POST['instrumento']);
        $consulta = "INSERT INTO producto(nombre, imagen, precio, detalle, cins) VALUES ('$nombre','$imagen','$precio','$detalle','$instrumento')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">Tu producto esta publicado</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">Ha ocurrido un error</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad">complete los campos correctamente</h3>
        <?php
    }
}
