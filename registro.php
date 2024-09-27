<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $conexion = new mysqli("localhost", "root", "", "base_datos_actividad");

    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $apelldio = $conexion->real_escape_string($_POST["apellido"]);
    $nombre_user = $conexion->real_escape_string($_POST["nombre_user"]);
    $email = $conexion->real_escape_string($_POST["email"]);
    $numero_telefono = $conexion->real_escape_string($_POST["numero_telefono"]);

    $sql_check = "SELECT 1 FROM usuarios WHERE nombre = '$nombre' OR apellido = '$apelldio' OR nombre_user = '$nombre_user' OR email = '$email' OR numero_telefono = '$numero_telefono'";
    $resultado = $conexion->query($sql_check);

    if ($resultado->num_rows > 0) {
        header("Location: rechazar.php");
        exit();
    }




  
}  
