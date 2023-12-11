<?php
// Conexión a la base de datos (debes definir esto nuevamente)
$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM estudiantes WHERE cedula = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Dato eliminado con éxito.";
    } else {
        echo "Error al eliminar el dato: " . $conn->error;
    }
} else {
    echo "ID no proporcionado.";
}

$conn->close();

header("Location: http://localhost/trabajo/index.php");
exit;
