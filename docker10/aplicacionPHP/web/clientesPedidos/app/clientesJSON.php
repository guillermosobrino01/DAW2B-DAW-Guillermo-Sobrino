<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$idcliente = $_POST['q'];

$conexion = mysqli_connect("db","neptuno_user","neptuno_pass","neptuno");

if (!$conexion) {
    die("Error conexión: " . mysqli_connect_error());
}

$sql = "SELECT IdCliente, IdPedido, IdEmpleado, FechaPedido, FechaEntrega
        FROM pedidos
        WHERE IdCliente = '".$idcliente."'";

$res = mysqli_query($conexion, $sql);

if (!$res) {
    die("Error en query: " . mysqli_error($conexion));
}

$datos = array();

while ($fila = mysqli_fetch_assoc($res)) {
    $datos[] = $fila;
}

header("Content-Type: application/json");
echo json_encode($datos);

mysqli_close($conexion);
?>
