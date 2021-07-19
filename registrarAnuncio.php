
<?php
include("con_db.php");

if (isset($_POST['agregar'])) {
    if (strlen($_POST['titulo']) >= 1 &&
            strlen($_POST['subtitulo']) >= 1 &&
            strlen($_POST['imagen']) >= 1 &&
            strlen($_POST['detalle']) >= 1 &&
            strlen($_POST['autor']) >= 1) {

        $titulo = trim($_POST['titulo']);
        $subtitulo = trim($_POST['subtitulo']);
        $imagen = trim($_POST['imagen']);
        $fecha = date("d/m/y");
        $detalle = trim($_POST['detalle']);
        $autor = trim($_POST['autor']);
        $consulta = "INSERT INTO noticia(titulo, subtitulo, imagen, fecha, detalle, autor) VALUES ('$titulo','$subtitulo','$imagen','$fecha','$detalle','$autor')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">tu noticia se publico</h3>
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
