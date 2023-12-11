<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = "INSERT INTO estudiantes (cedula, nombre, correo, telefono) VALUES ('" . $cedula . "', '$nombre', '" . $correo . "', '" . $telefono . "')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados con éxito";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

$conn->close();
header("Location: http://localhost/trabajo/index.php");
exit;
