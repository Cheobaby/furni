<?php
$servername = "localhost";
$username = "root";
$password = "307735";
$dbname = "zay";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

echo "Conexión exitosa a la base de datos.";

// Cerrar la conexión
$conexion->close();
?>
