<?php

include 'con_db.php';

if(isset($_REQUEST['login'])){
    
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    
    $consulta = "SELECT * FROM usuario WHERE correo = '$correo' and contrasena = '$contrasena'";
    $ejecutar = mysqli_query($conexion, $consulta);
    
    $row= mysqli_fetch_array($ejecutar) or die(mysqli_error($conexion));
    
    if(!$row['correo']){
        header("location: index.php");
    } else {
     
        header("location: login.php");
        
    }
    
    
    
    
    
}
