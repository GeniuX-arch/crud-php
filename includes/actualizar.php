<?php
//conecta la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios";

$conn = new mysqli($servername, $username, $password, $database);

//verifica si la conexion falla
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// obtiene los datos dados por el input
$id = $_POST['cedula'];
$nuevo_nombre = $_POST['nombre'];
$nuevo_telefono = $_POST['telefono'];
$nuevo_correo = $_POST['correo'];

// los usa para la consulta sql
$sql = "UPDATE estudiantes SET nombre = '" . $nuevo_nombre . "' , telefono = '" . $nuevo_telefono . "' , correo = '" . $nuevo_correo . "' WHERE cedula = " . $id;

//verifica si todo andó correctamente
if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado con éxito";
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}

$conn->close();
//lo redirige a la pagina principal
header("Location: http://localhost/trabajo/index.php");
exit;
