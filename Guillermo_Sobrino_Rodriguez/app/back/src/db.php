<?php
$servername = "bd";
$username = "root";
$password = "naranco";
$dbname = "dwes_01_gestion_eventos";

// Crear la conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexion
if ($conn->connect_error) {
    die("Error en la conexion: " . $conn->connect_error);
}
?>