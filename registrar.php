<?php
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['correo']) >= 1 &&
            strlen($_POST['telefono']) >= 1 &&
            strlen($_POST['contrasena']) >= 1) {

        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);
        $contrasena = trim($_POST['contrasena']);
        $consulta = "INSERT INTO usuario(nombre, correo, telefono, constrasena) VALUES ('$nombre','$correo','$telefono','$contrasena')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">Te has registrado correctamente</h3>
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


