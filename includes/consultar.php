<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "usuarios";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_de_datos);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM estudiantes";
$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
