<?php
// Conexión a la base de datos
$servername = "localhost"; 
$username = "root";          // Usuario de la base de datos
$password = "";              // Contraseña, vacía si usas XAMPP por defecto
$dbname = "myfitzone_db";   // Nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];
$id_usuario = $_POST['id_usuario'];
$correo = $_POST['correo'];

// Prepara la consulta para insertar los datos
$sql = "INSERT INTO usuarios (nombre, apellidos, direccion, cp, telefono, id_usuario, correo) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $nombre, $apellidos, $direccion, $cp, $telefono, $id_usuario, $correo);

if ($stmt->execute()) {
    echo "Registro guardado correctamente";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
